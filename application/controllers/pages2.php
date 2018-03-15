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
		$data['page'] = 'dash';
		$this->load->view('header',$data);
		$this->load->view('side_menu2');
		$this->load->view('main2',$data);
		$this->load->view('footer');
	}
	public function pdetails () {
		$this->load->model('customer_model');
		$data['customer'] = $this->customer_model->getPdetails();
		$data['page'] = 'pdetails';
		$this->load->view('header',$data);
		$this->load->view('side_menu2');
		$this->load->view('main2',$data);
		$this->load->view('footer');
	}


	public function logout () {
		echo 'logout';
	}
}

?>