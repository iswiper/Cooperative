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
		$this->load->model('supplier_model');
		$data['supp'] = $this->supplier_model->supplierList();
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu');
		$this->load->view('supplier_view',$data);
		$this->load->view('templates/footeradmin');
	}

	public function addSupplier() {
		if ($this->input->post('submit_item')) {
				date_default_timezone_set('Asia/Manila');
				$datestring = '%Y-%m-%d %h:%i:%s %a';
				$time = time();
				$date_time = mdate($datestring, $time);
				$name = $this->input->post('suppName');
				$product = $this->input->post('prod');
				$location = $this->input->post('location');
				$contact = $this->input->post('contact');
				
				$this->form_validation->set_rules('suppName', 'Supplier Company Name', 'required|min_length[5]');
				$this->form_validation->set_rules('prod'    , 'Product', 'required|min_length[4]');
				$this->form_validation->set_rules('location' , 'Supplier Company Location', 'required|min_length[5]');
				$this->form_validation->set_rules('contact' , 'Contact number', 'required|integer');


				if($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('errorMessage', '<div class="alert alert-danger">'.validation_errors() . '</div>');
					redirect('supplier_con/supplier');
				}
				else {
					$this->load->model('supplier_model');
					$this->supplier_model->insertSupplier($name, $product, $location,$contact, $date_time );
				}
			}else {
				redirect(base_url('supplier_con/supplier'));
			}
		 
	}
}

?>