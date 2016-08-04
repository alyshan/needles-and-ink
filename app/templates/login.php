<!-- Menu -->
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
      <a class="navbar-brand" href="index.html"><img src="img/NaIRsmall.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="map.html">Find a Studio</a></li>
        <li class="dropdown">
          <a href="suggest.html">Suggest a Studio</a>
        </li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
       <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
        <li><a href="login.html">Login</a></li>
        <li><a href="register.html">Register</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="edit-details.html">Edit Details</a></li>
            <li><a href="index.html">Log Out</a></li>
            <li><a href="#">Edit Studio</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<!-- Sign in  -->
<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <form role="form">
      <fieldset>
        <h2>Please Sign In</h2>
        <hr class="colorgraph">
        <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
        </div>
        <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
        </div>
        <span class="button-checkbox">
          <button type="button" class="btn" data-color="info">Remember Me</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
          <a href="" class="btn btn-link pull-right">Forgot Password?</a>
        </span>
        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
                    
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="register.html" class="btn btn-lg btn-primary btn-block">Register</a>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>

</div>
