<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Sign-Up Form</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
 <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/index.js'); ?>"></script>

</head>
<body>  
      
  <div class="form"> 
  <div id="signup">
	<form  method="post"  action="<?php echo site_url('Register/register_form'); ?>">
    
  <h1>Sign Up and earn points!</h1>

	<div class="top-row">
	<div class="field-wrap">
       <input type="text" name="fname" id="fname" placeholder="First Name" ><br/><span id="fname_err"></span>
  </div>
	
	<div class="field-wrap">
    <input type="text" placeholder="Last Name" name="lname" id="lname" ><br><span id="lname_err"></span>
  </div>
	</div>
	
	<div class="field-wrap">
    <input type="text" placeholder="Username" name="username" id="username"><br><span id="uname_err"></span>
  </div>
	<div class="field-wrap">
    <input type="password" placeholder="Password" name="password" id="password" ><br><span id="pass_err"></span>
  </div>
	<div class="field-wrap">
    <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword" ><br><span id="cpass_err"></span>
  </div>
	<div class ="field-wrap">
    <select name="gender">
		<option name="gender" value="" disabled selected hidden>Select Gender</option>
		<option name="gender" id="gender" value="Male">Male</option>
		<option name="gender"  id="gender" value="Female">Female</option>
		</select>	
    <span id="gender_err"></span>
  </div>
	<div class="field-wrap">
    <input type="text" name="digit" id="digit"  placeholder="Mobile Number" maxlength="11" ><br ><span id="num_err"></span>
  </div>
 <!-- <script>
  window.onload = function(){
    function handleinput(){
        if(document.signup.fname.value == ""){
            document.getElementById("fname_err").innerHTML = "This Field is Required";
            return false;
        }
         if(document.signup.lname.value == ""){
            document.getElementById("lname_err").innerHTML = "This Field is Required";
            return false;
        }        if(document.signup.uname.value == ""){
            document.getElementById("uname_err").innerHTML = "This Field is Required";
            return false;
        }        if(document.signup.password.value == ""){
            document.getElementById("pass_err").innerHTML = "This Field is Required";
            return false;
        }
        if(document.signup.cpassword.value == ""){
            document.getElementById("cpass_err").innerHTML = "This Field is Required";
            return false;
        }
        if(document.signup.gender.value == ""){
            document.getElementById("gender_err").innerHTML = "This Field is Required";
            return false;
        }
        if(document.signup.digit.value == ""){
            document.getElementById("num_err").innerHTML = "This Field is Required";
            return false;
        }
    }
    document.getElementById("signup").onsubmit = handleinput;
</script>-->
	<input  name="btnRegister" value="Sign Up" type="submit" class="button button-block">
<div class="success"></div>
  </form>
</div>
</body>
</html>

