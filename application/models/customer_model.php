<?php

class customer_model extends CI_Model {
	public function insert_account ($username,$password,$date_created) {
		$encrypt_password = password_hash($password,PASSWORD_DEFAULT);
		$data = array(
			'username' => "$username",
			'password' => "$encrypt_password",
			'date_created' => "$date_created",
			);
		$this->load->database();
		return $this->db->insert('customer', $data);
	}

	public function display_accounts() {
		$this->load->database();
		$this->db->order_by('id','DESC');
		$sql = $this->db->get('customer');
		return $sql->result();
	}

	public function delete_account($id) {
		$this->load->database();
		$this->db->where('id',$id);
		$del = $this->db->delete('customer');
		return $del;
	}

	public function login($username) {
		$this->load->database();
		$sql = $this->db->where('username',$username)
						->get('customer');
	 	return $row = $sql->row();
	}
}