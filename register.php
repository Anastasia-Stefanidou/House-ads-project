<?php
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
        <a class="active" href="login.php">Login</a>
    </div>
</header>
  <main>
   <form method="post" action="actions/register.php">
      <div class="title">
        <h1>Create your account</h1>
      </div>
        <input class="form-control" id="name" type="text" name="name" placeholder="Name" required/>
        <input class="form-control" id="email" type="email" name="email" placeholder="Email" required/>
        <input class="form-control" id="password" type="password" name="password" placeholder="Password" required/>
        <input class="btn btn-primary" type="submit" name="create"></input>
        <p class="login_link">
          Already having an account?
          <a href="login.php">
            Login here!
          </a>
        </p>
   </form>
  </main>
  <footer><p>All rıghts reserved</p></footer>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
