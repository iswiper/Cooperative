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
	public function deleteSupplier($id) {
		$this->load->database();
		$sql = $this->db->where('id', $id)
						->delete('supplier');
		return $sql;
		
	}
	public function update_Supplier($id,$company,$product,$location,$contact) {
		$this->load->database();
		$data = array(
			'supplier_name' => "$company",
			'product' => "$product",
			'description' => "$location",
			'status' => "$contact"
			);

		$this->db->where('id',$id);
		return $this->db->update('supplier',$data);
	}

	public function insertItem($name, $category, $description, $date_time, $creator, $quantity, $price) 
	{
		$data = array(
			'name' => "$name",
			'category' => "$category",
			'description' => "$description",
			'date_time' => "$date_time",
			'creator' => "$creator",
			'quantities' => "$quantity",
			'price' =>	"$price"
			);
		$this->load->database();
		$sql = $this->db->insert('supplier', $data);
		//
		if ($sql) {
			$this->session->set_flashdata('successMessage', '<div class="alert alert-success">New Item Has Been Added</div>');
			$this->session->set_flashdata('successMessage', '<div class="alert alert-success">New Item Has Been Added Successfully </div>');
			redirect(base_url('inventory'));
		}
	}


	
}