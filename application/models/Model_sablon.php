<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_sablon extends CI_Model
{
	public $_table = "sablon";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	public function tambahDatasablon()
	{
		$post = $this->input->post();
		$data = array(
			"nama_sablon"  => $post['nama_sablon'],
			"harga"  => $post['harga'],
		);

		$this->db->insert('sablon', $data);
	}


	function hapus_sablon($id_sablon)
	{
		//produces:
		//WHERE id_nomor008 = $id
		$this->db->where('id_sablon', $id_sablon);
		//DELETE FORM mytable
		$this->db->delete("sablon");
	}

	public function getByid($id_sablon)
	{
		return $this->db->get_where('sablon', ['id_sablon' => $id_sablon])->row_array();
	}


	public function update_sablon()
	{
		$post = $this->input->post();
		$data = array(
			"nama_sablon"  => $post['nama_sablon'],
			"harga"  => $post['harga'],
		);
		$this->db->where('id_sablon', $this->input->post('id_sablon'));
		$this->db->update('sablon', $data);
	}
}
