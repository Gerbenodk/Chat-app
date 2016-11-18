<!--<!DOCTYPE html>-->
<html>
  <head>
      <!--Import Google Icon Font-->
      <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/../materialize/css/materialize.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Title of the website goes here-->
      <link rel="stylesheet" href="/../css/animate.css" type="text/css" />
      <link rel="stylesheet" href="/../css/user.css" type="text/css" />
      <title>dicks</title>
  </head>
  <!--This is the nav-->
  <nav>
    <div class="nav-wrapper">
      <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
      <div class="container">
        <?php echo('<a href="#" class="brand-logo">'.$data['page'].'</a>') ?>
      </div>
    </div>
  </nav>

<body>
<!--preloader-->
<div class="progress">
  <div class="indeterminate"></div>
</div>
<!--Sidenav-->
<ul id="slide-out" class="side-nav">
  <li><div class="divider"></div></li>
  <li><a class="subheader"><i class="material-icons">perm_identity</i>Gebruiker</a></li>
  <li>
    <?php foreach ($data['users'] as $key) { ?>
      <a style="color:#ffab40;"><?php  echo'Session id: '.$_SESSION['userid'];?></a>
      <a style="color:#ffab40;"><?php  echo'Naam: '.$key['username']?></a>
    <?php } ?>
  </li>
  <li><div class="divider"></div></li>
  <li><a class="subheader"><i class="material-icons">settings</i>Profiel</a></li>
  <li><a class="waves-effect" style="color:#ffab40;" href="#!">Settings</a></li>
  <li><a class="waves-effect" style="color:#ffab40;" href="/user/logout">Logout</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader"><i class="material-icons">navigation</i>Pages</a></li>
  <li><a class="waves-effect" style="color:#ffab40;" href="/user">Overview</a></li>
</ul>
