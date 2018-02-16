<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />

</head>
<body>
<style>
	.error{
		color: red;
	}
</style>
<div class="form">
<div id="signup">   
<h1>Welcome</h1>

<form action='<?php echo base_url();?>login/process' method="post" name="process">
<div class="field-wrap">
<input type="text" name="username" placeholder="Username"><br>
</div>

<div class="field-wrap">
<input type="password" name="password" placeholder="Password"><br>			
</div>
<input name="btnRegister" value="Login" type= "submit" class="button button-block"/>
</form>

</div>
</div>

</body>
</html>>