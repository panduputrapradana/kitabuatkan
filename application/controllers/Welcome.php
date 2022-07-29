<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('M_welcome', 'Mwelcome');

    }

	public function index()
	{
		$data['basic']        = $this->Mwelcome->basic();
		$data['keunggulan']   = $this->Mwelcome->keunggulan();
		$data['kontak']       = $this->Mwelcome->kontak();
		$data['harga']        = $this->Mwelcome->harga();
		$data['beranda']      = $this->Mwelcome->beranda();
		$data['clients']      = $this->Mwelcome->clients();
		$data['portfolio']    = $this->Mwelcome->portfolio();
		$data['testimonials'] = $this->Mwelcome->testimonials();
		$this->load->view('kitabuatkan', $data);
	}

	public function form()
	{
		$this->load->library('form_validation', 'upload');

        $this->form_validation->set_rules('id_form', 'Id_Form', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('nama_form', 'Nama_Form', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('email_form', 'Email_Form', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('pesan', 'Pesan', 'trim|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == false) {
            $redirect_page = $this->input->post('redirect_page');

            redirect($redirect_page, 'refresh');
        } else {

			$id_form    = $this->input->post('id_form');
			$nama_form  = $this->input->post('nama_form');
			$email_form = $this->input->post('email_form');
			$pesan      = $this->input->post('pesan');

            

            $form = array(
				'id_form'    => $id_form,
				'nama_form'  => $nama_form,
				'email_form' => $email_form,
				'pesan'      => $pesan

            );
            $this->db->insert('form', $form);

            $this->session->set_flashdata('form', '<h1 class="font-bold">Pesan telah terkirim, Terimakasih !!!</h1>');
            redirect('#kontak');
        }
	}
}
