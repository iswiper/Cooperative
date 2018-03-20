<div class="fixed-nav sticky-footer bg-dark" id="page-top">
		<?php
		echo '<div class="content-wrapper">';
		if ($page === 'pdetails')  {
				echo $this->session->flashdata('successMessage');
				echo $this->session->flashdata('errorMessage');
				echo '<div class="card-header"><h1>My Purchases</h1></div>';
				$tableAttr = array(
					'table_open' => '<table class="table table-responsive table-striped table-hover" id="item_tbl">',
					);
				$item_table = $this->table->set_heading('No.','Name','Category','Description', 'Quantity', 'Price','Action');
				$item_table = $this->table->set_template($tableAttr);
				$num = 0;
				
				echo $this->table->generate($item_table);
		}
		?>
</div>
<div class="clearfix"></div>
