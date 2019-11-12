<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <style>
    html {
      height: 100%;
    }

    body {
      min-height: 100%;
      margin: 0;
      text-align: center;
      padding-top: 200px;
    }

    form {
      padding: 20px 24px 20px 20px;
      background-color: lightgrey;
      display: inline-block;
      margin: auto;
    }

    button {
      position: relative;
      left: 87px;
    }

    a {
      font-size: 15px;
      position: relative;
      right: 100px;
    }

  </style>
</head>
<?php if($_GET['login'] === 'fail'){
    echo "<script>";
    echo "alert('Wrong Username Or Password!');";
    echo "</script>";
    }
    ?>
<body>
<div>
  <form action="db_login.php" method="POST">
    <input type="text" name="uname" placeholder="username" />
    <br>
    <input type="password" name="passw" />
    <br>
    <br>
    <button type="submit" name="login">Login</button>
    <a href="signup.php">Sign Up</a>
  </form>
</div>
  
</body>
</html>