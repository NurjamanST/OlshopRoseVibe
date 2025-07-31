<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelolaProduk extends CI_Controller {
	function __construct(){
		parent::__construct();

		//Load view
		$this->load->view('Layout/head');
		//Load Model
		$this->load->model('m_apps');
		// Load Helper
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		// Load Database Produk
		$data['produk'] = $this->m_apps->tampilkan_data('tb_product')->result();
		
		$this->load->view('Layout/navbar');
		$this->load->view('Admin/kelola_produk', $data);
		$this->load->view('Layout/footer');
	}

	public function addproduct()
	{
		$this->load->view('Layout/navbarback');
		$this->load->view('Admin/tambah_produk');
		$this->load->view('Layout/footer');
	}

	public function prosesinput(){
		// Mendapatkan hasil input form
		$name_product = $this->input->post('name_product');
		$price_product = $this->input->post('price_product');
		$description_product = $this->input->post('description_product');
		$stock_product = $this->input->post('stock_product');
		
		$images_product = $_FILES['images_product']['name'];

		var_dump($name_product);
		var_dump($price_product);
		var_dump($description_product);
		var_dump($stock_product);
		var_dump($images_product);
		// $nama_file = $_FILES['images_product']['name'];
		// $upload = move_uploaded_file($_FILES['images_product']['tmp_name'],'Assets/'.$nama_file);

		// if($upload){
		// 	// Membuat data array untuk di simpan ke database
		// 	$data = array(
		// 		'name_product' => $name_product,
		// 		'price_product' => $price_product,
		// 		'description_product' => $description_product,
		// 		'stock_product' => $stock_product,
		// 		'images_product' => $nama_file
		// 	);
		// }

		// // var_dump($data);
		// // Membuat query untuk insert data ke database
		// $this->m_apps->tambah_data('tb_product', $data);

		// // Alihkan ke tampilan Kelola Produk
		// redirect(site_url('KelolaProduk'));
	}
}
