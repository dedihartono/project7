<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Obat extends REST_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model(['m_obat']);
  }

  public function index_get()
  {
    $id = $this->get('obat_id');
     if ($id == '') {
         $obat = $this->m_obat->read_data();
     } else {
         $this->db->where('obat_id', $id);
         $obat = $this->db->get('m_obat')->result_array();
     }
     if ($obat) {
       $this->response($obat, 200);
     } else {
       $this->response(['Tidak Ada Data Obat Tersedia'], 404);
     }
  }

  public function index_post()
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
    ];
    $status = $this->m_obat->create_data($data);
       if ($status == TRUE) {
           $this->response([
             'status' => TRUE,
             'data'  => $data,
             'message' => 'Data Berhasil ditambah!',
           ],
           REST_Controller::HTTP_CREATED);
       } else {
           $this->response(['status' => FALSE, 'message' => 'Data Gagal ditambah!', 502]);
       }
  }

  public function index_put()
  {
    $id = $this->put('obat_id');
    $data = [
      'obat_id'       => $this->put('obat_id'),
      'obat_nama' 		=> $this->put('obat_nama'),
      'pengertian' 		=> $this->put('pengertian'),
      'indikasi' 			=> $this->put('indikasi'),
      'kontradiksi' 	=> $this->put('kontradiksi'),
      'efek_samping' 	=> $this->put('efek_samping'),
      'penggunaan'		=> $this->put('penggunaan'),
      'perhatian'			=> $this->put('perhatian'),
      'dosis'					=> $this->put('dosis'),
      'kemasan'				=> $this->put('kemasan'),
    ];
     $this->db->where('obat_id', $id);
     $status = $this->db->update('m_obat', $data);
       if ($status) {
           $this->response([
             'status' => TRUE,
             'data'  => $data,
             'message' => 'Data Berhasil diubah!',
           ],
           REST_Controller::HTTP_CREATED);
       } else {
           $this->response(['status' => FALSE, 'message' => 'Data Gagal diubah!', 502]);
       }
  }

  public function index_delete()
  {
    $id = $this->delete('obat_id');
    $this->db->where('obat_id', $id);
    $status = $this->db->delete('m_obat');
    if ($status) {
        $this->response(array('status' => TRUE, 'message' => 'Data Berhasil dihapus'), 201);
    } else {
        $this->response(array('status' => FALSE, 'message' => 'Data Gagal dihapus', 502));
    }
  }

}
