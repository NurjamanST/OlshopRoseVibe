<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();

		//Load Model
		$this->load->model('m_apps');
	}

	public function index()
	{
		$this->load->view('Admin/signup');
	}

	public function Signup_prosess(){
		// Menangkap data dari form login
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['role'] = "admin";

		// Menyimpan data ke database
		$this->m_apps->signup($data);

		// Alihkan ke tampilan Signin
		redirect(site_url('Auth/signin'));
	}

	
	public function signin(){
		$this->load->view('Admin/signin');
	}

	public function Signin_prosess(){
		// Ambil data login
		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');

		// cek login
		$cek_login = $this->m_apps->cek_login($data);

		if ($cek_login && ($data['password'] == $cek_login->password)) {
			
			// Membuat Userdata
			$this->session->set_userdata('email', $cek_login->email);
			$this->session->set_userdata('username', $cek_login->username);
			$this->session->set_userdata('password', $cek_login->password);
			// Jika Berhasil alihkan ke Dashboard
			redirect(site_url('Dashboard'));       
			// var_dump($cek_login->email);
			// var_dump($cek_login->username);
			// var_dump($cek_login->password);
			// var_dump($this->session->userdata());
        } else {
            $this->session->set_flashdata('error', 'Email atau password salah');
			// var_dump($this->session->userdata());
            redirect(site_url('Auth/signin'));
        }

		// var_dump($cek_login);
	}
	function Signout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');

		$this->session->set_flashdata('sukses','Anda berhasil logout');

		redirect(site_url('Auth/signin'));
	}
}
