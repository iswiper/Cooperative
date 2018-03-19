 <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Cooperative 2018</small>
        </div>
      </div>
    </footer>
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
            <a class="btn btn-primary" href="<?php echo base_url("logout/out") ?>">Logout</a>
  <!--    <li id="log-out" class="list-side-group-item"><a href=""> -->
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      </div>
        </div>
      </div>
    </div>

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
      echo form_input($categoryAttr);
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
    
            
            ?>
          </div>
          <div class="modal-footer">
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
