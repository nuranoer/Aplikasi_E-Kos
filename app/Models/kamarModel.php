<?php

namespace App\Models;

use CodeIgniter\Model;

class kamarModel extends Model
{
    protected $table      = 'kamar';
    protected $primaryKey = 'id_kamar';
    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_kamar', 'deskripsi_kamar', 'status_kamar', 'harga_kamar', 'gambar'];

    public function detail_data($id_kamar = false){
        if($id_kamar == false){
            return $this->findAll();
        }
        return $this->where(['id_kamar' => $id_kamar])->first();
    }

}
