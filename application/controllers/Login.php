<?php
// session_start ();
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_login');
		$this->load->library('form_validation');
	}

	function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('login/login');
			$this->load->view('layouts/footer');
		} else {
			$this->login();
		}
	}

	function login()
	{
		// $_SESSION["login"] = true;

		$username	= $this->input->post('username', TRUE);
		$password = md5($this->input->post('password', TRUE));
		$params = array(
			'username'	=> $username,
			'password'	=> $password
		);
		$validate = $this->Model_login->validate($params);
		$count = COUNT($validate);
		if ($count > 0) {
			

			// access login for admin 
			$data   = $validate;
			// echo"<pre>";print_r($data);die;
			$username  = $data['username'];
			$role   = $data['id_role'];
			$id 	   = $data['id_customer']; 
					$sesdata = array(
						'username'     		=> $username,
						'password'     		=> $password,
						'id_role'   			=> $role,
						'id_customer'   		=> $id,
						'nama'				=> $data['nama']

					);
					// echo"<pre>";print_r($sesdata);die;
					$this->session->set_userdata($sesdata);
					if ($role == 1) {
						redirect('home');

						// access login for user
					} elseif ($role == 2) {
						redirect('Pesanan_Customer/tambah_pesanan');
					}
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger " role="alert">
			Cek Kembali username dan Password
		</div>');
			redirect('login');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
