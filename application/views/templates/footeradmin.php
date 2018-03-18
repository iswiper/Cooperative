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
	<!--		<li id="log-out" class="list-side-group-item"><a href=""> -->
			<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
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
