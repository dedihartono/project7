<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_obat extends CI_Model {

	public $table = 'm_obat'; //nama table
	public $key 	= 'obat_id';

	public function create_data($data)
	{
		$status = $this->db->insert($this->table, $data);
		return $status;
	}

	public function read_data()
	{
		return $this->db->get($this->table)->result_array();
	}

	public function show($id)
	{
		$this->db->where($this->key, $id);
		$data = $this->db->get($this->table);
		return $data->row();
	}

	public function update_data($id, $data)
	{
		$this->db->where($this->key, $id);
		$this->db->update($this->table, $data);
	}

	public function delete_data($id)
	{
		$this->db->where($this->key, $id);
		$this->db->delete($this->table);
	}

}
