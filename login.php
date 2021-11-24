<?php
include('actions/config.php');
include('actions/login.php');
include('actions/register.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex,nofollow">
        <link rel="stylesheet" href="css/styles2.css">
    </head>
    <body>
        <header class="header">
            <div class="header_right">
                <a class="active" href="login.php">Home</a>
                <a class="active" href="register.php">Register</a>
            </div>
        </header>
        <main>
        <form action="actions/login.php" method="post">
            <div class="title">
                <h1>Login</h1>
            </div>
            <input class="form-control" id="name" type="text" name="username" placeholder="Username" required/>
            <input class="form-control" id="password" type="password" name="password" placeholder="Password" required/>
            <input class="btn btn-primary" type="submit" name="login" value="login" />
            <p class="register_link">New here?
                <a href="register.php">
                    Click here to register!
                </a>
            </p>
         </form>
        </main>
        <footer><p>All rights reserved</p></footer>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      </body>
      </html>