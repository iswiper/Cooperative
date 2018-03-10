<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cooperative</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  
  <link href="<?php echo base_url();?>assets/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">


</head>

<body>
 <section id="hero">
    <div class="hero-container">
				
					<div class="col-sm-10" id="main" style="padding-top: 20px;">
					<div class="col-sm-4">
					
					<?php echo $this->session->flashdata('errorMessage');?>
					<?php echo $this->session->flashdata('successMessage');?>
					<?php echo form_open('Signup_con/register_customer'); ?>	
					<?php echo form_fieldset('<h1 style="font-size:30px;">Register Account</h1>'); ?>
				
					
				
					<div class="form-group">
						<label for='First_Name'>First Name</label>
						<input id="First_Name" type="text" name="First_Name" class="form-control">
					</div>
					<div class="form-group">
						<label for='Last_Name'>Last Name</label>
						<input id="Last_Name" type="text" name="Last_Name" class="form-control">
					</div>	
					<div class="form-group">
						<label for='Email'>Email Address</label>
						<input id="Email" type="email" name="Email" class="form-control">
					</div>
					<div class="form-group">
						<label for='Username'>Username</label>
						<input id="Username" type="text" name="Username" class="form-control">
					</div>
				
					<div class="form-group">
						<label for='Password'>Password</label>
						<input id="Password" type="password" name="Password" class="form-control">
					</div>
					
					<div class="form-group">
						<label for='repeat_password'>Repeat Password</label>
						<input id="repeat_password" type="password" name="repeat_password" class="form-control">
					</div>

					<div class="form-group">
						<input type="submit" name="submit_account" class="btn btn-success" value="Register">
					</div>
					
					</div>

</div>
</div>
  </section><!-- #hero -->

  <main id="main">