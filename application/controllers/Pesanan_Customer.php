<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_Customer extends CI_Controller
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
		if (!empty($search)) {
			$data['pemesanan'] = $this->model_pemesanan->get_all_proses_search($search);
		} else {
			$data['pemesanan'] = $this->model_pemesanan->get_all_proses();
		}
		$data['search'] = $search;
		$this->load->view('layouts/header');
		$this->load->view('pesanan/index', $data);
		$this->load->view('layouts/footer');
	}

	public function tambah_pesanan()
	{   
		// print_r($this->session->userdata());die;
			$data['produk'] = $this->model_produk->getAll();
			$data['kain'] = $this->model_kain->getAll();
			$data['sablon'] = $this->model_sablon->getAll();
			$this->load->view('layouts/header_customer');
			$this->load->view('customer/tambah_pesanan', $data);
			$this->load->view('layouts/footer');
		
	}

	public function action_tambah_pesanan()
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
		
		redirect('Pesanan_Customer/update_pesanan/'.$generateId);
	}


	public function update_pesanan($id_pesan)
	{
		$data['produk'] = $this->model_produk->getAll();
		$data['kain'] = $this->model_kain->getAll();
		$data['sablon'] = $this->model_sablon->getAll();
		$data['pemesanan'] = $this->model_pemesanan->getpesan_by_id($id_pesan);
		$data['detail_pesanan'] = $this->model_pemesanan->get_detail_by_id($id_pesan);
		// echo"<pre>";print_r($data['pemesanan']);die;
		$this->load->view('layouts/header_customer');
		$this->load->view('customer/edit_pesan', $data);
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
			redirect('Pesanan_Customer/update_pesanan');
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
					'keterangan' => $this->input->post('keterangan', true)
				);
				$where = array('id_pesan' => $this->input->post('id_pesan', true));
				$this->model_pemesanan->update('pesan', $params, $where);
			}else{
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
					'keterangan' => $this->input->post('keterangan', true)
				);
				$where = array('id_pesan' => $this->input->post('id_pesan', true));
				$this->model_pemesanan->update('pesan', $params, $where);
			}



			$this->session->set_flashdata('flash', 'Diedit');
			redirect('login/logout');
		}
	}

	public function action_update_detail_pesanan()
	{
		$id_pesan = $this->input->post('id_pesan', true);
		$params_detail = array(
			'ukuran'	=> $this->input->post('ukuran', true),
			'jekel'	=> $this->input->post('jekel', true),
			'panjang'	=> $this->input->post('panjang', true),
			'enam'	=> $this->input->post('enam', true),
			'tiga'	=> $this->input->post('tiga', true),
			'pendek'	=> $this->input->post('pendek', true)
		);
		$where = array('id_detail' => $this->input->post('id_detail', true));

		$this->model_pemesanan->update('detail_pesan', $params_detail, $where);


		$this->session->set_flashdata('flash', 'Diedit');
		redirect('pesanan/update_pesanan/' . $id_pesan);
	}
}
