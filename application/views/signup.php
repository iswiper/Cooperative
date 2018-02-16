<!DOCTYPE html>
<?php include('validation.php');?>

  <meta charset="UTF-8">
  <title>Sign-Up Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  <link rel="stylesheet" href="design/css/style.css">


	  
	<div class="form"> 
	  
      
		
	
	<div id="signup">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
    <h1>Sign Up and earn points!</h1>

	<div class="top-row">
	<div class="field-wrap">
              <input type="text" 
			  name="fname" placeholder="First Name" value="<?= $fname ?>">
	  <br>
      <span class="error"><?= $fname_err ?></span>
    </div>
	
	<div class="field-wrap">
              <input type="text" placeholder="Last Name" name="lname" value="<?= $lname ?>">
	  <br>
      <span class="error"><?= $lname_err ?></span>
    </div>
	</div>
	    
	
	<div class="field-wrap">
              <input type="text" placeholder="Username" name="username" value="<?= $username ?>">
	  <br>
      <span class="error"><?= $username_err ?></span>
    </div>
	
	
	<div class="field-wrap">
              <input type="password" placeholder="Password" name="password" value="<?= $password ?>">
	  <br>
      <span class="error"><?= $password_err ?></span>
    </div>
    
	
	<div class="field-wrap">
              <input type="password" placeholder="Confirm Password" name="cpassword" value="<?= $cpassword ?>">
	  <br>
      <span class="error"><?= $cpassword_err ?></span>
    </div>
	

	
	<div class ="field-wrap">
			<br><select name="gender">
			<option name="gender" value="" disabled selected hidden>Select Gender</option>
			<option name="gender" value="Male" <?php if($gender == "Male") {echo "selected";} ?> >Male</option>
			<option name="gender" value="Female" <?php if($gender == "Female"){echo "selected";}?> >Female</option>
			
		</select>	
		<span class="error"><?php echo $gender_err; ?></span><br>
    </div>
	
	
	<div class="field-wrap">
              <input type="text" name="digit" placeholder="Mobile Number" maxlength="11" value="<?= $digit?>">
	  <br>
      <span class="error"><?= $digitErr ?></span>
    </div>
	
    
      <button name="btnRegister" value="Register" type="submit" class="button button-block">Submit</button>
    
	<div class="success"></div>
  </form>
</div>
</div>

</form>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="design/js/index.js"></script>

