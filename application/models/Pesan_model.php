<?php 
/**
* 
*/
class Pesan_model extends CI_Model
{
	public $pesan		= 'pesan';
	public $id			= 'id_pesan';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('pesan.id_pesan, member.nama_member, member.nohp, hunian.nama_hunian, pesan.tanggal_mulai, pesan.durasi');
        $this->db->from('pesan');
        $this->db->join('member', 'pesan.id_member = member.id_member');
        $this->db->join('hunian', 'pesan.id_hunian = hunian.id_hunian');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->pesan,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->pesan)->row();//1 data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->pesan,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->pesan);
	}

}
 ?>