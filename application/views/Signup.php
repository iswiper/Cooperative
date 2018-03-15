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
					<?php echo $this->session->flashdata('errorMessage');?>
					<?php echo $this->session->flashdata('successMessage');?>
					<?php echo form_open('Signup_con/register_customer'); ?>	
<p style=" color: white; font-size: 30px;font-weight: 500;">Register</p>
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
		<label class="w3ls-opt">phone number :<span class=""> * </span></label>	
			<span class="w3ls-text w3ls-name">
						<input id="Phone" maxlength="11" type="text" name="Phone" placeholder="Phone Number" required=""/>
			</span>
	</li>
	<li>
		<label class="w3ls-opt">Address :<span class=""> * </span></label>	
			<span class="w3ls-text w3ls-name">
						<input id="Address" type="text" name="Address" placeholder="Address" required=""/>
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
	<li>
							<label class="w3ls-opt">Birth Date :<span class=""> * </span></label>	
							<div class="w3ls-text w3ls-name">
								<span class="agile_sub-label">
									<select name="day" class="day">
										<option>Day</option>
										<option name="day" value="1"> 1 </option>
										<option name="day" value="2"> 2 </option>
										<option name="day" value="3"> 3 </option>
										<option name="day" value="4"> 4 </option>
										<option name="day" value="5"> 5 </option>
										<option name="day" value="6"> 6 </option>
										<option name="day" value="7"> 7 </option>
										<option name="day" value="8"> 8 </option>
										<option name="day" value="9"> 9 </option>
										<option name="day" value="10"> 10 </option>
										<option name="day" value="11"> 11 </option>
										<option name="day" value="12"> 12 </option>
										<option name="day" value="13"> 13 </option>
										<option name="day" value="14"> 14 </option>
										<option name="day" value="15"> 15 </option>
										<option name="day" value="16"> 16 </option>
										<option name="day" value="17"> 17 </option>
										<option name="day" value="18"> 18 </option>
										<option name="day" value="19"> 19 </option>
										<option name="day" value="20"> 20 </option>
										<option name="day" value="21"> 21 </option>
										<option name="day" value="22"> 22 </option>
										<option name="day" value="23"> 23 </option>
										<option name="day" value="24"> 24 </option>
										<option name="day" value="25"> 25 </option>
										<option name="day" value="26"> 26 </option>
										<option name="day" value="27"> 27 </option>
										<option name="day" value="28"> 28 </option>
										<option name="day" value="29"> 29 </option>
										<option name="day" value="30"> 30 </option>
										<option name="day" value="31"> 31 </option>
									</select>
									
								</span>
								<span class="agile_sub-label xxx">
									<select name="month" class="month">
										<option>Month</option>
										<option name="month" value="January"> January </option>
										<option name="month" value="February"> February </option>
										<option name="month" value="March"> March </option>
										<option name="month" value="April"> April </option>
										<option name="month" value="May"> May </option>
										<option name="month" value="June"> June </option>
										<option name="month" value="July"> July </option>
										<option name="month" value="August"> August </option>
										<option name="month" value="September"> September </option>
										<option name="month" value="October"> October </option>
										<option name="month" value="November"> November </option>
										<option name="month" value="December"> December </option>
									 </select>
									
								</span>
								<span class="agile_sub-label">
									<input type="text" class="year" name="year" placeholder=" Enter Year" required="">
									
								</span>
								<div class="clear"></div>
							</div>
						</li>
						<div class="wthree-text">
						
					</div>
	
</ul>
<div class="clear"></div>
	<div class="w3ls-btn">

		<input type="submit" value="Submit Application">

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