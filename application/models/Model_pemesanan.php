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
		$tgl        = date('dmY');
		$batas      = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodetampil = "" . $tgl . $batas;                    //format kode
		return $kodetampil;
	}

	public function tambahDataPesan()
	{

		$post = $this->input->post();
		$data = array(
			"id_customer"   => $post["id_customer"],
			"kode_order"    => $post["kode_order"],
			"tanggal_pesan" => $post["tanggal_pesan"],
			"tanggal_ambil" => $post["tanggal_ambil"],
			"id_produk"     => $post["id_produk"],
		);
		$this->db->insert('pesan', $data);
		$pesan_id = $this->db->insert_id();
		$ukuran   = array(
			"id_kain"    => $post["id_kain"],
			"warna"      => $post["warna"],
			"id_sablon"  => $post["id_sablon"],
			"jumlah"     => $post["jumlah"],
			"keterangan" => $post["keterangan"],
			'id_pesan'   => $pesan_id,
		);
		$this->db->insert('detail_pesan', $ukuran);
		$nm     = $this->input->post('ukuran');
		$result = array();
		foreach ($nm as $key => $val) {
			$result[] = array(
				"id_detail" => $this->db->insert_id($key),
				"ukuran"    => $post['ukuran'][$key],
				"jekel"     => $post['jekel'][$key],
				"panjang"   => $post['panjang'][$key],
				"enam"      => $post['enam'][$key],
				"tiga"      => $post['tiga'][$key],
				"pendek"    => $post['pendek'][$key]
			);
		}
		// response_json($result);
		$this->db->insert_batch('ukuran', $result);
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
			"id_pegawai"   => $post["id_pegawai"],
			"id_customer"  => $post["id_customer"],
			"durasi_pesan" => $post["durasi_pesan"],
			"kode_order"   => $post["kode_order"],
			// "status" 				=> $post["status"],
			// "produk_id" 			=> $post["produk_id"],
			"jenis_kain"   => $post["jenis_kain"],
			"warna"        => $post["warna"],
			"jumlah_pesan" => $post["jumlah_pesan"],
			// "jenis_sablon"			=> $post["jenis_sablon"],
			"keterangan" => $post["keterangan"]
		);
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('pesan', $data);
	}
}
