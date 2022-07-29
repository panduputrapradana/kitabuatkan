<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_basic extends CI_Model
{
	function select()
	{
		$this->db->select('*');
		$this->db->from('basic');
		return $this->db->get()->result();
	}

	function edit($id_basic)
	{
		$this->db->select('*');
		$this->db->from('basic');
		$this->db->where('id_basic', $id_basic);
		return $this->db->get()->result();
	}
	
}