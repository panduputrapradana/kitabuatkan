<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_harga extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('harga');
		return $this->db->get()->result();
	}

	public function edit($id_harga)
	{
		$this->db->select('*');
		$this->db->from('harga');
		$this->db->where('id_harga', $id_harga);
		return $this->db->get()->result();
	}
	
}