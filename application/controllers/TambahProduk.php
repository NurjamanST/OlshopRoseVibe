<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahProduk extends CI_Controller {
	function __construct(){
		parent::__construct();

		//Load view
		$this->load->view('Layout/head');
	}

	public function index()
	{
		$this->load->view('Admin/tambah_produk');
		$this->load->view('Layout/footer');
	}
}
