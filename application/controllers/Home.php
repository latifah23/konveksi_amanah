<?php

// session_start();

// if(!isset($_SESSION["login"]) ){
// 	header("Location: login.php");
// 	exit;
// }

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_home');
	}
	public function index()
	{
		$data['total_proses'] = $this->model_home->get_total_proses();
		$data['total_selesai'] = $this->model_home->get_total_selesai();
		$data['total_tshirt'] = $this->model_home->get_total_tshirt();
		$data['total_celana'] = $this->model_home->get_total_celana();
		$data['total_jaket'] = $this->model_home->get_total_jaket();
		$data['total_topi'] = $this->model_home->get_total_topi();
		// echo "<pre>"; print_r($data['total_proses']);die;
		$this->load->view('layouts/header');
		$this->load->view('home', $data);
		$this->load->view('layouts/footer');
	}
	
}
