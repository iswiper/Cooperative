<?php
class Sales_con extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('log_in')) {
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Is Required</div>');
			redirect(base_url('login'));
		}
	}
	public function daily_sales_report() {
		$data['title'] = 'Today\'s Report';
		$this->load->model('sales_model');
		$data['reports'] = $this->sales_model->daily_sales_report();
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu');
		$this->load->view('sales_report_nav_view',$data);
		
	
	}

	public function weekly_sales_report() {
		$data['title'] = 'This Week Report';
		$this->load->model('sales_model');
		$data['reports'] = $this->sales_model->daily_sales_report();
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu');
		$this->load->view('sales_report_nav_view',$data);
		
	}

	public function monthly_sales_report() {
		$data['title'] = 'This Month Report';
		$this->load->model('sales_model');
		$data['reports'] = $this->sales_model->daily_sales_report();
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu');
		$this->load->view('sales_report_nav_view',$data);
	
	}

	public function yearly_sales_report() {
		$data['title'] = 'This Year Report';
		$this->load->model('sales_model');
		$data['reports'] = $this->sales_model->daily_sales_report();
		$this->load->view('templates/headeradmin',$data);
		$this->load->view('side_menu');
		$this->load->view('sales_report_nav_view',$data);
		
	}
}
?>