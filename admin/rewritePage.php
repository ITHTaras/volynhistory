<?php
	$id = $_GET["id"];

	require_once("funcs/func.php");

	$arts = getArts(1, $id); 
  	$title = $arts["title"];

  	$is_admin = "no";

	if($_COOKIE['admin'] === "admin" && 
		$_COOKIE['user'] === "admin") {
		$is_admin = "ok";
	}
	else $is_admin = "no";
        include_once("header.php");
?>
<?php
if($is_admin === "ok") {
	if(isset($_POST['sub'])) {
		$title = $_POST['title'];
	    $intro_text = $_POST["intro_text"];
            $chars = array("<p>", "</p>" );
	    $full_text = str_replace($chars, "", $_POST["full_text"]);
	    $past_history = $_POST["past_history"];
	    $mysqli = new mysqli("localhost", 
      "root", "", "vh");

		$mysqli->query ("SET NAMES 'utf-8'");
		$res = "UPDATE arts SET title = '$title', intro_text = '$intro_text', full_text = '$full_text', past_history = '$past_history' WHERE id = '$id'";
		$mysqli->query ($res);
		echo "<h3 class=\"text-success\">Зміни до статті \"$title\" було успішно внесено.<br>Щоб повернутись на головну сторінку, натисніть <a href='/'>тут</a>.</h3>";
    }
}
?>
<head>
	<title>Редагування - <?=$title?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" media="screen,projection" href="/css/ui.totop.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
</head>
<body>
	<style type="text/css">
                @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
		body{
			margin: 40px 0 40px 0;
			text-align: center;
		}
                a{text-decoration: none;}
		h3{
			margin-top: 40px;
                        
		}
		#sub{
			margin-top: 20px;
		}
                textarea{
                    width: 80%;
                }
                .search{
        width: 70%;
        float: left;
      }
      .features{
        padding-left: 23em;
      }
      .searchIt {
        margin-left: 3%;
      }
      .link:hover {
  -webkit-mask-image: linear-gradient(-75deg, rgba(0,0,0,.6) 30%, #000 50%, rgba(0,0,0,.6) 70%);
  -webkit-mask-size: 200%;
  animation: shine 2s infinite;
}

@-webkit-keyframes shine {
  from {
    -webkit-mask-position: 150%;
  }
  
  to {
    -webkit-mask-position: -50%;
  }
}
	</style>
	<h3 class="text-info">Редагування - <?=$title?></h3>
	<?php 
        
		if($is_admin == "ok") { ?>
			<form method="POST">
                            <center>
				<div class="container">
					<div class="row">
						<h3>Редагування заголовку</h3>
						<input value="<?=$title?>" name="title" type="text" id="title" class="form-control col-6" required="" autofocus="">
					</div>
				</div>
				<h3>Редагування вступного тексту</h3>
		    	<textarea name="intro_text" id="intro_text" rows="10" cols="80"><?=$arts["intro_text"]?></textarea>
		        <h3>Редагування повного тексту</h3>
		    	<textarea name="full_text" id="full_text" rows="10" cols="80">
		            <?=$arts["full_text"]?>
		        </textarea>
		        <h3>Редагування історії місця</h3><textarea name="past_history" id="past_history" rows="10" cols="80"><?=$arts["past_history"]?></textarea><br>

<script src="/ckeditor/ckeditor.js" type="text/javascript"></script>

		        <button class="btn btn-lg btn-primary btn-block" name="sub" id="sub">Підтвердити</button>
                        </center>
		    </form>
			<?php
		}
		else echo "<h3 class=\"text-danger\">Ви не авторизовані як адмiнiстратор!</h3>";
	?>
        <script>
            CKEDITOR.replace( 'full_text' );
        </script>
        
</body>
</html>