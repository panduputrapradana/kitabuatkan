<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('Admin/M_portfolio', 'Mportfolio');

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
		$data['navbar']    = 'admin/navbar/navbar';
		$data['script']    = 'admin/script/script';
		$data['footer']    = 'admin/footer/footer';
		$data['header']    = 'admin/header/header';
		$data['sidebar']   = 'admin/sidebar/sidebar';
		$data['judul']     = "Halaman Portfolio";
		$data['title']     = "Halaman Portfolio";
		$data['content']   = 'admin/portfolio/portfolio';
		$data['portfolio'] = $this->Mportfolio->select();
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
			$this->session->set_flashdata('gportfolio', '<div class="alert alert-danger text-center" role="alert"> Data gagal ditambahkan!</div>');
            redirect('Portfolio');
		}
		else
		{
			$gambar_portfolio = $this->upload->data();
			$gambar_portfolio = $gambar_portfolio['file_name'];
			$id_portfolio     = $this->input->post('id_portfolio');
			$judul            = $this->input->post('judul');
			$waktu            = $this->input->post('waktu');

			$portfolio = array(
				'id_portfolio'     => $id_portfolio,
				'judul'            => $judul,
				'waktu'            => $waktu,
				'gambar_portfolio' => $gambar_portfolio
			);
			$this->db->insert('portfolio', $portfolio);

			$this->session->set_flashdata('portfolio', '<div class="alert alert-success text-center" role="alert"> Data telah ditambahkan!</div>');
            redirect('Portfolio');
		}
	}

	public function edit($id_portfolio)
	{
		$id_portfolio = $this->input->post('id_portfolio');
		$config['upload_path']          = './assets/images/';
		$config['allowed_types']        = 'gif|jpg|png|svg|PNG|jpeg';
		$config['max_size']             = 10240;
		$config['max_width']            = 10240;
		$config['max_height']           = 10240;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$id_portfolio     = $this->input->post('id_portfolio');
			$judul            = $this->input->post('judul');
			$waktu            = $this->input->post('waktu');

			$portfolio = array(
				'judul'            => $judul,
				'waktu'            => $waktu
			);
			$this->db->update('portfolio', $portfolio, [
                'id_portfolio'   => $id_portfolio,
            ]);

			$this->session->set_flashdata('eportfolio', '<div class="alert alert-success text-center" role="alert"> Data telah diedit!</div>');
            redirect('Portfolio');
		}
		else
		{
			$gambar_portfolio = $this->upload->data();
			$gambar_portfolio = $gambar_portfolio['file_name'];
			$id_portfolio     = $this->input->post('id_portfolio');
			$judul            = $this->input->post('judul');
			$waktu            = $this->input->post('waktu');

			$portfolio = array(
				'judul'            => $judul,
				'waktu'            => $waktu,
				'gambar_portfolio' => $gambar_portfolio
			);
			$this->db->update('portfolio', $portfolio, [
                'id_portfolio'   => $id_portfolio,
            ]);

			$this->session->set_flashdata('eportfolio', '<div class="alert alert-success text-center" role="alert"> Data telah diedit!</div>');
            redirect('Portfolio');
		}
	}

	public function hapus($id_portfolio)
    {

        if ($this->Mportfolio->hapus($id_portfolio)){
            $this->session->set_flashdata('hportfolio', '<div class="text-center alert alert-success text-center" role="alert"> Data telah dihapus! </div>');
            redirect('Portfolio');
        }else{
            $this->session->set_flashdata('ghportfolio', '<div class="text-center alert alert-danger text-center" role="alert"> Data gagal dihapus! </div>');
        redirect('Portfolio');
        }
    }

}
