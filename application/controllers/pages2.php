<?php
class pages2 extends CI_Controller {
	
	
	public function home(){
				$this->load->view('templates/header');
				$this->load->view('home');
				$this->load->view('templates/footer');
			
	}	
	public function dash () {
		$this->load->model('database');
		$data['items'] = $this->database->itemList();
		$this->load->model('customer_model');
		$data['customer'] = $this->customer_model->getUser($_SESSION['username']);
		$data['page'] = 'dash';
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu2');
		$this->load->view('main2',$data);
		$this->load->view('templates/footeradmin');
	}
	public function getpdetails () {
		$this->load->model('customer_model');
		$data['customer'] = $this->customer_model->getUser($_SESSION['username']);
		$data['page'] = 'pdetails';
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu2');
		$this->load->view('main2',$data);
		$this->load->view('templates/footeradmin');
	}
	
	public function logout () {
		echo 'logout';
	}
}

?>