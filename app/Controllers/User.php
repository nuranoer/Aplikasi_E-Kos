<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Exception;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new \Myth\Auth\Models\UserModel();
    }


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
            'datauser' => $this->userModel->detail_user(user()->id),
        ];
        return view('user/editprofile', $data);
    }

    public function updateprofile($id)
    {
        //mengambil file foto yg akan diupload di form
        $user_image = $this->request->getFile('user_image');
        //merandom nama file foto
        $nama_file = $user_image->getRandomName();

        // $id =  $this->request->getVar('id');

        $data = [
            'id' => $id,
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'user_image' => $nama_file,
        ];

        $user_image->move('assets/images/faces', $nama_file); //directori upload file
        $this->userModel->save($data); 

        session()->setFlashdata('success','Data berhasil diubah!');
        return redirect()->to('/profile')->withInput();
    }
}