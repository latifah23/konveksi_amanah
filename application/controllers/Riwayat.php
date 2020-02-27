<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->model('model_produk');
		$this->load->model("model_customer");
		$this->load->model("model_pemesanan");
		$this->load->library('form_validation');
	}
	public function index()
	{

		$data['pemesanan'] = $this->model_pemesanan->riwayat();
		// response_json($data);
		$this->load->view('layouts/header');
		$this->load->view('riwayat/index', $data);
		$this->load->view('layouts/footer');
	}
}
