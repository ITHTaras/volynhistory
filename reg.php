<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VolynHistory</title>	
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
			<form method="POST" class="form-signin col-10 col-sm-10 col-md-5 col-lg-5">
		      <h1 class="h3 mb-3 font-weight-normal">Реєстрація</h1>
		      <label for="inputEmail" class="sr-only">Логін</label>
		      <input name="login" type="text" id="inputEmail" class="form-control col-12 col-sm-12 col-md-6 col-lg-6" placeholder="Логін..." required="" autofocus="">
		      <label for="inputPassword" class="sr-only">Пароль</label>
		      <input name="pass" type="password" id="inputPassword" class="form-control col-12 col-sm-12 col-md-6 col-lg-6" placeholder="Пароль..." required="">
		      <label class="sr-only"><a href="authForm.html">Ви вже зареєстровані? Увійдіть.</a></label><br>
		      <button name="sub" class="sub btn btn-lg btn-primary btn-block" type="submit">Підтвердити</button>
		      <p class="mt-5 mb-3 text-muted">© 2021-2022</p>
		    </form>
		    <?php
		    	if(isset($_POST["sub"])) {
		    		$login = htmlspecialchars($_POST["login"]);
		    		$pass = md5($_POST["pass"]."oqiwrcgyump2345");
		    		$mysqli = new mysqli("localhost", 
      "root", "", "vh");
				    $mysqli->query ("SET NAMES 'utf-8'");
				    $result_set = $mysqli->query("INSERT INTO `users` (login, pass) VALUES ('$login', '$pass')");
				    if($result_set == 1) echo"
					     <div class=\"res\">
					    	<h4 class=\"text-success\">Реєстрація пройшла успішно. <a href=\"authForm.html\">Увійдіть.</a></h4>
					    </div>";
					else echo"
						<div class=\"resFalse\">
					    	<h4 class=\"text-danger\">Користувач з таким псевдонімом уже існує. Виберіть інше ім'я.</h4>
					    </div>";
				    $mysqli->close();
				    ?>
				    
				    <?php
		    	}
		    ?>
		</div>
	</div>
	<style type="text/css">
		.resFalse{
			text-align: center;
		}
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