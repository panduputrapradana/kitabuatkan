<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keunggulan extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('Admin/M_keunggulan', 'Mkeunggulan');

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
		$data['navbar']     = 'admin/navbar/navbar';
		$data['script']     = 'admin/script/script';
		$data['footer']     = 'admin/footer/footer';
		$data['header']     = 'admin/header/header';
		$data['sidebar']    = 'admin/sidebar/sidebar';
		$data['judul']      = "Halaman Keunggulan";
		$data['title']      = "Halaman Keunggulan";
		$data['content']    = 'admin/keunggulan/keunggulan';
		$data['keunggulan'] = $this->Mkeunggulan->select();
		$this->load->view('admin/body/index', $data);
	}

	public function edit($id_keunggulan)
    {
        $this->Mkeunggulan->edit($id_keunggulan);

        $this->load->library('form_validation', 'upload');

        $this->form_validation->set_rules('id_keunggulan', 'Id_Keunggulan', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('judul_keunggulan', 'Judul_Keunggulan', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('deskripsi_keunggulan', 'Deskripsi_Keunggulan', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('kepuasan', 'Kepuasan', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('kecepatan', 'Kecepatan', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('project', 'Project', 'trim|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == false) {
        	$data['navbar']     = 'admin/navbar/navbar';
            $data['script']     = 'admin/script/script';
            $data['footer']     = 'admin/footer/footer';
            $data['header']     = 'admin/header/header';
            $data['sidebar']    = 'admin/sidebar/sidebar';
            $data['judul']      = "Halaman Keunggulan";
            $data['title']      = "Halaman Keunggulan";
            $data['content']    = 'admin/keunggulan/keunggulan';
            $data['keunggulan'] = $this->Mkeunggulan->select();
            $this->load->view('admin/body/index', $data);
        } else {

            $id_keunggulan        = $this->input->post('id_keunggulan');
            $judul_keunggulan     = $this->input->post('judul_keunggulan');
            $deskripsi_keunggulan = $this->input->post('deskripsi_keunggulan');
            $kepuasan             = $this->input->post('kepuasan');
            $kecepatan            = $this->input->post('kecepatan');
            $project              = $this->input->post('project');

            

            $keunggulan = array(
                'judul_keunggulan'     => $judul_keunggulan,
                'deskripsi_keunggulan' => $deskripsi_keunggulan,
                'kepuasan'             => $kepuasan,
                'kecepatan'            => $kecepatan,
                'project'              => $project

            );
            $this->db->update('keunggulan', $keunggulan, [
                'id_keunggulan'        => $id_keunggulan,
            ]);

            $this->session->set_flashdata('ekeu', '<div class="alert alert-success text-center" role="alert"> Data telah diedit!</div>');
            redirect('Keunggulan');
        }
    }

}
