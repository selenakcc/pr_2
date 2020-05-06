<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="styles.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
        <title>Starter Rijschool</title>
    </head>
    <header>

    </header>
    <body>
    <h2>Log In</h2>
    
    <form method="POST" action="/login">
    {{csrf_field()}}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>

    </body>
    <footer></footer>
</html>



<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/styles.css">
        <title>Starter Rijschool</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <header>

    </header>
    <body>
        <div action="login.php" method="POST">
        <div class="login-box">
            <div class="login-button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="registreer()">Registreer</button>
            </div>
            <div class="small-icons">
                <img src="fb.png">
                <img src="instagram.png">
                <img src="gmail.png">
            </div>
            <form id="login" class="input-group">
                <input type="text" id="username" class="input-field" placeholder="User ID" required>
                <input type="text" id="password" class="input-field" placeholder="Voer wachtwoord in" required>
                <button type="submit" class="submit-btn">Login</button>
            </form>
            <form id="registreer" class="input-group-r">
                    <input type="text" class="input-field" placeholder="User ID" required>
                    <input type="email" class="input-field" placeholder="Email" required>
                    <input type="text" class="input-field" placeholder="Voer wachtwoord in" required>
                    <input type="text" class="input-field" placeholder="Herhaal wachtwoord" required>
                    <input type="checkbox" class="check-box"><span>ik ga akkoord met de algemene voorwaarden</span>
                    <button type="submit" class="submit-btn">Registreer</button>
            </form>
        </div>
    </div>

        <script>
        var x = document.getElementById("login");
        var y = document.getElementById("registreer");
        var z = document.getElementById("btn");

        function registreer(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
        </script>

    </body>
    <footer>

    </footer>
</html> -->