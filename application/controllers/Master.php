<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_master");
		$this->load->library('form_validation');
	}
	public function produk()
	{
		// $data['master'] = $this->model_customer->getAll();
		$this->load->view('layouts/header');
		$this->load->view('master/produk');
		$this->load->view('layouts/footer');
     }
     public function kain()
	{
		// $data['master'] = $this->model_customer->getAll();
		$this->load->view('layouts/header');
		$this->load->view('master/kain');
		$this->load->view('layouts/footer');
     }
     public function sablon()
	{
		// $data['master'] = $this->model_customer->getAll();
		$this->load->view('layouts/header');
		$this->load->view('master/sablon');
		$this->load->view('layouts/footer');
	}
}
