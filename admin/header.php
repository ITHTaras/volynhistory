<!DOCTYPE html>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<body>
    <style>
        .dropleft{
              background-color: #dddddd;
              border-radius: 8px;
          }
            h5{
              font-family: "Pacifico";
            }
    
            header{
                box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
            }
            a{
                text-decoration: none;
            }
    </style>
    <header>
    <div class="header d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-grey border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal">VolynHistory</h5>
        <?php
        echo $_COOKIE['user'] ? "<a class='p-2 text-dark link'>Вітаємо, ".$_COOKIE['user']."</a>" : "";
        ?>
      <nav class = "features" class="my-2 my-md-0 mr-md-3">
        <div class="dropleft">
  <button style="width: 40px; padding: 18%;" class="btn dropleft" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img style="width: 110%; height: 50%;" src="/img/lines.png">
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="text-align: center;">
        <?php
            echo $_COOKIE['user'] ? "" : "<a class=\"p-2 text-dark link\" href=\"authForm.html\">Авторизація</a><br>";
        ?>
        <a class="p-2 text-dark link" href="/top.php">Топ місць</a><br>
        <a class="p-2 text-dark link" href="/about.php">Про нас</a><br>
        <?php
        if($_COOKIE['user']) { ?> 
            <a class="p-2 text-dark link" href="/add.php">Додати місце</a>
        <br>
        <?php if($_COOKIE['user'] == "admin") { ?>
        <a class="adminLink text-dark" href="/admin/">
            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon link" style="width: 2em; height: 2em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1"><path d="M315.392 507.904c-81.92-40.96-137.216-122.88-137.216-221.184 0-135.168 110.592-245.76 245.76-245.76s245.76 110.592 245.76 245.76c0 133.12-104.448 241.664-237.568 245.76h-2.048c-202.752 0-368.64 165.888-368.64 368.64 0 12.288-8.192 20.48-20.48 20.48s-20.48-8.192-20.48-20.48c0-186.368 124.928-344.064 294.912-393.216z m108.544-16.384c112.64 0 204.8-92.16 204.8-204.8s-92.16-204.8-204.8-204.8-204.8 92.16-204.8 204.8 92.16 204.8 204.8 204.8z m561.152 135.168l4.096 10.24-49.152 59.392c-8.192 10.24-8.192 26.624 0 36.864l49.152 57.344-4.096 10.24c-10.24 28.672-24.576 57.344-45.056 79.872l-8.192 8.192-75.776-12.288c-12.288-2.048-26.624 6.144-30.72 18.432l-26.624 73.728-10.24 2.048c-38.912 8.192-77.824 8.192-116.736 0l-12.288-2.048-24.576-71.68c-4.096-12.288-18.432-20.48-30.72-18.432l-77.824 12.288-8.192-8.192c-10.24-10.24-18.432-22.528-24.576-34.816-8.192-14.336-16.384-30.72-20.48-47.104l-4.096-10.24 51.2-57.344c8.192-10.24 8.192-26.624 0-34.816l-49.152-59.392 4.096-10.24c10.24-30.72 26.624-57.344 47.104-81.92l8.192-8.192 73.728 12.288c12.288 2.048 26.624-6.144 32.768-18.432l26.624-71.68 10.24-2.048c36.864-8.192 75.776-8.192 114.688 0l12.288 2.048 24.576 69.632c4.096 12.288 18.432 22.528 32.768 20.48l75.776-10.24 8.192 8.192c10.24 12.288 18.432 22.528 24.576 36.864 6.144 10.24 12.288 26.624 18.432 40.96z m-57.344-24.576c-4.096-8.192-8.192-14.336-14.336-22.528l-53.248 6.144c-32.768 4.096-65.536-16.384-75.776-47.104L768 491.52c-24.576-4.096-49.152-4.096-73.728 0l-18.432 49.152c-10.24 30.72-45.056 51.2-77.824 45.056l-51.2-8.192c-12.288 14.336-20.48 32.768-28.672 49.152l34.816 40.96c20.48 24.576 20.48 63.488 0 88.064l-34.816 40.96c4.096 10.24 8.192 18.432 14.336 28.672 4.096 8.192 8.192 14.336 14.336 20.48l55.296-8.192c32.768-4.096 65.536 16.384 75.776 47.104l16.384 49.152c24.576 4.096 51.2 4.096 75.776 0l18.432-51.2c10.24-30.72 45.056-51.2 75.776-45.056l51.2 8.192c10.24-14.336 20.48-30.72 26.624-49.152l-32.768-38.912c-20.48-24.576-22.528-63.488-2.048-88.064l34.816-40.96c-4.096-8.192-8.192-16.384-14.336-26.624z m-196.608 204.8c-51.2 0-92.16-40.96-92.16-92.16s40.96-92.16 92.16-92.16 92.16 40.96 92.16 92.16-43.008 92.16-92.16 92.16z m0-40.96c28.672 0 51.2-22.528 51.2-51.2s-22.528-51.2-51.2-51.2-51.2 22.528-51.2 51.2 22.528 51.2 51.2 51.2z"/></svg>
        </a><br>
    <?php  } ?>
            <a class="p-2 text-dark link" href="/exit.php" title="Вихід">
            <svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width:13%;height:13%;" xml:space="preserve">
        <path d="M510.371,226.517c-1.088-2.624-2.645-4.971-4.629-6.955l-63.979-63.979c-8.341-8.341-21.824-8.341-30.165,0    c-8.341,8.341-8.341,21.824,0,30.165l27.584,27.584h-55.168v-192C384.013,9.557,374.477,0,362.68,0H21.347    c-0.768,0-1.451,0.32-2.197,0.405c-1.024,0.107-1.92,0.277-2.901,0.533c-2.219,0.555-4.245,1.429-6.123,2.624    c-0.469,0.299-1.067,0.32-1.515,0.661C8.44,4.352,8.376,4.587,8.205,4.715C5.88,6.549,3.939,8.789,2.531,11.456    c-0.299,0.576-0.363,1.195-0.597,1.792c-0.683,1.621-1.429,3.2-1.685,4.992c-0.107,0.64,0.085,1.237,0.064,1.856    c-0.021,0.427-0.299,0.811-0.299,1.237V448c0,10.176,7.189,18.923,17.152,20.907l213.333,42.667    c1.387,0.299,2.795,0.427,4.181,0.427c4.885,0,9.685-1.685,13.525-4.843c4.928-4.053,7.808-10.091,7.808-16.491v-21.333H362.68    c11.797,0,21.333-9.557,21.333-21.333V256h55.168l-27.584,27.584c-8.341,8.341-8.341,21.824,0,30.165    c4.16,4.16,9.621,6.251,15.083,6.251s10.923-2.091,15.083-6.251l63.979-63.979c1.984-1.984,3.541-4.331,4.629-6.955    C512.525,237.611,512.525,231.723,510.371,226.517z M191.373,325.184c-2.432,9.685-11.115,16.149-20.672,16.149    c-1.707,0-3.456-0.192-5.184-0.64l-42.667-10.667c-11.435-2.859-18.389-14.443-15.531-25.877    c2.837-11.413,14.379-18.432,25.856-15.509l42.667,10.667C187.277,302.165,194.232,313.749,191.373,325.184z M341.347,426.667    h-85.333V85.333c0-9.408-6.187-17.728-15.211-20.437l-74.091-22.229h174.635V426.667z"/>
</svg>
</a>
        <?php } ?>
  </div>
</div>
        
      </nav>
      <form method="POST" action="search.php?q=<?=$_POST["query"]?>" class="searchIt col-md-4 form-inline my-2 my-lg-0">
        <input name="query" class="search form-control mr-sm-2" type="search" placeholder="Замок Любарта" aria-label="Search">
        <button name="submit" class="subSearch btn btn-outline-success my-2 my-sm-0" type="submit">Знайти</button>

      </form>
    
    </div>
    </header>
