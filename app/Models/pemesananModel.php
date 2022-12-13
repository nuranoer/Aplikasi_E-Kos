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

    public function getAllData()
    {
    	$builder = $this->db->table('pemesanan');
        $builder->select('id_pemesanan, nama_kamar, username, fullname, user_image, email, DATE_FORMAT(pengajuan_tgl, "%d %M %Y") as pengajuan, durasi, pemesanan.status as status_pemesanan, status_kamar, gambar, keterangan, pemesanan.created_at AS tgl_pesan');
        $builder->join('users','pemesanan.id_penghuni=users.id');
        $builder->join('kamar','pemesanan.id_kamar=kamar.id_kamar');
        $query = $builder->get();
        return $query->getResult();
    }
    
    public function getHistory()
    {
    	$builder = $this->db->table('pemesanan');
        $builder->select('nama_kamar, fullname, DATE_FORMAT(pengajuan_tgl, "%d %M %Y") as pengajuan, durasi, pemesanan.status as status_pemesanan, keterangan, pemesanan.created_at AS tgl_pesan');
        $builder->join('users','pemesanan.id_penghuni=users.id');
        $builder->join('kamar','pemesanan.id_kamar=kamar.id_kamar');
        $builder->where('pemesanan.id_penghuni', user()->id);
        $query = $builder->get();
        return $query->getResult();
    }

    public function getIdPemesanan($id = false)
    {
    	if($id == false){
            return $this->findAll();
        }
        $builder = $this->db->table('pemesanan');
        $builder->select('id_pemesanan, nama_kamar, fullname, DATE_FORMAT(pengajuan_tgl, "%d %M %Y") as pengajuan, durasi, pemesanan.status as status_pemesanan, keterangan, pemesanan.created_at AS tgl_pesan');
        $builder->join('users','pemesanan.id_penghuni=users.id');
        $builder->join('kamar','pemesanan.id_kamar=kamar.id_kamar');
        $builder->where('id_pemesanan', $id);
        $query = $builder->get();
        return $query->getResult();
        // return $this->where(['id' => $id])->first();
    }
}
