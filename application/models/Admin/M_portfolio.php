<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_portfolio extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('portfolio');
		$this->db->order_by('waktu', 'desc');
		return $this->db->get()->result();
	}

	public function hapus($id_portfolio)
	{
		$this->db->where('id_portfolio', $id_portfolio);
        if ($this->db->delete('portfolio'))
            return true;
        else
            return false;
	}
	
}