<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('dashboard');
		return $this->db->get()->result();
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('dashboard');
		$this->db->where('id', $id);
		return $this->db->get()->result();
	}
	
}