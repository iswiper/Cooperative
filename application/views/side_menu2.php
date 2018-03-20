<div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
		<?php
				$location = $this->uri->segment(1); 
			?>
      <br>
        <span class="glyphicon glyphicon-user"></span>
        <h1 ><?php $user=$this->session->userdata('username'); echo $user; ?></h1>
      <div>
        <?php 
        foreach ($customer as $row)
        {   
            echo '<label>Name: </label>'," ",$row->first_name," ",$row->last_name;
            echo '<br><label>Email: </label>'," ",$row->email,'</br>' ;
        }
        ?>
      </div>
	 <!--#############################################dash################################################################################################-->
      
        <li class="nav-item <?php if ($location === 'dash') {echo 'active-link';}?>" data-toggle="tooltip" data-placement="right" title="Dashboard" >
          <a class="nav-link <?php if ($location === 'dash') {echo 'active-text';}?>" href="<?php echo base_url() ?>pages2/dash">
            <i class="fa fa-table"></i><span class="nav-link-text">My Purchases</span>
          </a>
        </li>

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
  
  