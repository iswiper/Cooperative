<div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
		<?php
				$location = $this->uri->segment(1); 
			?>
	 <!--#############################################inventory################################################################################################-->
        <li class="nav-item <?php if ($location === 'inventory' || $location === 'item') {echo 'active-link';}?>" data-toggle="tooltip" data-placement="right" title="Inventory" >
          <a class="nav-link <?php if ($location === 'inventory') {echo 'active-text';}?>" href="<?php echo base_url("inventory") ?>">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Inventory</span>
          </a>
        </li>
		
	<!--#############################################CATEGORY################################################################################################-->
        <li class="nav-item <?php if ($location === 'caegories') {echo 'active-link';}?>" data-toggle="tooltip" data-placement="right" title="Category" >
          <a class="nav-link <?php if ($location === 'categories') {echo 'active-text';}?>" href="<?php echo base_url("categories") ?>">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Category</span>
          </a>
        </li>
   <!--#############################################COSTUMER################################################################################################-->
		<li class="nav-item <?php if ($location === 'new_item') {echo 'active-link';}?>" data-toggle="tooltip" data-placement="right" title="Item" >
          <a class="nav-link <?php if ($location === 'new_item') {echo 'active-text';}?>" href="<?php echo base_url("new_item") ?>">
		   <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">New Item</span>
          </a>
        </li>
		
	 <!--#############################################sales################################################################################################--> 
        <li class="nav-item <?php if ($location === 'sales') {echo 'active-link';}?>" data-toggle="tooltip" data-placement="right" title="sales" >  
    
    <a class="nav-link <?php if ($location === 'sales') {echo 'active-text';}?>" href="<?php echo base_url("daily_sales_report") ?>">
    
      <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Sales</span>
          </a>
        </li>
    
            
          <!--#############################################supplier################################################################################################--> 
         <li class="nav-item " data-toggle="tooltip" data-placement="right" title="supplier" >
          <a class="nav-link " href="<?php echo base_url("supplier_con/supplier") ?>">
       <i class="fa fa-cubes"></i>
            <span class="nav-link-text">Supplier</span>
          </a>
        </li>
	 <!--#############################################accounts################################################################################################-->	
     <li class="nav-item <?php if ($location === 'accounts') {echo 'active-link';}?>" data-toggle="tooltip" data-placement="right" title="accounts" >
          <a class="nav-link <?php if ($location === 'accounts') {echo 'active-text';}?>" href="<?php echo base_url("accounts") ?>">
		   <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Accounts</span>
          </a>
        </li>
		
		 <!--#############################################logout################################################################################################-->
		 
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="logout">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
		
		  
		 
		</li>
      </ul>
		
	
 
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
         
	    </li>
		
	   </ul>
    </div>
  </nav>
  
  