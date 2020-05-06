<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="css/navbar-styles.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
        <title>Starter Rijschool</title>
    </head>
    <body>
    <div class="navbar">
  <div class="navbar-top">
    <ul class="navbar-top-list">
      <li><a class="signup" href="/login">Sign up</a><li>
      <div class="logo"><img src="css/logo.png"></div>
          <!-- <a class="search">Zoeken<input type="text" class="searchbar" placeholder=""></a> -->
    </ul>
  </div>
  
  <div class="navbar-bottom">
    <ul class="navbar-bottom-list">
      <li><a href="/">Home</a></li>
      <li><a>Theorie Lessen</a></li>
      <li><a>GRATIS</a></li>
      <li><a href="/hoewerkthet">Hoe Werkt Het</a></li>
      <li><a>Theorie</a></li>
      <li><a>Nieuws</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Over ons</a>  
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Veelgestelde vragen</a>
          <a class="dropdown-item" href="#">Partners van Starttheorie.nl</a>
          <a class="dropdown-item" href="#">Contact / Klantenservice </a>
        </div>
      </li>
    </ul>
  </div>
</div>

        <a href="/questionnaires/create">Create question</a>

        <div class="card mt-4">
            <div class="card-header"> My questionnaire </div>
            
            <div class="card-body">
               <ul class="list-group">
                    @foreach($questionnaires as $questionnaire)
                        <li class="list-group-item">
                            <a href="{{ $questionnaire->path() }}">{{ $questionnaire->title }}</a>
                        </li>
                    @endforeach
               </ul>
            </div>
        </div>
    </body>
</html>