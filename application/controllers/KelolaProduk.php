<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaProduk extends CI_Controller {
	function __construct(){
		parent::__construct();

		//Load view
		$this->load->view('Layout/head');
		$this->load->view('Layout/navbar');
	}

	public function index()
	{
		$this->load->view('Admin/kelola_produk');
		$this->load->view('Layout/footer');
	}
}
