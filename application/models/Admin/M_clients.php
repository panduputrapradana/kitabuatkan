<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_clients extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('clients');
		$this->db->order_by('id_clients', 'desc');
		return $this->db->get()->result();
	}

	public function edit($id_clients)
	{
		$this->db->select('*');
		$this->db->from('clients');
		$this->db->where('id_clients', $id_clients);
		return $this->db->get()->result();
	}

	public function hapus($id_clients)
	{
		$this->db->where('id_clients', $id_clients);
        if ($this->db->delete('clients'))
            return true;
        else
            return false;
	}
	
}