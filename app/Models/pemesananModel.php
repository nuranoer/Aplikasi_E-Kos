<?php

namespace App\Models;

use CodeIgniter\Model;

class pemesananModel extends Model
{
    protected $table      = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_kamar', 'id_penghuni', 'tanggal_mulai', 'durasi'];

    protected $validationRules = [
        'id_kamar' => 'required',
        'id_penghuni' => 'required',
        'tanggal_mulai' => 'required',
        'durasi' => 'required',
    ];

    protected $validationMessages = [
        'id_kamar' => [
            'required' => 'Kamar harus dipilih, jika kosong isi dari master'
        ],
        'id_penghuni' => [
            'required' => 'Penghuni harus dipilih, jika kosong isi dari master'
        ],
        'tanggal_mulai' => [
            'required' => 'tanggal harus diisi'
        ],
        'durasi' => [
            'required' => 'durasi harus diisi'
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
