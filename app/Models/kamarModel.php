<?php

namespace App\Models;

use CodeIgniter\Model;

class kamarModel extends Model
{
    protected $table      = 'kamar';
    protected $primaryKey = 'id_kamar';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_kamar', 'deskripsi_kamar', 'status_kamar', 'harga_kamar', 'gambar'];

    protected $validationRules = [
        'nama_kamar' => 'required',
        'deskripsi_kamar' => 'required',
        'status_kamar' => 'required',
        'harga_kamar' => 'required',
    ];

    protected $validationMessages = [
        'nama_kamar' => [
            'required' => 'nama_kamar harus diisi'
        ],
        'deskripsi_kamar' => [
            'required' => 'deskripsi_kamar harus dipilih, jika kosong, silahkan isi dari data master'
        ],
        'status_kamar' => [
            'required' => 'status_kamar harus diisi'
        ],
        'harga_kamar' => [
            'required' => 'harga_kamar harus diisi'
        ],
    ];

}
