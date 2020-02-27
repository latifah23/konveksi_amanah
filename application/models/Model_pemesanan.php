<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_pemesanan extends CI_Model
{
	public $_table = "pemesanan";

	public function getAll()
	{
		$pemesananQuery = "SELECT `pemesanan` .*, 
		`customer`.`nama` as nama_customer, 
		`pegawai`.`nama` as nama_pegawai,
		`produk`.`nama` as nama_produk
		FROM `pemesanan` 
		JOIN `customer` ON `pemesanan`.`id_customer` = `customer`. `id_customer`
		JOIN `pegawai`  ON `pemesanan`.`id_pegawai` = `pegawai`. `id_pegawai`
		JOIN	`produk` ON `pemesanan`.`id_produk` = `produk`. `id_produk`
		ORDER BY `pemesanan`.`id` DESC";
		return $this->db->query($pemesananQuery)->result_array();
	}

	public function riwayat()
	{
		$riwayatQuery = "SELECT `pemesanan` .*, 
		`customer`.`nama` as nama_customer, 
		`pegawai`.`nama` as nama_pegawai,
		`produk`.`nama` as nama_produk
		FROM `pemesanan` 
		JOIN `customer` ON `pemesanan`.`id_customer` = `customer`. `id_customer`
		JOIN `pegawai`  ON `pemesanan`.`id_pegawai` = `pegawai`. `id_pegawai`
		JOIN	`produk` ON `pemesanan`.`id_produk` = `produk`. `id_produk`
		WHERE `pemesanan`.`status` = '1'
		ORDER BY `pemesanan`.`id` DESC
		";
		return $this->db->query($riwayatQuery)->result_array();
	}
	public function cekkodeorder()
	{
		//keterangan 
		//tbl_users di ganti sesuai dengan nama tabel customer di database

		$this->db->select('RIGHT(pemesanan.kode_order,2) as kode_order', FALSE);
		$this->db->order_by('kode_order', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('pemesanan');  //cek dulu apakah ada sudah ada kode di tabel.    
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

	public function tambahDataPemesanan()
	{
		$post = $this->input->post();
		$data = array(
			"id_pegawai" 			=> $post["id_pegawai"],
			"id_customer" 			=> $post["id_customer"],
			"durasi_pemesanan" 		=> $post["durasi_pemesanan"],
			"kode_order" 			=> $post["kode_order"],
			"status" 				=> $post["status"],
			"id_produk" 			=> $post["id_produk"],
			"jenis_kain" 			=> $post["jenis_kain"],
			"warna" 				=> $post["warna"],
			"jenis_sablon"			=> $post["jenis_sablon"],
			"keterangan" 			=> $post["keterangan"]
		);
		$this->db->insert('pemesanan', $data);
		$pemesanan_id = $this->db->insert_id();
		$ukuran = array(
			'pemesanan_id' => $pemesanan_id,
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


	public function hapus_pemesanan($id)
	{
		//produces:
		//WHERE id_nomor008 = $id
		$this->db->where('id', $id);
		//DELETE FORM mytable
		$this->db->delete("pemesanan");
	}

	public function getByid($id)
	{
		return $this->db->get_where('pemesanan', ['id' => $id])->row_array();
	}
	public function getBykode($kode)
	{
		return $this->db->get_where('pemesanan', ['kode_order' => $kode])->row_array();
	}

	public function update_pemesanan()
	{
		$post = $this->input->post();
		$data = array(
			"id_pegawai" 			=> $post["id_pegawai"],
			"id_customer" 			=> $post["id_customer"],
			"durasi_pemesanan" 		=> $post["durasi_pemesanan"],
			"kode_order" 			=> $post["kode_order"],
			// "status" 				=> $post["status"],
			// "produk_id" 			=> $post["produk_id"],
			"jenis_kain" 			=> $post["jenis_kain"],
			"warna" 				=> $post["warna"],
			"jumlah_pemesanan" 		=> $post["jumlah_pemesanan"],
			// "jenis_sablon"			=> $post["jenis_sablon"],
			"keterangan" 			=> $post["keterangan"]
		);
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('pemesanan', $data);
	}
}
