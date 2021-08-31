<?php
class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home';
        $this->view('layouts/header', $data);
        $this->view('layouts/navbar');
        $this->view('layouts/sidebar');
        $this->view('home/index', $data);
        $this->view('layouts/footer', $data);
    }
}
