<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('M_login', 'MLogin');

        // Cek session yang login,
        // jika session status tidak sama dengan session telahlogin, berarti pengguna belum login
        // maka halaman akan di alihkan kembali ke halaman login.
        // if ($this->session->userdata('status') != "telah_login") {
        //     $this->session->set_flashdata('pesan', 'Anda Harus Login Terlebih Dahulu, error');
        //     redirect(base_url() . 'login?alert=belum_login');
        // }
    }

	public function index()
	{
		$this->load->view('form_login');
	}

	public function ceklogin()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run() != false){
            // menangkap data username dan password dari halaman login
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username,
				'password' => md5($password)
			);
 			// cek kesesuaian login pada table pengguna
			$cek = $this->MLogin->cek_login('user',$where)->num_rows();
 			// cek jika login benar
			if($cek > 0){
 			// ambil data pengguna yang melakukan login
				$data = $this->MLogin->cek_login('user',$where)->row();
				$role = $data->level;
				if ($role=='Admin') {
 			// buat session untuk pengguna yang berhasil login
					$data_session = array(
						'id_user'   => $data->id_user,
						'username'  => $data->username,
						'nama_user' => $data->nama_user,
						'level'     => $data->level,
						'status'    => 'telah_login'
					);
					$this->session->set_userdata($data_session);
 			// alihkan halaman ke halaman dashboard pengguna(admin)
					redirect(base_url().'admin/dashboard');
				}
			}else{
				$this->session->set_flashdata('pesan', 'Username & Password tidak sesuai, error');
				redirect(base_url().'login?alert=gagal');
			}
		}else{
			$this->load->view('login/Form_login');

		}
	}

	public function keluar()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('pesan', 'Logout berhasil, success');
        redirect('login?alert=logout');
    }
}
