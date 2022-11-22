<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\kamarModel;
use Exception;

class Kamar extends BaseController
{
    protected $kamarModel;

    public function __construct()
    {
        $this->kamarModel = new kamarModel();
        // $this->kamarModel->asObject();
    }

    public function datakamar()
    {
        $data = [
            'title' => 'Data Kamar | Admin Kost',
            'kamar' => $this->kamarModel->findAll(),
        ];
        echo view('admin/datakamar/index', $data);
    }
    
    public function formkamar()
    {
        $data = [
            'title' => 'Form Kamar | Admin Kost',
            'validation' => \Config\Services::validation()
        ];
        echo view('admin/datakamar/create', $data);
    }

    public function store()
    {
        $validasi = !$this->validate([
                        'nama_kamar' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'nama kamar surat harus diisi',
                            ]
                        ],

                        'deskripsi_kamar' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'deskripsi kamar harus diisi'
                            ]
                        ],

                        'status_kamar' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'status kamar harus dipilih'
                            ]
                        ],

                        'harga_kamar' => [
                            'rules' => 'required',
                            'errors' => [
                                'required' => 'harga kamar harus diisi'
                            ]
                        ],
                        
                        'gambar' => [
                            'rules' => 'uploaded[gambar]|max_size[gambar,5120]|ext_in[gambar,png,jpg,jpeg]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                            'errors' => [
                                'uploaded' => 'file harus diisi',
                                'max_size' => 'ukuran file terlalu besar',
                                'ext_in' => 'file harus berformat jpg/jpeg/png',
                                'mime_in' => 'file harus berformat jpg/jpeg/png'
                            ]
                        ],
                    ]);

        if($validasi){
            session()->setFlashdata('error','Mohon cek kembali data Anda!');
            return redirect()->to('/formkamar')->withInput();
        } 
        
        else{

            //mengambil file foto yg akan diupload di form
            $file_arsip = $this->request->getFile('gambar');
            //merandom nama file foto
            $nama_file = $file_arsip->getRandomName();

            $data = [
                'nama_kamar' => $this->request->getVar('nama_kamar'),
                'deskripsi_kamar' => $this->request->getVar('deskripsi_kamar'),
                'status_kamar' => $this->request->getVar('status_kamar'),
                'harga_kamar' => $this->request->getVar('harga_kamar'),
                'gambar' => $nama_file,
            ];

            $file_arsip->move('gambar_kamar', $nama_file); //directori upload file
            $this->kamarModel->insert($data);  
            
            session()->setFlashdata('success','Data kamar berhasil ditambahkan!');
            return redirect()->to('/datakamar')->withInput();
        }
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