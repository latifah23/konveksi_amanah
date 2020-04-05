<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
	const SESSION_SEARCH = 'search';
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_produk');
		$this->load->model("model_customer");
		$this->load->model("model_pemesanan");
		$this->load->model("model_produk");
		$this->load->model("model_kain");
		$this->load->model("model_sablon");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$search = $this->session->userdata(self::SESSION_SEARCH);
		// print_r($search);die;
		if (!empty($search)) {
			$data['pemesanan'] = $this->model_pemesanan->get_all_proses_search($search);
		} else {
			$data['pemesanan'] = $this->model_pemesanan->get_all_proses();
		}
		$data['search'] = $search;
		// echo"<pre>";print_r($data);die;
		$this->load->view('layouts/header');
		$this->load->view('pesanan/index', $data);
		$this->load->view('layouts/footer');
		// response_json($data);
	}

	public function tambah_pesanan()
	{
		$this->form_validation->set_rules('id_customer', 'Id_customer', 'required');
		$this->form_validation->set_rules('tanggal_pesan', 'Tanggal_Pesan', 'required');
		$this->form_validation->set_rules('tanggal_ambil', 'Tanggal_Ambil', 'required');
		$this->form_validation->set_rules('id_produk', 'Id_produk', 'required');
		$this->form_validation->set_rules('id_kain', 'Id_Kain', 'required');
		$this->form_validation->set_rules('warna', 'Warna', 'required');
		$this->form_validation->set_rules('id_sablon', 'Id_Sablon', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() == false) {
			$data['produk'] = $this->model_produk->getAll();
			$data['customer'] = $this->model_customer->getAll();
			$data['kain'] = $this->model_kain->getAll();
			$data['sablon'] = $this->model_sablon->getAll();
			$this->load->view('layouts/header');
			$this->load->view('pesanan/tambah_pesanan', $data);
			$this->load->view('layouts/footer');
		} else {
			$this->action_tambah_pesanan();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('pesanan');
		}
	}

	protected function action_tambah_pesanan()
	{

		if (!empty($_FILES['design_baju'])) {
			$config['upload_path']          = './upload/pesanan/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['file_name']            = $_FILES['design_baju']['name'];
			$config['overwrite']		  = true;

			$this->load->library('upload', $config);
			$this->upload->do_upload('design_baju');
		}

		$number = mt_rand(100, 999);
		$prefix = 'PS';
		$generateId = $prefix . $number . date('Ymd');
		$tanggal_ambil = $this->input->post('tanggal_ambil', true);
		$tanggal = substr($tanggal_ambil, 3, 2);
		$bulan = substr($tanggal_ambil, 0, 2);
		$tahun = substr($tanggal_ambil, 6, 4);
		$tanggal_ambil = $tahun . "-" . $bulan . "-" . $tanggal;

		$params = array(
			'id_pesan' => $generateId,
			'id_customer' => $this->input->post('id_customer', true),
			'status' => "proses",
			'tanggal_pesan' => $this->input->post('tanggal_pesan', true),
			'tanggal_ambil' => $tanggal_ambil,
			'id_produk' => $this->input->post('id_produk', true),
			'id_kain' => $this->input->post('id_kain', true),
			'warna' => $this->input->post('warna', true),
			'id_sablon' => $this->input->post('id_sablon', true),
			'jumlah' => $this->input->post('jumlah', true),
			'design_baju' => $_FILES['design_baju']['name'],

			'keterangan' => $this->input->post('keterangan', true)
		);

		$this->model_pemesanan->insert('pesan', $params);

		$ukur = $this->input->post('ukuran', true);
		$count = count($ukur);
		for ($i = 0; $i < $count; $i++) {
			$params_detail = array(
				'id_pesan' => $generateId,
				'ukuran'	=> $this->input->post('ukuran', true)[$i],
				'jekel'	=> $this->input->post('jekel', true)[$i],
				'panjang'	=> $this->input->post('panjang', true)[$i],
				'enam'	=> $this->input->post('enam', true)[$i],
				'tiga'	=> $this->input->post('tiga', true)[$i],
				'pendek'	=> $this->input->post('pendek', true)[$i],
			);
			$this->model_pemesanan->insert('detail_pesan', $params_detail);
		}
	}


	public function update_pesanan($id_pesan)
	{
		$data['produk'] = $this->model_produk->getAll();
		$data['kain'] = $this->model_kain->getAll();
		$data['sablon'] = $this->model_sablon->getAll();
		$data['pemesanan'] = $this->model_pemesanan->getpesan_by_id($id_pesan);
		$data['detail_pesanan'] = $this->model_pemesanan->get_detail_by_id($id_pesan);
		// echo"<pre>";print_r($data['pemesanan']);die;
		$this->load->view('layouts/header');
		$this->load->view('pesanan/edit_pesan', $data);
		$this->load->view('layouts/footer');
	}

	public function action_update_pesanan()
	{
		$this->form_validation->set_rules('id_customer', 'Id_Customer', 'required');
		$this->form_validation->set_rules('tanggal_pesan', 'Tanggal_Pesan', 'required');
		$this->form_validation->set_rules('tanggal_ambil', 'Tanggal_Ambil', 'required');
		$this->form_validation->set_rules('id_produk', 'Id_produk', 'required');
		$this->form_validation->set_rules('id_kain', 'Id_Kain', 'required');
		$this->form_validation->set_rules('warna', 'Warna', 'required');
		$this->form_validation->set_rules('id_sablon', 'Id_Sablon', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');


		if ($this->form_validation->run() == false) {
			// print_r("tidak terpenuhi");die;
			redirect('pesanan/update_pesanan');
		} else {

			if (!empty($_FILES['design_baju'])) {
				$config['upload_path']          = './upload/pesanan/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['file_name']            = $_FILES['design_baju']['name'];
				$config['overwrite']		  = true;
				$this->load->library('upload', $config);
				$this->upload->do_upload('design_baju');

				$params = array(
					'id_customer' => $this->input->post('id_customer', true),
					'status' => "proses",
					'tanggal_pesan' => $this->input->post('tanggal_pesan', true),
					'tanggal_ambil' => $this->input->post('tanggal_ambil', true),
					'id_produk' => $this->input->post('id_produk', true),
					'id_kain' => $this->input->post('id_kain', true),
					'warna' => $this->input->post('warna', true),
					'id_sablon' => $this->input->post('id_sablon', true),
					'jumlah' => $this->input->post('jumlah', true),
					'design_baju' => $_FILES['design_baju']['name'],
					// 'design_sablon' => $_FILES['design_sablon']['name'],
					'keterangan' => $this->input->post('keterangan', true)
				);
				$where = array('id_pesan' => $this->input->post('id_pesan', true));
				$this->model_pemesanan->update('pesan', $params, $where);
			}



			$this->session->set_flashdata('flash', 'Diedit');
			redirect('pesanan');
		}
	}

	public function action_update_detail_pesanan()
	{
		$id_pesan = $this->input->post('id_pesan', true);
		$params_detail = array(
			// 'id_pesan'=> $generateId,
			'ukuran'	=> $this->input->post('ukuran', true),
			'jekel'	=> $this->input->post('jekel', true),
			'panjang'	=> $this->input->post('panjang', true),
			'enam'	=> $this->input->post('enam', true),
			'tiga'	=> $this->input->post('tiga', true),
			'pendek'	=> $this->input->post('pendek', true)
		);
		// echo"<pre>";print_r($params_detail);
		$where = array('id_detail' => $this->input->post('id_detail', true));
		$this->model_pemesanan->update('detail_pesan', $params_detail, $where);

		// }

		$this->session->set_flashdata('flash', 'Diedit');
		redirect('pesanan/update_pesanan/' . $id_pesan);
		// }
	}

	function hapus_pesanan($id)
	{
		$this->model_pemesanan->hapus_detail_pesan($id);
		$this->model_pemesanan->hapus_pesan($id);
		$this->session->set_flashdata('flash', 'DiHapus');
		redirect('pesanan');
	}
	public function laporan_pdf($kode)
	{
		$data['pesanan'] = $this->model_pemesanan->getBykode($kode);
		$pesanan_id = $data['pesanan']['id_pesan'];
		$queryGetquestion = "SELECT `pesan` .*,
			`customer`.`nama` as nama_customer,`customer`.`alamat`as alamat_customer,`customer`.`notelp`as notelp_customer,`customer`.`email` as email_customer,
			`produk`.`nama_produk`,`kain`.`nama_kain`,`sablon`.`nama_sablon`
			FROM `pesan`
			JOIN `customer` ON `pesan`.`id_customer` = `customer`. `id_customer`
			JOIN `kain` ON `pesan`.`id_kain` = `kain`.`id_kain`
			JOIN	`produk` ON `pesan`.`id_produk` = `produk`. `id_produk`
			JOIN `sablon` ON `pesan`.`id_sablon` = `sablon`. `id_sablon`
			WHERE `pesan`.`id_pesan` = '" . $pesanan_id . "'
		";
		// echo"<pre>";print_r($queryGetquestion);die;
		$query = $this->db->query($queryGetquestion)->row_array();
		$detail = $this->model_pemesanan->get_detail_by_id($kode);
		$data['get_pesanan'] = $query;
		$data['detail_pesanan'] = $detail;
		// echo"<pre>";print_r($detail);die;
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-petanikode.pdf";
		$this->pdf->load_view('pesanan/laporan_pdf', $data);
	}
	public function detail_pesan($id_pesan)
	{
		$data['pesan'] = $this->model_pemesanan->getpesan_by_id($id_pesan);
		$data['detail_pesanan'] = $this->model_pemesanan->get_detail_by_id($id_pesan);
		// echo"<pre>";print_r($data['detail_pesan']);die;


		$this->load->view('layouts/header');
		$this->load->view('pesanan/detail_pesan', $data);
		$this->load->view('layouts/footer');
		// response_json($data);
	}
	public function selesai($id_pesan)
	{
		$params = array(
			'status'	=> "selesai"
		);

		$where = array(
			'id_pesan'	=> $id_pesan
		);
		// echo"<pre>";print_r($where);die;
		$this->model_pemesanan->update('pesan', $params, $where);
		redirect('pesanan');
	}

	public function action_search()
	{
		// page rule read
		$tes = $this->input->post('search', true);
		// print_r($tes);die();
		// $this->_set_page_rule("R");

		if ($this->input->post('search', true) == "tampilkan") {
			// echo "tes";
			// die();
			$params = array(
				'bulan' => $this->input->post('bulan', true),
				'tahun' => $this->input->post('tahun', true),
			);
			$this->session->set_userdata(self::SESSION_SEARCH, $params);
		} else {
			echo "gagal";
			die();
			$this->session->unset_userdata(self::SESSION_SEARCH);
		}
		redirect("pesanan/index");
	}
}
