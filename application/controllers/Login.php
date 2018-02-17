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
        $this->load->model('login_model');
        $result = $this->login_model->getCustomer();
        if(! $result){
            $this->load->model('login_model');
            $result = $this->login_model->getAdmin();
            if(! $result){
                $msg = 'Invalid username or password';
                $base=base_url();
                echo $msg;
             }
            else{
                echo "Welcome Admin!!";
            }
        }
        else{
                echo "Welcome Customer!!";
        }
  }}
?>