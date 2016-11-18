<!--<!DOCTYPE html>-->
<html>
  <head>
      <!--Import Google Icon Font-->
      <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Title of the website goes here-->
      <link rel="stylesheet" href="css/animate.css" type="text/css" />
      <link rel="stylesheet" href="css/index.css" type="text/css" />
      <title>disk</title>
  </head>

  <!--This is the nav-->
  <nav>
    <div class="nav-wrapper">
      <div class="container">
        <a href="#" class="brand-logo"><?=$data['page']?></a>
      </div>
    </div>
  </nav>

  <body>
    <!--preloader-->
    <div class="progress">
      <div class="indeterminate"></div>
    </div>
    <!--here starts the container of the body-->
    <div class="container">
      <!--here starts the form-->
      <div class="row col s12">
        <div class="card-panel col s6 offset-s3">
        <h1 class="center-align">Login</h1>
        <form class="col s12" method="POST">
          <!--here must come the error-->
          <?php if($data['error'] == '1'){ ?>
              <div id="card" class="card-panel">Gebruikersnaam/wachtwoord is onjuist. Probeer het opnieuw!</div>
              <br>
          <?php } ?>
          <!--End of the error message-->
          <div class="row">
            <div class="input-field">
              <i class="material-icons prefix">account_circle</i>
              <input id="first_name" type="text" name="username" class="validate">
              <label for="first_name">Naam</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <i class="material-icons prefix">lock</i>
              <input id="password" type="password" name="password" class="validate">
              <label for="password">Wachtwoord</label>
            </div>
          </div>
          <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
            <i class="material-icons right">send</i>
          </button>
        </form>
        </div>
      </div>
    <!--here ends the container-->
    </div>
    <!--Gets loaded here for fast page loading-->
    <!--Import jQuery before materialize.js-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
    /*global $*/
    $(window).load(function() {
        $(".progress").fadeOut("slow");
    })
    </script>
    <script type="text/javascript" src="//code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.js"></script>
    <script type="text/javascript" src="js/sliderinit.js"></script>
    <script type="text/javascript" src="js/parallex.js"></script>
    <script type="text/javascript" src="js/scrollspy.js"></script>
  </body>
</html>
