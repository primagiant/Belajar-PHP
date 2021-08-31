<?php
class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $parameter = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        // Checking adakah controller dengan nama yang sama dengan url pertama
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        // Memanggil dan mengeksekusi controller
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Checking jika method yang dipilih ada pada controller tersebut
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Jika ada parameter yang dikirim
        if (empty($url)) {
            $this->parameter = array_values($url);
        }

        // Jalankan Controllernya
        call_user_func_array([$this->controller, $this->method], $this->parameter);
    }

    // Membuat Method Untuk Parsing Request GET
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
