<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('Admin/M_testimonials', 'Mtestimonials');

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
		$data['navbar']       = 'admin/navbar/navbar';
		$data['script']       = 'admin/script/script';
		$data['footer']       = 'admin/footer/footer';
		$data['header']       = 'admin/header/header';
		$data['sidebar']      = 'admin/sidebar/sidebar';
		$data['judul']        = "Halaman Testimonials";
		$data['title']        = "Halaman Testimonials";
		$data['content']      = 'admin/testimonials/testimonials';
		$data['testimonials'] = $this->Mtestimonials->select();
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
			$this->session->set_flashdata('gtestimonials', '<div class="alert alert-danger text-center" role="alert"> Data gagal ditambahkan!</div>');
            redirect('Testimonials');
		}
		else
		{
			$foto_testi      = $this->upload->data();
			$foto_testi      = $foto_testi['file_name'];
			$id_testi        = $this->input->post('id_testi');
			$nama_testi      = $this->input->post('nama_testi');
			$profesi         = $this->input->post('profesi');
			$deskripsi_testi = $this->input->post('deskripsi_testi');

			$testimonials = array(
				'id_testi'        => $id_testi,
				'nama_testi'      => $nama_testi,
				'foto_testi'      => $foto_testi,
				'profesi'         => $profesi,
				'deskripsi_testi' => $deskripsi_testi,
			);
			$this->db->insert('testimonial', $testimonials);

			$this->session->set_flashdata('testimonials', '<div class="alert alert-success text-center" role="alert"> Data telah ditambahkan!</div>');
            redirect('Testimonials');
		}
	}

	public function edit($id_testi)
	{
		$id_testi = $this->input->post('id_testi');
		$config['upload_path']          = './assets/images/';
		$config['allowed_types']        = 'gif|jpg|png|svg|PNG|jpeg';
		$config['max_size']             = 10240;
		$config['max_width']            = 10240;
		$config['max_height']           = 10240;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$id_testi        = $this->input->post('id_testi');
			$nama_testi      = $this->input->post('nama_testi');
			$profesi         = $this->input->post('profesi');
			$deskripsi_testi = $this->input->post('deskripsi_testi');

			$testimonials = array(
				'nama_testi'      => $nama_testi,
				'profesi'         => $profesi,
				'deskripsi_testi' => $deskripsi_testi,
			);
			$this->db->update('testimonial', $testimonials, [
                'id_testi'        => $id_testi,
            ]);

			$this->session->set_flashdata('etestimonials', '<div class="alert alert-success text-center" role="alert"> Data telah diedit!</div>');
            redirect('Testimonials');
		}
		else
		{
			$foto_testi      = $this->upload->data();
			$foto_testi      = $foto_testi['file_name'];
			$id_testi        = $this->input->post('id_testi');
			$nama_testi      = $this->input->post('nama_testi');
			$profesi         = $this->input->post('profesi');
			$deskripsi_testi = $this->input->post('deskripsi_testi');

			$testimonials = array(
				'nama_testi'      => $nama_testi,
				'foto_testi'      => $foto_testi,
				'profesi'         => $profesi,
				'deskripsi_testi' => $deskripsi_testi,
			);
			$this->db->update('testimonial', $testimonials, [
                'id_testi'        => $id_testi,
            ]);

			$this->session->set_flashdata('etestimonials', '<div class="alert alert-success text-center" role="alert"> Data telah diedit!</div>');
            redirect('Testimonials');
		}
	}

	public function hapus($id_testi)
    {

        if ($this->Mtestimonials->hapus($id_testi)){
            $this->session->set_flashdata('hportfolio', '<div class="text-center alert alert-success text-center" role="alert"> Data telah dihapus! </div>');
            redirect('Testimonials');
        }else{
            $this->session->set_flashdata('ghportfolio', '<div class="text-center alert alert-danger text-center" role="alert"> Data gagal dihapus! </div>');
        redirect('Testimonials');
        }
    }

}
