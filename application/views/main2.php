<div class="col-sm-10" id="main">
		<?php
		echo '<div class="table-wrapper">';
		if ($page === 'dash')  {
				echo '<div id="">';
				echo $this->session->flashdata('successMessage');
				echo $this->session->flashdata('errorMessage');
				echo '<legend class="text-danger"><h1>My Purchases</h1></legend>';
				echo "Working!";
			}
			else if ($page === 'pdetails')  {
				echo '<div id="">';
				echo $this->session->flashdata('successMessage');
				echo $this->session->flashdata('errorMessage');
				echo '<legend class="text-danger"><h1>Personal Details</h1></legend>';
				echo $this->session->userdata('username');
				echo $this->session->userdata('first_name');				
				echo $this->session->userdata('last_name');
				echo $this->session->userdata('email');

			}
		?>
</div>
<div class="clearfix"></div>