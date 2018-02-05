<?php

session_start();


if(isset($_SESSION["id_customer"])){

		$user_id = $_SESSION["id_customer"];
		include("../connections.php");
	
		$get_record =mysqli_query($connections,"SELECT * FROM customertbl WHERE id_customer = '$user_id'");
		while($row_edit = mysqli_fetch_assoc($get_record)){
			
			$db_name = $row_edit["first_name"];
			$db_address = $row_edit["last_name"];
			$db_email = $row_edit["username"];
			
		}
		
			echo "welcome $db_name &nbsp $db_email &nbsp<a href = 'logout.php'>Logout</a>";
}
else{
	
	echo "You must Login First<a href = '../login.php'>Login now</a>";
	
}


?>