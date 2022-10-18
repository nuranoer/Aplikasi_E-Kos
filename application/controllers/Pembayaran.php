<?php 
class Pembayaran extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pembayaran_model');
		$this->load->model('Penghuni_model');
		$this->load->model('Kamar_model');
	}

	/* MEMBER-KONFIRMASI PEMBAYARAN*/
 
	function tambah($id_hunian){
		$hunian = $this->Hunian_model->ambil_data1($id_hunian);
		$email = $this->session->userdata('email_member');
		$member = $this->Member_model->ambil_data1($email);

		$data = array(
			'aksi' 				=> site_url('Sewa/tambah_aksi'),
			'id_sewa' 			=> set_value('id_sewa'),
			'id_hunian' 		=> set_value('id_hunian',$hunian->id_hunian),
			'id_member' 		=> set_value('id_member',$member->id_member),
			'tanggal' 			=> set_value('tanggal'),
			'nominal'			=> set_value('nominal'),
			'button' 			=> 'OK'
			);
		$this->load->view('Member/Sewa',$data);
	}
 	
 	function tambah_aksi(){
	
		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/admin/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['filefoto']['name'])
        {
        	if ($this->upload->do_upload('filefoto'))
        	{
        		$gbr = $this->upload->data();
        		$data = array(
        			'gambar' 				=>$gbr['file_name'],
					'id_sewa' 				=> $this->input->post('id_sewa'),
					'id_hunian' 			=> $this->input->post('id_hunian'),
					'id_member' 			=> $this->input->post('id_member'),
					'tanggal' 				=> $this->input->post('tanggal'),
					'nominal' 				=> $this->input->post('nominal')
			);	
		$this->Sewa_model->tambah_data($data);

		redirect('Welcome/Info_member'); 

		  }else{
                
                redirect('Welcome/sewa'); //jika gagal maka akan ditampilkan form upload
            }
        }
		

        $data = array(
        			'id_sewa' 				=> $this->input->post('id_sewa'),
					'id_hunian' 			=> $this->input->post('id_hunian'),
					'id_member' 			=> $this->input->post('id_member'),
					'tanggal' 				=> $this->input->post('tanggal'),
					'nominal' 				=> $this->input->post('nominal')
        );
        $this->Sewa_model->tambah_data($data);
    }

function delete($id)
	{
		$this->Sewa_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('sewa');
	}

	function index()
	{
		$data['sewa'] = $this->Sewa_model->ambil_data();
		$this->load->view('Admin/Sewa_list',$data);
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


 function update($id)
    {
    	$sewa = $this->Sewa_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('sewa/update_aksi'),
			'status'			=> set_value('status',$sewa->status),
			'bulan'				=> set_value('bulan',$sewa->bulan),
			'id_sewa' 			=> set_value('id_sewa',$sewa->id_sewa),
			'button' 			=> 'Update'
			);
		$this->load->view('Admin/Sewa_form',$data);		
	}

    function update_aksi()
    {

    	$data = array(
			'bulan' 				=> $this->input->post('bulan'),
			'status' 				=> $this->input->post('status')
			);	
		$id_sewa = $this->input->post('id_sewa');
		$this->Sewa_model->edit_data($id_sewa,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('sewa');
  }
}

// function delete($id)
// 	{
// 		$this->Sewa_model->hapus_data($id);
// 		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
//         redirect('sewa');
// 	}

 ?>