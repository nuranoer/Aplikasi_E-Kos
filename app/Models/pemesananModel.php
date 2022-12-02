<?php

namespace App\Models;

use CodeIgniter\Model;

class pemesananModel extends Model
{
    protected $table      = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';

    protected $useAutoIncrement = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['id_kamar', 'id_penghuni', 'pengajuan_tgl', 'durasi','status','keterangan'];

    // protected $validationRules = [
    //     'id_kamar' => 'required',
    //     'id_penghuni' => 'required',
    //     'tanggal_mulai' => 'required',
    //     'durasi' => 'required',
    // ];

    // protected $validationMessages = [
    //     'id_kamar' => [
    //         'required' => 'Kamar harus dipilih, jika kosong isi dari master'
    //     ],
    //     'id_penghuni' => [
    //         'required' => 'Penghuni harus dipilih, jika kosong isi dari master'
    //     ],
    //     'tanggal_mulai' => [
    //         'required' => 'tanggal harus diisi'
    //     ],
    //     'durasi' => [
    //         'required' => 'durasi harus diisi'
    //     ],
    // ];

    public function getHistory()
    {
    	$builder = $this->db->table('pemesanan');
        $builder->select('nama_kamar, username, DATE_FORMAT(pengajuan_tgl, "%d %M %Y") as pengajuan, durasi, pemesanan.status as status_pemesanan, keterangan, pemesanan.created_at AS tgl_pesan');
        $builder->join('users','pemesanan.id_penghuni=users.id');
        $builder->join('kamar','pemesanan.id_kamar=kamar.id_kamar');
        $builder->where('pemesanan.id_penghuni', user()->id);
        $query = $builder->get();
        return $query->getResult();
    }

    // public function get_data2()
    // {
    // 	return $this->db->table($this->table)
	//     	->join('penghuni', 'penghuni.id_penghuni = '.$this->table.'id_penghuni', 'left')
    //         ->select('pemesanan.*, penghuni.nama_penghuni AS nama_penghuni')
	//     	->orderBy($this->table.'.id_penghuni', 'desc')->get()->getResultObject();
    // }
}
