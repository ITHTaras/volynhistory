<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" media="screen,projection" href="/css/ui.totop.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<?php 
		function adminList()
		{
			?>
				<p class="link"><a href="/add.php">Insert</a></p>
				<p class="link"><a href="/admin/rewriteArt.php">Change</a></p>
				<p class="link"><a class="text-danger" href="/admin/removeArt.php">Remove</a></p>
			<?php
		}
		$is_admin = "no";
		if($_COOKIE['admin'] === "admin" && 
			$_COOKIE['user'] === "admin") {
			$is_admin = "ok";
		}
		else $is_admin = "no";
		if($is_admin === "ok") {
			adminList();
		}
		else echo "<p><a href=\"/\" class=\"no text-warning\">Невірний пароль!</a></p>"
	?>
</body>
<style type="text/css">
	.no{
		font-weight: bold;
		font-size: 4em;
	}
	a{
		text-decoration: none;
	}
	body{
		text-align: center
	}
	.link{
		font-size: 1.1em;
	}
</style>
</html>