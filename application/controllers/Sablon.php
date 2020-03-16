<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sablon extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_sablon");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['sablon'] = $this->model_sablon->getAll();
		$this->load->view('layouts/header');
		$this->load->view('master/sablon', $data);
		$this->load->view('layouts/footer');
	}
	public function tambah_sablon()
	{

		$this->form_validation->set_rules('nama_sablon', 'Nama_Sablon', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_sablon->tambahDataSablon();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('sablon');
		}
	}
	public function edit_sablon($id)
	{
		$data['sablon'] = $this->model_sablon->getByid($id);
		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts/header");
			$this->load->view('master/sablon/edit_sablon', $data);
			$this->load->view("layouts/footer");
		}
	}

	public function update_sablon()
	{
		$this->form_validation->set_rules('nama_sablon', 'Nama_Sablon', 'required');
		if ($this->form_validation->run() ==  FALSE) {
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$this->model_sablon->update_sablon();
			$this->session->set_flashdata('flash', 'Diupdate');
			redirect('sablon');
		}
	}

	function hapus_sablon($id_sablon)
	{
		$this->model_sablon->hapus_sablon($id_sablon);
		$this->session->set_flashdata('flash', 'DiHapus');
		redirect('sablon');
	}
}
