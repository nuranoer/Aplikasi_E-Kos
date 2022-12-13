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
        return view('user/admin/dashboard', $data);
    }
    
    public function datapenghuni()
    {
        $data = [
            'title' => 'Data Penghuni',
            'users' => $this->dataModel->getData()
        ];
        return view('user/admin/datapenghuni/index', $data);
    }
    
    public function datapemesanan()
    {
        $data = [
            'title' => 'Data Pemesanan',
            'pemesanan' => $this->PemesananModel->getAllData()
        ];
        return view('user/admin/datapemesanan/pemesanan', $data);
    }

    public function updatepemesanan($id)
    {
        $data = [
            'title' => 'Update Pemesanan',
            'pemesanan' => $this->PemesananModel->getIdPemesanan($id),
            'validation' => \Config\Services::validation()
        ];
        // dd($data);
        return view('user/admin/datapemesanan/update', $data);
    }

    public function editpemesanan($id)
    {
        $validasi = !$this->validate([
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'status pemesanan harus dipilih'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'keterangan harus diisi'
                ]
            ]
        ]);

        if($validasi){
            session()->setFlashdata('error','Mohon cek kembali data Anda!');
            return redirect()->to('/updatepemesanan-' . $id)->withInput();
        }

        else{
            $this->PemesananModel->save([
                'id_pemesanan' => $id,
                'status' => $this->request->getVar('status'),
                'keterangan' => $this->request->getVar('keterangan')
            ]);
            session()->setFlashdata('pesan','Data Pemesanan berhasil diubah!');
            return redirect()->to('/datapemesanan')->withInput();
        }
    }
}