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
        echo view('user/admin/datakamar/index', $data);
    }
    
    public function formkamar()
    {
        $data = [
            'title' => 'Form Kamar | Admin Kost',
            'validation' => \Config\Services::validation()
        ];
        echo view('user/admin/datakamar/create', $data);
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

    public function delete($id)
    {
        $data = $this->kamarModel->find($id);
        $gambar = $data['gambar'];
        if(file_exists('gambar_kamar/'.$gambar)){
            unlink('gambar_kamar/'.$gambar);
        }
        $this->kamarModel->delete($id);
        return redirect()->back();
    }
    
    public function editkamar($id)
    {
        $data = [
            'title' => 'Edit Kamar | Admin Kost',
            'edit' => $this->kamarModel->detail_data($id),
            'validation' => \Config\Services::validation()
        ];

        return view('user/admin/datakamar/update', $data);
    }

    public function updatekamar($id)
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
            return redirect()->to('/editkamar-' . $id)->withInput();
        } 

        else{

        //mengambil file foto yg akan diupload di form
        $file_arsip = $this->request->getFile('gambar');
        //merandom nama file foto
        $nama_file = $file_arsip->getRandomName();

        $data = [
            'id_kamar' => $id,
            'nama_kamar' => $this->request->getVar('nama_kamar'),
            'deskripsi_kamar' => $this->request->getVar('deskripsi_kamar'),
            'status_kamar' => $this->request->getVar('status_kamar'),
            'harga_kamar' => $this->request->getVar('harga_kamar'),
            'gambar' => $nama_file,
        ];

        $file_arsip->move('gambar_kamar', $nama_file); //directori upload file
        $this->kamarModel->save($data);  

        session()->setFlashdata('success','Data kamar berhasil diubah!');
        return redirect()->to('/datakamar')->withInput();
        }
    }

}