<?php 
  $this->layout('master', [
      'title'=>'Register',
      'desc'=>'Sign up for an account and review your fave studios'
    ]);
?>


<!-- Regsitration Form -->

 <div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <form role="form" action="index.php?page=register" method="post">
      <h2>Sign Up Here</h2>
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
              <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" value="<?= isset($_POST['first_name']) ? $_POST['first_name'] : ''?>">
              <?php if( isset($firstNameMessage) ): ?> 
              <p><?= $firstNameMessage ?></p>
              <?php endif; ?>

          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" value="<?= isset($_POST['last_name']) ? $_POST['last_name'] : '' ?>">
            <?php if( isset($lastNameMessage) ): ?> 
            <p><?= $lastNameMessage ?></p>
            <?php endif; ?>

          </div>
        </div>
      </div>
      <div class="form-group">
        <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3" value="<?= isset($_POST['display_name']) ? $_POST['display_name'] : ''?>">
        <?php if( isset($displayNameMessage) ): ?> 
            <p><?= $displayNameMessage ?></p>
        <?php endif; ?>

      </div>
      <div class="form-group">
        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" value="<?= isset($_POST['email']) ? $_POST['email'] : ''?>">
        
        <?php if( isset($emailMessage) ): ?> 
            <p><?= $emailMessage ?></p>
        <?php endif; ?>

      </div>
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
            <?php if( isset($passwordMessage) ): ?> 
            <p><?= $passwordMessage ?></p>
            <?php endif; ?>
      </div>
      
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-md-6">
        <input type="submit" value="Register" name="new-account" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
        <div class="col-xs-12 col-md-6"><a href="index.php?page=login" class="btn btn-success btn-block btn-lg">Already a Member?</a></div>
      </div>
    </form>
  </div>
</div>
</div>