<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\penghuniModel;
use Exception;

class Penghuni extends BaseController
{
    private penghuniModel $penghuni;

    public function __construct()
    {
        $this->penghuni = new penghuniModel();
        $this->penghuni->asObject();
    }

    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];
        return view('penghuni/dashboard', $data);
    }
    
    public function profile()
    {
        $data = [
            'title' => 'Profile Saya'
        ];
        return view('penghuni/profile', $data);
    }

    // public function new()
    // {
    //     $data['title'] = 'Tambah Penghuni';
	// 	echo view('dashboard/jurusan/create', $data);
    // }

    // public function store()
    // {
    //     $data = [
    //         'nama_penghuni' => $this->request->getPost('nama_penghuni'),
    //         'pass_penghuni' => $this->request->getPost('pass_penghuni'),
    //         'email_penghuni' => $this->request->getPost('email_penghuni'),
    //         'status' => $this->request->getPost('status'),
    //         'nohp' => $this->request->getPost('nohp'),
    //         'alamat_penghuni' => $this->request->getPost('alamat_penghuni')
    //     ];

    //     if (!$this->penghuni->validate($data)) {
    //         return redirect()->to('/dashboard/jurusan/new')->withInput()->with('errors', $this->penghuni->errors());
    //     }

    //     try {
    //         $this->penghuni->protect(false)->insert($data);
    //     } catch (Exception $e) {
    //         return redirect()->to('/dashboard/jurusan/new')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }

    //     return redirect()->to('/dashboard/jurusan')->with('success', 'Berhasil menambahkan data');
    // }

    // public function edit($id)
    // {
    //     $model = $this->penghuni;
    //     $data['data'] = $model->where('id_penghuni', $id)->first();
    //     $data['title'] = 'Update Data';
        
    //     echo view('dashboard/jurusan/edit', $data);
    // }

    // public function update($id)
    // {
    //     $data = [
    //         'nama_penghuni' => $this->request->getPost('nama_penghuni'),
    //         'pass_penghuni' => $this->request->getPost('pass_penghuni'),
    //         'email_penghuni' => $this->request->getPost('email_penghuni'),
    //         'status' => $this->request->getPost('status'),
    //         'nohp' => $this->request->getPost('nohp'),
    //         'alamat_penghuni' => $this->request->getPost('alamat_penghuni')
    //     ];

    //     if (!$this->penghuni->validate($data)) {
    //         return redirect()->to('/dashboard/penghuni/'. $id .'/edit')->withInput()->with('errors', $this->penghuni->errors());
    //     }

    //     try {
    //         $this->penghuni->protect(false)->update($id, $data);
    //     } catch (Exception $e) {
    //         return redirect()->to('/dashboard/penghuni/'. $id .'/edit')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }

    //     return redirect()->to('/dashboard/penghuni')->with('success', 'Berhasil mengupdate data');
    // }
    
    // public function delete($id){
    //     try {
    //         $this->penghuni->delete($id);
    //     } catch (Exception $e) {
    //         return redirect()->to('dashboard/penghuni')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }
        
    //     return redirect()->to('/dashboard/penghuni')->with('success', 'Berhasil menghapus data');
    // }
    
}
