<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\kamarModel;
use App\Models\penghuniModel;
use App\Models\pemesananModel;
use Exception;

class DosenController extends BaseController
{
    private pemesananModel $pemesanan;

    public function __construct()
    {
        $this->pemesanan = new pemesananModel();
        $this->pemesanan->asObject();
    }

    public function index()
    {
        $data['pemesanan'] = $this->pemesanan->get_data();
        $data['title'] = 'Data Pemesanana';
		echo view('dashboard/dosen/index', $data);
    }

    public function new()
    {
        $kamar = new kamarModel();
        $penghuni = new penghuniModel();
        $data['title'] = 'Tambah pemesanan';
        $data['kamar'] = $kamar->findAll();
        $data['penghuni'] = $penghuni->findAll();
		echo view('dashboard/dosen/create', $data);
    }

    public function store()
    {
        $data = [
            'id_kamar' => $this->request->getPost('id_kamar'),
            'id_penghuni' => $this->request->getPost('id_penghuni'),
            'tanggal_mulai' => $this->request->getPost('tanggal_mulai'),
            'durasi' => $this->request->getPost('durasi'),
        ];

        if (!$this->pemesanan->validate($data)) {
            return redirect()->to('/dashboard/dosen/new')->withInput()->with('errors', $this->pemesanan->errors());
        }

        try {
            $this->pemesanan->protect(false)->insert($data);
        } catch (Exception $e) {
            return redirect()->to('/dashboard/dosen/new')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/dashboard/dosen')->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id)
    {
        $model = $this->pemesanan;
        $kamar = new kamarModel();
        $penghuni = new penghuniModel();
        $data['data'] = $model->where('id_pemesanan', $id)->first();
        $data['title'] = 'Update Data';
        $data['kamar'] = $kamar->findAll();
        $data['penghuni'] = $penghuni ->findAll();
        
        echo view('dashboard/dosen/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'id_kamar' => $this->request->getPost('id_kamar'),
            'id_penghuni' => $this->request->getPost('id_penghuni'),
            'tanggal_mulai' => $this->request->getPost('tanggal_mulai'),
            'durasi' => $this->request->getPost('durasi'),
        ];

        if (!$this->pemesanan->validate($data)) {
            return redirect()->to('/dashboard/dosen/'. $id .'/edit')->withInput()->with('errors', $this->pemesanan->errors());
        }

        try {
            $this->pemesanan->protect(false)->update($id, $data);
        } catch (Exception $e) {
            return redirect()->to('/dashboard/dosen/'. $id .'/edit')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->to('/dashboard/dosen')->with('success', 'Berhasil mengupdate data');
    }
    
    public function delete($id){
        try {
            $this->pemesanan->delete($id);
        } catch (Exception $e) {
            return redirect()->to('dashboard/dosen')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
        
        return redirect()->to('/dashboard/dosen')->with('success', 'Berhasil menghapus data');
    }
}
