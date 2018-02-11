<!DOCTYPE html>


  <meta charset="UTF-8">
  <title>Sign-Up Form</title>
 
  
  <link rel="stylesheet" href="assets/css/style.css">


	  
	<div class="form"> 
	  
      
		
	
	<div id="signup">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
    <h1>Sign Up and earn points!</h1>

	<div class="top-row">
	<div class="field-wrap">
              <input type="text" name="fname" placeholder="First Name">
	  <br>
      <span class="error"></span>
    </div>
	
	<div class="field-wrap">
              <input type="text" placeholder="Last Name" name="lname" ">
	  <br>
      <span class="error"></span>
    </div>
	</div>
	    
	
	<div class="field-wrap">
              <input type="text" placeholder="Username" name="username" ">
	  <br>
      <span class="error"></span>
    </div>
	
	
	<div class="field-wrap">
              <input type="password" placeholder="Password" name="password" ">
	  <br>
      <span class="error"></span>
    </div>
    
	
	<div class="field-wrap">
              <input type="password" placeholder="Confirm Password" name="cpassword" ">
	  <br>
      <span class="error"></span>
    </div>
	

	
	<div class ="field-wrap">
			<br><select name="gender">
			<option name="gender" value="" disabled selected hidden>Select Gender</option>
			<option name="gender"  >Male</option>
			<option name="gender" >Female</option>
			
		</select>	
		<span class="error"></span><br>
    </div>
	
	
	<div class="field-wrap">
              <input type="text" name="digit" placeholder="Mobile Number" maxlength="11" ">
	  <br>
      <span class="error"></span>
    </div>
	
    
      <button name="btnRegister" value="Register" type="submit" class="button button-block">Submit</button>
    
	<div class="success"></div>
  </form>
</div>
</div>

</form>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="design/js/index.js"></script>

