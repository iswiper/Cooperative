<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Login extends CI_Controller { 
 public function __construct(){
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('login_view');
    }
    
    public function process(){
    $data = array(
    $this->load->model('login_model');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
        if($this->login_model->login($username,$password))
            echo "Welcome, "+username;
        else
            echo "Something Went Wrong :(";
    } 
  }
?>