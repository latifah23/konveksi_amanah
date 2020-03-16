<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_produk extends CI_Model
{
	public $_table = "produk";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	public function tambahDataProduk()
	{
		$post = $this->input->post();
		$data = array(
			"nama_produk" => $post['nama_produk'],
		);
		$this->db->insert('produk', $data); 
	}


	function hapus_produk($id_produk)
	{
		//produces:
		//WHERE id_nomor008 = $id
		$this->db->where('id_produk', $id_produk);
		//DELETE FORM mytable
		$this->db->delete("produk");
	}

	public function getByid($id_produk)
	{
		return $this->db->get_where('produk', ['id_produk' => $id_produk])->row_array();
	}


	public function update_produk()
	{
		$post = $this->input->post();
		$data = array(
			"nama_produk"   => $post['nama_produk'],
		);
		$this->db->where('id_produk', $this->input->post('id_produk'));
		$this->db->update('produk', $data);
	}
}
