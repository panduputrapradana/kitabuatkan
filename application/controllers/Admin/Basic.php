<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('Admin/M_basic', 'Mbasic');

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
		$data['judul']   = "Halaman Basic";
		$data['title']   = "Halaman Basic";
		$data['content'] = 'admin/basic/basic';
		$data['basic']   = $this->Mbasic->select();
		$this->load->view('admin/body/index', $data);
	}

	public function edit($id_basic)
    {
        $this->Mbasic->edit($id_basic);

        $this->load->library('form_validation', 'upload');

        $this->form_validation->set_rules('id_basic', 'Id_Basic', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('nama_basic', 'Nama_Basic', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('title_basic', 'Title_Basic', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('alamat_basic', 'Alamat_Basic', 'trim|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == false) {
        	$data['navbar']  = 'admin/navbar/navbar';
        	$data['script']  = 'admin/script/script';
        	$data['footer']  = 'admin/footer/footer';
        	$data['header']  = 'admin/header/header';
        	$data['sidebar'] = 'admin/sidebar/sidebar';
        	$data['judul']   = "Halaman Basic";
        	$data['title']   = "Halaman Basic";
        	$data['content'] = 'admin/basic/basic';
        	$data['basic']   = $this->Mbasic->select();
        	$this->load->view('admin/body/index', $data);
        } else {

			$id_basic     = $this->input->post('id_basic');
			$nama_basic   = $this->input->post('nama_basic');
            $title_basic  = $this->input->post('title_basic');
			$alamat_basic = $this->input->post('alamat_basic');

            

            $basic = array(
                'nama_basic'   => $nama_basic,
                'title_basic'  => $title_basic,
                'alamat_basic' => $alamat_basic

            );
            $this->db->update('basic', $basic, [
                'id_basic'        => $id_basic,
            ]);

            $this->session->set_flashdata('ebas', '<div class="alert alert-success text-center" role="alert"> Data telah diedit!</div>');
            redirect('Basic');
        }
    }

}
