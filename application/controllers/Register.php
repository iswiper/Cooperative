<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller { 
 public function __construct()
 {
  parent::__construct();
  $this->load->model('register_model');
  $this->load->helper(array('form', 'url'));
 }
 public function index()
 {
  //$this->load->view('header');
  $this->load->view('register_view');
 }
 public function register_form()
 {
  $data = array(
      'first_name'=> $this->input->post('fname'),
      'last_name' => $this->input->post('lname'),
      'gender'    => $this->input->post('gender'), 
      'mobile'    => $this->input->post('digit'), 
      'username'  => $this->input->post('username'), 
      'password'  => $this->input->post('password') 
        );
    $this->load->model('register_model');

   $this->register_model->saveCustomer($data);
  echo "Account Registration Successful!";

 }
}

