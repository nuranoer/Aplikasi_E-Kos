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
}