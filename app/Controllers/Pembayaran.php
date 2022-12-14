<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\pembayaranModel;
use Exception;

class Pembayaran extends BaseController
{
    protected $pembayaran;

    public function __construct()
    {
        $this->pembayaran = new pembayaranModel();
        $this->pembayaran->asObject();
    }

    public function index()
    {
        $data = [
            'title' => 'Index Pembayaran',
            'data' => $this->pembayaran->getPenghuniPembayaran(),
        ];
        return view('user/admin/datapembayaran/index', $data);
    }
    
    public function pembayaranpenghuni()
    {
        $data = [
            'title' => 'Data Pembayaran Penghuni',
            'data' => $this->pembayaran->getPenghuniPembayaran(),
        ];
        return view('user/admin/datapembayaran/list', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Pembayaran',
            'data' => $this->pembayaran->getDetailPembayaran($id),
            'validation' => \Config\Services::validation()
        ];
        return view('user/admin/datapembayaran/detail', $data);
    }

    public function editpembayaran($id)
    {  
        $id_penghuni = $this->request->getVar('id_penghuni');

        $validasi = !$this->validate([
            'transfer_via' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'jenis transfer harus diisi'
                ]
            ],

            'status_pembayaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'status pembayaran harus diisi'
                ]
            ],
            
        ]);
        
        if($validasi){
            session()->setFlashdata('error','Mohon cek kembali data Anda!');
            return redirect()->to('/detailpembayaran-'.$id_penghuni)->withInput();
        } 
        
        else{

            $data = [
                'id_pembayaran' => $id,
                'transfer_via' => $this->request->getVar('transfer_via'),
                'status_pembayaran' => $this->request->getVar('status_pembayaran'),
            ];

            $this->pembayaran->save($data);  
            
            session()->setFlashdata('success','Berhasil mengedit pembayaran penghuni!');
            return redirect()->to('/detailpembayaran-'.$id_penghuni)->withInput();
        }
        return view('/detailpembayaran-'.$id_penghuni);
    }

    // public function new()
    // {
    //     $kamar = new kamarModel();
    //     $penghuni = new penghuniModel();
    //     $data['title'] = 'Tambah Pembayaran';
    //     $data['kamar'] = $kamar->findAll();
    //     $data['penghuni'] = $penghuni->findAll();
	// 	echo view('dashboard/dosen/create', $data);
    // }

    // public function store()
    // {
    //     $data = [
    //         'id_penghuni' => $this->request->getPost('id_penghuni'),
    //         'id_kamar' => $this->request->getPost('id_kamar'),
    //         'tanggal' => $this->request->getPost('tanggal'),
    //         'nominal' => $this->request->getPost('nominal'),
    //         'gambar' => $this->request->getPost('gambar'),
    //         'status' => $this->request->getPost('status'),
    //         'bulan' => $this->request->getPost('bulan'),
    //     ];

    //     if (!$this->pembayaran->validate($data)) {
    //         return redirect()->to('/dashboard/dosen/new')->withInput()->with('errors', $this->pembayaran->errors());
    //     }

    //     try {
    //         $this->pembayaran->protect(false)->insert($data);
    //     } catch (Exception $e) {
    //         return redirect()->to('/dashboard/dosen/new')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }

    //     return redirect()->to('/dashboard/dosen')->with('success', 'Berhasil menambahkan data');
    // }

    // public function edit($id)
    // {
    //     $model = $this->pembayaran;
    //     $kamar = new kamarModel();
    //     $penghuni = new penghuniModel();
    //     $data['data'] = $model->where('id_pembayaran', $id)->first();
    //     $data['title'] = 'Update Data';
    //     $data['kamar'] = $kamar->findAll();
    //     $data['penghuni'] = $penghuni->findAll();
        
    //     echo view('dashboard/dosen/edit', $data);
    // }

    // public function update($id)
    // {
    //     $data = [
    //         'id_penghuni' => $this->request->getPost('id_penghuni'),
    //         'id_kamar' => $this->request->getPost('id_kamar'),
    //         'tanggal' => $this->request->getPost('tanggal'),
    //         'nominal' => $this->request->getPost('nominal'),
    //         'gambar' => $this->request->getPost('gambar'),
    //         'status' => $this->request->getPost('status'),
    //         'bulan' => $this->request->getPost('bulan'),
    //     ];

    //     if (!$this->pembayaran->validate($data)) {
    //         return redirect()->to('/dashboard/dosen/'. $id .'/edit')->withInput()->with('errors', $this->pembayaran->errors());
    //     }

    //     try {
    //         $this->pembayaran->protect(false)->update($id, $data);
    //     } catch (Exception $e) {
    //         return redirect()->to('/dashboard/dosen/'. $id .'/edit')->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }

    //     return redirect()->to('/dashboard/dosen')->with('success', 'Berhasil mengupdate data');
    // }
    
    // public function delete($id){
    //     try {
    //         $this->pembayaran->delete($id);
    //     } catch (Exception $e) {
    //         return redirect()->to('dashboard/Pembayaran')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    //     }
        
    //     return redirect()->to('/dashboard/dosen')->with('success', 'Berhasil menghapus data');
    // }
}
