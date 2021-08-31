<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin | Dasboard',
        ];
        return view('admin/index', $data);
    }

    public function login()
    {
        $data = [
            'title' => "Admin | Login",
        ];
        return view('admin/login', $data);
    }
}
