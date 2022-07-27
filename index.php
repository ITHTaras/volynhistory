<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volyn History</title>	
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    </style>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" media="screen,projection" href="/css/ui.totop.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<?php
    //include_once 'snow.php';    
    include_once("header.php");
?>
<img class="introImg col-12 col-sm-10" src="img/intro.png" srcset="">
<?php
  function printResult ($result_set){
          while( ($row = $result_set->fetch_assoc() ) != false) {
            $size = getimagesize($row["img"]);
            if( ($size[0] / $size[1]) < 0.9) { 
              echo "
                <a href=\"/c/".$row["alias"]."\">
                  <img class=\"art col-12 col-sm-5\" title=\"".$row["title"]."\" src=\"".$row["img"]."\">
                </a>
                ";
              }
              if( ($size[0] / $size[1]) > 1) { 
                echo "
                  <a href=\"/c/".$row['alias']."\">
                    <img class=\"hugeArt col-12 col-sm-6 col-lg-3 col-xl-3\" title=\"".$row["title"]."\" src=\"".$row["img"]."\">
                  </a>
                  ";
                }
        
          }
        }
          //-----------------------------------
      $mysqli = new mysqli("localhost", 
      "root", "", "vh");
      $mysqli->query ("SET NAMES 'utf-8'");
      $result_set = $mysqli->query("SELECT * FROM `arts`");
      printResult ($result_set);
      $mysqli->close();
      include_once "footer.php";
      ?>
      

<a id="button"></a>
</body>
<style>
    footer{
        margin-top: 40px;
        margin-bottom: 40px;
    }
    .introImg{
        width: 96%;
        padding-left: 2%;
        padding-bottom: 1%;
        border-radius: 30% 60% / 70% 40%;
        transition: all 1s;
    -webkit-transition: all 1s;
    -moz-transition: all 1s;
      }
      .introImg:hover{
        border-radius: 70% 40% / 30% 60%;
      }
      .hugeArt{
        margin-top: 5px;
        filter: grayscale(100%);
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    border-radius: 10px;
      }
      .art{
        margin-top: 5px;
        height: 600px;
        filter: grayscale(100%);
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    border-radius: 10px;
      }
      img.art:hover {
        filter: grayscale(0%);
        -webkit-filter: grayscale(0%);
        -moz-filter: grayscale(0%);
        transform: scale(1.1);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
      }
      img.hugeArt:hover {
        filter: grayscale(0%);
        -webkit-filter: grayscale(0%);
        -moz-filter: grayscale(0%);
        transform: scale(1.1);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
      }
    @media only screen and (min-width: 1100px) {
      .features{
        margin-left: 14%;
      }
      .hugeArt{
        height: 300px;
      }
      h5{
        font-size: 3rem;
        width: 12%;
      }
      .hugeArt{
        width: 33%;
        height: 300px;
      }
    }
    @media only screen and (min-width: 900px) {
      .hugeArt{
        height: 300px;
        width: 33%;
        filter: grayscale(100%);
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    border-radius: 10px;
    text-align: center;
      }
      h5{
        font-size: 1rem;
      }
      .art{
        height: 600px;
        filter: grayscale(100%);
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    border-radius: 10px;
    width: 33%;
      }
      .search{
        width: 70%;
        float: left;
      }
      .features{
        padding-left: 1em;
      }
      .searchIt {
        margin-left: 3%;
      }
      .introImg{
        width: 96%;
        padding-left: 2%;
        padding-bottom: 1%;
        border-radius: 30% 60% / 70% 40%;
        transition: all 1s;
    -webkit-transition: all 1s;
    -moz-transition: all 1s;
      }
      .introImg:hover{
        border-radius: 70% 40% / 30% 60%;
      }
      .subSearch{
        float: right;
      }
      .adminLink{
        text-decoration: none;
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
    /*    -------min600-------    */
    @media only screen (min-width: 600px) {
      .adminLink{
        text-decoration: none;
      }
      .add{
        width: 300%;
      }
      img.art:hover {
        filter: grayscale(0%);
        -webkit-filter: grayscale(0%);
        -moz-filter: grayscale(0%);
        transform: scale(1.1);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
      }
      img.hugeArt:hover {
        filter: grayscale(0%);
        -webkit-filter: grayscale(0%);
        -moz-filter: grayscale(0%);
        transform: scale(1.1);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
      }
      .introImg{
        width: 98%;
        padding-left: 2%;
        border-radius: 50% 20% / 10% 40%;
      }
      .hugeArt{
        height: 300px;
        filter: grayscale(100%);
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    border-radius: 10px;
    float: top;
      }
      .art{
        height: 600px;
        filter: grayscale(100%);
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    border-radius: 10px;
      }
      .subSearch{
        margin-left: 30%;        
      }
      .search{
        width: 100%;
        float: none;
        text-align: center;
      }
      .hugeArt{
        height: 300px;
        width: 95%;
        float: left;
        padding-top: 10px;
      }
      .art{
        height: 700px;
        width: 95%;
        float: left;
      }
      .features{
        padding-left: 0;
      }
      }
      @media only screen and(min-width: 400px) {
          .introImg{
            width: 40%;
            padding-left: 2%;
            padding-bottom: 1%;
            border-radius: 30% 60% / 70% 40%;
            transition: all 1s;
            -webkit-transition: all 1s;
            -moz-transition: all 1s;
          }
          .introImg:hover{
            border-radius: 70% 40% / 30% 60%;
          }
          .hugeArt{
              height: 300px;
          }
  
#button {   
      display: inline-block;   
      background-color: #FF9800;   
      width: 50px;   
      height: 50px;   
      text-align: center;   
      border-radius: 4px;   
      margin: 30px;   
      position: fixed;   
      bottom: 30px;   
      right: 30px;   
      transition: background-color .3s;   
      z-index: 1000; 
    } 
    #button:hover {   
      cursor: pointer;   
      background-color: #333; 
    } 
    #button:active {   
      background-color: #555; 
    } 
    #button::after {
      content: "\f077";
      font-family: FontAwesome;
      font-weight: normal;
      font-style: normal;
      font-size: 1em;
      line-height: 50px;
      color: #fff; }
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
<script>
  
  let mybutton = document.getElementById("button");
  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (
      document.body.scrollTop > 1000 ||
      document.documentElement.scrollTop > 100
    ) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  mybutton.addEventListener("click", backToTop);

  function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
