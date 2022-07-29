<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
	public function user()
    {
        return $this->db->get('user')->num_rows();
    }

    public function portfolio()
    {
        return $this->db->get('portfolio')->num_rows();
    }

    public function clients()
    {
        return $this->db->get('clients')->num_rows();
    }

    public function form()
    {
        return $this->db->get('form')->num_rows();
    }

    public function testimonial()
    {
        return $this->db->get('testimonial')->num_rows();
    }
	
}