<?php
        ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);
	$mysqli = new mysqli("localhost", 
      "root", "", "vh");
		    	
	$mysqli->query ("SET NAMES 'UTF-8'");

	$login = htmlspecialchars($_POST["login"]);
	$pass = $_POST["pass"];
	$pass = md5($pass."oqiwrcgyump2345");
	
	$result = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
	$user = $result->fetch_assoc();
		if(count($user) == 0) {
			echo "<h1 style=\"color: red;text-align: center\" class=\"text-danger\">Неправильний логін або пароль.</h1>";
		}
		    
	$mysqli->close();
	setcookie('user', $user['login'], time() + 3600, "/");
	header('Location: /');
?>