<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= $title ?></title>
    <meta name="description" content="<?= $desc ?>">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
      
  </head>
  <body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php?page=landing"><img src="img/NaIRsmall.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php?page=map">Find a Studio</a></li>
        <li class="dropdown">
          <a href="index.php?page=suggest">Suggest a Studio</a>
        </li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
       <form class="navbar-form navbar-left" method="post" action="index.php?page=search">
        <div class="form-group">
          <input type="search" name="search" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <?php if(!isset($_SESSION['id'])): ?>
        <li><a href="index.php?page=login">Login</a></li>
        <li><a href="index.php?page=register">Register</a></li>
          <?php endif; ?>
        <?php if(isset($_SESSION['id'])): ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?page=account">Edit Details</a></li>
            <li><a href="#">Edit Studio</a></li>
            <li><a href="index.php?page=logout">Log Out</a></li>
            
          <?php endif; ?>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


 <?= $this->section('content') ?>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/map.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3G6J2-dbvIjn0c1xy1H9Khnw56COElnA&callback=initMap"type="text/javascript"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>