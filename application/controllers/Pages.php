<?php
class Pages extends CI_Controller {
	
	
	public function home(){
				$this->load->view('templates/header');
				$this->load->view('home');
				$this->load->view('templates/footer');
			
	}
	
	
	
	
	public function inventory () {
		$this->load->model('database');
		$data['items'] = $this->database->itemList();
		$data['page'] = 'inventory';
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu');
		$this->load->view('main',$data);
		$this->load->view('footer');
	}

	public function sales () {
		$data['page'] = 'sales';
		$this->load->view('header',$data);
		$this->load->view('side_menu');
		$this->load->view('sales_report_nav_view');
		$this->load->view('footer');
	}

	public function new_item() {
		$this->load->model('categories_model');
		$data['category'] = $this->categories_model->getCategoriesName();
		$data['page'] = 'new_item';
		$this->load->view('header',$data);
		$this->load->view('side_menu');
		$this->load->view('main',$data);
		$this->load->view('footer');
	}

	public function categories() {
		$this->load->model('categories_model');
		$data['categoryList'] = $this->categories_model->getCategories();
		$data['page'] = 'categories';
		$this->load->view('header',$data);
		$this->load->view('side_menu');
		$this->load->view('main',$data);
		$this->load->view('footer');
	}

	public function accounts () {
		$data['page'] = 'accounts';
		$this->load->model('accounts_model');
		$data['accountsList'] = $this->accounts_model->display_accounts();
		$this->load->view('header',$data);
		$this->load->view('side_menu');
		$this->load->view('accounts_view',$data);
		$this->load->view('footer');
	}

	public function logout () {
		echo 'logout';
	}
}

?>