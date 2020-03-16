<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_customer extends CI_Model
{
	public $_table = "customer";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	public function tambahDatacustomer()
	{
		$post = $this->input->post();
		$data = array(
			"nama"         => $post['nama'],
			"username"     => $post['username'],
			"password"     => $post['password'],
			"jekel"    	=> $post['jekel'],
			'email'		=> $post["email"],
			'notelp'		=> $post["notelp"],
			'nowa'		=> $post["nowa"],
			'provinsi'	=> $post["provinsi"],
			'kota'		=> $post["kota"],
			'kecamatan'	=> $post["kecamatan"],
			'kodepos'		=> $post["kodepos"],
			'alamat'       => $post["alamat"],
			
		);

		$this->db->insert('customer', $data);
	}


	function hapus_customer($id_customer)
	{
		//produces:
		//WHERE id_nomor008 = $id
		$this->db->where('id_customer', $id_customer);
		//DELETE FORM mytable
		$this->db->delete("customer");
	}

	public function getByid($id_customer)
	{
		return $this->db->get_where('customer', ['id_customer' => $id_customer])->row_array();
	}


	public function update_customer()
	{
		$post = $this->input->post();
		$data = array(
			"nama"         => $post['nama'],
			"username"     => $post['username'],
			"password"     => $post['password'],
			"jekel"    	=> $post['jekel'],
			'email'		=> $post["email"],
			'notelp'		=> $post["notelp"],
			'nowa'		=> $post["nowa"],
			'provinsi'	=> $post["provinsi"],
			'kota'		=> $post["kota"],
			'kecamatan'	=> $post["kecamatan"],
			'kodepos'		=> $post["kodepos"],
			'alamat'       => $post["alamat"],
		);
		$this->db->where('id_customer', $this->input->post('id_customer'));
		$this->db->update('customer', $data);
	}
}
