<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
	class Admin extends CI_Controller{

		public function index(){
			$this->load->view('pages');
		} 

		public function category(){
			$this->load->view('category');
		} 
		public function inventory(){
			$this->load->view('inventory');
		} 
		public function new_item(){
			$this->load->view('new_item');
		}
		public function payment(){
			$this->load->view('payment');
		}
		public function sales_report(){
			$this->load->view('sales_report');
		} 
		public function pos(){
			$this->load->view('pos');
		} 
	}
?>