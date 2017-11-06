<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
	 {
			parent::__construct();
		 		$this->load->model(array('m_obat'));
	 }
	public function index()
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'latihan autofill',
			'konten' => 'latihan',
		);
		$this->load->view('template_admin', $data);
	}

	public function autofill()
	{
		//$this->input->get($cari);
		//$cari = $_GET['kode_obat'];
		$cari = $this->input->get('cari_obat');
		$query = $this->db->query('SELECT *FROM tb_obat WHERE nama_obat = "'.$cari.'"');
		$output = $query->result();
		foreach ($output as $key) {
			$id_obat = $key->id_obat;
			$nama_obat = $key->nama_obat;
		}

		$data = array(
			'id_obat' => $id_obat,
			'nama_obat' => $nama_obat
		);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

}
