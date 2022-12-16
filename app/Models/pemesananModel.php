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

    //menampilkan semua data pemesanan pada halaman Admin
    public function getAllData() 
    {
    	$builder = $this->db->table('pemesanan');
        $builder->select('id_pemesanan, nama_kamar, username, fullname, user_image, email, DATE_FORMAT(pengajuan_tgl, "%d %M %Y") as pengajuan, durasi, pemesanan.status as status_pemesanan, status_kamar, gambar, keterangan, pemesanan.created_at AS tgl_pesan');
        $builder->join('users','pemesanan.id_penghuni=users.id');
        $builder->join('kamar','pemesanan.id_kamar=kamar.id_kamar');
        $query = $builder->get();
        return $query->getResult();
    }
    
    //menampilkan riwayat pemesanan kamar pada halaman Penghuni
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

    //untuk menampilkan data pemesanan sesuai id pada halaman edit pemesanan Admin
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
    }

    public function getKamarStatusPenghuni()
    {
        $builder = $this->db->table('pemesanan');
        $builder->select('nama_kamar, pemesanan.status as status_pemesanan');
        $builder->join('kamar','pemesanan.id_kamar=kamar.id_kamar');
        $builder->where('pemesanan.id_penghuni', user()->id);
        $builder->orderBy('id_pemesanan', 'DESC');
        $builder->limit(1);
        $query = $builder->get();
        return $query->getResult();
    }
    
    public function getForm()
    {
        $builder = $this->db->table('pemesanan');
        $builder->select('id_pemesanan');
        $builder->where('id_penghuni', user()->id);
        $query = $builder->get();
        return $query->getResult();
    }

    //menampilkan jumlah kamar yang disetujui admin di halaman utama Penghuni
    // public function getTotalStatusDisetujui() 
    // {
    //     return $this->db->table('pemesanan')->where(['status' => 'Disetujui'],['id_penghuni' => user()->id])->countAllResults();
    // }
    
    //menampilkan jumlah kamar yang ditolak admin di halaman utama Penghuni
    // public function getTotalStatusDitolak() 
    // {
    //     return $this->db->table('pemesanan')->where(['status' => 'Ditolak'],['id_penghuni' => user()->id])->countAllResults();
    // }
}
