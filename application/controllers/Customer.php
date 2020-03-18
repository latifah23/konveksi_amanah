<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_customer");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['customer'] = $this->model_customer->getAll();
		$this->load->view('layouts/header');
		$this->load->view('customer/index', $data);
		$this->load->view('layouts/footer');
	}
	public function tambah_customer()
	{

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('jekel', 'Jekel', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('notelp', 'Notelp', 'required');
		$this->form_validation->set_rules('nowa', 'Nowa', 'required');
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
		$this->form_validation->set_rules('kota', 'Kota', 'required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
		$this->form_validation->set_rules('kodepos', 'Kodepos', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if ($this->form_validation->run() ==  FALSE) {
			$this->index();
		} else {
			$this->model_customer->tambahDatacustomer();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('customer');
		}
	}
	public function edit_customer($id)
	{
		$data['customer'] = $this->model_customer->getByid($id);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('jekel', 'Jekel', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('notelp', 'Notelp', 'required');
		$this->form_validation->set_rules('nowa', 'Nowa', 'required');
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
		$this->form_validation->set_rules('kota', 'Kota', 'required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
		$this->form_validation->set_rules('kodepos', 'Kodepos', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		
		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts/header");
			$this->load->view('customer/edit_customer', $data);
			$this->load->view("layouts/footer");
		} else {
			$this->model_customer->update_customer();
			$this->session->set_flashdata('flash', 'Diupdate');
			redirect('customer');
		}
	}

	function hapus_customer($id_customer)
	{
		$this->model_customer->hapus_customer($id_customer);
		$this->session->set_flashdata('flash', 'DiHapus');
		redirect('customer');
	}
	public function tampil_customer($id_customer)
	{
		$data['customer'] = $this->model_customer->getByid($id_customer);
		if ($this->form_validation->run() ==  FALSE) {
			$this->load->view("layouts/header");
			$this->load->view('customer/tampil_customer', $data);
			$this->load->view("layouts/footer");
		}
	}
}
