<?php 
class Login_con extends CI_Controller {

	public function login(){
				$this->load->view('header');
				$this->load->view('login');
				$this->load->view('footer');
			
	}
	

	public function login_validation() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">' . validation_errors() . '</div>');
			redirect(base_url('home_con/home'));
		}else {
		
			$this->load->model('accounts_model');
			$this->load->model('customer_model');
			$verify_login = $this->customer_model->login($username);
			$verifyadmin_login = $this->accounts_model->login($username);

			if($verifyadmin_login) {
				$hash_password = $verifyadmin_login->password;
				$hash = password_verify($password,$hash_password);
				if ($hash) {
					$userdata = array( 
						'id' => "$verify_login->id",
						'username' => "$verify_login->username",
						'log_in' => true,
			
						);
					$this->session->set_userdata($userdata);
					$this->session->set_flashdata('successMessage','<div class="alert alert-success">Login Successfully, Welcome '.$this->session->userdata['username'].'</div>');
					
						redirect(base_url('inventory'));
					
					
			}else {
					$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Incorrect Login Name Or Password</div>');
				redirect(base_url('home_con/home'));
				}
			}
			
			
			else if ($verify_login) {
				$hash_password = $verify_login->password;
				$hash = password_verify($password,$hash_password);
				if ($hash) {
					$userdata = array( 
						'id' => "$verify_login->id",
						'username' => "$verify_login->username",
						'log_in' => true,
			
						);
					$this->session->set_userdata($userdata);
					$this->session->set_flashdata('successMessage','<div class="alert alert-success">Login Successfully, Welcome '.$this->session->userdata['username'].'</div>');
						redirect(base_url('pages2/dash'));					
				}				
				else {
					$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Incorrect Login Name Or Password</div>');
				redirect(base_url('home_con/home'));
				}
			}			
			else {
				$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Incorrect Login Name Or Password</div>');
				redirect(base_url('home_con/home'));
			}
		}
	}
}

?> 