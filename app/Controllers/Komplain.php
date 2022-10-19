<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\penghuniModel;
use App\Models\kamarModel;
use App\Models\komplainModel;
use Exception;

class Komplain extends BaseController
{
    private komplainModel $komplain;

    public function __construct()
    {
        $this->komplain = new komplainModel();
        $this->komplain->asObject();
    }

    public function index()
    {
        $data['komplain'] = $this->komplain->get_data();
        $data['title'] = 'List Komplain';
		echo view('dashboard/dosen/index', $data);
    }

    public function new()
    {
        $penghuni = new penghuniModel();
        $kamar = new kamarModel();
        $data['title'] = 'Tambah komplain';
        $data['penghuni'] = $penghuni->findAll();
        $data['kamar'] = $kamar->findAll();
		echo view('dashboard/dosen/create', $data);
    }

    public function store()
    {
        $data = [
            'id_penghuni' => $this->request->getPost('id_penghuni'),
            'id_kamar' => $this->request->getPost('id_kamar'),
            'perihal' => $this->request->getPost('perihal'),
            'isi' => $this->request->getPost('isi'),
        ];

        if (!$this->komplain->validate($data)) {
            return redirect()->to('/dashboard/dosen/new')->withInput()->with('errors', $this->komplain->errors());
        }

        try {
            $this->komplain->protect(false)->insert($data);
        } catch (Exception $e) {
            return redirect()->to('/dashboard/dosen/new')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/dashboard/dosen')->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id)
    {
        $model = $this->komplain;
        $penghuni = new penghuniModel();
        $kamar = new kamarModel();
        $data['data'] = $model->where('id_komplain', $id)->first();
        $data['title'] = 'Update Data';
        $data['penghuni'] = $penghuni->findAll();
        $data['kamar'] = $kamar->findAll();
        
        echo view('dashboard/dosen/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'id_penghuni' => $this->request->getPost('id_penghuni'),
            'id_kamar' => $this->request->getPost('id_kamar'),
            'perihal' => $this->request->getPost('perihal'),
            'isi' => $this->request->getPost('isi'),
        ];

        if (!$this->komplain->validate($data)) {
            return redirect()->to('/dashboard/dosen/'. $id .'/edit')->withInput()->with('errors', $this->komplain->errors());
        }

        try {
            $this->komplain->protect(false)->update($id, $data);
        } catch (Exception $e) {
            return redirect()->to('/dashboard/dosen/'. $id .'/edit')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/dashboard/dosen')->with('success', 'Berhasil mengupdate data');
    }
    
    public function delete($id){
        try {
            $this->komplain->delete($id);
        } catch (Exception $e) {
            return redirect()->to('dashboard/dosen')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        
        return redirect()->to('/dashboard/dosen')->with('success', 'Berhasil menghapus data');
    }
}
