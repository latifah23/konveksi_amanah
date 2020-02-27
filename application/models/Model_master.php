<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_master extends CI_Model
{
	public $_table = "master";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}
}
