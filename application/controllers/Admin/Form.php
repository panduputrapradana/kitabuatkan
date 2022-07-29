<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('Admin/M_form', 'Mform');

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
		$data['judul']   = "Halaman Form";
		$data['title']   = "Halaman Form";
		$data['content'] = 'admin/form/form';
		$data['form']    = $this->Mform->select();
		$this->load->view('admin/body/index', $data);
	}

	public function hapus($id_form)
    {

        if ($this->Mform->hapus($id_form)){
            $this->session->set_flashdata('hform', '<div class="text-center alert alert-success text-center" role="alert"> Data telah dihapus! </div>');
            redirect('Form');
        }else{
            $this->session->set_flashdata('ghform', '<div class="text-center alert alert-danger text-center" role="alert"> Data gagal dihapus! </div>');
        redirect('Form');
        }
    }

}
