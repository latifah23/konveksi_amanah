<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_produk");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['produk'] = $this->model_produk->getAll();
		$this->load->view('layouts/header');
		$this->load->view('master/produk', $data);
		$this->load->view('layouts/footer');
	}
	public function tambah_produk()
	{

		$this->form_validation->set_rules('nama_produk', 'Nama_Produk', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_produk->tambahDataProduk();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('produk');
		}
	}
	public function edit_produk($id)
	{
		$data['produk'] = $this->model_produk->getByid($id);
		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts/header");
			$this->load->view('master/produk/edit_produk', $data);
			$this->load->view("layouts/footer");
		}
	}

	public function update_produk()
	{
		$this->form_validation->set_rules('nama_produk', 'Nama_Produk', 'required');
		if ($this->form_validation->run() ==  FALSE) {
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$this->model_produk->update_produk();
			$this->session->set_flashdata('flash', 'Diupdate');
			redirect('produk');
		}
	}

	function hapus_produk($id_produk)
	{
		$this->model_produk->hapus_produk($id_produk);
		$this->session->set_flashdata('flash', 'DiHapus');
		redirect('produk');
	}
}
