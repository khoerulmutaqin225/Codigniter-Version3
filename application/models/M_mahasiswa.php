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

	// Get Data By ID data
	public function detail_data($id_mahasiswa)
	{
		$this->db->select('*');
		$this->db->from('tbl_mahasiswa');
		$this->db->where('id_mahasiswa', $id_mahasiswa);
		return $this->db->get()->row();		
	}

	// Get Data By ID data
	public function update_data($data)
	{
		$this->db->where('id_mahasiswa', $data['id_mahasiswa']);
		
		$this->db->update('tbl_mahasiswa', $data);
		
	}
	// Get Data By ID data
	public function delete_data($data)
	{
		$this->db->where('id_mahasiswa', $data['id_mahasiswa']);
		
		$this->db->delete('tbl_mahasiswa', $data);
				
	}



}
