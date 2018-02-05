<?php

include("connections.php");

$fname = $lname = $username = $password = $cpassword = $gender = $digit = "";
$fname_err = $lname_err = $username_err = $password_err = $cpassword_err = $gender_err = $digitErr = "";
	
	if(isset($_POST["btnRegister"])){
		
			if(empty($_POST["fname"])){
				$fname_err= "This Field is Required";
			}
			else{
			$fname = $_POST["fname"];
			}
	}	
		
	if(isset($_POST["btnRegister"])){
			if(empty($_POST["lname"])){
					$lname_err= "This Field is Required";
			}
			else{
				$lname = $_POST["lname"];
			}
	}	
	
	if(isset($_POST["btnRegister"])){
			if(empty($_POST["username"])){
				$username_err= "This field is Required";	
			}
			
			else{
				$username = $_POST["username"];
			}
	}
	
	if(isset($_POST["btnRegister"])){
			if(empty($_POST["password"])){
				$password_err = "This Field is Required";
			}	
			
			else{
				$password = $_POST["password"];
			}
	}
	
	if(isset($_POST["btnRegister"])){
			if(empty($_POST["cpassword"])){
				$cpassword_err = "This Field is Required";
			}
		
			else{
				$cpassword = $_POST["cpassword"];
			}
	}
	
	if(isset($_POST["btnRegister"])){
		if(empty($_POST["gender"])){
			$gender_err = "This Field is Required";
		}
		
		else{
			$gender = $_POST["gender"];
		}
		
	}
	
	if(isset($_POST["btnRegister"])){
		if(empty($_POST["digit"])){
			$digitErr = "This Field is Required";
		}
		else{
			$digit = $_POST["digit"];
		}
	}
	
	
	if($fname && $lname && $username && $password && $cpassword && $gender && $digit){
		if(!preg_match("/^[a-zA-Z ]*$/",$fname)){
				$fname_err = "Only letters and white space allowed";
		}
		
		else{
		if(!preg_match("/^[a-zA-Z ]*$/",$lname)){
				$lname_err = "Only letters and white space allowed";
		}
		
		else{
		if(!preg_match("/^[0-9 ]*$/",$digit)){
				$digitErr = "Only Numbers are allowed";
		}
		
		else{
			$count_first_name_string = strlen($fname);
			if($count_first_name_string < 2){
				$fname_err = "First Name is too short";
			}
		
		else{
			$count_last_name_string = strlen($lname);
			if($count_last_name_string < 2){
				$lname_err = "Last Name is too short";
			}
		
		else{
			$count_Phone_string = strlen($digit);
			if($count_Phone_string < 11){
				$digitErr = "Phone Number must be 11 digits";
			}	
		
		else{
		
			if($password != $cpassword){
				$cpassword_err = "Password dont match";
			}
		
		else{
			$pass_string = strlen($password);
			if($pass_string < 8){
				$password_err = "Password should contain atleast 8 characters";
		}
		
	
		else{
		
		$user_check = mysqli_query($connections,"SELECT * FROM customertbl WHERE username='$username'");
		$user_check_row = mysqli_num_rows($user_check);
		if($user_check_row > 0){	
			$username_err = "Email is Already Registered";
		}
		
		
		
		else{
			mysqli_query($connections, "INSERT INTO customertbl(first_name,last_name,gender,mobile,username,password,account_type) 
			
			VALUES('$fname','$lname','$gender','$digit','$username','$cpassword','2')");
			
			echo "<script language = 'javascript'>alert('New Record has been Added')</script>";
			echo "<script language>window.location.href='Index.php';</script>";
		
		
			
		}
		}
		
		
		}
		}
	}	
	}
	}
	}
	}
	}
	
	
	
?>