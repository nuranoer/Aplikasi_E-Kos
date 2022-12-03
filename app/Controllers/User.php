<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Exception;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];
        return view('user/dashboard', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'Profile Saya'
        ];
        return view('user/profile', $data);
    }
    
    public function editprofile()
    {
        $data = [
            'title' => 'Profile Saya',
            'validation' => \Config\Services::validation()
        ];
        return view('user/editprofile', $data);
    }

    public function updateprofile()
    {
        
    }
}