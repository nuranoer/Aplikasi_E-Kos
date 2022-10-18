<?php 
/**
* 
*/
class Komplain_model extends CI_Model
{
	public $komplain	= 'komplain';
	public $id			= 'id_komplain';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('komplain.id_komplain, member.nama_member, hunian.nama_hunian, komplain.perihal, komplain.isi');
        $this->db->from('komplain');
        $this->db->join('member', 'komplain.id_member = member.id_member');
        $this->db->join('hunian', 'komplain.id_hunian = hunian.id_hunian');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->komplain,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->komplain)->row();//1 data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->komplain,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->komplain);
	}

}
 ?>