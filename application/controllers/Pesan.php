<?php 
class Pesan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pesan_model');
		$this->load->model('Member_model');
		$this->load->model('Hunian_model');
	}

	/* MEMBER-PEMESANAN*/
 
	function pemesanan($id_hunian){
		$hunian = $this->Hunian_model->ambil_data1($id_hunian);
		$email = $this->session->userdata('email_member');
		$member = $this->Member_model->ambil_data1($email);

		$data = array(
			'aksi' 				=> site_url('Pesan/pemesanan_aksi'),
			'id_pesan' 			=> set_value('id_pesan'),
			'id_hunian' 		=> set_value('id_hunian',$hunian->id_hunian),
			'id_member' 		=> set_value('id_member',$member->id_member),
			'tanggal_mulai' 	=> set_value('tanggal_mulai'),
			'durasi'			=> set_value('durasi'),
			'button' 			=> 'Pesan'
			);
		$this->load->view('Member/Pemesanan',$data);
	}
 	
 	function pemesanan_aksi(){
	$data = array(	
			'id_pesan' 				=> $this->input->post('id_pesan'),
			'id_hunian' 			=> $this->input->post('id_hunian'),
			'id_member' 			=> $this->input->post('id_member'),
			'tanggal_mulai' 		=> $this->input->post('tanggal_mulai'),
			'durasi' 				=> $this->input->post('durasi')
			);	
		$this->Pesan_model->tambah_data($data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pemesanan berhasil!!</div></div>");
		redirect('Welcome/Info_member');
	}
	



	/*ADMIN*/

	function index()
	{
		$data['pesan'] = $this->Pesan_model->ambil_data();
		$this->load->view('Admin/Pesan_list',$data);
	}

	function delete($id)
	{
		$this->Pesan_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('pesan');
	}

	function update($id)
	{
		$pesan = $this->Pesan_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('pesan/update_aksi'),
			'tanggal_mulai' 	=> set_value('tanggal_mulai',$pesan->tanggal_mulai),
			'durasi'			=> set_value('durasi',$pesan->durasi),
			'id_pesan' 			=> set_value('id_pesan',$pesan->id_pesan),
			'button' 			=> 'Update'
			);
		$this->load->view('Admin/Pesan_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'tanggal_mulai' 		=> $this->input->post('tanggal_mulai'),
			'durasi' 				=> $this->input->post('durasi')
			);	
		$id_pesan = $this->input->post('id_pesan');
		$this->Pesan_model->edit_data($id_pesan,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('pesan');
	}

}

 ?>