<?php

session_start();

unset($_SESSION['id_customer']);
session_unset();
session_destroy();
echo"Logging out... Please Wait .. ";
header('Refresh: 2; url=../login.php');
exit();

?>

