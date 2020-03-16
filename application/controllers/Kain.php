<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kain extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_kain");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['kain'] = $this->model_kain->getAll();
		$this->load->view('layouts/header');
		$this->load->view('master/kain', $data);
		$this->load->view('layouts/footer');
	}
	public function tambah_kain()
	{

		$this->form_validation->set_rules('nama_kain', 'Nama_Kain', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_kain->tambahDataKain();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('kain');
		}
	}
	public function edit_kain($id)
	{
		$data['kain'] = $this->model_kain->getByid($id);
		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts/header");
			$this->load->view('master/kain/edit_kain', $data);
			$this->load->view("layouts/footer");
		}
	}

	public function update_kain()
	{
		$this->form_validation->set_rules('nama_kain', 'Nama_Kain', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		if ($this->form_validation->run() ==  FALSE) {
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$this->model_kain->update_kain();
			$this->session->set_flashdata('flash', 'Diupdate');
			redirect('kain');
		}
	}

	function hapus_kain($id_kain)
	{
		$this->model_kain->hapus_kain($id_kain);
		$this->session->set_flashdata('flash', 'DiHapus');
		redirect('kain');
	}
}
