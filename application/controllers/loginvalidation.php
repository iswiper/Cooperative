<?php

include("connections.php");

$fname = $lname = $username = $password = $cpassword = $gender = $digit = "";
$fname_err = $lname_err = $username_err = $password_err = $cpassword_err = $gender_err = $digitErr = "";

if(isset($_POST["btnRegister"])){
		
			if(empty($_POST["username"])){
				$username_err= "This Field is Required";
			}
			else{
			$username = $_POST["username"];
			}
	}

if(isset($_POST["btnRegister"])){
		
			if(empty($_POST["password"])){
				$password_err= "This Field is Required";
			}
			else{
			$password = $_POST["password"];
			}
	}	
	
	
	
	if($username && $password){
		include("connections.php");
		$check_email = mysqli_query($connections, "SELECT * FROM customertbl WHERE username = '$username'");
		$check_email_row = mysqli_num_rows($check_email);		
		
			if($check_email_row > 0){
					while($row = mysqli_fetch_assoc($check_email)){
						
						$user_id = $row["id_customer"];
						$db_password = $row["password"];
						$db_account_type = $row["account_type"];				
								
								if($password == $db_password){
										
										session_start();
										$_SESSION["id_customer"] = $user_id; 
										
										if($db_account_type == "1"){	
											echo"<script>window.location.href='admin';</script>";
										}
										else{
											echo"<script>window.location.href='user';</script>";
										}	
								}
								
								else{
									$password_err = "Password is incorect";
								}
				
			}	
				
	}
	
	else{
			$username_err = "Email is not yet registered";
	}
}	
	
?>
