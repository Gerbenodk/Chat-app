<!DOCTYPE html>
<html>
<head>

  <meta name="description" content="Login screen">
  <meta name="keywords" content="Logint">
  <meta name="author" content="Gerben Op den Kamp">

  <title>Site - Login</title>
  <link rel="shortcut icon" href="public/img/favicon/login.ico">

  <link rel="stylesheet" type="text/css" href="public/css/login.css">
  <link rel="stylesheet" type="text/css" href="public/css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/css?family=Lalezar" rel="stylesheet">

</head>

<body>

  <div class="container animated bounceInLeft">

    <a href="home.php"><img src="public/img/user-placeholder.png"></a>

      <h1>Login</h1>
        <form method="POST">

          <label class="form-username">
            <input type="text" name="username" placeholder="Enter Username"><br>
          </label>

          <label class="form-password">
          <input type="password" name="password" placeholder="Enter Password">
          </label>

          <div class="btn">
            <!-- <input type="forgot" value="Forgot" class="btn-forgot"> -->
            <input type="submit" name="submit" value="Login" class="btn-login">
          </div>
      </form>
  </div>
</body>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>

  </script>
</html>
