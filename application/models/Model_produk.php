<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_produk extends CI_Model
{
	public $_table = "produk";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}
}
