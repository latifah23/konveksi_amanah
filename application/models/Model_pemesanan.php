<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_pemesanan extends CI_Model
{
	public $_table = "pesan";

	public function getAll()
	{
		return $this->db->get($this->_table)->result_array();
	}

	public function get_all_proses(){
		$sql = "SELECT pesan.*,produk.nama_produk as produk,customer.nama, kain.nama_kain as kain, sablon.nama_sablon as sablon FROM pesan 
		JOIN produk ON produk.id_produk = pesan.id_produk
		JOIN kain ON kain.id_kain = pesan.id_kain
		JOIN sablon ON sablon.id_sablon = pesan.id_sablon
		JOIN customer ON customer.id_customer = pesan.id_customer
		WHERE pesan.status = 'proses'";

		//execute query
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			$result = $query->result_array();
			$query->free_result();
			return $result;
		}else{
			return array();
		}
	}

	public function get_all_proses_search($args = array()){
		$params = array();
		$sql = "SELECT pesan.*,produk.nama_produk as produk,customer.nama, kain.nama_kain as kain, sablon.nama_sablon as sablon FROM pesan 
		JOIN produk ON produk.id_produk = pesan.id_produk
		JOIN kain ON kain.id_kain = pesan.id_kain
		JOIN sablon ON sablon.id_sablon = pesan.id_sablon
		JOIN customer ON customer.id_customer = pesan.id_customer
		WHERE pesan.status = 'proses'";
		if (!empty($args['tahun'])) {
		    $sql .= " AND YEAR(pesan.tanggal_pesan) = ?";
		    array_push($params, $args['tahun']);
		    }
		    if (!empty($args['bulan'])) {
			$sql .= " AND MONTH(pesan.tanggal_pesan) = ?";
			array_push($params, $args['bulan']);
			}
		//execute query
		$query = $this->db->query($sql,$params);
		
		if ($query->num_rows() > 0) {
		$result = $query->result_array();
		$query->free_result();
		return $result;
		}else{
		return array();
		}
	 }

	public function riwayat()
	{
<<<<<<< HEAD
		$sql = "SELECT pesan.*,produk.nama_produk as produk,customer.nama, kain.nama_kain as kain, sablon.nama_sablon as sablon FROM pesan 
		JOIN produk ON produk.id_produk = pesan.id_produk
		JOIN kain ON kain.id_kain = pesan.id_kain
		JOIN sablon ON sablon.id_sablon = pesan.id_sablon
		JOIN customer ON customer.id_customer = pesan.id_customer
		WHERE pesan.status = 'selesai'";
		//execute query
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0){
			$result = $query->result_array();
			$query->free_result();
			return $result;
		}else{
			return array();
		}
=======
>>>>>>> master
	}

	public function get_detail_by_id($kode){
		$sql = "SELECT * FROM detail_pesan WHERE id_pesan = ?";
		//execute query
		$query = $this->db->query($sql,$kode);
		if ($query->num_rows() > 0){
			$result = $query->result_array();
			$query->free_result();
			return $result;
		}else{
			return array();
		}
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
<<<<<<< HEAD
			"id_customer" 			=> $post["id_customer"],
			"kode_order" 			=> $post["kode_order"],
			"tanggal_pesan" 		=> $post["tanggal_pesan"],
			"tanggal_ambil" 		=> $post["tanggal_ambil"],
			"id_produk" 			=> $post["id_produk"],
			"id_kain" 			=> $post["id_kain"],
			"warna" 				=> $post["warna"],
			"id_sablon" 			=> $post["id_sablon"],
			"jumlah" 				=> $post["jumlah"],
			"id_ukuran" 			=> $post["id_ukuran"],
			"keterangan" 			=> $post["keterangan"],
			
=======
			"id_customer"   => $post["id_customer"],
			"kode_order"    => $post["kode_order"],
			"tanggal_pesan" => $post["tanggal_pesan"],
			"tanggal_ambil" => $post["tanggal_ambil"],
			"id_produk"     => $post["id_produk"],
>>>>>>> master
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

	public function insert($table,$params)
    {
        
        
        return $this->db->insert($table,$params);
    }

    public function update($table,$params,$where)
    {
        $this->db->set($params);
        $this->db->where($where);
        return $this->db->update($table);
    }

    public function hapus_detail_pesan($id_pesan)
	{
		//produces:
		//WHERE id_nomor008 = $id
		$this->db->where('id_pesan', $id_pesan);
		//DELETE FORM mytable
		$this->db->delete("detail_pesan");
	}

	public function hapus_pesan($id_pesan)
	{
		//produces:
		//WHERE id_nomor008 = $id
		$this->db->where('id_pesan', $id_pesan);
		//DELETE FORM mytable
		$this->db->delete("pesan");
	}

	public function getByid($id_pesan)
	{
		return $this->db->get_where('pesan', ['id_pesan' => $id_pesan])->row_array();
	}

	public function getBykode($kode)
	{
		return $this->db->get_where('pesan', ['id_pesan' => $kode])->row_array();
	}

	public function update_pesan()
	{
		$post = $this->input->post();
		$data = array(
<<<<<<< HEAD
			"id_customer" 			=> $post["id_customer"],
			"kode_order" 			=> $post["kode_order"],
			"tanggal_pesan" 		=> $post["tanggal_pesan"],
			"tanggal_ambil" 		=> $post["tanggal_ambil"],
			"id_produk" 			=> $post["id_produk"],
			"keterangan" 			=> $post["keterangan"]
=======
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
>>>>>>> master
		);
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('pesan', $data);
	}

	public function getpesan_by_id($id_pesan){
		$sql = "SELECT pesan.*,produk.nama_produk as produk, kain.nama_kain as kain, sablon.nama_sablon as sablon, customer.nama as nama_customer FROM pesan 
		JOIN produk ON produk.id_produk = pesan.id_produk
		JOIN kain ON kain.id_kain = pesan.id_kain
		JOIN sablon ON sablon.id_sablon = pesan.id_sablon 
		JOIN customer ON customer.id_customer = pesan.id_customer
		WHERE id_pesan = ?";
		//execute query
		$query = $this->db->query($sql,$id_pesan);
		if ($query->num_rows() > 0){
			$result = $query->row_array();
			$query->free_result();
			return $result;
		}else{
			return array();
		}
	}
}
