<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_kain extends CI_Model
{
	public $_table = "kain";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	public function tambahDatakain()
	{
		$post = $this->input->post();
		$data = array(
			"nama_kain"	=> $post['nama_kain'],
		);

		$this->db->insert('kain', $data);
	}


	function hapus_kain($id_kain)
	{
		//produces:
		//WHERE id_nomor008 = $id
		$this->db->where('id_kain', $id_kain);
		//DELETE FORM mytable
		$this->db->delete("kain");
	}

	public function getByid($id_kain)
	{
		return $this->db->get_where('kain', ['id_kain' => $id_kain])->row_array(

		);
	}


	public function update_kain()
	{
		$post = $this->input->post();
		$data = array(
			"nama_kain"	=> $post['nama_kain'],
		);
		$this->db->where('id_kain', $this->input->post('id_kain'));
		$this->db->update('kain', $data);
	}
}
