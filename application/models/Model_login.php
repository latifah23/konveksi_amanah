<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_login extends CI_Model
{
	// function validate($username, $password)
	// {
	// 	$this->db->where('username', $username);
	// 	$this->db->where('password', $password);
	// 	$result = $this->db->get('customer');
	// 	return $result;
	// }

	public function validate($params){
		$sql = "SELECT* FROM customer where username = ? AND password = ?";
		//execute query
		$query = $this->db->query($sql,$params);
		if ($query->num_rows() > 0){
			$result = $query->row_array();
			$query->free_result(); 
			return $result;
		}else{
			return array();
		}
	}

	function login($id_customer, $date)
	{
		$data = array('id_customer' => $id_customer, 'logindatetime' => $date, 'logoutdatetime' => 0);
		if ($this->db->insert('tblog', $data)) {
			return true;
		} else {
			return false;
		}
	}

	// function updatelogin($id_customer, $date)
	// {
	// 	$data = array('logoutdatetime' => $date);
	// 	$this->db->where('id_login', $id_customer);
	// 	if ($this->db->update('tblog', $data)) {
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }

	// function gettblog()
	// {
	// 	$this->db->order_by('id_login', 'DESC');
	// 	$query = $this->db->get('tblog')->row_array();
	// 	return $query;
	// }
	function register()
	{
		$post = $this->input->post();

		$data = array(
			"nama" 	      => $post['nama'],
			'username' 	 => $post["username"],
			'password'	 => md5($post["password"]),
			'jekel'		=>$post	['jekel'],
			'email'		=>$post	['email'],
			'notelp'		=>$post	['notelp'],
			'nowa'		=>$post	['nowa'],
			'provinsi'		=>$post	['provinsi'],
			'kota'		=>$post	['kota'],
			'kecamatan'		=>$post	['kecamatan'],
			'kodepos'		=>$post	['kodepos'],
			'alamat'		=>$post	['alamat'],
			// 'role_id'	      => 2,
			// 'is_active'     => 1,
		);
		echo"<pre>";print_r($data);die;
		// $this->db->set('user_uuid', 'UUID()', FALSE);
		$this->db->insert('customer', $data);
	}
}
