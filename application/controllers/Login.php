<?php
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
		// $dt = new DateTime('now');
		$username	= $this->input->post('username', TRUE);
		$password = md5($this->input->post('password', TRUE));
		$params = array(
			'username'	=> $username,
			'password'	=> $password
		);
		$validate = $this->Model_login->validate($params);
		$count = COUNT($validate);
		// print_r($count);die;

		if ($count > 0) {

			// access login for admin 
			$data   = $validate;
			// echo"<pre>";print_r($data);die;
			$username  = $data['username'];
			$role   = $data['id_role'];
			$id 	   = $data['id_customer']; 
			// $user 	= $this->db->get_where('customer', ['username' => $username])->row_array();
			// if ($user['is_active'] == 1) {
				// if ($this->model_login->login($id, $dt->format('y-m-d H:i:s'))) {
					// $query = $this->model_login->gettblog();
					$sesdata = array(
						'username'     		=> $username,
						'password'     		=> $password,
						'id_role'   			=> $id_role,
						'id_customer'   		=> $id_customer,
						'nama'				=> $data['nama']
						// 'logged_in' 		=> TRUE,
						// 'id_login' 			=> $query['id_login']
					);
					$this->session->set_userdata($sesdata);
					if ($role == 1) {
						redirect('home');

						// access login for user
					} elseif ($role == 2) {
						redirect('pesanan/tambah_pesanan');
					}
				// } else {
					// echo "error";
				// }
			// }
		} else {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger " role="alert">
			Cek Kembali username dan Password
		</div>');
			redirect('login');
		}
	}

	function logout()
	{
		// $dt = new DateTime('now');
		// $this->model_login->updatelogin($this->session->userdata('id_login'), $dt->format('y-m-d H:i:s'));
		$this->session->sess_destroy();
		redirect('login');
	}
}
