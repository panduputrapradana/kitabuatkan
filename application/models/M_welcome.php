<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_welcome extends CI_Model
{
    function basic()
    {
        $this->db->select('*');
        $this->db->from('basic');
        return $this->db->get()->row_array();
    }

    function keunggulan()
    {
        $this->db->select('*');
        $this->db->from('keunggulan');
        return $this->db->get()->row_array();
    }

    function kontak()
    {
        $this->db->select('*');
        $this->db->from('kontak');
        return $this->db->get()->row_array();
    }

    function harga()
    {
        $this->db->select('*');
        $this->db->from('harga');
        return $this->db->get()->result();
    }

    function beranda()
    {
        $this->db->select('*');
        $this->db->from('dashboard');
        return $this->db->get()->row_array();
    }

    function clients()
    {
        $this->db->select('*');
        $this->db->from('clients');
        $this->db->order_by('id_clients', 'desc');
        return $this->db->get()->result();
    }

    function portfolio()
    {
        $this->db->select('*');
        $this->db->from('portfolio');
        $this->db->order_by('waktu', 'desc');
        return $this->db->get()->result();
    }

    function testimonials()
    {
        $this->db->select('*');
        $this->db->from('testimonial');
        $this->db->order_by('id_testi', 'desc');
        return $this->db->get()->result();
    }
}
