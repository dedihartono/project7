<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_obat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//load model and add alias
		//check session logged_in
			$this->load->model(['m_obat', 'm_login']);
			$this->m_login->check_session();
	}

	public function index()
	{
		$data = [
			'title' 				=> 'Kelola Obat',
			'titlebox' 			=> 'Data Obat',
			'breadcrumb01' 	=> 'Kelola Obat',
			'breadcrumb02' 	=> 	anchor('obat', 'Tampil Obat'),
			'konten'				=> 'obat/v_tampil',
			'obat'					=> $this->m_obat->read_data(),
		];

		$this->load->view('template_admin', $data);
	}

	public function tambah_obat()
	{
		$data = [
			'title' 				=> 'Tambah Obat',
			'titlebox' 			=> 'Tambah Data Obat',
			'breadcrumb01' 	=> 'Kelola Obat',
			'breadcrumb02' 	=> 	anchor('kelola_obat/tambah_obat', 'Tambah Obat'),
			'konten'		=> 'obat/v_tambah',
		];
		$this->load->view('template_admin', $data);
	}

	public function tambah_save()
	{
		$data = [
			'obat_nama' 		=> $this->input->post('obat_nama'),
			'pengertian' 		=> $this->input->post('pengertian'),
			'indikasi' 			=> $this->input->post('indikasi'),
			'kontradiksi' 	=> $this->input->post('kontradiksi'),
			'efek_samping' 	=> $this->input->post('efek_samping'),
			'penggunaan'		=> $this->input->post('penggunaan'),
			'perhatian'			=> $this->input->post('perhatian'),
			'dosis'					=> $this->input->post('dosis'),
			'kemasan'				=> $this->input->post('kemasan'),
			'komposisi'			=> $this->input->post('komposisi'),
		];
		$this->m_obat->create_data($data);
		$alert	= "<script>alert('Data Berhasil Disimpan!')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('Kelola_obat');
	}

	public function detail_obat($id)
	{
		$id = $this->uri->segment('3');
		$data = [
			'title' 				=> 'Detail Obat',
			'titlebox' 			=> 'Detail Obat',
			'breadcrumb01' 	=> 'Kelola Obat',
			'breadcrumb02' 	=> 	anchor('kelola_obat/detail_obat/'.$id, 'Detail Obat'),
			'obat' => $this->m_obat->show($id),
			'konten' => 'obat/v_detail_obat',
		];

		$this->load->view('template_admin', $data);
	}

	public function edit_obat($id)
	{
		$id = $this->uri->segment('3');
		$data = [
			'title' 				=> 'Edit Obat',
			'titlebox' 			=> 'Edit Data Obat',
			'breadcrumb01' 	=> 'Kelola Obat',
			'breadcrumb02' 	=> 	anchor('kelola_obat/edit_obat/'.$id, 'Edit Obat'),
			'obat' => $this->m_obat->show($id),
			'konten' => 'obat/v_edit',
		];

		$this->load->view('template_admin', $data);
	}

	public function edit_save()
	{
		$data = [
			'obat_nama' 		=> $this->input->post('obat_nama'),
			'pengertian' 		=> $this->input->post('pengertian'),
			'indikasi' 			=> $this->input->post('indikasi'),
			'kontradiksi' 	=> $this->input->post('kontradiksi'),
			'efek_samping' 	=> $this->input->post('efek_samping'),
			'penggunaan'		=> $this->input->post('penggunaan'),
			'perhatian'			=> $this->input->post('perhatian'),
			'dosis'					=> $this->input->post('dosis'),
			'kemasan'				=> $this->input->post('kemasan'),
			'komposisi'			=> $this->input->post('komposisi'),
		];
		$id = $this->uri->segment('3');
		$this->m_obat->update_data($id, $data);
		$alert	= "<script>alert('Data Berhasil Disimpan!')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('Kelola_obat');
	}

	public function hapus_obat($id)
	{
		$id = $this->uri->segment('3');
		$this->m_obat->delete_data($id);
		$alert	= "<script>alert('Data Berhasil Dihapus!')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('Kelola_obat');
	}

}
