<?php

namespace App\Controllers;
use App\Models\kamarModel;

class Pengunjung extends BaseController
{
    protected $kamarModel;

    public function __construct()
    {
        $this->kamarModel = new kamarModel();
    }

    public function index()
    {
        return view('user/pengunjung/menu/index');
    }
    
    public function info()
    {
        $data = [
            'kamar' => $this->kamarModel->where('status_kamar','Available')->findAll()
        ];
        return view('user/pengunjung/menu/info', $data);
    }
}
