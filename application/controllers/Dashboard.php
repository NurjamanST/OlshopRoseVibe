<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();

		$email = $this->session->userdata('email');
		// cek login
		if (!$email) {
            redirect(site_url('Auth/signin'));
        }
		//Load view
		$this->load->view('Layout/head');
		$this->load->view('Layout/navbar');
	}

	public function index()
	{
		$this->load->view('Admin/dashboard');
		$this->load->view('Layout/footer');
	}
}
