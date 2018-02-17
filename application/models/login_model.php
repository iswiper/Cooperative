<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
      public function getCustomer(){
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $this->db->where('username',$username);
         $this->db->where('password',$password);
        $query = $this->db->get('customertbl');
        if($query->num_rows()==1){
        $row = $query->row();
        $data = array(
            'userid' => $row->id_customer,
            'username' => $row->username,
            'validated' => true);
        $this->session->set_userdata($data);
        return true;
      }
      return false;
      }
        public function getAdmin(){
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        //prep the query
        $this->db->where('username',$username);
         $this->db->where('password',$password);
        //run the query
        $query = $this->db->get('admintbl');
      
        if($query->num_rows()==1){
        $row = $query->row();
        $data = array(
            'userid' => $row->id_customer,
            'username' => $row->username,
            'validated' => true);
        $this->session->set_userdata($data);
        return true;
      }
      return false;
      }
}
?>