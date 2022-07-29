<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_testimonials extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('testimonial');
		$this->db->order_by('id_testi', 'desc');
		return $this->db->get()->result();
	}

	public function hapus($id_testi)
	{
		$this->db->where('id_testi', $id_testi);
        if ($this->db->delete('testimonial'))
            return true;
        else
            return false;
	}
	
}