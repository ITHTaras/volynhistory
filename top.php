<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Топ місць</title>
    <!--<link rel="stylesheet" type="text/css" href="/css/mediaTop.css">
    <link rel="stylesheet" type="text/css" href="/css/top.css">-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
    <link rel="shortcut icon" href="pictures/fireicon.ico" type="image/x-icon">	
    <link rel="stylesheet" media="screen,projection" href="/css/ui.totop.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<style type="text/css">

@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Caveat&display=swap');

.artImg, .bigArtImg{
	padding: 0;
	opacity: 1;
	-webkit-transition: .5s ease-in-out;
	transition: .5s ease-in-out;
}
.artImg:hover{
	opacity: .5;
}
.bigArtImg:hover{
	opacity: .5;
}
.art{
	margin-bottom: 10px;
	padding: 0;
}
.info, .bigInfo{
	background-color: rgba(209, 209, 209, 1);
	padding: 0;
	font-size: 1.6em;
	font-family: 'Caveat', cursive;
}
.info h3, .bigInfo h3 {
	font: 1.5em "Pacifico";
}
.rounded-circle{
	max-width: 10%;
	height: 15%;
}
.title:hover {
    animation: 1s ease-in-out 0s normal none infinite running trambling-animation;
}
@keyframes trambling-animation {
    0%, 50%, 100% {
        transform: rotate(0deg);
    }
    10%, 30% {
        transform: rotate(-2deg);
    }
    20%, 40% {
        transform: rotate(2deg);
    }
}












    .artImg, .bigArtImg{
        margin: 0;
        padding: 0;
}
@media only screen and (min-width: 1100px) {
	.artImg{
		height: 400px;
	}
	.bigArtImg{
		height: 180px;
	}
	img{
		border-color: red;
	}
        .artImg, .bigArtImg{
                border-top-left-radius: 60px;
                border-bottom-left-radius: 60px;
        }
}
@media only screen and (min-width: 990px) {
	.artImg{
		height: 350px;
	}
	.bigArtImg{
		height: 180px;
	}
        .artImg, .bigArtImg{
                border-top-left-radius: 60px;
                border-bottom-left-radius: 60px;
        }
}
@media only screen and (min-width: 768px) {
	.artImg{
		height: 370px;
	}
	.bigArtImg{
		height: 190px;
	}
        .artImg, .bigArtImg{
                border-top-left-radius: 60px;
                border-bottom-left-radius: 60px;
        }
}
@media only screen and (max-width: 600px) {
	.artImg{
		height: 540px;
	}
	.bigArtImg{
		height: 250px;
	}
	.info{
		font-size: 1.2em;
                margin-top: 10px;
	}
        .bigInfo{
		font-size: 1.2em;
                border-bottom-left-radius: 20px;
                border-bottom-right-radius: 20px;
	}
        .artImg{
                border-radius: 60px;
                margin-bottom: 10px;         
}
        
        .bigArtImg{
                border-top-left-radius: 60px; 
                border-top-right-radius: 60px;
}
</style>
	<?php 
		global $mysqli;
		$mysqli = new mysqli("localhost", 
      "root", "", "vh");
	    $mysqli->query ("SET NAMES 'utf-8'");
	    //$mysqli->query ("SELECT VIEW FROM arts ORDER BY VIEW DESC");
	?>
	<div class="container">
		
	<?php 
		function printTopResult ($result_set){
		  global $numsTwo;
		  global $numsOne;
		  global $one;
		  $one = array("01", "21", "31", "41", "51", "61", "71", "81", "91");
		  $numsTwo = array("0","10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "25", "26", "27", "28", "29", "30", "35", "36", "37", "38", "39", "40", "45", "46", "47", "48", "49", "50", "55", "56", "57", "58", "59", "60", "65", "66", "67", "68", "69", "70", "75", "76", "77", "78", "79", "80", "85", "86", "87", "88", "89", "90", "95", "96", "97", "98", "99", "00");
          $numsOne = array("02", "03", "04", "22", "23", "24", "32", "33", "34", "42", "43", "44", "52", "53", "54", "62", "63", "64", "72", "73", "74", "82", "83", "84", "92", "93", "94");
          while( ($row = $result_set->fetch_assoc() ) != false){
          	$place = 0;
          	$size = getimagesize($row["img"]);
            if( ($size[0] / $size[1]) < 0.9) {
            	++$place;
            	?>
            	<div class="row art">
          					<img class="artImg col-12 col-sm-12 col-md-3 col-lg-3" src="<?=$row["img"]?>">
          					<div class="info col-12 col-sm-12 col-md-9 col-lg-9">
          						<h3 class="title">
	          						<a style="text-decoration: none; color: rgba(207, 129, 62, 1);" href="/c/<?=$row['id']?>">
	          							<?=$row["title"]?>	
	          						</a>
          						</h3>
          						<?php
          				$viewStrTwo = substr(strval($row["view"]), -2);
          				$viewStrOne = substr(strval($row["view"]), -2);
          				if(in_array($viewStrTwo, $numsTwo)) 
          					echo $row["view"]." переглядів";
          				if(in_array($viewStrOne, $numsOne)) 
          					echo $row["view"]." перегляди";
          				if(in_array($viewStrOne, $one) || $row["view"] == 1) 
          					echo $row["view"]." перегляд";
          				
          						?>
          						<br>
          						Середнє арифметичне оцінок: <b><?=$row["avg"]?></b>
          						<hr>
          						<p><?=$row["intro_text"]?></p>
          					</div>
          		</div>
          		<?php
            }
			if( ($size[0] / $size[1]) > 1) { 
				$place++;
				?>
				<div class="row art">
          				<img class="bigArtImg col-12 col-sm-12 col-md-3 col-lg-3" src="<?=$row["img"]?>">
          					<div class="bigInfo col-12 col-sm-12 col-md-9 col-lg-9">
          						<h3 class="title">
          							<a style="text-decoration: none; color: rgba(207, 129, 62, 1);" href="art.php?id=<?=$row['id']?>">
	          							<?=$row["title"]?>	
	          						</a>
          						</h3>
          						<?php
          				$viewStrTwo = substr(strval($row["view"]), -2);
          				$viewStrOne = substr(strval($row["view"]), -2);
          				if(in_array($viewStrTwo, $numsTwo)) 
          					echo $row["view"]." переглядів";
          				if(in_array($viewStrOne, $numsOne)) 
          					echo $row["view"]." перегляди";
          				if(in_array($viewStrOne, $one) || $row["view"] == 1) 
          					echo $row["view"]." перегляд";
          				
          						?>
          						<br>
          						Середнє арифметичне оцінок: <b><?=$row["avg"]?></b>
          						
          					</div>
          		</div>
			<?php
			}
          	?>
          		
          	<?php
          }
        }
	    $result_set = $mysqli->query("SELECT * FROM arts ORDER BY VIEW DESC");
	    printTopResult ($result_set);
	    $mysqli->close();
	?>
	    
	</div>
</body>
</html>