<?php

namespace App\Controllers;
use \App\Models\pemesananModel;

class Admin extends BaseController
{
    protected $dataModel;
    protected $PemesananModel;
    
    public function __construct(){
        $this->dataModel = new \Myth\Auth\Models\UserModel();
        $this->PemesananModel = new pemesananModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];
        return view('admin/dashboard', $data);
    }
    
    public function datapenghuni()
    {
        $data = [
            'title' => 'Data Penghuni',
            'users' => $this->dataModel->getData()
        ];
        return view('admin/datapenghuni/index', $data);
    }
    
    public function datapemesanan()
    {
        $data = [
            'title' => 'Data Pemesanan',
            'pemesanan' => $this->PemesananModel->getAllData()
        ];
        return view('admin/datapembayaran/pemesanan', $data);
    }
}