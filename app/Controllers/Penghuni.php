<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\penghuniModel;
use App\Models\pemesananModel;
use App\Models\pembayaranModel;
use Exception;

class Penghuni extends BaseController
{
    protected $penghuni;
    protected $pemesanan;
    protected $pembayaran;

    public function __construct()
    {
        $this->penghuni = new penghuniModel();
        $this->pemesanan = new pemesananModel();
        $this->pembayaran = new pembayaranModel();
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

    public function bayarbulanan()
    {
        $data = [
            'title' => 'Index Pembayaran',
            'validation' => \Config\Services::validation(),
            'id_pemesanan' => $this->pemesanan->getForm()
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

    public function bayar()
    {   
        $validasi = !$this->validate([
            'id_pemesanan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'id pemesanan harus diisi'
                ]
            ],
        
            'bukti' => [
                'rules' => 'uploaded[bukti]|max_size[bukti,5120]|ext_in[bukti,png,jpg,jpeg]|mime_in[bukti,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'file harus diisi',
                    'max_size' => 'ukuran file terlalu besar',
                    'ext_in' => 'file harus berformat jpg/jpeg/png',
                    'mime_in' => 'file harus berformat jpg/jpeg/png'
                ]
            ],

            'transfer_via' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'harga kamar harus diisi'
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
            return redirect()->to('/bayarbulanan')->withInput();
        } 
        
        else{

            $file_bukti = $this->request->getFile('bukti');
            $nama_file = $file_bukti->getRandomName();

            $data = [
                'id_pemesanan' => $this->request->getVar('id_pemesanan'),
                'bukti' => $nama_file,
                'transfer_via' => $this->request->getVar('transfer_via'),
                'status_pembayaran' => $this->request->getVar('status_pembayaran'),
            ];

            $file_bukti->move('pembayaran', $nama_file);
            $this->pembayaran->insert($data);  
            
            session()->setFlashdata('success','Berhasil mengirimkan bukti pembayaran! Silakan menunggu verifikasi ibu kost!');
            return redirect()->to('/bayarbulanan')->withInput();
        }
        return view('/bayarbulanan');
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
