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
?>
<?php
if($is_admin === "ok") {
	if(isset($_POST['sub'])) {
		$title = $_POST['title'];
	    $intro_text = $_POST["intro_text"];
	    $full_text = $_POST["full_text"];
	    $past_history = $_POST["past_history"];
	    $mysqli = new mysqli("fdb31.biz.nf", 
      "4053530_wassa", "taras_2008)", "4053530_wassa");

		$mysqli->query ("SET NAMES 'utf-8'");
		$res = "UPDATE arts SET title = '$title', intro_text = '$intro_text', full_text = '$full_text', past_history = '$past_history' WHERE id = '$id'";
		$mysqli->query ($res);
		echo "<h3 class=\"text-success\">Зміни до статті \"$title\" було успішно внесено.<br>Щоб повернутись на головну сторінку, натисніть <a href='/'>тут</a>.</h3>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Редагування - <?=$title?></title>
	<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" media="screen,projection" href="/css/ui.totop.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		body{
			margin: 40px 0 40px 0;
			text-align: center;
		}
		h3{
			margin-top: 40px;
		}
		#sub{
			margin-top: 20px;
		}
	</style>
	<h3 class="text-info">Редагування - <?=$title?></h3>
	<?php 
		if($is_admin == "ok") { ?>
			<form method="POST">
				<div class="container">
					<div class="row">
						<h3>Редагування заголовку</h3>
						<input value="<?=$title?>" name="title" type="text" id="title" class="form-control col-6" required="" autofocus="">
					</div>
				</div>
				<h3>Редагування вступного тексту</h3>
		    	<textarea name="intro_text" id="intro_text" rows="10" cols="80">
		            <?=$arts["intro_text"]?>
		        </textarea>
		        <h3>Редагування повного тексту</h3>
		    	<textarea name="full_text" id="full_text" rows="10" cols="80">
		            <?=$arts["full_text"]?>
		        </textarea>
		        <h3>Редагування історії місця</h3>
		        <textarea name="past_history" id="past_history" rows="10" cols="80">
		            <?=$arts["past_history"]?>
		        </textarea><br>

<script src="/ckeditor/ckeditor.js" type="text/javascript"></script>
<textarea id="text" name="text"></textarea>

<script>
        CKEDITOR.replace( 'text',{}); 
</script>

		        <button class="btn btn-lg btn-primary btn-block" name="sub" id="sub">Підтвердити</button>
		    </form>
			<?php
		}
		else echo "<h3 class=\"text-danger\">Ви не авторизовані як адмiнiстратор!</h3>";
	?>
        <script>
            CKEDITOR.replace( 'intro_text' );
            CKEDITOR.replace( 'full_text' );
            CKEDITOR.replace( 'past_history' );
        </script>
        
</body>
</html>