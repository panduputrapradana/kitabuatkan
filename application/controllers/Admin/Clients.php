<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('Admin/M_clients', 'Mclients');

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
		$data['judul']   = "Halaman Clients";
		$data['title']   = "Halaman Clients";
		$data['content'] = 'admin/clients/clients';
		$data['clients'] = $this->Mclients->select();
		$this->load->view('admin/body/index', $data);
	}

	public function tambah()
	{
		$config['upload_path']          = './assets/images/';
		$config['allowed_types']        = 'gif|jpg|png|svg|PNG|jpeg';
		$config['max_size']             = 10240;
		$config['max_width']            = 10240;
		$config['max_height']           = 10240;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$this->session->set_flashdata('gclients', '<div class="alert alert-danger text-center" role="alert"> Data gagal ditambahkan!</div>');
            redirect('Clients');
		}
		else
		{
			$logo_clients = $this->upload->data();
			$logo_clients = $logo_clients['file_name'];
			$id_clients   = $this->input->post('id_clients');

			$clients = array(
				'id_clients'   => $id_clients,
				'logo_clients' => $logo_clients
			);
			$this->db->insert('clients', $clients);

			$this->session->set_flashdata('clients', '<div class="alert alert-success text-center" role="alert"> Data telah ditambahkan!</div>');
            redirect('Clients');
		}
	}

	public function edit($id_clients)
	{
		$id_clients = $this->input->post('id_clients');
		$config['upload_path']          = './assets/images/';
		$config['allowed_types']        = 'gif|jpg|png|svg|PNG|jpeg';
		$config['max_size']             = 10240;
		$config['max_width']            = 10240;
		$config['max_height']           = 10240;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$this->session->set_flashdata('gclients', '<div class="alert alert-danger text-center" role="alert"> Data gagal ditambahkan!</div>');
            redirect('Clients');
		}
		else
		{
			$logo_clients = $this->upload->data();
			$logo_clients = $logo_clients['file_name'];
			$id_clients   = $this->input->post('id_clients');

			$clients = array(
				'logo_clients' => $logo_clients
			);
			$this->db->update('clients', $clients, [
                'id_clients'   => $id_clients,
            ]);

			$this->session->set_flashdata('eclients', '<div class="alert alert-success text-center" role="alert"> Data telah diedit!</div>');
            redirect('Clients');
		}
	}

	public function hapus($id_clients)
    {

        if ($this->Mclients->hapus($id_clients)){
            $this->session->set_flashdata('hclients', '<div class="text-center alert alert-success text-center" role="alert"> Data telah dihapus! </div>');
            redirect('Clients');
        }else{
            $this->session->set_flashdata('ghclients', '<div class="text-center alert alert-danger text-center" role="alert"> Data gagal dihapus! </div>');
        redirect('Clients');
        }
    }

}
