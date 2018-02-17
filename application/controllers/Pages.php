<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
	class Pages extends CI_Controller{
		
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			
			$data['title'] = ucfirst($page);

				$this->load->view('templates/header');
				$this->load->view('pages/'.$page, $data);
				$this->load->view('templates/footer');
			
		}
		public function register(){
			//$this->load->view('templates/header');
			$this->load->view('register_view');
		}
		public function login(){
			//$this->load->view('templates/header');
			$this->load->view('login_view');
		} 
	}
?>
