<div class="col-sm-2" id="side-menu">
	<div>
		<ul style="border-right: 1px grey solid;" class="list-side-menu">
			<?php
				$location = $this->uri->segment(1); 
			?>
			<br>
				<span class="glyphicon glyphicon-user"></span>
				<p style="text-align: center; color: #337ab7; font-size: 25px;"><?php echo $this->session->userdata('username') ?></p>
				<a class="" href="">Edit Account Information</a>
				<a class="" href="">Change Your Password</a>
			<br>
			<br>
			<div class="list-side-group-item <?php if ($location === 'pdetails' ) {echo 'active-link';}?> ">

				<a class="<?php if ($location === 'pdetails') {echo 'active-text';}?>" href="<?php echo base_url("pages2/pdetails") ?>">
				<span class="glyphicon glyphicon-folder-close"></span><br>Personal Details</a>
			</div><br>
				
			<div class="list-side-group-item <?php if ($location === 'dash' ) {echo 'active-link';}?> ">

				<a class="<?php if ($location === 'dash') {echo 'active-text';}?>" href="<?php echo base_url() ?>pages2/dash">
				<span class="glyphicon glyphicon-folder-close"></span><br>My Purchases</a>
			</div><br>
			
			
			<div id="log-out" class="list-side-group-item <?php if ($location === 'logout') {echo 'active-link';}?> "><a href="<?php echo base_url("logout/out") ?>"><span class="glyphicon glyphicon glyphicon-log-out"></span><br>Logout</a>
			</div>
		</ul>
	</div>
</div>
