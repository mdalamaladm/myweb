<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign Up</title>
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
      left: 54px;
    }
  </style>
</head>
<body>
<div>
  <form action="db_signup.php" method="POST">
    <input type="text" name="uname" placeholder="username" />
    <br>
    <input type="password" name="passw" />
    <br>
    <input type="email" name="email" />
    <br>
    <br>
    <button type="submit" name="signup">Sign Up</button>
  </form>
</div>
  
</body>
</html>