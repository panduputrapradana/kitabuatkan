<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_form extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('form');
		$this->db->order_by('id_form', 'desc');
		return $this->db->get()->result();
	}
	
	function hapus($id_form)
    {
        $this->db->where('id_form', $id_form);
        if ($this->db->delete('form'))
            return true;
        else
            return false;
    }
}