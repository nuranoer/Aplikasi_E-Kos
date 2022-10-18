<?php 
class Komplain extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Komplain_model');
		$this->load->model('Member_model');
		$this->load->model('Hunian_model');
	}


	/* MEMBER-KONFIRMASI PEMBAYARAN*/
 
	function tambah($id_hunian){
		$hunian = $this->Hunian_model->ambil_data1($id_hunian);
		$email = $this->session->userdata('email_member');
		$member = $this->Member_model->ambil_data1($email);

		$data = array(
			'aksi' 				=> site_url('Komplain/tambah_aksi'),
			'id_komplain' 		=> set_value('id_komplain'),
			'id_hunian' 		=> set_value('id_hunian',$hunian->id_hunian),
			'id_member' 		=> set_value('id_member',$member->id_member),
			'perihal' 			=> set_value('perihal'),
			'isi'				=> set_value('isi'),
			'button' 			=> 'OK'
			);
		$this->load->view('Member/Komplain_form',$data);
	}
 	
 	function tambah_aksi(){
	
		$data = array(	
			'id_komplain' 			=> $this->input->post('id_komplain'),
			'id_hunian' 			=> $this->input->post('id_hunian'),
			'id_member' 			=> $this->input->post('id_member'),
			'perihal' 				=> $this->input->post('perihal'),
			'isi'	 				=> $this->input->post('isi')
			);	
		$this->Komplain_model->tambah_data($data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Pemesanan berhasil!!</div></div>");
		redirect('Welcome/Info_member');
	}



	function index()
	{
		$data['komplain'] = $this->Komplain_model->ambil_data();
		$this->load->view('Admin/Komplain_list',$data);
	}

	public function download($id){
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->Sewa_model->ambil_data_id($id);
            
            $gambar = $fileInfo->gambar;
            //file path
            $file = 'assets/admin/uploads/'.$gambar;            
            //download file from directory
            force_download($file, NULL);
        }
    }

	function delete($id)
	{
		$this->Komplain_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('komplain');
	}
}

 ?>