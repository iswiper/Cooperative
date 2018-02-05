<!DOCTYPE html>
<?php include('loginvalidation.php');?>

<meta charset="UTF-8">
  <title>Sign-Up Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  <link rel="stylesheet" href="design/css/style.css">


<style>
	.error{
		color: red;
	}
</style>



<div class="form">

<div id="signup">   
          <h1>Welcome</h1>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


<div class="field-wrap">
              <input type="text" name="username" placeholder="Username" value="<?= $username ?>">
			<br>
			<span class="error"><?= $username_err ?></span>
</div>


<div class="field-wrap">
              <input type="password" name="password" placeholder="Password" value="<?= $password ?>">
			<br>
			<span class="error"><?= $password_err ?></span>
</div>






<input name="btnRegister" value="Login" type= "submit" class="button button-block"/>



</form>

</div>
</div>
