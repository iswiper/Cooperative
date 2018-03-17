<?php
class Pages extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('log_in')) {
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Is Required</div>');
			redirect(base_url('login_con/login'));
		}
	}

		
	public function inventory () {
		$this->load->model('database');
		$data['items'] = $this->database->itemList();
		$data['page'] = 'inventory';
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu');
		$this->load->view('main',$data);
		
	}

	public function sales () {
		$data['page'] = 'sales';
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu');
		$this->load->view('sales_report_nav_view');
		
	}

	public function new_item() {
		$this->load->model('categories_model');
		$data['category'] = $this->categories_model->getCategoriesName();
		$data['page'] = 'new_item';
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu');
		$this->load->view('main',$data);
	
	}

	public function categories() {
		$this->load->model('categories_model');
		$data['categoryList'] = $this->categories_model->getCategories();
		$data['page'] = 'categories';
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu');
		$this->load->view('main',$data);
		
	}

	public function accounts () {
		$data['page'] = 'accounts';
		$this->load->model('accounts_model');
		$data['accountsList'] = $this->accounts_model->display_accounts();
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu');
		$this->load->view('accounts_view',$data);
		
	}

	public function logout () {
		echo 'logout';
	}
}

?>