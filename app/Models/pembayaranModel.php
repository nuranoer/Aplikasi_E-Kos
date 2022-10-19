<?php

namespace App\Models;

use CodeIgniter\Model;

class pembayaranModel extends Model
{
    protected $table      = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_penghuni', 'id_kamar', 'tanggal', 'nominal', 'gambar', 'status', 'bulan'];

    protected $validationRules = [
        'id_penghuni' => 'required',
        'id_kamar' => 'required',
        'tanggal' => 'required',
        'nominal' => 'required',
        'status' => 'required',
        'bulan' => 'required',
    ];

    protected $validationMessages = [
        'id_penghuni' => [
            'required' => 'penghuni harus dipilih, jika kosong isi dari master'
        ],
        'id_kamar' => [
            'required' => 'kamar harus dipilih, jika kosong isi dari master'
        ],
        'tanggal' => [
            'required' => 'tanggal harus diisi'
        ],
        'nominal' => [
            'required' => 'nominal harus diisi'
        ],
        'status' =>[
            'required' => 'status harus diisi'
        
        ],
        'bulan' =>[
            'required' => 'bulan harus diisi'
        
        ],
    ];

    public function get_data()
    {
    	return $this->db->table($this->table)
	    	->join('kamar', 'kamar.id_kamar = '.$this->table.'id_kamar', 'left')
            ->select('pemesanan.*, kamar.nama_kamar AS nama_kamar')
	    	->orderBy($this->table.'.id_kamar', 'desc')->get()->getResultObject();
    }

    public function get_data2()
    {
    	return $this->db->table($this->table)
	    	->join('penghuni', 'penghuni.id_penghuni = '.$this->table.'id_penghuni', 'left')
            ->select('pemesanan.*, penghuni.nama_penghuni AS nama_penghuni')
	    	->orderBy($this->table.'.id_penghuni', 'desc')->get()->getResultObject();
    }
}
