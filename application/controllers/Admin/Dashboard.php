<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('Admin/M_dashboard', 'Mdashboard');

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
		$data['navbar']      = 'admin/navbar/navbar';
		$data['script']      = 'admin/script/script';
		$data['footer']      = 'admin/footer/footer';
		$data['header']      = 'admin/header/header';
		$data['sidebar']     = 'admin/sidebar/sidebar';
		$data['judul']       = "Dashboard";
		$data['title']       = "Dashboard";
		$data['content']     = 'admin/dashboard/dashboard';
		$data['user']        = $this->Mdashboard->user();
		$data['portfolio']   = $this->Mdashboard->portfolio();
		$data['clients']     = $this->Mdashboard->clients();
		$data['form']        = $this->Mdashboard->form();
		$data['testimonial'] = $this->Mdashboard->testimonial();
		$this->load->view('admin/body/index', $data);
	}

}
