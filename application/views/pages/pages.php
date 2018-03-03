<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!--############################################################################## Navigation ###############################################################################################################-->
 <div><nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="">Consumer-Cooperative Solution</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
   
   <!--#############################################HOME################################################################################################-->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="<?php echo base_url(); ?>admin">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
    
  <!--#############################################CATEGORY################################################################################################-->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
          <a class="nav-link" href="<?php echo site_url('admin/category'); ?>">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Category</span>
          </a>
        </li>
   <!--#############################################COSTUMER################################################################################################-->
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
          <a class="nav-link" href="<?php echo base_url('admin/inventory'); ?>">
            <i class="fa fa-archive"></i>
            <span class="nav-link-text">Inventory</span>
          </a>
        </li>
          <!--#############################################POS################################################################################################-->
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
          <a class="nav-link" href="<?php echo base_url('admin/pos'); ?>">
            <i class="fa fa-archive"></i>
            <span class="nav-link-text">POS</span>
          </a>
        </li>

   <!--#############################################COSTUMER################################################################################################-->
   <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
          <a class="nav-link" href="<?php echo base_url('admin/new_item'); ?>">
            <i class="fa fa-th-list"></i>
            <span class="nav-link-text">New Item</span>
          </a>
        </li>
   <!--#############################################COSTUMER################################################################################################-->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Costumer">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-user"></i>
            <span class="nav-link-text">Costumer</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="<?php echo base_url(); ?>add_customer">Add Costumer</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>view_costumer">View Costumer</a>
            </li>
          </ul>
        </li>
    
   <!--#############################################SUPPLIER################################################################################################--> 
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Supplier">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSupplier" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Supplier</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseSupplier">
            <li>
              <a href="<?php echo base_url(); ?>add_supplier">Add Supplier</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>view_supplier">View Supplier Details</a>
            </li>
          </ul>
        </li>
		
	 <!--#############################################STOCK################################################################################################-->	
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Stock">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseStock" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Stock</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseStock">
            <li>
              <a href="#">Add Stock Details</a>
            </li>
            <li>
              <a href="#">View Stock Details</a>
            </li>
            <li>
              <a href="#">Purchase Stock</a>
            </li>
			 <li>
              <a href="#">View Purchase</a>
            </li>
			 <li>
              <a href="#">View Stock Availability</a>
            </li>
          </ul>
        </li>
		
		 <!--#############################################SALES################################################################################################-->
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sales">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSales" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Sales</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseSales">
            <li>
              <a href="#l">Sales</a>
            </li>
            <li>
              <a href="#">View Sales</a>
            </li>
          </ul>
        </li>
     <!--#############################################PAYMENT################################################################################################-->
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Payment">
          <a class="nav-link" href="<?php echo base_url('admin/payment'); ?>">
            <i class="fa fa-fw fa-money"></i>
            <span class="nav-link-text">Payment</span>
          </a>
     </li>
      
      <!--#############################################REPORTS################################################################################################--> 
       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reports">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsereports" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Reports</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsereports">
            <li>
              <a href="<?php echo base_url('admin/sales_report'); ?>">Sales and Products</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>profit_report">Profit Report</a>
            </li>
          </ul>
        </li>
    
      </ul>
	 <!--#############################################SIDE NAVBAR################################################################################################-->	
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
	  
 <!--#####################################################################################################################################################################################################-->
 
 
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
		  
		  <!--###################################MESSAGES##########################################################################-->
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
                       <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
		  <!--###############################################################################################################################################################-->
        </li>
		
		<!--##########################################################ALERTS#####################################################################################################-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
		<!--###############################################################################################################################################################-->
		
		<!--#######################################################################SEARCH########################################################################################-->
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
		<!--###############################################################################################################################################################-->
		
		<!--#####################################################################LOGOUT##########################################################################################-->
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
		<!--###############################################################################################################################################################-->
      </ul>
    </div>
  </nav>
</div>

  <div class="content-wrapper">
  
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">Company Performance Page</li>
      </ol>
    <div class="panel-container">
      <div class="row">
        <div class="col-xs-6 col-md-3 col-lg-3 ">
          <div class="  panel-widget border-right">
            <div class="">
              <em class="fa fa-xl fa-shopping-cart "></em>
              <div class="large">120</div>
              <div class="text-muted">New Orders</div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 ">
          <div class="  panel-widget border-right">
            <div class="">
              <em class="fa fa-xl fa-comments "></em>
              <div class="large">52</div>
              <div class="text-muted">Comments</div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 ">
          <div class=" panel-widget border-right">
            <div class="">
              <em class="fa fa-xl fa-users "></em>
              <div class="large">24</div>
              <div class="text-muted">New Users</div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 ">
          <div class=" panel-widget ">
            <div class="">
              <em class="fa fa-xl fa-search "></em>
              <div class="large">25.2k</div>
              <div class="text-muted">Page Views</div>
            </div>
          </div>
        </div>
      </div><!--/.row-->
    </div>
	  
		<div class="row">
        <div class="col-lg-8">
		
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Stock details Chart</div>
              
            <div class="card-body">
              <div class="row">
                <div class="col-sm-8 my-auto">
                  <canvas id="myBarChart" width="100" height="auto"></canvas>
                </div>
               
              </div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>
		  </div>
		  
		  
	</div>
		  <!--#########################################################-->
		  <div class="row">
			<div class="col-lg-8">
				<div class="card mb-3">
				<div class="card-header"><i class="fa fa-area-chart"></i>Company Product Price Chart</div>
					<div class="card-body">
					<canvas id="myAreaChart" width="100%" height="auto"></canvas>
					</div>
					<div class="card-footer small text-muted"></div>
				</div>
			</div>
		
			 <div class="col-lg-4">	
				<div class="card mb-3">
					<div class="card-header">
						<i class="fa fa-table"></i> Transaction Panel
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Operation Name</th>
										<th>Operation</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>Operation Name</th>
										<th>Operation</th>
									</tr>
								</tfoot>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										
                  
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>
	</div>
		
         

          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

 
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © COOPERATIVE 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url(); ?>login">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <script src="assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="assets/js/sb-admin-datatables.min.js"></script>
    <script src="assets/js/sb-admin-charts.min.js"></script>
  


 

</body>

</html>
