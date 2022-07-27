<?php 
                        include_once 'snow.php';
			$i = 0;
			$s = "";
			$point = "";
			$answerOne = 	intval($_POST["answerOne"]);
			$answerTwo =    intval($_POST["answerTwo"]);
			$answerThree =  intval($_POST["answerThree"]);
			$answerFour =   intval($_POST["answerFour"]);
			$answerFive =   intval($_POST["answerFive"]);
			$answerSix =    intval($_POST["answerSix"]);
			$answerSeven =  intval($_POST["answerSeven"]);
			$answerEight =  intval($_POST["answerEight"]);
			$answerNine =   intval($_POST["answerNine"]);
			$answerTen =    intval($_POST["answerTen"]);
			$answerEleven = intval($_POST["answerEleven"]);
			$answerTwelve = intval($_POST["answerTwelve"]);
			$ba1 = 0;
			$ba2 = 0;
			$ba3 = 0;
			$ba4 = 0;
			$ba5 = 0;
			$ba6 = 0;
			$ba7 = 0;
			$ba8 = 0;
			$ba9 = 0;
			$ba10 = 0;
			$ba11 = 0;
			$ba12 = 0;
			$green = "color: green;";
			$red = "color: red;";
			$borderGreen = "border-color: green;";
			$borderRed = "border-color: red;";
			if ($answerOne == 4) {
				$i++;
				$ba1 = 1;
			}
			if ($answerTwo == 21) {
				$i++;
				$ba2 = 1;
			}
			if ($answerThree == 12) {
				$i++;
				$ba3 = 1;
			}
			if ($answerFour == 60) {
				$i++;
				$ba4 = 1;
			}
			if ($answerFive == 27) {
				$i++;
				$ba5 = 1;
			}
			if ($answerSix == 1) {
				$i++;
				$ba6 = 1;
			}
			if ($answerSeven == 1) {
				$i++;
				$ba7 = 1;
			}
			if ($answerEight == 10) {
				$i++;
				$ba8 = 1;
			}
			if ($answerNine == 6) {
				$i++;
				$ba9 = 1;
			}
			if ($answerTen == 1) {
				$i++;
				$ba10 = 1;
			}
			if ($answerEleven == 1) {
				$i++;
				$ba11 = 1;
			}
			if ($answerTwelve == 49) {
				$i++;
				$ba12 = 1;
			}
			//--------------------------------
			if ($answerOne == "") {
				$answerOne = "немає";
			}
			if ($answerTwo == "") {
				$answerTwo = "немає";
			}
			if ($answerThree == "") {
				$answerThree = "немає";
			}
			if ($answerFour == "") {
				$answerFour = "немає";
			}
			if ($answerFive == "") {
				$answerFive = "немає";
			}
			if ($answerSix == "") {
				$answerSix = "немає";
			}
			if ($answerSeven == "") {
				$answerSeven = "немає";
			}
			if ($answerEight == "") {
				$answerEight = "немає";
			}
			if ($answerNine == "") {
				$answerNine = "немає";
			}
			if ($answerTen == "") {
				$answerTen = "немає";
			}
			if ($answerEleven == "") {
				$answerEleven = "немає";
			}
			if ($answerTwelve == "") {
				$answerTwelve = "немає";
			}

			if($i == 12) { 
				$s = "На такому високому рівні тобі тут нічого робити!";
				$point = " балів.";
			}
			if($i >= 10 && $i < 12) { 
				$s = "Ще трохи до вершини!";
				$point = " балів.";
			}
			if($i >= 7 && $i < 10) { 
				$s = "Можливо, варто переглянути кілька вправ.";
				$point = " балів.";
			}
			if($i < 7) { 
				$s = "Тобі варто більше уваги приділяти математиці.";
				$point = " балів.";
			}
			if($i > 1 && $i < 5) { 
				$s = "Тобі варто більше уваги приділяти математиці.";
				$point = " бали.";
			}
			if($i == 1) { 
				$s = "Тобі варто більше уваги приділяти математиці.";
				$point = " бал.";
			}
			if($i == 0) {
				$s = "Тобі варто більше уваги приділяти математиці.";
				$point = " балів.";
			}
	?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="pictures/fireicon.ico" type="image/x-icon"> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="headfoot.css">
    <link rel="stylesheet" href="css\fonts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/headfoot.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
    <link rel="shortcut icon" href="pictures/fireicon.ico" type="image/x-icon"> 
    <link rel="stylesheet" media="screen,projection" href="/css/ui.totop.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<style type="text/css">
		h1{
			text-align: center;
		}
		body{
			margin-bottom: 30px;
		}
		@media only screen and (min-width:  1000px) {
			.exercise{
				border: 1px solid rgba(0,0,0,.125);
				padding: 0;
				margin: 0;
				border-radius: 7px;
				margin-left: 25%;
				margin-top: 2%;
				transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    border-radius: 10px;
			}
			.exercise:hover{
			width: 54%;
			transform: scale(1.1);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        margin-left: 23%;
		}
		}
		@media only screen and (max-width:  1000px) {
			.exercise{
    			width: 80%;
				border: 1px solid rgba(0,0,0,.125);
				padding: 0;
				margin: 0;
				margin-left: 10%;
				border-radius: 7px;
				margin-top: 2%;
				transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    border-radius: 10px;
			}
			.exercise:hover{
				width: 85%;
				transform: scale(1.1);
        		-webkit-transform: scale(1.1);
        		-moz-transform: scale(1.1);
        		margin-left: 7.5%;
			}
		}
		.exHead{
			background-color: rgba(0,0,0,.03);
			border-bottom: 1px solid rgba(0,0,0,.125);
		}
		.exHead h4{
			margin-left: 15px;
		}
		.exBody{
			padding-left: 15px;
			padding-right: 15px;
		}
		.correctAnswer{
			color: green;
			font-size: 2rem;
		}
		.exFooter{
			text-align: right;
			border-top: 1px solid rgba(0,0,0,.125);
			background-color: rgba(0,0,0,.03);
			padding-right: 15px;
		}
	</style>
	<h1>Вітаємо! Ви завершили тест.<br>Ваша оцінка - 
		<?php echo "$i $point $s" ?></h1>
	<div class="container">
		<!--1-->
		<div class="row">
			<div class="exercise col col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6" style="<?php echo($ba1 == 1 ? $borderGreen : $borderRed)?>">
				<div class="exHead" style="<?php echo($ba1 == 1 ? $borderGreen : $borderRed)?>">
					<h4><b>1.</b></h4>
				</div>
				<div class="exBody">
					<p><b>Завдання:</b></p>
					<p><b>2 + 2 = ?</b></p>
					<h5 class="correctAnswer"><b>Правильна відповідь: 4<b/></h5>
					<h5 class="userAnswer">Ваша відповідь: <b class="userAnswerNumber" style="<?php echo ($ba1 == 1 ? $green : $red) ?>"><?=$answerOne?></b></h5>
				</div>
				<div class="exFooter">
					<p><?=intval($ba1)."/1б."?></p>
				</div>
			</div>
		</div>
		<!--2-->
		<div class="row">
			<div class="exercise col col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6" style="<?php echo($ba2 == 1 ? $borderGreen : $borderRed)?>">
				<div class="exHead" style="<?php echo($ba2 == 1 ? $borderGreen : $borderRed)?>">
					<h4><b>2.</b></h4>
				</div>
				<div class="exBody">
					<p><b>Завдання:</b></p>
					<p><b>18 + 3 = ?</b></p>
					<h5 class="correctAnswer"><b>Правильна відповідь: 21<b/></h5>
					<h5 class="userAnswer">Ваша відповідь: <b class="userAnswerNumber" style="<?php echo ($ba2 == 1 ? $green : $red) ?>"><?=$answerTwo?></b></h5>
				</div>
				<div class="exFooter">
					<p><?=intval($ba2)."/1б."?></p>
				</div>
			</div>
		</div>
		<!--3-->
		<div class="row">
			<div class="exercise col col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6" style="<?php echo($ba3 == 1 ? $borderGreen : $borderRed)?>">
				<div class="exHead" style="<?php echo($ba3 == 1 ? $borderGreen : $borderRed)?>">
					<h4><b>3.</b></h4>
				</div>
				<div class="exBody">
					<p><b>Завдання:</b></p>
					<p><b>19 - 7 = ?</b></p>
					<h5 class="correctAnswer"><b>Правильна відповідь: 12<b/></h5>
					<h5 class="userAnswer">Ваша відповідь: <b class="userAnswerNumber" style="<?php echo ($ba3 == 1 ? $green : $red) ?>"><?=$answerThree?></b></h5>
				</div>
				<div class="exFooter">
					<p><?=intval($ba3)."/1б."?></p>
				</div>
			</div>
		</div>
		<!--4-->
		<div class="row">
			<div class="exercise col col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6" style="<?php echo($ba4 == 1 ? $borderGreen : $borderRed)?>">
				<div class="exHead" style="<?php echo($ba4 == 1 ? $borderGreen : $borderRed)?>">
					<h4><b>4.</b></h4>
				</div>
				<div class="exBody">
					<p><b>Завдання</b></p>
					<p><b>30 ∙ 2 = ?</b></p>
					<h5 class="correctAnswer"><b>Правильна відповідь: 60<b/></h5>
					<h5 class="userAnswer">Ваша відповідь: <b class="userAnswerNumber" style="<?php echo ($ba4 == 1 ? $green : $red) ?>"><?=$answerFour?></b></h5>
				</div>
				<div class="exFooter">
					<p><?=intval($ba4)."/1б."?></p>
				</div>
			</div>
		</div>
		<!--5-->
		<div class="row">
			<div class="exercise col col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6" style="<?php echo($ba5 == 1 ? $borderGreen : $borderRed)?>">
				<div class="exHead" style="<?php echo($ba5 == 1 ? $borderGreen : $borderRed)?>">
					<h4><b>5.</b></h4>
				</div>
				<div class="exBody">
					<p><b>Завдання</b></p>
					<p><b>50 - 23 = ?</b></p>
					<h5 class="correctAnswer"><b>Правильна відповідь: 27<b/></h5>
					<h5 class="userAnswer">Ваша відповідь: <b class="userAnswerNumber" style="<?php echo ($ba5 == 1 ? $green : $red) ?>"><?=$answerFive?></b></h5>
				</div>
				<div class="exFooter">
					<p><?=intval($ba5)."/1б."?></p>
				</div>
			</div>
		</div>
		<!--6-->
		<div class="row">
			<div class="exercise col col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6" style="<?php echo($ba6 == 1 ? $borderGreen : $borderRed)?>">
				<div class="exHead" style="<?php echo($ba6 == 1 ? $borderGreen : $borderRed)?>">
					<h4><b>6.</b></h4>
				</div>
				<div class="exBody">
					<p><b>Завдання:</b></p>
					<p><b>(0 ∙ 3) + (5 - 2 ∙ 2) = ?</b></p>
					<h5 class="correctAnswer"><b>Правильна відповідь: 1
                                        <b/></h5>
					<h5 class="userAnswer">Ваша відповідь: <b class="userAnswerNumber" style="<?php echo ($ba6 == 1 ? $green : $red) ?>"><?=$answerSix?></b></h5>
				</div>
				<div class="exFooter">
					<p><?=intval($ba6)."/1б."?></p>
				</div>
			</div>
		</div>
		<!--7-->
		<div class="row">
			<div class="exercise col col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6" style="<?php echo($ba7 == 1 ? $borderGreen : $borderRed)?>">
				<div class="exHead" style="<?php echo($ba7 == 1 ? $borderGreen : $borderRed)?>">
					<h4><b>7.</b></h4>
				</div>
				<div class="exBody">
					<p><b>Завдання:</b></p>
					<p><b>1 + (1 + 1) + (1 + 1 + 1) + 9 - 14 = ?</b></p>
					<h5 class="correctAnswer"><b>Правильна відповідь: 1<b/></h5>
					<h5 class="userAnswer">Ваша відповідь: <b class="userAnswerNumber" style="<?php echo ($ba7 == 1 ? $green : $red) ?>"><?=$answerSeven?></b></h5>
				</div>
				<div class="exFooter">
					<p><?=intval($ba7)."/1б."?></p>
				</div>
			</div>
		</div>
		<!--8-->
		<div class="row">
			<div class="exercise col col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6" style="<?php echo($ba8 == 1 ? $borderGreen : $borderRed)?>">
				<div class="exHead" style="<?php echo($ba8 == 1 ? $borderGreen : $borderRed)?>">
					<h4><b>8.</b></h4>
				</div>
				<div class="exBody">
					<p><b>Завдання:</b></p>
					<p><b>(25 - 3 ∙ 5) = ?</b></p>
					<h5 class="correctAnswer"><b>Правильна відповідь: 10<b/></h5>
					<h5 class="userAnswer">Ваша відповідь: <b class="userAnswerNumber" style="<?php echo ($ba8 == 1 ? $green : $red) ?>"><?=$answerEight?></b></h5>
				</div>
				<div class="exFooter">
					<p><?=intval($ba8)."/1б."?></p>
				</div>
			</div>
		</div>
		<!--9-->
		<div class="row">
			<div class="exercise col col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6" style="<?php echo($ba9 == 1 ? $borderGreen : $borderRed)?>">
				<div class="exHead" style="<?php echo($ba9 == 1 ? $borderGreen : $borderRed)?>">
					<h4><b>9.</b></h4>
				</div>
				<div class="exBody">
					<p><b>Завдання:</b></p>
					<p><b>1 + (2 / 2) ∙ (25 / 5) = ?</b></p>
					<h5 class="correctAnswer"><b>Правильна відповідь: 6<b/></h5>
					<h5 class="userAnswer">Ваша відповідь: <b class="userAnswerNumber" style="<?php echo ($ba9 == 1 ? $green : $red) ?>"><?=$answerNine?></b></h5>
				</div>
				<div class="exFooter">
					<p><?=intval($ba9)."/1б."?></p>
				</div>
			</div>
		</div>
		<!--10-->
		<div class="row">
			<div class="exercise col col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6" style="<?php echo($ba10 == 1 ? $borderGreen : $borderRed)?>">
				<div class="exHead" style="<?php echo($ba10 == 1 ? $borderGreen : $borderRed)?>">
					<h4><b>10.</b></h4>
				</div>
				<div class="exBody">
					<p><b>Завдання:</b></p>
					<p><b>(23 - 12) - 10 = ?</b></p>
					<h5 class="correctAnswer"><b>Правильна відповідь: 1<b/></h5>
					<h5 class="userAnswer">Ваша відповідь: <b class="userAnswerNumber" style="<?php echo ($ba10 == 1 ? $green : $red) ?>"><?=$answerTen?></b></h5>
				</div>
				<div class="exFooter">
					<p><?=intval($ba10)."/1б."?></p>
				</div>
			</div>
		</div>
		<!--11-->
		<div class="row">
			<div class="exercise col col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6" style="<?php echo($ba11 == 1 ? $borderGreen : $borderRed)?>">
				<div class="exHead" style="<?php echo($ba11 == 1 ? $borderGreen : $borderRed)?>">
					<h4><b>11.</b></h4>
				</div>
				<div class="exBody">
					<p><b>Завдання:</b></p>
					<p><b>(1200 ∙ 0) + 36 - 7 ∙ 5 = ?</b></p>
					<h5 class="correctAnswer"><b>Правильна відповідь: 1<b/></h5>
					<h5 class="userAnswer">Ваша відповідь: <b class="userAnswerNumber" style="<?php echo ($ba11 == 1 ? $green : $red) ?>"><?=$answerEleven?></b></h5>
				</div>
				<div class="exFooter">
					<p><?=intval($ba11)."/1б."?></p>
				</div>
			</div>
		</div>
		<!--12-->
		<div class="row">
			<div class="exercise col col-md-6 col-sm-12 col-12 col-lg-6 col-xl-6" style="<?php echo($ba12 == 1 ? $borderGreen : $borderRed)?>">
				<div class="exHead" style="<?php echo($ba12 == 1 ? $borderGreen : $borderRed)?>">
					<h4><b>12.</b></h4>
				</div>
				<div class="exBody">
					<p><b>Завдання:</b></p>
					<p><b>(12 - 5) ∙ (21 - 14) = ?</b></p>
					<h5 class="correctAnswer"><b>Правильна відповідь: 49<b/></h5>
					<h5 class="userAnswer">Ваша відповідь: <b class="userAnswerNumber" style="<?php echo ($ba12 == 1 ? $green : $red) ?>"><?=$answerTwelve?></b></h5>
				</div>
				<div class="exFooter">
					<p><?=intval($ba12)."/1б."?></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>