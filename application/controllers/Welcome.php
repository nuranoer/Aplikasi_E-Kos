<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->model('Hunian_model');
	$this->load->model('Member_model');
	$this->load->model('Sewa_model');
	$this->load->helper(array('url'));
}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('pengunjung/index');
	}

	public function info()
	{
		$data['hunian'] = $this->Hunian_model->ambil_data();
		$this->load->view('Member/Info',$data);

	}

	public function info_member()
	{
		$data['hunian'] = $this->Hunian_model->ambil_data();
		$this->load->view('Member/Info_member',$data);

	}

	public function login_member()
	{
		redirect('LoginMember');
	}

	public function regis()
	{
		$this->load->view('Member/Regis');
	}

	public function index_member()
	{
		$this->load->view('Member/Index_member');
	}

	public function pemesanan()
	{
		$this->load->view('Member/Pemesanan');
	}

		public function status_sewa()
	{
		$data['sewa']= $this->Sewa_model->ambil_data();
		$this->load->view('Member/Status_sewa',$data);
	}

		public function sewa()
	{
		$this->load->view('Member/Sewa');
	}

		public function komplain()
	{
		$this->load->view('Member/Komplain_form');
	}
}
