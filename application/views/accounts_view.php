<div class="fixed-nav sticky-footer bg-dark" id="page-top">
<div class="content-wrapper">
<div class="card mb-3">
<?php echo $this->session->flashdata('errorMessage');?>
<?php echo $this->session->flashdata('successMessage');?>
<?php echo form_open('accounts_con/register_account'); ?>
<?php echo form_fieldset('<div class="card-header"><h1>Admin Registration</h1></div>'); ?>
<div class="form-group">
	<label for='Username'>&emsp;Username:</label>
	<input type="text" name="Username" class="form-control">
</div>
<div class="form-group">
	<label for='Password'>&emsp;Password</label>
	<input type="password" name="Password" class="form-control">
</div>
<div class="form-group">
	<label for='repeat_password'>&emsp;Repeat Password</label>
	<input type="password" name="repeat_password" class="form-control">
</div>

<div class="form-group">
	<input type="submit" name="submit_account" class="btn btn-primary" value="Register">
</div>
<?php echo form_close(); ?>
</div>
<div class="col-sm-8">

	<?php echo form_fieldset('<div class="card-header"><h1>Registered Accounts</h1></div>'); ?>
	<table class="table table-striped table-hover table-responsive">
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Date/Time Created</th>
			<th>Action</th>
		</tr>
		<?php
		$count = 1; 
		?>
		<?php foreach($accountsList as $account) :?>
		<tr>
			<?php
			$id = $account->id;
			?>
			<td><?php echo $count++; ?></td>
			<td><?php echo $account->username ?></td>
			<td><?php echo $account->date_created ?></td>
			<td><!--<a href="<?php echo base_url("accounts_con/delete/$id"); ?>" class="btn btn-danger">Delete</a>--></td>
		</tr>
	<?php endforeach;?>
	</table>
</div>
</div>

