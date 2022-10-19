<?php

namespace App\Controllers;

class Pengunjung extends BaseController
{
    public function index()
    {
        return view('pengunjung/menu/beranda');
    }
}
