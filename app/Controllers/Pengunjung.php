<?php

namespace App\Controllers;

class Pengunjung extends BaseController
{
    public function index()
    {
        return view('pengunjung/menu/index');
    }
    
    public function info()
    {
        return view('pengunjung/menu/info');
    }
}
