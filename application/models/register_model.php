<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

  Class Register_model extends CI_Model {
  public function saveCustomer($data)
 {	//$this->load->database();
    $this->db->insert('customertbl', $data);
   //  $uname= $this->db->insert_id();
   return $idOfInsertedData = $this->db->insert_id();
 }
}
?>