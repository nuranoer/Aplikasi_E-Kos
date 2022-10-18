<?php 
class Hunian extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Hunian_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		//print_r($this->prodi_model->ambil_data());
		$data['hunian'] = $this->Hunian_model->ambil_data();
		$this->load->view('Admin/Hunian_list',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('Hunian/tambah_aksi'),
			'nama' 				=> set_value('nama'),
			'jenis' 			=> set_value('jenis'),
			'deskripsi' 		=> set_value('deskripsi'),
			'status'		 	=> set_value('status'),
			'harga' 			=> set_value('harga'),
			'id_hunian' 		=> set_value('id_hunian'),
			'button' 			=> 'Tambah'
		);
		$this->load->view('Admin/Hunian_form',$data);
	}

	function tambah_aksi()
	{

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
        			'nama_hunian' 			=> $this->input->post('nama'),
        			'jenis_hunian' 			=> $this->input->post('jenis'),
        			'deskripsi_hunian' 		=> $this->input->post('deskripsi'),
        			'status_hunian' 		=> $this->input->post('status'),
        			'harga_hunian' 			=> $this->input->post('harga')

        		);
                $this->Hunian_model->tambah_data($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('hunian'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
            	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('hunian'); //jika gagal maka akan ditampilkan form upload
            }
        }


        $data = array(
        	'nama_hunian' 			=> $this->input->post('nama'),
        	'jenis_hunian' 			=> $this->input->post('jenis'),
        	'deskripsi_hunian' 		=> $this->input->post('deskripsi'),
        	'status_hunian' 		=> $this->input->post('status'),
        	'harga_hunian' 			=> $this->input->post('harga')
        );
        $this->Hunian_model->tambah_data($data);
        redirect(site_url('hunian'));
    }

    function delete($id)
    {
    	$this->Hunian_model->hapus_data($id);
    	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
    	redirect('hunian');
    }

    function update($id)
    {
    	$hunian = $this->Hunian_model->ambil_data_id($id);
    	$data = array(
    		'aksi' 				=> site_url('hunian/update_aksi'),
    		'nama' 				=> set_value('nama',$hunian->nama_hunian),
    		'jenis' 			=> set_value('jenis',$hunian->jenis_hunian),
    		'deskripsi' 		=> set_value('deskripsi',$hunian->deskripsi_hunian),
    		'status'		 	=> set_value('status',$hunian->status_hunian),
    		'harga' 			=> set_value('harga',$hunian->harga_hunian),
    		'id_hunian' 		=> set_value('id_hunian',$hunian->id_hunian),
    		'button' 			=> 'Perbarui'
    	);
    	$this->load->view('Admin/Hunian_form',$data);		
    }

    function update_aksi()
    {

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
        			'nama_hunian' 			=> $this->input->post('nama'),
        			'jenis_hunian' 			=> $this->input->post('jenis'),
        			'deskripsi_hunian' 		=> $this->input->post('deskripsi'),
        			'status_hunian' 		=> $this->input->post('status'),
        			'harga_hunian' 			=> $this->input->post('harga')

        		);	

        		$id_hunian = $this->input->post('id_hunian');
                $this->Hunian_model->edit_data($id_hunian,$data);

                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update Data berhasil diubah!!</div></div>");
                redirect('hunian');
            }
            else{
              $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update Data gagal!!</div></div>");
              redirect('hunian_form', 'refresh');

          }

      }
      $data = array(
        'nama_hunian'           => $this->input->post('nama'),
        'jenis_hunian'          => $this->input->post('jenis'),
        'deskripsi_hunian'      => $this->input->post('deskripsi'),
        'status_hunian'         => $this->input->post('status'),
        'harga_hunian'          => $this->input->post('harga')
    );
      $id_hunian = $this->input->post('id_hunian');
      $this->Hunian_model->edit_data($id_hunian,$data);
      redirect('hunian');
  }
}
?>