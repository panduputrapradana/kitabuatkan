<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('Admin/M_user', 'Muser');

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
		$data['judul']   = "Halaman User";
		$data['title']   = "Halaman User";
		$data['content'] = 'admin/user/user';
		$data['user']    = $this->Muser->user();
		$this->load->view('admin/body/index', $data);
	}

	public function tambah()
    {
        $this->load->library('form_validation', 'upload');

        $this->form_validation->set_rules('id_user', 'Id_User', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('username', 'Username', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('nama_user', 'Nama_User', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('level', 'Level', 'trim|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == false) {
        	$data['navbar']  = 'admin/navbar/navbar';
        	$data['script']  = 'admin/script/script';
        	$data['footer']  = 'admin/footer/footer';
        	$data['header']  = 'admin/header/header';
        	$data['sidebar'] = 'admin/sidebar/sidebar';
        	$data['judul']   = "Halaman User";
        	$data['title']   = "Halaman User";
        	$data['content'] = 'admin/user/user';
        	$data['user']    = $this->Muser->user();
        	$this->load->view('admin/body/index', $data);
        } else {

			$id_user   = $this->input->post('id_user');
			$username  = $this->input->post('username');
			$nama_user = $this->input->post('nama_user');
			$password  = md5($this->input->post('password'));
			$level     = $this->input->post('level');

            

            $user = array(
				'id_user'   => $id_user,
				'username'  => $username,
				'nama_user' => $nama_user,
				'password'  => $password,
				'level'     => $level

            );
            $this->db->insert('user', $user);

            $this->session->set_flashdata('usr', '<div class="alert alert-success text-center" role="alert"> Data telah ditambahkan!</div>');
            redirect('User');
        }
    }

    public function edit($id_user)
    {
        $this->Muser->edit($id_user);

        $this->load->library('form_validation', 'upload');

        $this->form_validation->set_rules('id_user', 'Id_User', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('username', 'Username', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('nama_user', 'Nama_User', 'trim|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('level', 'Level', 'trim|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == false) {
            $data['navbar']  = 'admin/navbar/navbar';
        	$data['script']  = 'admin/script/script';
        	$data['footer']  = 'admin/footer/footer';
        	$data['header']  = 'admin/header/header';
        	$data['sidebar'] = 'admin/sidebar/sidebar';
        	$data['judul']   = "Halaman User";
        	$data['title']   = "Halaman User";
        	$data['content'] = 'admin/user/user';
        	$data['user']    = $this->Muser->user();
        	$this->load->view('admin/body/index', $data);
        } else {

            $id_user   = $this->input->post('id_user');
			$username  = $this->input->post('username');
			$nama_user = $this->input->post('nama_user');
			$level     = $this->input->post('level');

            

            $user = array(
                'username'  => $username,
				'nama_user' => $nama_user,
				'level'     => $level

            );
            $this->db->update('user', $user, [
                'id_user'   => $id_user,
            ]);

            $this->session->set_flashdata('eusr', '<div class="alert alert-success text-center" role="alert"> Data telah diedit!</div>');
            redirect('User');
        }
    }

    public function hapus($id_user)
    {

        if ($this->Muser->hapus($id_user)){
            $this->session->set_flashdata('husr', '<div class="text-center alert alert-success text-center" role="alert"> Data telah dihapus! </div>');
            redirect('User');
        }else{
            $this->session->set_flashdata('ghusr', '<div class="text-center alert alert-danger text-center" role="alert"> Data gagal dihapus! </div>');
        redirect('User');
        }
    }

}
