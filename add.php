<?php
  $arr = array('gif','jpg','jpeg','png', 'jfif', 'pjpeg', 'pjp', 'avif', 'apng');
  $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
  $extension2 = pathinfo($_FILES['file2']['name'], PATHINFO_EXTENSION);
  $extension3 = pathinfo($_FILES['file3']['name'], PATHINFO_EXTENSION);
  if(isset($_POST['sub'])) {
    if(in_array($extension, $arr) && in_array($extension2, $arr) && in_array($extension3, $arr)) {
      if($_COOKIE['user']) {
    move_uploaded_file($_FILES['file']['tmp_name'], "img/".$_FILES['file']['name']);
    move_uploaded_file($_FILES['file2']['tmp_name'], "img/".$_FILES['file2']['name']);
    move_uploaded_file($_FILES['file3']['tmp_name'], "img/".$_FILES['file3']['name']);
    $img = "img/".$_FILES['file']['name'];
    $img2 = "img/".$_FILES['file2']['name'];
    $img3 = "img/".$_FILES['file3']['name'];
    $title = htmlspecialchars($_POST['title']);
    $intro_text = htmlspecialchars($_POST['intro_text']);
    $full_text = htmlspecialchars($_POST['full_text']);
    $email = htmlspecialchars($_POST['email']);
    $street = htmlspecialchars($_POST['street']);
    $conn=mysqli_connect("localhost", 
      "root", "", "vh");
    $sql = "INSERT INTO arts (title, intro_text, full_text, street, img, img2, img3)
    VALUES ('$title', '$intro_text', '$full_text', '$street', 
    '$img', '$img2', '$img3')";

    $result = mysqli_query ($conn, $sql) or mysqli_error($conn);

    mysqli_close($conn);

    echo "<h3 class=\"text-primary\" style=\"text-align: center;\">Дякуємо! Після підтвердження публікації статті адміністратором<br>вона буде відображена на головній сторінці сайту.</h3>";
  }
  else 
      echo "<div class=\"resFalse\">
                <h3 class=\"text-danger\" style=\"text-align: center;\">Ви не авторизовані. Будь ласка, <a href=\"/authForm.html\">увійдіть</a>.</h3>
              </div>";
  }
  elseif($extension == "" || $extension2 == "" || $extension3 == "") echo "<div class=\"resFalse\">
                <h3 class=\"text-danger\" style=\"text-align: center;\">Оберіть усі три файли.</h3>
              </div>";
  else echo "<div class=\"resFalse\">
                <h3 class=\"text-danger\" style=\"text-align: center;\">Обраний файл не є зображенням.</h3>
              </div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>VolynHistory</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    <div class="header d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-grey border-bottom box-shadow">
        <a href="/"><h5 class="my-0 mr-md-auto font-weight-normal">VolynHistory</h5></a>
    
      <nav class = "features" class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="about.php">Про нас</a>
      </nav>

      <form class="searchIt form-inline my-2 my-lg-0">
        <input name="input" class="search form-control mr-sm-2" type="search" placeholder="Замок Любарта" aria-label="Search">
        <button name="submit" class="subSearch btn btn-outline-success my-2 my-sm-0" type="submit">Знайти</button>
      </form>
    
    </div>
    </header>
<form action ="" method="POST" class="form-signin" enctype="multipart/form-data">
      

      <div class="form-label-group">
        <input type="text"  class="form-control" placeholder="Назва" required="" autofocus="" name="title">
<br>
        <input type="text"  class="form-control" placeholder="Адреса" required="" autofocus="" name="street">
<br>
        <input type="text"  class="form-control" placeholder="Вступний текст" required="" autofocus="" name="intro_text">
<br>
<script src="/ckeditor/ckeditor.js" type="text/javascript"></script>
<textarea class="full_text form-control" id="full_text" name="full_text" rows=6>
</textarea>
<br>
        <input type="email" id="inputEmail" class="form-control" placeholder="Електронна адреса" required="" autofocus="" name="email">
        <br>
      </div>
      <label for="exampleInputPassword1">
        Додайте фото споруди
      </label>
      <br>
      <input class="file" type="file" name="file"><br>
      <input class="file" type="file" name="file2"><br>
      <input class="file" type="file" name="file3"><br>
      <button name="sub" class="sub btn btn-lg btn-primary btn-block" type="submit">Додати</button>
      <p class="mt-5 mb-3 text-muted text-center">© 2021-2022</p>
    </form>




<style type="text/css">
    .file{
      border: 1px solid green;
      border-radius: 10px;
      margin-bottom: 5px;
    }
    .sub {
    width: 100px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 20px;
    height: 55px;
    text-align:center;
    border: none;
    background-size: 300% 100%;

    border-radius: 50px;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;

    background-image: linear-gradient(to right, #6253e1, #852D91, #A3A1FF, #F24645);
    box-shadow: 0 4px 15px 0 rgba(126, 52, 161, 0.75);
}

.sub:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}
    @media screen and  (min-width: 956px) {
      .form-signin{
        width: 40%;
        text-align: center;
        margin-left: 30%;
      }
      h5{
         font-family: "Pacifico";
          font-size: 1.7em;
          color: black;
       }
       .frameStreet{
        color: blueviolet;
        }
    .search{
          width: 70%;
          float: left;
        }
        a{
          text-decoration: none;
        }
        .features{
          padding-left: 54%;
        }
        .searchIt {
          margin-left: 3%;
        }

    }
    @media screen and  (max-width: 956px) {
            .subSearch{
        margin-left: 30%;        
      }
      .search{
        width: 100%;
        float: none;
        text-align: center;
      }
      .form-signin{
        width: 90%;
        text-align: center;
        margin-left: 5%;
      }
      h5{
         font-family: "Pacifico";
          font-size: 1.7em;
          text-decoration: none;
       }
       .frameStreet{
        color: blueviolet;
        }
      .search{
          width: 100%;
      }
    }
    
</style>
<?= require_once("footer.php")?>
