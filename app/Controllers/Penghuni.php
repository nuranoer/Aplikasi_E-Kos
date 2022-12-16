<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\penghuniModel;
use App\Models\pemesananModel;
use Exception;

class Penghuni extends BaseController
{
    protected $penghuni;
    protected $pemesanan;

    public function __construct()
    {
        $this->penghuni = new penghuniModel();
        $this->pemesanan = new pemesananModel();
        // $this->penghuni->asObject();
    }

    public function pesan()
    {
        $validasi = !$this->validate([

            'durasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'durasi harus diisi'
                ]
            ],

            'pengajuan_tgl' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'field pengajuan tinggal harus dipilih'
                ]
            ],
        ]);

        if($validasi){
            session()->setFlashdata('error','Mohon cek kembali data Anda!');
            return redirect()->to('/info')->withInput();
        }

        else{
            $data = [
                'id_kamar' => $this->request->getVar('id_kamar'),
                'id_penghuni' => $this->request->getVar('id_penghuni'),
                'pengajuan_tgl' => $this->request->getVar('pengajuan_tgl'),
                'durasi' => $this->request->getVar('durasi'),
                'status' => $this->request->getVar('status'),
            ];

            $this->pemesanan->insert($data);  
            
            session()->setFlashdata('success','Sukses memesan kamar! Tunggu verifikasi ibu kos!');
            return redirect()->to('/info')->withInput();
        }
        return view('/info');
    }

    public function riwayat()
    {
        $data = [
            'title' => 'History Pemesanan',
            'pemesanan' => $this->pemesanan->getHistory()
        ];
        return view('user/penghuni/riwayat', $data);
    }

    public function pembayaran()
    {
        $data = [
            'title' => 'Index Pembayaran'
        ];
        return view('user/penghuni/pembayaran_bulanan', $data);
    }

    public function formpembayaran()
    {
        $data = [
            'title' => 'Form Pembayaran Bulanan',
            'validation' => \Config\Services::validation()
        ];
        return view('user/penghuni/add_pembayaran', $data);
    }

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
