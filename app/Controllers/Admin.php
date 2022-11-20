<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        // return view('admin/beranda');
        return view('admin/dashboard');
    }
    
    public function loginadmin()
    {
        // return view('admin/beranda');
        echo view('admin/auth/login');
    }
    
    public function datapenghuni()
    {
        // return view('admin/beranda');
        echo view('admin/datapenghuni/index');
    }
}