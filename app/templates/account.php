<?php 
  $this->layout('master', [
      'title'=>'Account',
      'desc'=>'Edit your account details'
    ]);
?>


<!-- Edit Details Page -->
<div class="container">
    <h1>Edit Account</h1>
    <hr>

<form class="form-horizontal" role="form" action="index.php?page=account" method="post"  enctype="multipart/form-data">
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="http://placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form" action="index.php?page=account" method="post"  enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-lg-3 control-label"  name="first-name">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="first-name" type="text" value="<?= isset($_POST['save-changes']) ? $_POST['first-name'] : '' ?>">
                <?php isset($firstNameMessage) ? $firstNameMessage : ''?>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label" name="last-name">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="last-name" value="<?= isset($_POST['save-changes']) ? $_POST['last-name'] : '' ?>">
                <?php isset($lastNameMessage) ? $lastNameMessage : ''?>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" name="email">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" value="<?= isset($_POST['save-changes']) ? $_POST['email'] : '' ?>">
                 <?php isset($displayNameMessage) ? $displayNameMessage : ''?>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" name="display-name">Display Name:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="display-name" value="<?= isset($_POST['save-changes']) ? $_POST['display-name'] : '' ?>">
            </div>
              <?php if( isset($displayNameMessage) ):?>
                <p><?= $displayNameMessage ?></p>
              <?php endif?>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label" name="password">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="">
            </div>
          </div>
 
          <div class="form-group">
            <label class="col-md-3 control-label" name="password">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes" name="save-changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>

        <form class="form-horizontal" role="form" action="index.php?page=account" method="post">
          <span>I wish to deactivate my account <input type="checkbox"></span> 
            <span>Please enter your password to confirm: </span>
            <input type="password" placeholder="Password"> 
          <input type="submit" value="Confirm" name="deactivate-account">
        </form>

      </div>
  </div>
</div>
<hr>
