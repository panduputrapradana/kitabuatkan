<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model
{
	public function user()
	{
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get()->result();
	}

	public function edit($id_user)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $id_user);
		return $this->db->get()->result();
	}

	public function hapus($id_user)
	{
		$this->db->where('id_user', $id_user);
        if ($this->db->delete('user'))
            return true;
        else
            return false;
	}
	
}