<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Видалення місця</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" media="screen,projection" href="/css/ui.totop.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <?=include_once 'header.php'?>
	<center>
		<form method="POST" action="remove.php">
			<table class="table table-striped" style="width: 50%" border="1">
				<tr>
					<th></th>
					<th>ID</th>
					<th>Заголовок</th>
				</tr>
	<?php
		function printResult ($result_set) {
          while( ($row = $result_set->fetch_assoc() ) != false) {
           ?>
           		<tr>
           			<td>
						<input value="<?=$row["id"]?>" type="checkbox" name="checkbox[]">
					</td>
					<td><?=$row["id"]?></td>
					<td class="title"><?=$row["title"]?></td>
				</tr>
					
<?php 
          }
        }

      $mysqli = new mysqli("localhost", 
      "root", "", "vh");

      $mysqli->query ("SET NAMES 'utf-8'");
      $result_set = $mysqli->query("SELECT * FROM `arts`");
      if($_COOKIE["user"] == "admin" && $_COOKIE["admin"] == "admin") {
          printResult($result_set);
      }
      else echo "<h3 class = 'text-danger'>Ви не авторизовані як адміністратор!</p>";
	  ?>
	  </table>
          <?php if($_COOKIE["user"] == "admin" && $_COOKIE["admin"] == "admin") { ?>
	  <button class="btn btn-outline-danger" id="sub" name="sub">Видалити</button>
          <?php } ?>
	</form>
	</center>
	<?=$mysqli->close()?>
</body>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
h5 {
    font-family: "Pacifico";
}
	tr, td, th{
		border: 1px solid black;
		padding: 3px;
	}
        .title:hover{
            color: red;
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
</html>