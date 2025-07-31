<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_apps extends CI_Model{

    function signup($data)
    {
        $this->db->insert('tb_users',$data);
    }

	function cek_login($data){
        return $this->db->get_where('tb_users', ['email' => $data['email']])->row();
	}

	function tampilkan_data($nama_tabel){
		return $this->db->get($nama_tabel);
	}

	function tambah_data($nama_tabel, $data){
		$this->db->insert($nama_tabel, $data);
	}
}
