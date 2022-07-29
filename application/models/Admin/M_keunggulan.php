<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keunggulan extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('keunggulan');
		return $this->db->get()->result();
	}

	public function edit($id_keunggulan)
	{
		$this->db->select('*');
		$this->db->from('keunggulan');
		$this->db->where('id_keunggulan', $id_keunggulan);
		return $this->db->get()->result();
	}
	
}