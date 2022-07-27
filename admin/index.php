<?php 
if($_COOKIE['admin'] === 'admin') {
	header('Location: /admin/admin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LutskHistory</title>	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css\fonts.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    </style>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" media="screen,projection" href="/css/ui.totop.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Авторизація</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<form action="auth.php" method="POST" class="form-signin col-10 col-sm-10 col-md-5 col-lg-5">
		      <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
		      <label for="inputPassword" class="sr-only">Password</label>
		      <input name="pass" type="password" id="inputPassword" class="form-control col-12 col-sm-12 col-md-6 col-lg-6" placeholder="Password..." required="">
		      <br>
		      <button name="sub" class="sub btn btn-lg btn-primary btn-block" type="submit">Submit</button>
		      <p class="mt-5 mb-3 text-muted">© 2021-2022</p>
		    </form>

		</div>
	</div>
	<style type="text/css">
	@media only screen and (min-width: 768px) {
		form{
			text-align: center;
			margin: 0 0 0 29%;
		}
	}
	@media only screen and (max-width: 768px) {
		form{
			text-align: center;
			margin: 0 0 0 9%;
		}
	}
		
		body{
			margin-top: 16%;
			text-align: center;
		}
		.sub{
			margin-top: 2%;
		}
	</style>
</body>
</html>