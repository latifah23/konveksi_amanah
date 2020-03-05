<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_pemesanan extends CI_Model
{
	public $_table = "pesan";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	public function riwayat()
	{
		
	}
	public function cekkodeorder()
	{
		//keterangan 
		//tbl_users di ganti sesuai dengan nama tabel customer di database

		$this->db->select('RIGHT(pesan.kode_order,2) as kode_order', FALSE);
		$this->db->order_by('kode_order', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('pesan');  //cek dulu apakah ada sudah ada kode di tabel.    
		if ($query->num_rows() <> 0) {
			//cek kode jika telah tersedia    
			$data = $query->row();
			$kode = intval($data->kode_order) + 1;
		} else {
			$kode = 1;  //cek jika kode belum terdapat pada table
		}
		$tgl = date('dmY');
		$batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodetampil = "" . $tgl . $batas;  //format kode
		return $kodetampil;
	}

	public function tambahDatapesan()
	{
		$post = $this->input->post();
		$data = array(
			"id_pesan" 			=> $post["id_pesan"],
			"id_customer" 			=> $post["id_customer"],
			"kode_order" 			=> $post["kode_order"],
			"tanggal_pesan" 		=> $post["tanggal_pesan"],
			"tanggal_ambil" 		=> $post["tanggal_ambil"],
			"id_produk" 			=> $post["id_produk"],
			
		);
		$this->db->insert('pesan', $data);
		$pesan_id = $this->db->insert_id();
		$ukuran = array(
			'pesan_id' => $pesan_id,
			"xs_pendek" => $post["xs_pendek"],
			"xs_panjang" => $post["xs_panjang"],
			"s_pendek" => $post["s_pendek"],
			"s_panjang" => $post["s_panjang"],
			"l_pendek" => $post["l_pendek"],
			"l_panjang" => $post["l_panjang"],
			"xxxl_pendek" => $post["xxxl_pendek"],
			"xxxl_panjang" => $post["xxxl_panjang"],
			"xxl_pendek" => $post["xxl_pendek"],
			"xxl_panjang" => $post["xxl_panjang"],
			"xl_pendek" => $post["xl_pendek"],
			"xl_panjang" => $post["xl_panjang"],
			"m_pendek" => $post["m_pendek"],
			"m_panjang" => $post["m_panjang"],
			"jumbo_pendek" => $post["jumbo_pendek"],
			"jumbo_panjang" => $post["jumbo_panjang"],

		);
		$this->db->insert('ukuran', $ukuran);
		return $insert_id = $this->db->insert_id();
	}


	public function hapus_pesan($id)
	{
		//produces:
		//WHERE id_nomor008 = $id
		$this->db->where('id', $id);
		//DELETE FORM mytable
		$this->db->delete("pesan");
	}

	public function getByid($id)
	{
		return $this->db->get_where('pesan', ['id' => $id])->row_array();
	}
	public function getBykode($kode)
	{
		return $this->db->get_where('pesan', ['kode_order' => $kode])->row_array();
	}

	public function update_pesan()
	{
		$post = $this->input->post();
		$data = array(
			"id_pegawai" 			=> $post["id_pegawai"],
			"id_customer" 			=> $post["id_customer"],
			"durasi_pesan" 		=> $post["durasi_pesan"],
			"kode_order" 			=> $post["kode_order"],
			// "status" 				=> $post["status"],
			// "produk_id" 			=> $post["produk_id"],
			"jenis_kain" 			=> $post["jenis_kain"],
			"warna" 				=> $post["warna"],
			"jumlah_pesan" 		=> $post["jumlah_pesan"],
			// "jenis_sablon"			=> $post["jenis_sablon"],
			"keterangan" 			=> $post["keterangan"]
		);
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('pesan', $data);
	}
}
