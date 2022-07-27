<?php
	$mysqli = new mysqli("localhost", 
      "root", "", "vh");

  	$mysqli->query ("SET NAMES 'utf-8'");
	if(isset($_POST['sub']) && $_COOKIE['admin'] === "admin" && 
			$_COOKIE['user'] === "admin") {
		$arr = $_POST['checkbox'];
		foreach ($arr as $id) {
		  $mysqli->query("DELETE FROM `arts` WHERE `id` = ".$id);
		}
	}
	$mysqli->close();
	header('Location: /admin/removeArt.php');
?>