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
		print_r('kelola obat');
	}

}
