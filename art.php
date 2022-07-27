<?php
$sort = 'seconds';
$rev = 'ASC';
  if($_GET['sort'] == 'date') $sort = 'seconds';
  if($_GET['sort'] == 'rating') $sort = 'rating';
  if($_GET['sort'] == 'likes'){
      $sort = 'likes';
      $rew = 'DESC';
  }


  $alias = ($_GET["alias"]) ? trim($_GET["alias"]) : '';
  $connReload=mysqli_connect("localhost", 
      "root", "", "vh");
    $reload = "UPDATE arts SET view = view + 1 WHERE alias = '$alias'";
  $result = mysqli_query ($connReload, $reload) or mysqli_error($connReload);
  $resultx = mysqli_query($connReload, "SELECT * FROM `arts` WHERE `alias` = '$alias'") or mysqli_error($connReload);
  $count = mysqli_num_rows($resultx);
  if($count == 0) {
    header('Location: 404.html');
  }
  mysqli_close($connReload);
  require_once("funcs/func.php"); $arts = getArts(1, $alias); $id = $arts['id'];
  $title = $arts["title"];
  //include_once 'snow.php';


if (isset($_POST['react'])) {
    if (isset($_COOKIE['user'])) {
        $k = $_POST['k'];
        $mysqli = new mysqli("localhost",
            "root", "", "vh");
        $mysqli->query("SET NAMES 'utf8'");
        $sql = $mysqli->query("UPDATE `ratings` SET `likes`=`likes`+1 WHERE `k` = ".$k);
        $mysqli->close();
    } else echo "ERROr";
}

if (isset($_POST['down'])) {
    if (isset($_COOKIE['user'])) {
        $k = $_POST['k'];
        $mysqli = new mysqli("localhost",
            "root", "", "vh");
        $mysqli->query("SET NAMES 'utf8'");
        $sql = $mysqli->query("UPDATE `ratings` SET `likes`=`likes`-1 WHERE `k` = ".$k);
        $mysqli->close();
    } else echo "ERROr";
}


if (isset($_POST["sub"]))
{
    if($_COOKIE['user']) {
      $name = $_COOKIE['user'];
    $rating = $_POST["rating"];
    $content = $_POST["content"];
    $date = date("l M jS \Of G:i T Y");
    $seconds = intval(time());
    $conn=mysqli_connect("localhost", 
      "root", "", "vh");
    $sql = "INSERT INTO ratings (id, name, rating, content, ok, pubDate, seconds)
    VALUES ('$id', '$name', '$rating', '$content', '0', '$date', '$seconds')";

    $result = mysqli_query ($conn, $sql) or mysqli_error($conn);
    mysqli_close($conn);
    }
    else 
      echo "<div class=\"resFalse\">
                <h3 class=\"text-danger\" style=\"text-align: center;\">Ви не авторизовані. Будь ласка, <a href=\"/authForm.html\">увійдіть.</a></h3>
              </div>";
}
?>
<?php
    global $mysqli;
    $mysqli = new mysqli("localhost", 
      "root", "", "vh");
    
    $res = $mysqli -> query(" SELECT  SUM(rating) as sum FROM ratings WHERE id = $id") or 
    die($mysqli->error); // Fetch data from the table
    $res1 = $mysqli -> query(" SELECT  COUNT(rating) as count FROM ratings WHERE id = $id AND ok = 1") or
    die($mysqli->error);
    $resCount1 =  $mysqli -> query(" SELECT  COUNT(rating) as count1 FROM ratings WHERE rating < 1.5 AND id = $id") or die($mysqli->error);
    $resCount2 = $mysqli -> query(" SELECT  COUNT(rating) as count2 FROM ratings WHERE rating >= 1.5 AND rating < 2.5 AND id = $id") or die($mysqli->error);
    $resCount3 = $mysqli -> query(" SELECT  COUNT(rating) as count3 FROM ratings WHERE rating >= 2.5 AND rating < 3.5 AND id = $id") or die($mysqli->error);
    $resCount4 = $mysqli -> query(" SELECT  COUNT(rating) as count4 FROM ratings WHERE rating >= 3.5 AND rating < 4.5 AND id = $id") or die($mysqli->error);
    $resCount5 = $mysqli -> query(" SELECT  COUNT(rating) as count5 FROM ratings WHERE rating >= 4.5 AND id = $id") or die($mysqli->error);


    $val = $res -> fetch_array();
    $val1 = $res1 -> fetch_array();
    $valCount1 = $resCount1 -> fetch_array();
    $valCount2 = $resCount2 -> fetch_array();
    $valCount3 = $resCount3 -> fetch_array();
    $valCount4 = $resCount4 -> fetch_array();
    $valCount5 = $resCount5 -> fetch_array();
    $sum = $val['sum'];
    $count = $val1['count'];
    $count1 = $valCount1['count1'];
    $count2 = $valCount2['count2'];
    $count3 = $valCount3['count3'];
    $count4 = $valCount4['count4'];
    $count5 = $valCount5['count5'];
    $firstLetter = substr($name, 0, 1);

    $perCent1 = round($count1 / $count * 100);
    $perCent2 = round($count2 / $count * 100);
    $perCent3 = round($count3 / $count * 100);
    $perCent4 = round($count4 / $count * 100);
    $perCent5 = round($count5 / $count * 100);

    $avarage = round($sum / $count, 1);
    
    $mysqli->query ("UPDATE arts SET avg = $avarage WHERE id = $id");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="headfoot.css">
    <link rel="stylesheet" href="css\fonts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    </style>
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/headfoot.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
    <link rel="shortcut icon" href="pictures/fireicon.ico" type="image/x-icon"> 
    <link rel="stylesheet" media="screen,projection" href="/css/ui.totop.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <style>
    #myCarousel, .carousel-inner {color: white;}
a{
        text-decoration: none!important;
    }
    h1{
      text-align: center;
    }
    .carousel-control.left, .carousel-control.right {
      background-image:none !important;
      filter:none !important;
    }
    .reviews{
      margin-top: 5%;
    }
    
      @media screen and  (max-width: 769px) {
        #qr{
          margin-left: 12.5%;
        }
        .rounded-circle{
          height: 73px;
          width: 73px;
        }
        .progress-label-left{
          padding-bottom: 1.45em;
        }
        .progress-label-right{
          padding-bottom: 1.43em;
          }
        .map{
          width: 100%;
          border: 4px solid rgb(106, 106, 155);
        }
        .fullText{ 
          font-size: 0.8em;
          background-color: rgb(206, 206, 206);
          border-radius: 10px;/*   border-radius: 50% 20% / 10% 40%;   */
          border: 20px solid rgb(206, 206, 206);
          font-size: 1.2em;
          border: 5px solid rgb(206, 206, 206);
          text-align: justify;
        }
        
        .introText{
          font-size: 1em;
          background-color: rgb(206, 206, 206);
          border-radius: 10px;
          border: 20px solid rgb(206, 206, 206);
          text-align: justify;
        }
          h5{
        font-family: "Pacifico";
        font-size: 2.7em;
        color: black;
        
      }
      .title{
        font-family: "Pacifico";
        font-size: 4em;
        color: black;
        float: right;
      }
      .introImg{
        float: left;
        border-radius: 50% 20% / 10% 40%;
        }
        .modal-content{
          font-size: 2em;
          font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";;
        }
        .rateInfo{
          border-radius: 5px;
          border: 1px solid rgba(0,0,0,.125);
          margin-top: 5%;
        }
        .headRate{
          margin-bottom: 0;
          border-bottom: 1px solid rgba(0,0,0,.125);
          background-color: rgba(0,0,0,.03);
          border-top-right-radius: 5px;
          border-top-left-radius: 5px;
        }
        .headRateText{
          padding: 1rem 1.5rem;
          max-width: 200px;
        }
        .btn{
          background-color: #007bff;
          border-color: #007bff;
          color: white;
        }
        .input{
    position: relative;
    margin: 0 0 5% 0;
  }
.purple-border .form-control:focus {
    border: 1px solid #ba68c8;
    box-shadow: 0 0 0 0.2rem rgba(186, 104, 200, .25);
}

.green-border-focus .form-control:focus {
    border: 1px solid #8bc34a;
    box-shadow: 0 0 0 0.2rem rgba(139, 195, 74, .25);
}
.content{
  width: 80%;
  margin: 5% 0 0 10%;
}
.rateyo{
  width: 40%;
  margin-left: 25%;
}
        .pastHistory img{
          margin-left: 5%;
          padding-top: 3%;
          width: 90%;
          border-radius: 10px;
          padding-right: 5px;
          
        }
        .pastHistory p{
          margin-left: 5%;
          width: 90%;
          border-left: 4px solid rgba(179, 179, 179, 1);
          font-weight: bold;
          font-size: 1.1em;
        }
#sub{ 
  background-color: #4CAF50;
  border: none;
  color: white;
  font-size: 0.65em;
  padding: 12px 24px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 13px;
  margin-left: 30%;
  }
  #sub:hover{
    color: #4CAF50;
    background-color: white;
    transition: all 0.9s;
    -webkit-transition: all 0.9s;
    -moz-transition: all 0.9s;
    border-radius: 70% 40% / 30% 60%;
  }
  
      }

      @media screen and  (min-width: 769px) {
        #qr{
          margin-left: 38%;
        }
        .pastHistory img{
          margin-left: 15%;
          padding-top: 5%;
          width: 70%;
          border-radius: 10px;
          padding-right: 5px;
          transform: translate(0, 120%);
          opacity: 0;
          transition: all 1.1s ease 0s;
          
        }
        .pastHistory p{
          margin-left: 15%;
          width: 70%;
          border-left: 5px solid rgba(179, 179, 179, 1);
          font-weight: bold;
          font-size: 1.2em;
        }
    .rateInfo{
      border-radius: 5px;
      border: 1px solid rgba(0,0,0,.125);
      margin-top: 5%;
    }
      .firstLetter{
    margin: 0rem;
    margin-top: 1.7rem;
}
.rounded-circle{
    height: 65px;
}
.reviews{
    width: 100%;
    margin-top: 4rem;
}
.userStar5{
    color: orange;
}
.progress-label-right{
  float: left;
  padding-bottom: 1.6rem;
}
.starCount{
  padding-top: 1.3rem;

}
.progList{
  padding-top: 1.4rem;
  float: left;
  padding-right: 0;
}
.progress-label-left{
  float: left;
  position: relative;
  padding-top: 1.5rem;
  padding-right: 0;
}
.progress{
  width: 105%;
  height: 16px;
}
  .input{
    position: relative;
    margin: 0 0 5% 0;
  }
.purple-border .form-control:focus {
    border: 1px solid #ba68c8;
    box-shadow: 0 0 0 0.2rem rgba(186, 104, 200, .25);
}

.green-border-focus .form-control:focus {
    border: 1px solid #8bc34a;
    box-shadow: 0 0 0 0.2rem rgba(139, 195, 74, .25);
}
.content{
  width: 80%;
  margin: 5% 0 0 10%;
}
.rateyo{
  width: 40%;
  margin-left: 25%;
}
.fa-star{
  padding-left: 0.4rem;
  color: rgba(0,0,0,.100);
}
#sub{ 
  background-color: #4CAF50;
  border: none;
  color: white;
  font-size: 0.65em;
  padding: 12px 24px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 13px;
  margin-left: 30%;
  }
  #sub:hover{
    color: #4CAF50;
    background-color: white;
    transition: all 0.9s;
    -webkit-transition: all 0.9s;
    -moz-transition: all 0.9s;
    border-radius: 70% 40% / 30% 60%;
  }
  .btn{
    background-color: #007bff;
    border-color: #007bff;
    color: white;
  }
  .headRate{
    margin-bottom: 0;
    border-bottom: 1px solid rgba(0,0,0,.125);
    background-color: rgba(0,0,0,.03);
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
  }
  .headRateText{
    padding: 1rem 1.5rem;
    max-width: 200px;
  }
        .circleText{
          padding-top: 13%
        }
        .rateBtn{
          width: 24%;
          height: 10%;
          font-size: 1em;
        }
        .modal-content{
          font-size: 2em;
          font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";;
        }
        .map{
          border-radius: 5%;
          border: 4px solid rgb(106, 106, 155);
          float: right;
          

        }

        .fullText{ 
          font-size: 1.2em;
          background-color: rgb(206, 206, 206);
          border-radius: 5%;/*   border-radius: 50% 20% / 10% 40%;   */
          border: 5px solid rgb(206, 206, 206);
          float: right;
          text-align: justify;
        }
        
        .introText{
          margin-top: 2%;
          font-size: 1.2em;
          background-color: rgb(206, 206, 206);
          border-radius: 10px;
          border: 20px solid rgb(206, 206, 206);
          text-align: justify;
        }
          h5{
        font-family: "Pacifico";
        font-size: 1.7em;
        color: black;
        
      }
      .title{
        font-family: "Pacifico";
        font-size: 4em;
        color: black;
        float: right;
      }
      .introImg{
        float: left;
        border-radius: 40px;/*   50% 20% / 10% 40%  */
        }
      }
    a{
        text-decoration: none;
    }
    
    ._active{
        transform: translate(0, 0)!important;
        opacity: 1!important;
    }
.loh{min-height: 820px}

.like{
    cursor: pointer;
}
    </style>
    <header>
      <div class="header d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-grey border-bottom box-shadow">
        <a href="/"><h5 class="my-0 mr-md-auto font-weight-normal">Volyn History</h5></a>
      </div>
    </header>
<div class="container info">
  <div class="row">

  <!--<img class="introImg col-md-6 col-sm-12 col-xs-12" src="<?=$arts["img"]?>">-->
  <div class='loh'>
  <div class="container col-md-6 col-sm-12 col-xs-12">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <?php
      $page1 = false;
      if (strlen($arts["img"]) >= 5) {
        echo "
      }
      <div class=\"item active\">
        <img class=\"introImg\" src=\"/".$arts["img"]."\" style=\"width:100%;\">
        <div class=\"carousel-caption\">
      </div>
      </div>
      ";
      $page1 = true;
    }
    ?>

      <?php
      $page2 = false;
      if (strlen($arts["img2"]) >= 5) { 
        echo "
      <div class=\"item\">
        <img class=\"introImg\" src=\"/".$arts["img2"]."\" style=\"width:100%;\">
        <div class=\"carousel-caption\">
      </div>
      </div>
      ";
      $page2 = true;
    }
    ?>
    <?php
    $page3 = false;
      if (strlen($arts["img3"]) >= 5) {
        echo "
      <div class=\"item\">
        <img class=\"introImg\" src=\"/".$arts["img3"]."\" style=\"width:100%;\">
        <div class=\"carousel-caption\">
      </div>
      </div>
      ";
      $page3 = true;
    }
    ?>
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php
        if ($page1 == true) echo "<li data-target=\"#m\" 
        data-slide-to=\"0\" class=\"active\"></li>";
        if ($page2 == true) echo "<li data-target=\"#m\" data-slide-to=\"1\"></li>";
        if ($page3 == true) echo "<li data-target=\"#m\" data-slide-to=\"2\"></li>";
      ?>
    </ol>
      
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  <h3 class="title col-12 col-sm-12 col-md-6 col-lg-6"><?=$arts["title"]?></h3>
  </div>
  <p class="introText col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><?=$arts["intro_text"]?></p>
  <div class="fullText col-lg-6 col-md-6 col-sm-12 col-xs-12"><?=$arts["full_text"]?></div>
<iframe class="map col-md-6 col-lg-6 col-sm-12 col-xs-12" height="590" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=528&amp;height=590&amp;hl=ua&amp;q=%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F%20%D0%97%D0%B0%D0%BC%D0%BA%D0%BE%D0%B2%D0%B0%20<?=$arts["street"]?>+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='http://maps-generator.com/uk'>.</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=7076e5e0c599185374fe16adf6715e695dc12cc7'></script>
<div class="pastHistory"><?=$arts["past_history"]?></div>
</div>
</div>
<br>



<img id="qr" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://volyn-history.c1.biz/art.php?id=<?=$arts['id']?>" title="QR код" />





<div class="container rateInfo">
  <div class="row headRate">
      <div class="headRateText">Rating of
    <b><?=$title?></b>
      </div>
      <i class="dropdown show" style="max-width:100px">
          <a style="background:transparent;color:black;border: 0;" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sort By:
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="/c/<?=$alias?>&sort=date">Date</a>
              <a class="dropdown-item" href="/c/<?=$alias?>&sort=rating">Rate</a>
              <a class="dropdown-item" href="/c/<?=$alias?>&sort=likes">Popularity</a>
          </div>
      </i>
  </div>
  <div class="row">
    <!-- ----modal---- -->
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Review</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div class="row">
     
    <form action="" method="POST">
      <div class="form-label-group">
          <div>
                <div class="content">
                  <textarea name="content" class="form-control" id="exampleFormControlTextarea4" 
                  rows="3"></textarea>
                </div>

              

          </div>
      </div>
     
             <div class="rateyo col-md-12 col-sm-12 col-xs-12" id= "rating"
             data-rateyo-rating="4"
             data-rateyo-num-stars="5"
             data-rateyo-score="3">
             </div>
     
        <span class='result'>0</span>
        <input type="hidden" name="rating">
     
        </div>
     
        <button id="sub" name="sub">Submit</button>
     
    </form>
    </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-xs-12 col-12 col-lg-4 col-md-3 text-center">
      <h1 class="text-warning mt-4 mb-4">
                <b><span id="average_rating"><?=$avarage?></span> / 5</b>
              </h1>
              <div class="mb-3">
              <i class="fa fa-star star1" aria-hidden="true"></i> 
              <i class="fa fa-star star2" aria-hidden="true"></i>
              <i class="fa fa-star star3" aria-hidden="true"></i>
              <i class="fa fa-star star4" aria-hidden="true"></i>
              <i class="fa fa-star star5" aria-hidden="true"></i>
              </div>
              <h3><span id="total_review"><b><?=$count?></span> Reviews</b></h3>
            </div>

    <div class="col-12 col-md-5 col-sm-12 col-xs-12 col-xl-3 col-lg-4 text-center">
      <div class="col-3 col-md-3 col-sm-3 col-xs-3 col-xl-3">
        <div class="progress-label-left"><b>5</b> <i class="fa fa-star text-warning"></i></div>
        <div class="progress-label-left"><b>4</b> <i class="fa fa-star text-warning"></i></div>
        <div class="progress-label-left"><b>3</b> <i class="fa fa-star text-warning"></i></div>
        <div class="progress-label-left"><b>2</b> <i class="fa fa-star text-warning"></i></div>
        <div class="progress-label-left"><b>1</b> <i class="fa fa-star text-warning"></i></div>
      </div>
      <div class="col-6 col-md-7 col-sm-6 col-xs-7 progList">
        <div class="progress">
        <div class="progress-bar bg-warning pr5" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>


      <div class="progress">
        <div class="progress-bar bg-warning pr4" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>


      <div class="progress">
        <div class="progress-bar bg-warning pr3" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>


      <div class="progress">
        <div class="progress-bar bg-warning pr2" role="progressbar" aria-valuenow="100" aria-valuemin="" aria-valuemax="100"></div>
      </div>


      <div class="progress">
        <div class="progress-bar bg-warning pr1" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      </div>

      <div class="col-3 col-md-2 col-sm-3 col-xs-2 starCount">
        <div class="progress-label-right">(<span id="total_five_star_review"><?=$count5?></span>)</div>
        <div class="progress-label-right">(<span id="total_four_star_review"><?=$count4?></span>)</div>
        <div class="progress-label-right">(<span id="total_three_star_review"><?=$count3?></span>)</div>
        <div class="progress-label-right">(<span id="total_two_star_review"><?=$count2?></span>)</div>
        <div class="progress-label-right">(<span id="total_one_star_review"><?=$count1?></span>)</div>
      </div>
      
      
    </div>
    <div class="col-12 col-md-4 col-sm-12 col-xs-12 text-center feedback">
      <b><h4 class="mt-4 mb-3">Share your experience here!</h4></b>
      <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Review</a>
    </div>
    
  </div>

</div>


</div>
</div>

<?php
$mysqli = new mysqli("localhost", 
      "root", "", "vh");
$mysqli->query ("SET NAMES 'utf8'");
      $result_set = $mysqli->query("SELECT * FROM `ratings` WHERE `id` = $id AND `ok` = 1 ORDER BY `$sort` ".$rew);
      printResult ($result_set);
$mysqli->close();

  function printResult ($result_set){
          while( ($row = $result_set->fetch_assoc() ) != false) {

            ?>
                <div class="container reviews">
                <div class="mt-12 mb-12" id="review_content">
                    <div class="row mb-3"><div class="col-sm-2 col-lg-1 col-xl-1"><div class="rounded-circle bg-danger text-white pt-2 pb-5"><h3 class="text-center firstLetter"><?=htmlspecialchars($row["name"][0])?></h3></div></div><div class="col-sm-10 col-lg-11 col-xl-11"><div class="card"><div class="card-header"><b><?=htmlspecialchars($row["name"])?></b></div><div class="card-body">
                        <i class="fa fa-star" aria-hidden="true" 
                        style="<?="color: #ffc107!important"?>"></i>
                        <i class="fa fa-star" aria-hidden="true" style="<?php echo ( ($row["rating"] >= 1.5) ? "color: #ffc107!important" : "")?>"></i>
                        <i class="fa fa-star" aria-hidden="true" style="<?php echo ( ($row["rating"] >= 2.5) ? "color: #ffc107!important" : "")?>"></i>
                        <i class="fa fa-star" aria-hidden="true" style="<?php echo ( ($row["rating"] >= 3.5) ? "color: #ffc107!important" : "")?>"></i>
                        <i class="fa fa-star" aria-hidden="true" style="<?php echo ( ($row["rating"] >= 4.5) ? "color: #ffc107!important" : "")?>"></i>
                        <br><?=htmlspecialchars($row["content"])?></div>
                           <form method="POST" class="card-footer text-right">
                                <button name="react" class="fa fa-thumbs-up like" style="border: 0;background: transparent;font-size:20px" aria-hidden="true"></button>&nbsp&nbsp
                                <input name="k" value="<?=$row['k']?>" style="display: none">
                                <button name="down" class="fa fa-thumbs-down like" style="border: 0;background: transparent;font-size:20px" aria-hidden="true"></button>
                                &nbsp&nbsp
                                <?=$row["pubDate"]?>&nbsp&nbsp
                                <?=$row['likes'] >= 0 ? '<i class="fa fa-thumbs-up" style="color: blue;font-size:22px" aria-hidden="true"></i>' . $row['likes']
                                    : '<i class="fa fa-thumbs-down" style="color: red;font-size:22px" aria-hidden="true"></i>' . $row['likes'] ?>
                            </form>

                        </div></div></div>
                </div>
                </div>

            
            <?php
              
              }
            }
            ?>





<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>


 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text(rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
    
    const phImgs = document.querySelectorAll('.pastHistory img');

for (let i = 0; i < phImgs.length; i++) {
    const phImg = phImgs[i];
    phImg.classList.add('anim-item');
}
    
    
    const animItems = document.querySelectorAll('.anim-item');

if(animItems.length > 0) {
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll() {
        for (let i = 0; i < animItems.length; i++) {
            const animItem = animItems[i];
            const animItemHeight = animItem.offsetHeight;
            const animItemOffset = offset(animItem).top;
            const animStart = 3;

            let animItemPoint = window.innerHeight - animItemHeight / animStart;

            if(animItemHeight > window.innerHeight)
                animItemPoint = window.innerHeight - window.innerHeight / animStart;

            if( (pageYOffset > animItemOffset - animItemPoint - 800)
             && pageYOffset < (animItemOffset + animItemHeight) )
                animItem.classList.add('_active');
            //else animItem.classList.remove('_active');
        }
    }
    function offset(e) {
        const rect = e.getBoundingClientRect(),
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return {top: rect.top + scrollTop, left: rect.left + scrollLeft};
    }
    animOnScroll();
}

</script>
</body>
 
</html>





<?php
    if($avarage > 0 && $avarage < 1.5) 
      echo "
    <style type=\"text/css\">
      .star1{       
        color: #ffc107!important;
      }
    </style>";
    if($avarage >= 1.5 && $avarage < 2.5) 
      echo "
    <style type=\"text/css\">
      .star2, .star1{       
        color: #ffc107!important;
      }

    </style>";
    if($avarage >= 2.5 && $avarage < 3.5) 
      echo "
    <style type=\"text/css\">
      .star3, .star2, .star1{       
        color: #ffc107!important;

    </style>";
    if($avarage >= 3.5 && $avarage < 4.5) 
      echo "
    <style type=\"text/css\">
      .star4, .star3, .star2, .star1{       
        color: #ffc107!important;
    </style>";
    if($avarage >= 4.5) 
      echo "
    <style type=\"text/css\">

      .star5, .star4, .star3, .star2, .star1{       
        color: #ffc107!important;
      }
    </style>";
    echo("<style type=\"text/css\">
      .pr1{       
        width: $perCent1%;
      }
      .pr2{       
        width: $perCent2%;
      }
      .pr3{       
        width: $perCent3%;
      }
      .pr4{       
        width: $perCent4%;
      }
      .pr5{       
        width: $perCent5%;
      }
    </style>");

?>




<script>
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text(rating);
            $(this).parent().find('input[name=rating]').val(rating);
        });
    });
 
</script>
    
    <script type="text/javascript">
      $(function (){
  var star = '.star',
      selected = '.selected';
  
  $(star).on('click', function(){
    $(selected).each(function(){
      $(this).removeClass('selected');
    });
    $(this).addClass('selected');
  });
 
});
    </script>
</body>
</html>