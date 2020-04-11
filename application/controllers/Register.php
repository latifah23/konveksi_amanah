<?php
class Register extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_login');
		$this->load->library('form_validation');
	}

	function index() 
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
		if ($this->form_validation->run() == false) {
			$this->load->view('register/register');
			$this->load->view('layouts/footer');
		} else {
			$data = array(
				"nama" 	     => $post['nama'],
				'username' 	=> $post["username"],
				'password'	=> md5($post["password"]),
				'jekel'		=>$post	['jekel'],
				'email'		=>$post	['email'],
				'notelp'		=>$post	['notelp'],
				'nowa'		=>$post	['nowa'],
				'provinsi'	=>$post	['provinsi'],
				'kota'		=>$post	['kota'],
				'kecamatan'	=>$post	['kecamatan'],
				'kodepos'		=>$post	['kodepos'],
				'alamat'		=>$post	['alamat'],
				// 'role_id'	      => 2,
				// 'is_active'     => 1,
			);
			// echo"<pre>";print_r($data);die;
			$this->model_login->register($data);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('login');
		}
	}
}
