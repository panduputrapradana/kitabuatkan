<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('Admin/M_kontak', 'Mkontak');

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
		$data['judul']   = "Halaman Kontak";
		$data['title']   = "Halaman Kontak";
		$data['content'] = 'admin/kontak/kontak';
		$data['kontak']  = $this->Mkontak->select();
		$this->load->view('admin/body/index', $data);
	}

	public function edit($id_kontak)
    {
        $this->Mkontak->edit($id_kontak);

        $this->load->library('form_validation', 'upload');

        $this->form_validation->set_rules('id_kontak', 'Id_Kontak', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('whatsapp', 'Whatsapp', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('email', 'Email', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('instagram', 'Instagram', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('facebook', 'Facebook', 'trim|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == false) {
        	$data['navbar']  = 'admin/navbar/navbar';
        	$data['script']  = 'admin/script/script';
        	$data['footer']  = 'admin/footer/footer';
        	$data['header']  = 'admin/header/header';
        	$data['sidebar'] = 'admin/sidebar/sidebar';
        	$data['judul']   = "Halaman Kontak";
        	$data['title']   = "Halaman Kontak";
        	$data['content'] = 'admin/kontak/kontak';
        	$data['kontak']  = $this->Mkontak->select();
        	$this->load->view('admin/body/index', $data);
        } else {

			$id_kontak = $this->input->post('id_kontak');
			$whatsapp  = $this->input->post('whatsapp');
			$email     = $this->input->post('email');
			$instagram = $this->input->post('instagram');
			$facebook  = $this->input->post('facebook');

            

            $kontak = array(
				'whatsapp'  => $whatsapp,
				'email'     => $email,
				'instagram' => $instagram,
				'facebook'  => $facebook

            );
            $this->db->update('kontak', $kontak, [
                'id_kontak'        => $id_kontak,
            ]);

            $this->session->set_flashdata('ekon', '<div class="alert alert-success text-center" role="alert"> Data telah diedit!</div>');
            redirect('Kontak');
        }
    }

}
