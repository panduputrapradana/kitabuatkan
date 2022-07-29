<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('Admin/M_harga', 'Mharga');

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
		$data['judul']   = "Halaman Harga";
		$data['title']   = "Halaman Harga";
		$data['content'] = 'admin/harga/harga';
		$data['harga']   = $this->Mharga->select();
		$this->load->view('admin/body/index', $data);
	}

	public function edit($id_harga)
    {
        $this->Mharga->edit($id_harga);

        $this->load->library('form_validation', 'upload');

        $this->form_validation->set_rules('id_harga', 'Id_Harga', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('nama_paket', 'Nama_Paket', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == false) {
        	$data['navbar']  = 'admin/navbar/navbar';
        	$data['script']  = 'admin/script/script';
        	$data['footer']  = 'admin/footer/footer';
        	$data['header']  = 'admin/header/header';
        	$data['sidebar'] = 'admin/sidebar/sidebar';
        	$data['judul']   = "Halaman Harga";
        	$data['title']   = "Halaman Harga";
        	$data['content'] = 'admin/harga/harga';
        	$data['harga']   = $this->Mharga->select();
        	$this->load->view('admin/body/index', $data);
        } else {

			$id_harga   = $this->input->post('id_harga');
			$nama_paket = $this->input->post('nama_paket');
			$harga      = $this->input->post('harga');

            

            $harga = array(
                'nama_paket'  => $nama_paket,
                'harga'       => $harga

            );
            $this->db->update('harga', $harga, [
                'id_harga'        => $id_harga,
            ]);

            $this->session->set_flashdata('ehar', '<div class="alert alert-success text-center" role="alert"> Data telah diedit!</div>');
            redirect('Harga');
        }
    }

}
