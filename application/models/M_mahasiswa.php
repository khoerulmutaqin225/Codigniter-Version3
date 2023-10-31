<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

	// Menampilkan seluruh data
	public function all_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_mahasiswa');
		return $this->db->get()->result();
	}
	// Insert data
	public function insert_data($data)
	{
		$this->db->insert('tbl_mahasiswa', $data);		
	}



}
