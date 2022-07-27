<?php
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);
	$mysqli = new mysqli("localhost", 
      "root", "", "vh");
		    	
	$mysqli->query ("SET NAMES 'utf-8'");

	$pass = $_POST["pass"];
	$pass = md5($pass."oqiwrcgyump2345");
	
	$result = $mysqli->query("SELECT * FROM `admin` WHERE `pass` = '$pass'");
	$admin = $result->fetch_assoc();
		if(count($admin) == 0) {
			echo "<h1 style=\"color: red;text-align: center\" class=\"text-danger\">Неправильний пароль.</h1>";
		}
		    
	$mysqli->close();
	setcookie('admin', "admin", time() + 3600, "/");
	header('Location: /admin/admin.php');
?>