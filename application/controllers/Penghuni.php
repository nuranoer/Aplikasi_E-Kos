<?php 
class Penghuni extends CI_Controller
{
	
	function __construct(){
		parent::__construct();		
		$this->load->model('Penghuni_model');
		$this->load->helper('url');
 
	}

	/* MEMBER-REGISTRASI*/
 
	// function index(){
	// 	$data['member'] = $this->Penghuni_model->ambil_data();
	// 	$this->load->view('Member/Login_member',$data);
	// }
 
	// function daftar(){
	// 	$data = array(
	// 		'aksi' 				=> site_url('Member/daftar_aksi'),
	// 		'nama'		 		=> set_value('nama',$member->nama_member),
	// 		'password' 			=> set_value('password',$member->pass_member),
	// 		'email' 			=> set_value('email',$member->email_member),
	// 		'status' 			=> set_value('status',$member->status),
	// 		'nohp' 				=> set_value('status',$member->nohp),
	// 		'alamat' 			=> set_value('alamat',$member->alamat_member),
	// 		'id_member' 		=> set_value('id_member',$member->id_member),
	// 		'button' 			=> 'Daftar'
	// 		);
	// 	$this->load->view('Member/Regis',$data);
	// }
 	
 	// function daftar_aksi(){
	// $data = array(	
	// 		'nama_member' 	=> $this->input->post('nama'),
	// 		'pass_member'	=> $this->input->post('password'),
	// 		'email_member' 	=> $this->input->post('email'),
	// 		'status' 		=> $this->input->post('status'),
	// 		'nohp' 			=> $this->input->post('nohp'),
	// 		'alamat_member' => $this->input->post('alamat')
 	// 		);
	// 	$this->Member_model->tambah_data($data);
	// 	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pendaftaran berhasil!!</div></div>");
	// 	redirect('LoginMember');
	// }

/* ADMIN - KELOLA DATA MEMBER*/

	function data_member()
	{
		//print_r($this->member_model->ambil_data());
		$data['member'] = $this->Penghuni_model->ambil_data();
		$this->load->view('admin/data_penghuni/index',$data);
	}


	function delete($id)
	{
		$this->Penghuni_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
		redirect(site_url('Penghuni/data_member'));
	}

	function update($id)
	{
		$member = $this->Penghuni_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Member/update_aksi'),
			'nama'		 		=> set_value('nama',$member->nama_member),
			'password' 			=> set_value('password',$member->pass_member),
			'email' 			=> set_value('email',$member->email_member),
			'status' 			=> set_value('status',$member->status),
			'nohp' 				=> set_value('status',$member->nohp),
			'alamat' 			=> set_value('alamat',$member->alamat_member),
			'id_member' 		=> set_value('id_member',$member->id_member),
			'button' 			=> 'Perbarui'
			);
		$this->load->view('admin/data_penghuni/update',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama_member' 		=> $this->input->post('nama'),
			'pass_member'		=> $this->input->post('password'),
			'email_member' 		=> $this->input->post('email'),
			'status' 			=> $this->input->post('status'),
			'nohp' 				=> $this->input->post('nohp'),
			'alamat_member' 	=> $this->input->post('alamat')
			);	
		$id_member = $this->input->post('id_member');
		$this->Penghuni_model->edit_data($id_member,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('member/data_member');
	}

	
}

 ?>