<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $dataModel;
    
    public function __construct(){
        $this->dataModel = new \Myth\Auth\Models\UserModel();
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
}