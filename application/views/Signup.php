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

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  
  <link href="<?php echo base_url();?>assets/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/style2.css" rel="stylesheet">


</head>

<body>

<section id="hero">
 
    

    <div class="hero-container">

    		<div class="col-sm-10" id="main" style="padding-top: 20px;">
					<div class="col-sm-4">
						<?php echo form_open('Signup_con/register_customer'); ?>	

					
<br>										
<p style=" color: white; font-size: 30px;font-weight: 500; padding-left:11em">Registration</p>
<div class="w3ls-main">
<div class="w3ls-form">
<form action="#" method="post">
<ul class="fields">
	
<div class="top-row">
            <div class="field-wrap">
	<li>	
		<label class="w3ls-opt">First Name :<span class=""> * </span></label>
		
			<input id="First_Name" type="text" name="First_Name" placeholder="First Name" required=" "/>
		
	</li>
</div>
            <div class="field-wrap">

	<li>	
		<label class="w3ls-opt">Last Name :<span class=""> * </span></label>
		
			<input id="Last_Name" type="text" name="Last_Name"  placeholder="Last Name" required=" "/>
	
	</li>
</div></div>

	<li>
		
			<label class="w3ls-opt">e-mail :<span class=""> * </span></label>
			<span class="w3ls-text w3ls-name">
				<input id="Email" type="email" name="Email"  placeholder="Email" required=""/>
			</span>
		
	</li>
	
	<li>
		<label class="w3ls-opt">Userame :<span class=""> * </span></label>	
			<span class="w3ls-text w3ls-name">
						<input id="Username" type="text" name="Username" placeholder="Username" required=""/>
			</span>
	</li>
	<li>
		<label class="w3ls-opt">Password :<span class=""> * </span></label>	
			<span class="w3ls-password w3ls-name">
			<input  id="Password" type="Password" name="Password" placeholder="Password" required=""/>
			</span>
	</li>
	<li>
		<label class="w3ls-opt"> Repeat Password :<span class=""> * </span></label>	
			<span class="w3ls-password w3ls-name">
			<input  id="Password" type="Password" name="repeat_password" placeholder="Password" required=""/>
			</span>
	</li>
						<div class="wthree-text">
						
					</div>
	
</ul>
<div class="clear"></div>
	<div class="w3ls-btn">


		<input type="submit" name="submit_account" value="Submit Application">
	

	</div>
</form>
</div>
</div>
</div>
</div>
</div>
  </section><!-- #hero -->

  <main id="main">
