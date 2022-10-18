<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}

		$this->load->view('Member/Index_member');
        
    } 
}