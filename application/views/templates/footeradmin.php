 <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Cooperative 2018</small>
        </div>
      </div>
    </footer>
   
    <!--===========================================LOGOUT MODAL====================================================================-->
	 
	 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirm Logout?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-footer">
            <a class="btn btn-primary" href="<?php echo base_url("logout/out") ?>">Yes</a>
  <!--    <li id="log-out" class="list-side-group-item"><a href=""> -->
      <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
      </div>
        </div>
      </div>
    </div>
  <!--==========================================NEW ITEM MODAL==============================================================-->
	
	<div class="modal fade" id="del" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete This Item?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-footer">
           
	<!--		<a class="btn btn-primary" href='".base_url("item/delete/$item->id")."'>Yes</a> -->
			<a href='".base_url("item/delete/$item->id")."'><button class='btn btn-info btn-warning btn-sm'>Delete</button></a>");
  <!--    <li id="log-out" class="list-side-group-item"><a href=""> -->
      <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
      </div>
        </div>
      </div>
    </div>

	
	

    <!--new item modal-->
    <div class="modal fade" id="newitem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class=""><h1>New Item</h1></div>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div>
            <?php 
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
      $statAttr = array(
        'class' => 'form-control',
        'name' => 'status',
        'placeholder' => 'Item Status'
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
      	
      //status
      echo '<div class="form-group">';
      echo form_label('&emsp;Status:');
      echo form_input($statAttr);
      echo '</div>';
      
      //description
      echo '<div class="form-group">';
      echo form_label('&emsp;Description:');
      echo '<textarea name="description" class="form-control" rows="5" placeholder="Item Description"></textarea>';
      echo '</div>';

    
            
            ?>
          </div>
          <div class="modal-footer">
        <?php

      echo '<div class="form-group">';
      echo form_input($submitAttr);
      echo ' <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>';
      echo '</div>';
      echo '</div>';
      echo form_close();
      echo '</div>';
              ?>

          </div>
        </div>
      </div>
    </div>
<!--==========================================SUPPLIER MODAL==============================================================-->
<div class="modal fade" id="supplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class=""><h1>New Supplier</h1></div>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
          </button>
      </div>
      <div>
      <?php 
            $nameAttr = array(
              'class' => 'form-control',
              'type' => 'text',
              'placeholder' => 'Supplier Company Name',
              'name' => 'suppName'
              );
            $prodAttr = array(
              'class' => 'form-control',
              'name' => 'prod',
              'placeholder' => 'Product'
              );
            $locationAttr = array(
              'class' => 'form-control',
              'name' => 'location',
              'placeholder' => 'Company Location'
              );
            $contactAttr = array(
              'class' => 'form-control',
              'name' => 'contact',
              'placeholder' => 'Contact Number'
              );
            $submitAttr = array(
              'class' => 'btn btn-primary',
              'name' => 'submit_item',
              'type' => 'submit',
              'value' => 'Add Supplier'
              );

            echo $this->session->flashdata('errorMessage');
            echo $this->session->flashdata('successMessage');
            echo form_open('supplier_con/addSupplier');
            //SUPPLIER NAME
            echo '<div class="form-group">';
            echo form_label('&emsp;Supplier Company Name:');
            echo form_input($nameAttr);
            echo '</div>';
            //SUPPLIER product
            echo '<div class="form-group">';
            echo form_label('&emsp;Product:');
            echo form_input($prodAttr);
            echo '</div>';
            //SUPPLIER location
            echo '<div class="form-group">';
            echo form_label('&emsp;Supplier Company Location:');
            echo form_input($locationAttr);
            echo '</div>';
            //SUPPLIER product
            echo '<div class="form-group">';
            echo form_label('&emsp;Contact Number:');
            echo form_input($contactAttr);
            echo '</div>';  
      ?>
      </div>
      <div class="modal-footer">
      <?php
          echo '<div class="form-group">';
          echo form_input($submitAttr);
          echo ' <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>';
          echo '</div>';
          echo '</div>';
          echo form_close();
      ?>
      </div>
    </div>
  </div>
</div>
    

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/Admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/Admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/Admin/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/Admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/Admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/Admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url();?>assets/Admin/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/Admin/js/sb-admin-charts.min.js"></script>
  
</body>

</html>
