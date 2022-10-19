<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\adminModel;
use Exception;

class Login extends BaseController
{
    private adminModel $login;

    public function __construct()
    {
        $this->login = new adminModel();
        $this->login->asObject();
    }
    
    public function index()
    {
        echo view('penghuni/auth/login');
    }
    public function index2()
    {
        echo view('admin/auth/login');
    }


}