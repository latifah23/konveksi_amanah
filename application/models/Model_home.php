<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_home extends CI_Model
{

	public function get_total_proses()
	{
		$sql = "SELECT COUNT(id_pesan) as jumlah FROM pesan WHERE status = 'proses'";
		//execute query
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			$result = $query->row_array();
			$query->free_result();
			return $result['jumlah'];
		} else {
			return array();
		}
	}

	public function get_total_selesai()
	{
		$sql = "SELECT COUNT(id_pesan) as jumlah FROM pesan WHERE status = 'selesai'";
		//execute query
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			$result = $query->row_array();
			$query->free_result();
			return $result['jumlah'];
		} else {
			return array();
		}
	}
	public function get_total_tshirt()
	{
		$sql = "SELECT COUNT(id_pesan) as jumlah FROM pesan WHERE id_produk = '1227'";
		//execute query
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			$result = $query->row_array();
			$query->free_result();
			return $result['jumlah'];
		} else {
			return array();
		}
	}
	public function get_total_celana()
	{
		$sql = "SELECT COUNT(id_pesan) as jumlah FROM pesan WHERE id_produk = '1231'";
		//execute query
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			$result = $query->row_array();
			$query->free_result();
			return $result['jumlah'];
		} else {
			return array();
		}
	}
	public function get_total_jaket()
	{
		$sql = "SELECT COUNT(id_pesan) as jumlah FROM pesan WHERE id_produk = '1232'";
		//execute query
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			$result = $query->row_array();
			$query->free_result();
			return $result['jumlah'];
		} else {
			return array();
		}
	}
	public function get_total_topi()
	{
		$sql = "SELECT COUNT(id_pesan) as jumlah FROM pesan WHERE id_produk = '1230'";
		//execute query
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			$result = $query->row_array();
			$query->free_result();
			return $result['jumlah'];
		} else {
			return array();
		}
	}
}
