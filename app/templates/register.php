<?php 
  $this->layout('master', [
      'title'=>'Needles and Ink Review | Register',
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
      <div class="row">
        <div class="col-xs-4 col-sm-3 col-md-3">
          <span class="button-checkbox">
            <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
          </span>
        </div>
        <div class="col-xs-8 col-sm-9 col-md-9">
           By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
        </div>
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
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>