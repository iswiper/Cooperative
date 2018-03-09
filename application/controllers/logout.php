<?php
class Logout extends CI_Controller {
	public function out() {
		$data = array('id','username','log_in','account_type');
		$this->session->unset_userdata($data);
		$this->session->set_flashdata('successMessage','<div class="alert alert-success">Logout Successfully</div>');
		
				$this->load->view('header');
				$this->load->view('login');
				$this->load->view('footer');
	}
}

?>