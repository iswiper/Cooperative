<div class="fixed-nav sticky-footer bg-dark" id="page-top">
		<?php
		echo '<div class="content-wrapper">';
		//========================================================================================
		if ($page === 'inventory') {
			if (empty($items) ) {
				echo '<div class="card mb-3">';
				echo '<div class="card-header"><h3>Currently 0 Item In The Inventory</h3></div> <br>' ;
				echo '<a href='. base_url('new_item') .' class="btn btn-warning">Register Item Now.</a>';
				echo '</div>';
			}else {
				echo '<div class="card mb-3">';
				echo $this->session->flashdata('successMessage');
				echo $this->session->flashdata('errorMessage');

				echo '<div class="card-header"><h1>Item List</h1></div>';
				echo ' <br><a class="nav-link"><button data-toggle="modal" data-target="#newitem" class="btn btn-primary btn-sm">Add New Item</button> </a><br> ';
				$tableAttr = array(
					'table_open' => '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">',
					);
				$item_table = $this->table->set_heading('No.','Name','Category','Description', 'Quantity', 'Status','Action');
				$item_table = $this->table->set_template($tableAttr);
				$num = 0;
				foreach ($items as $item) {
					$itemName = urlencode($item->name);
					$num++;
					$item_table = $this->table->add_row($num, $item->name, $item->category, $item->description,$item->quantities,$item->status,"
						<a href='".base_url("item/stock_in/$itemName")."'><button class='btn btn-primary btn-sm'>STOCK IN</button></a> 
						<a href='".base_url("item/stock_in/$itemName")."'><button class='btn btn-primary btn-sm'>STOCK OUT</button></a> 
						<a href='".base_url("item/update/$itemName")."'><button class='btn btn-info btn-sm'>UPDATE</button></a> 
					
						<a href='".base_url("item/delete/$item->id")."'><button class='btn btn-danger'>Delete</button></a>");
							
				}
				echo $this->table->generate($item_table);
				echo '</div>';
				$inventory = 'active';
			}
	
		}
		//===================================================================================================
		else if ($page === 'categories') {
			echo '<div class="card mb-3">';
			echo '<div class="col-sm-12" >';
			echo $this->session->flashdata('errorMessage');
			echo $this->session->flashdata('successMessage');
			$formAttr = array(
				'id' => 'category_form'
				);
			echo '<div id="new_category">';
			echo form_open('category',$formAttr);
			echo form_fieldset('<div class="card-header"><h1>New Category</h1></div>');
			echo '<div class="form-group">';
			echo form_label('Category Name');
			echo form_input(array('class' => 'form-control','name' => 'category','placeholder' => 'Enter Category Name Here'));
			echo '</div>';
			echo '<div class="form-group">';
			echo form_input(array('name' => 'submit','type' => 'submit', 'value' => 'Add category', 'class' => 'btn btn-primary btn-md'));
			echo '</div>';
			echo form_fieldset_close();
			echo form_close();
			echo '</div>';
			echo '</div>';
			echo '<div class="col-sm-12">';
			if (empty($categoryList)) {
				echo '<div class="card-header"><h1>Category is Empty</h1></div>';
			}else {
				echo '<div>';
				echo '<div class="card-header"><h1>Category List</h1></div>';
				$template = array(
					'table_open' => '<table class="table table-responsive table-striped table-hover">',

					);
				$category_tbl = $this->table->set_template($template);
				$category_tbl = $this->table->set_heading('ID', 'DATE/TIME ADDED', 'NAME', 'CREATED BY','ACTION');
				$num = 0;
				foreach ($categoryList as $category) {
					$num += 1;
					$category_tbl = $this->table->add_row($num, $category->date_time, $category->category, $category->creator,'<a href="'. base_url('delete/category/'.$category->id.'').'"><button class="btn btn-danger btn-sm">Delete </button>');
				}
				echo '<div id="category_tbl">';
				echo $category_tbl->generate();
				echo '</div>';
				echo '</div>';
			}
			echo '</div>';
			echo '</div>';
		}
		//===================================================================================================
		else if ($page === 'supplier') {
			echo '<div class="card mb-3">';
			echo '<div class="col-sm-12" >';
			echo $this->session->flashdata('errorMessage');
			echo $this->session->flashdata('successMessage');
			$formAttr = array(
				'id' => 'category_form'
				);
			echo '<div id="new_category">';
			echo form_open('category',$formAttr);
			echo form_fieldset('<div class="card-header"><h1>New Category</h1></div>');
			echo '<div class="form-group">';
			echo form_label('Category Name');
			echo form_input(array('class' => 'form-control','name' => 'category','placeholder' => 'Enter Category Name Here'));
			echo '</div>';
			echo '<div class="form-group">';
			echo form_input(array('name' => 'submit','type' => 'submit', 'value' => 'Add category', 'class' => 'btn btn-primary btn-md'));
			echo '</div>';
			echo form_fieldset_close();
			echo form_close();
			
			echo '<div class="col-sm-12">';
			if (empty($categoryList)) {
				echo '<div class="card-header"><h1>Category is Empty</h1></div>';
			}else {
				echo '<div>';
				echo '<div class="card-header"><h1>Category List</h1></div>';
				$template = array(
					'table_open' => '<table class="table table-responsive table-striped table-hover">',

					);
				$category_tbl = $this->table->set_template($template);
				$category_tbl = $this->table->set_heading('ID', 'DATE/TIME ADDED', 'NAME', 'CREATED BY','ACTION');
				$num = 0;
				foreach ($categoryList as $category) {
					$num += 1;
					$category_tbl = $this->table->add_row($num, $category->date_time, $category->category, $category->creator,'<a href="'. base_url('delete/category/'.$category->id.'').'"><button class="btn btn-danger btn-sm">Delete </button>');
				}
				echo '<div id="category_tbl">';
				echo $category_tbl->generate();
				echo '</div>';
				echo '</div>';
			}
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
		}
//====================================================================================================
		else if ($page === 'new_item') {
			echo '<div class="card mb-3">';
			$nameAttr = array(
				'class' => 'form-control',
				'type' => 'text',
				'placeholder' => 'Item Name',
				'name' => 'item_name'
				);
			$categoryAttr = array(
				'class' => 'form-control',
				'name' => 'category'
				);
			$priceAttr = array(
				'class' => 'form-control',
				'name' => 'price',
				'placeholder' => 'Item Price'
				);
			$submitAttr = array(
				'class' => 'btn btn-primary',
				'name' => 'submit_item',
				'type' => 'submit',
				'value' => 'Register Item'
				);

			echo $this->session->flashdata('errorMessage');
			echo $this->session->flashdata('successMessage');
			echo form_open('item/item_con');
			echo form_fieldset('<div class="card-header"><h1>New Item</h1></div>');
			//ITEM NAME
			echo '<div class="form-group">';
			echo form_label('&emsp;Item Name:');
			echo form_input($nameAttr);
			echo '</div>';
			//CATEGORY
			echo '<div class="form-group">';
			echo form_label('&emsp;Category:');
			echo "<select class='form-control' name='category'>";
			echo '<option value="Select Any" selected="selected">Select Any</option>';
			foreach ($category as $cat) {
				?>
				<option value="<?php echo $cat->category; ?>"><?php echo $cat->category; ?></option>
				<?php
			}
			echo "</select>";
			echo '</div>';
			//SUPPLIER
			echo '<div class="form-group">';
			echo form_label('&emsp;Supplier:');
			echo "<select class='form-control' name='category'>";
			echo '<option value="Select Any" selected="selected">Select Any</option>';
			foreach ($category as $cat) {
				?>
				<option value="<?php echo $cat->category; ?>"><?php echo $cat->category; ?></option>
				<?php
			}
			echo "</select>";
			echo '</div>';
			//PRICE
			echo '<div class="form-group">';
			echo form_label('&emsp;Price:');
			echo form_input($priceAttr);
			echo '</div>';
			
			//description
			echo '<div class="form-group">';
			echo form_label('&emsp;Description:');
			echo '<textarea name="description" class="form-control" rows="5" placeholder="Item Description"></textarea>';
			echo '</div>';
			echo '<div class="form-group">';
			echo form_input($submitAttr);
			echo '</div>';
			echo '</div>';
			echo form_close();
			echo '</div>';
		}
		?>
</div>
<div class="clearfix"></div>