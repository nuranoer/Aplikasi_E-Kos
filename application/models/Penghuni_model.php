<?php 
/**
* 
*/
class Penghuni_model extends CI_Model
{
	public $member			= 'member';
	public $id				= 'id_member';
	public $order			= 'ASC';
	public $email 			= 'email_member';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($email_member,$pass_member)
	{
		$this->db->where('email_member',$email_member);
		$this->db->where('pass_member',$pass_member);
		return $this->db->get($this->member)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->member)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->member,$data);
	}

	function ambil_data1($email)
	{
		$this->db->where($this->email,$email);
		return $this->db->get($this->member)->row();
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->member);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->member,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->member)->row();
	}




		
}
?>