<?php
class home_con extends CI_Controller {
	
	
	public function home(){
				$this->load->view('templates/header');
				$this->load->view('home');
				$this->load->view('templates/footer');
			
	}
}

?>	