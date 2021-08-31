<?php
class Mahasiswa extends BaseController
{
    public function index()
    {
        $data['title'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('layouts/header', $data);
        $this->view('layouts/navbar');
        $this->view('layouts/sidebar');
        $this->view('mahasiswa/index', $data);
        $this->view('layouts/footer', $data);
    }

    public function insert()
    {
        $data['title'] = 'Insert';
        $this->view('layouts/header', $data);
        $this->view('layouts/navbar');
        $this->view('layouts/sidebar');
        $this->view('mahasiswa/insert', $data);
        $this->view('layouts/footer', $data);
    }
}
