<?php
class supplier_con extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('log_in')) {
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Is Required</div>');
			redirect(base_url('login_con/login'));
		}
	}

		
	public function supplier () {
		$this->load->model('categories_model');
		$data['category'] = $this->categories_model->getCategoriesName();
		$this->load->model('database');
		$data['supplier'] = $this->database->itemList();
		$data['page'] = 'inventory';
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu');
		$this->load->view('supplier_view',$data);
		$this->load->view('templates/footeradmin');
	}
}

?>