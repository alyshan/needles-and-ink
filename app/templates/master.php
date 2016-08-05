<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,inital-scale=1">
    <title></title>
    <meta name="description" content="">
    <link rel="stylesheet" href="css/styles.css">
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
       <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
        <li><a href="index.php?page=login">Login</a></li>
        <li><a href="index.php?page=register">Register</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?page=editeDetails">Edit Details</a></li>
            <li><a href="index.php?page=landing">Log Out</a></li>
            <li><a href="#">Edit Studio</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



 <?= $this->section('content') ?>


  <script src="js/bootstrap.js"></script> 
  <script src="js/npm.js"></script>
  </body>
</html>