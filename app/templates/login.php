<?php 
  $this->layout('master', [
      'title'=>'Login',
      'desc'=>'Needles and Ink Login Page'
    ]);
?>


<!-- Sign in  -->
<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <form role="form" action="index.php?page=login" method="post">
      <fieldset>
        <h2>Please Sign In</h2>
        <hr class="colorgraph">
        
        <div class="form-group">
        <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3" value="<?= isset($_POST['display_name']) ? $_POST['display_name'] : ''?>">
        <?php if( isset($displayNameMessage) ): ?> 
            <p><?= $displayNameMessage ?></p>
        <?php endif; ?>

      </div>
        <div class="form-group">
              <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
               <?php if( isset($passwordMessage) ): ?>
                <p><?= $passwordMessage ?></p>
              <?php endif ?>

              <?php if( isset($loginMessage) ): ?>
                <p><?= $loginMessage ?></p>
              <?php endif ?>
        </div>
        <span class="button-checkbox">
          <button type="button" class="btn" data-color="info">Remember Me</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
          <a href="#" class="btn btn-link pull-right">Forgot Password?</a>
        </span>
        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <input type="submit" class="btn btn-lg btn-success btn-block" value="Log In" name="login">
                    
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="index.php?page=register" class="btn btn-lg btn-primary btn-block">Register</a>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>

</div>
