<div class="fixed-nav sticky-footer bg-dark" id="page-top">
		<?php
		echo '<div class="content-wrapper">';
		//========================================================================================
			
				echo '<div class="card mb-3">';
				echo $this->session->flashdata('successMessage');
				echo $this->session->flashdata('errorMessage');

				echo '<div class="card-header"><h1>Supplier</h1></div>';
				echo ' <a class="nav-link" data-toggle="modal" data-target="#newitem">
            <button class="btn btn-primary btn-sm">Add New Suppplier</button></a>';
				$tableAttr = array(
					'table_open' => '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">',
					);
				$item_table = $this->table->set_heading('Supplier ID','Supplier Company','Product','Location', 'Contact Number','Action');
				$item_table = $this->table->set_template($tableAttr);
				$num = 0;
				
				echo $this->table->generate($item_table);
				echo '</div>';
				$inventory = 'active';
	
		
		?>
</div>
<div class="clearfix"></div>