<?php

class supplier_model extends CI_Model {
	public function supplierList () {
		$this->load->database();
		$sql = $this->db->order_by('id','DESC')->get('supplier');
		$result = $sql->result();
		$this->db->close();
		return $result;
	}

	public function insertSupplier($name, $product, $location,$contact, $date_time) 
	{
		$data = array(
			'supplier_name' => "$name",
			'product' => "$product",
			'supplier_location' => "$location",
			'contact' => "$contact",
			'date_time' => "$date_time",
			
			);
		$this->load->database();
		$sql = $this->db->insert('supplier', $data);
		if ($sql) {
			$this->session->set_flashdata('successMessage', '<div class="alert alert-success">New Item Has Been Added</div>');
			$this->session->set_flashdata('successMessage', '<div class="alert alert-success">New Item Has Been Added Successfully </div>');
			redirect(base_url('supplier_con/supplier'));
		}
	}

	
}