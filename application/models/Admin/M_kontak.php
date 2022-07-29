<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kontak extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('kontak');
		return $this->db->get()->result();
	}

	public function edit($id_kontak)
	{
		$this->db->select('*');
		$this->db->from('kontak');
		$this->db->where('id_kontak', $id_kontak);
		return $this->db->get()->result();
	}
	
}