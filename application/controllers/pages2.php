<?php
class pages2 extends CI_Controller {
	
	
	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('log_in')) {
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Is Required</div>');
			redirect(base_url('login_con/login'));
		}
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
	public function pos(){
		$this->load->model('item_model');
		$data['names'] = $this->item_model->get_all_item();
		$data['page'] = 'sales';
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu2');
		$this->load->view('pos_view',$data);
		$this->load->view('templates/footeradmin');
	}
	
	public function logout () {
		echo 'logout';
	}
}

?>