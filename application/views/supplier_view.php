<div class="fixed-nav sticky-footer bg-dark" id="page-top">
		<?php
		echo '<div class="content-wrapper">';
		//========================================================================================
			
				echo '<div class="card mb-3">';
				echo $this->session->flashdata('successMessage');
				echo $this->session->flashdata('errorMessage');

				echo '<div class="card-header"><h1>Supplier</h1></div>';
				echo ' <a class="nav-link" data-toggle="modal" data-target="#supplier">
            <button class="btn btn-primary btn-sm">Add New Suppplier</button></a>';
				$tableAttr = array(
					'table_open' => '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">',
					);
				$item_table = $this->table->set_heading('Supplier ID','Supplier Company','Product','Location', 'Contact Number','Action');
				$item_table = $this->table->set_template($tableAttr);
				$num = 0;
				foreach ($supp as $supplier) {
					$suppName = urlencode($supplier->supplier_name);
					$num++;
					$supp_table = $this->table->add_row($num, $supplier->supplier_name, $supplier->product, $supplier->supplier_location,$supplier->contact,"
					<a href='' data-toggle='modal' data-target='#Supdate".$supplier->supplier_name."'><button class='btn btn-info btn-sm btn-update'>UPDATE</button><input type='hidden' value='".$supplier->id."'></a> 	
				<a href='' data-toggle='modal' data-target='#Sdelete".$supplier->id."'><button class='btn btn-info btn-warning btn-sm'>Delete</button></a>");
//=============================================================DELETE MODAL==================================================================================//
				echo '<div class="modal fade" id="Sdelete'.$supplier->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					      <div class="modal-dialog" role="document">
					        <div class="modal-content">
					          <div class="modal-header">
					            <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this?</h5>
					            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
					              <span aria-hidden="true">×</span>
					            </button>
					          </div>

					          <div class="modal-footer">
					            <a class="btn btn-primary" href="'.base_url("supplier_con/delete/".$supplier->id).'">Delete</a>
					      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					      </div>
					        </div>
					      </div>
					    </div>'	;

//==================================================UPDATE MODAL==================================================================================//
				echo '	<div class="modal fade" id="Supdate'.$supplier->supplier_name.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update supplier</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div>
            '.form_open("supplier_con/supplier_update/$supplier->supplier_name").'
  <input type="hidden" name="current_company" value="'. $supplier->supplier_name.'">
  <input type="hidden" name="current_location" value="'. $supplier->supplier_location.'" >
  <input type="hidden" name="current_product" value="'. $supplier->product.'">
  <input type="hidden" name="current_contact" value="'. $supplier->contact.'">
  <div class="form-group">
    <label>&emsp;Supplier Company Name:</label>
    <input type="text" name="update_company" placeholder="Supplier Company Name" class="form-control" value="'. $supplier->supplier_name.'">
  </div>
  
  <div class="form-group">
    <label>&emsp;Product:</label>
    <input type="text" name="update_product" placeholder="Product" class="form-control" value="'. $supplier->product.'">
  </div>
  <div class="form-group">
    <label>&emsp;Supplier Company Location:</label>
    <input type="text" name="update_location" placeholder="Supplier Company Location" class="form-control" value="'. $supplier->supplier_location.'">
  </div>
   <div class="form-group">
    <label>&emsp;Contact Number:</label>
    <input type="text" name="update_contact" placeholder="Contact Number" class="form-control" value="'. $supplier->contact.'">
  </div>
          </div>
          <div class="modal-footer">
  	  <div class="form-group">
    <input type="submit" name="submit" value="Update" class="btn btn-primary">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

  </div>

  '.form_close().'
      </div>
        </div>
      </div>
    </div>';

									}
				echo $this->table->generate($supp_table);
				echo '</div>';
				//$inventory = 'active';
	
		
		?>
</div>
<div class="clearfix"></div>