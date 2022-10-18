<?php 
/**
* 
*/
class Sewa_model extends CI_Model
{
	public $sewa		= 'sewa';
	public $id			= 'id_sewa';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('sewa.id_sewa, member.nama_member, hunian.nama_hunian, sewa.tanggal, sewa.nominal, sewa.gambar,  sewa.bulan, sewa.status');
        $this->db->from('sewa');
        $this->db->join('member', 'sewa.id_member = member.id_member');
        $this->db->join('hunian', 'sewa.id_hunian = hunian.id_hunian');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->sewa,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->sewa)->row();//1 data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->sewa,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->sewa);
	}


}
 ?>