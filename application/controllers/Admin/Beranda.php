<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('Admin/M_beranda', 'MBeranda');

        // Cek session yang login,
        // jika session status tidak sama dengan session telahlogin, berarti pengguna belum login
        // maka halaman akan di alihkan kembali ke halaman login.
        if ($this->session->userdata('status') != "telah_login") {
            $this->session->set_flashdata('pesan', 'Anda Harus Login Terlebih Dahulu, error');
            redirect(base_url() . 'login?alert=belum_login');
        }
    }

	public function index()
	{
		$data['navbar']  = 'admin/navbar/navbar';
		$data['script']  = 'admin/script/script';
		$data['footer']  = 'admin/footer/footer';
		$data['header']  = 'admin/header/header';
		$data['sidebar'] = 'admin/sidebar/sidebar';
		$data['judul']   = "Halaman Beranda";
		$data['title']   = "Halaman Beranda";
		$data['content'] = 'admin/beranda/beranda';
		$data['beranda'] = $this->MBeranda->select();
		$this->load->view('admin/body/index', $data);
	}

	public function edit($id)
    {
        $this->MBeranda->edit($id);

        $this->load->library('form_validation', 'upload');

        $this->form_validation->set_rules('id', 'ID', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('kata1', 'Kata1', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('kata2', 'Kata2', 'trim|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == false) {
        	$data['navbar']  = 'admin/navbar/navbar';
        	$data['script']  = 'admin/script/script';
        	$data['footer']  = 'admin/footer/footer';
        	$data['header']  = 'admin/header/header';
        	$data['sidebar'] = 'admin/sidebar/sidebar';
        	$data['judul']   = "Halaman Beranda";
        	$data['title']   = "Halaman Beranda";
        	$data['content'] = 'admin/beranda/beranda';
        	$data['beranda'] = $this->MBeranda->select();
        	$this->load->view('admin/body/index', $data);
        } else {

			$id    = $this->input->post('id');
			$kata1 = $this->input->post('kata1');
			$kata2 = $this->input->post('kata2');

            

            $beranda = array(
				'kata1' => $kata1,
				'kata2' => $kata2

            );
            $this->db->update('dashboard', $beranda, [
                'id'        => $id,
            ]);

            $this->session->set_flashdata('eber', '<div class="alert alert-success text-center" role="alert"> Data telah diedit!</div>');
            redirect('Beranda');
        }
    }

}
