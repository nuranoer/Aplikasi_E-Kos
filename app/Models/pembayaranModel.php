<?php

namespace App\Models;

use CodeIgniter\Model;

class pembayaranModel extends Model
{
    protected $table      = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_pemesanan', 'transfer_via', 'bukti', 'status_pembayaran'];

    //untuk menghitung jumlah yang telah penghuni bayar, akan ditampilkan di halaman penghuni
    public function getCount() 
    {
        $builder = $this->db->table('pembayaran');
        $builder->select('count(pembayaran.id_pemesanan) as countid, durasi');
        $builder->join('pemesanan','pembayaran.id_pemesanan=pemesanan.id_pemesanan');
        $builder->where('id_penghuni', user()->id);
        $query = $builder->get();
        return $query->getResult(); 
    }

    public function getPembayaranPenghuni() //untuk ditampilkan pada halaman penghuni
    {
        $builder = $this->db->table('pembayaran');
        $builder->select('id_pembayaran, pembayaran.id_pemesanan as id, transfer_via, bukti, status_pembayaran, nama_kamar, harga_kamar, durasi, pembayaran.created_at as tanggal_pembayaran');
        $builder->join('pemesanan','pembayaran.id_pemesanan=pemesanan.id_pemesanan');
        $builder->join('kamar','pemesanan.id_kamar=kamar.id_kamar');
        $builder->where('id_penghuni', user()->id);
        $query = $builder->get();
        return $query->getResult();
    }

    public function getPenghuniPembayaran() 
    {
    	$builder = $this->db->table('pemesanan');
        $builder->select('id_pemesanan, id_penghuni, username, fullname, user_image, durasi');
        $builder->join('users','pemesanan.id_penghuni=users.id');
        $builder->where('pemesanan.status','disetujui');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getDetailPembayaran($id)
    {
        $builder = $this->db->table('pemesanan');
        $builder->select('id_pemesanan, id_penghuni, username, fullname, durasi');
        $builder->join('users','pemesanan.id_penghuni=users.id');
        $builder->where('pemesanan.status','disetujui');
        $builder->where('id_penghuni',$id);
        $query = $builder->get();
        return $query->getResult();
    }

    // protected $validationRules = [
    //     'id_penghuni' => 'required',
    //     'id_kamar' => 'required',
    //     'tanggal' => 'required',
    //     'nominal' => 'required',
    //     'status' => 'required',
    //     'bulan' => 'required',
    // ];

    // protected $validationMessages = [
    //     'id_penghuni' => [
    //         'required' => 'penghuni harus dipilih, jika kosong isi dari master'
    //     ],
    //     'id_kamar' => [
    //         'required' => 'kamar harus dipilih, jika kosong isi dari master'
    //     ],
    //     'tanggal' => [
    //         'required' => 'tanggal harus diisi'
    //     ],
    //     'nominal' => [
    //         'required' => 'nominal harus diisi'
    //     ],
    //     'status' =>[
    //         'required' => 'status harus diisi'
        
    //     ],
    //     'bulan' =>[
    //         'required' => 'bulan harus diisi'
        
    //     ],
    // ];

    // public function get_data()
    // {
    // 	return $this->db->table($this->table)
	//     	->join('kamar', 'kamar.id_kamar = '.$this->table.'id_kamar', 'left')
    //         ->select('pemesanan.*, kamar.nama_kamar AS nama_kamar')
	//     	->orderBy($this->table.'.id_kamar', 'desc')->get()->getResultObject();
    // }

    // public function get_data2()
    // {
    // 	return $this->db->table($this->table)
	//     	->join('penghuni', 'penghuni.id_penghuni = '.$this->table.'id_penghuni', 'left')
    //         ->select('pemesanan.*, penghuni.nama_penghuni AS nama_penghuni')
	//     	->orderBy($this->table.'.id_penghuni', 'desc')->get()->getResultObject();
    // }
}
