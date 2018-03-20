<div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
		<?php
				$location = $this->uri->segment(1); 
			?>
      <br>
        <span class="glyphicon glyphicon-user"></span>
        <p style="text-align: center; color: #337ab7; font-size: 25px;"><?php $user=$this->session->userdata('username'); echo $user; ?></p>
      <div>
        <?php 
        foreach ($customer as $row)
        { $uname = urlencode($row->username);
            echo '<label>Name: </label>'," ",$row->first_name," ",$row->last_name;
            echo '<br><label>Email: </label>'," ",$row->email,'</br>' ;
            //update button on progress
        }
        ?>
      </div>
	 <!--#############################################dash################################################################################################-->
        <li class="nav-item <?php if ($location === 'inventory' || $location === 'item') {echo 'active-link';}?>" data-toggle="tooltip" data-placement="right" title="Inventory" >
          <a class="<?php if ($location === 'dash') {echo 'active-text';}?>" href="<?php echo base_url() ?>pages2/dash">
        <span class="glyphicon glyphicon-folder-close"></span><br>My Purchases</a>
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
  
  