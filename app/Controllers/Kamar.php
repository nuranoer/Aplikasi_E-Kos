<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\kamarModel;
use Exception;

class Kamar extends BaseController
{
    private kamarModel $kamar;

    public function __construct()
    {
        $this->kamar = new kamarModel();
        $this->kamar->asObject();
    }

    public function datakamar()
    {
        // $model = $this->kamar;
        // $data['kamar'] = $model->findAll();
        // $data['title'] = 'Data Kamar';
        // echo view('', $data);
        $data = [
            'title' => 'Data Kamar | Admin Kost'
        ];
        echo view('admin/datakamar/index', $data);
    }
    
    public function formkamar()
    {
        // $model = $this->kamar;
        // $data['kamar'] = $model->findAll();
        // $data['title'] = 'Data Kamar';
        // echo view('', $data);
        $data = [
            'title' => 'Form Kamar | Admin Kost'
        ];
        echo view('admin/datakamar/create', $data);
    }

    // public function new()
    // {
    //     $data['title'] = 'Tambah Kamar';
	// 	echo view('dashboard/jurusan/create', $data);
    // }

    // public function store()
    // {
    //     $data = [
    //         'nama_kamar' => $this->request->getPost('nama_kamar'),
    //         'deskripsi_kamar' => $this->request->getPost('deskripsi_kamar'),
    //         'status_kamar' => $this->request->getPost('status_kamar'),
    //         'harga_kamar' => $this->request->getPost('harga_kamar'),
    //         'gambar' => $this->request->getPost('gambar')
    //     ];

    //     if (!$this->jurusan->validate($data)) {
    //         return redirect()->to('/dashboard/jurusan/new')->withInput()->with('errors', $this->jurusan->errors());
    //     }

    //     try {
    //         $this->jurusan->protect(false)->insert($data);
    //     } catch (Exception $e) {
    //         return redirect()->to('/dashboard/jurusan/new')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }

    //     return redirect()->to('/dashboard/jurusan')->with('success', 'Berhasil menambahkan data');
    // }

    // public function edit($id)
    // {
    //     $model = $this->jurusan;
    //     $data['data'] = $model->where('JURID', $id)->first();
    //     $data['title'] = 'Update Data';
        
    //     echo view('dashboard/jurusan/edit', $data);
    // }

    // public function update($id)
    // {
    //     $data = [
    //         'JURID' => $this->request->getPost('JURID'),
    //         'JURNAMA' => $this->request->getPost('JURNAMA'),
    //     ];

    //     if (!$this->jurusan->validate($data)) {
    //         return redirect()->to('/dashboard/jurusan/'. $id .'/edit')->withInput()->with('errors', $this->jurusan->errors());
    //     }

    //     try {
    //         $this->jurusan->protect(false)->update($id, $data);
    //     } catch (Exception $e) {
    //         return redirect()->to('/dashboard/jurusan/'. $id .'/edit')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }

    //     return redirect()->to('/dashboard/jurusan')->with('success', 'Berhasil mengupdate data');
    // }
    
    // public function delete($id){
    //     try {
    //         $this->jurusan->delete($id);
    //     } catch (Exception $e) {
    //         return redirect()->to('dashboard/jurusan')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }
        
    //     return redirect()->to('/dashboard/jurusan')->with('success', 'Berhasil menghapus data');
    // }

}