<?php
class About extends BaseController
{
    public function index($nama = "Admin")
    {
        $data['title'] = 'About';
        $data['nama'] = $nama;
        $this->view('layouts/header', $data);
        $this->view('layouts/navbar');
        $this->view('layouts/sidebar');
        $this->view('about/index', $data);
        $this->view('layouts/footer');
    }

    public function page()
    {
        $data['title'] = 'About';
        $data['subtitle'] = "Page";
        $this->view('layouts/header', $data);
        $this->view('layouts/navbar');
        $this->view('layouts/sidebar');
        $this->view('about/page', $data);
        $this->view('layouts/footer');
    }
}
