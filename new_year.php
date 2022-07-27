<?=include_once 'snow.php'?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW YEAR TEST!!!(EASY)</title>
    <link rel="shortcut icon" href="pictures/fireicon.ico" type="image/x-icon">	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="headfoot.css">
    <link rel="stylesheet" href="css\fonts.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
    <link rel="shortcut icon" href="pictures/fireicon.ico" type="image/x-icon">	
    <link rel="stylesheet" media="screen,projection" href="/css/ui.totop.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
	h1{
		text-align: center;
	}
	@media only screen and (min-width:  768px) {
		#test{
			width: 80%;
			margin-left: 40%;
		}
		button{
			width: 20%;
		}
	}
	@media only screen and (max-width:  768px) {
		#test{
			width: 90%;
			margin-left: 25%;
		}
		button{
			width: 7em;
		}
	}
		.input{
			width: 2.5em;
			margin-bottom: 2%;
		}
	</style>
	<div class="container">
		<div class="row">
			<form action="/testResult.php/" method="POST" id="test">
			<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-10">
				<label><b>1.</b> 2 + 2 = ?</label>
				<input type="text" name="answerOne" class="input">
			</div>
			<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-10">
				<label><b>2.</b> 18 + 3 = ?</label><!--21-->
				<input type="text" name="answerTwo" class="input">
			</div>
			<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-10">
				<label><b>3.</b> 19 - 7 = ?</label><!--12-->
				<input type="text" name="answerThree" class="input">
			</div>
			<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-10">
				<label><b>4.</b> 30 ∙ 2 = ?</label><!--60-->
				<input type="text" name="answerFour" class="input">
			</div>
			<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-10">
				<label><b>5.</b> 50 - 23 = ?</label><!--27-->
				<input type="text" name="answerFive" class="input">
			</div>
			<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-10">
				<label><b>6.</b> (0 ∙ 3) + (5 - 2 ∙ 2) = ?</label><!--1-->
				<input type="text" name="answerSix" class="input">
			</div>
			<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-10">
				<label><b>7.</b> 1 + (1 + 1) + (1 + 1 + 1) + 9 - 14 = ?
				</label><!--1-->
				<input type="text" name="answerSeven" class="input">
			</div>
			<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-10">
				<label><b>8.</b>(25 - 3 ∙ 5)</label><!--10-->
				<input type="text" name="answerEight" class="input">
			</div>
			<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-10 col-10">
				<label><b>9.</b> 1 + (2 / 2) ∙ (25 / 5)</label><!--6-->
				<input type="text" name="answerNine" class="input">
			</div>
			<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-10">
				<label><b>10.</b> (23 - 12) - 10</label><!--1-->
				<input type="text" name="answerTen" class="input">
			</div>
			<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-10">
				<label><b>11.</b> (1200 ∙ 0) + 36 - 7 ∙ 5</label><!--1-->
				<input type="text" name="answerEleven" class="input">
			</div>
			<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-10">
				<label><b>12.</b> (12 - 5) ∙ (21 - 14)</label><!--49-->
				<input type="text" name="answerTwelve" class="input">
			</div>
			<button class="btn btn-primary" name="sub">
				Підтвердити
			</button>
			</form>
		</div>
	</div>
	<h1>Hornic Taras</h1>
</body>
</html>