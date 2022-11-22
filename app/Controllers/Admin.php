<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        // return view('admin/beranda');
        $data = [
            'title' => 'Beranda | Admin Kost'
        ];
        return view('admin/dashboard', $data);
    }
    
    public function loginadmin()
    {
        // return view('admin/beranda');
        echo view('admin/auth/login');
    }
    
    public function datapenghuni()
    {
        $data = [
            'title' => 'Data Penghuni | Admin Kost'
        ];
        return view('admin/datapenghuni/index', $data);
    }
}