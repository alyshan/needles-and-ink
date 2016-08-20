<?php 
  $this->layout('master', [
      'title'=>'Suggest a Studio',
      'desc'=>'Suggest your favourite Studio'
    ]);
?>

<?php if (!isset($_SESSION['id'])):?>

       <h2 id="studio">Please login or regisiter to suggest a studio </h2>
          <img src="img/beedoo.jpg" class="center-block">
<? endif;?>


  <?php if(isset($_SESSION['id'])): ?>
<div id="form">
<div class="form-group row">
  <label for="example-text-input" class="col-xs-3 col-form-label">Studio Name</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" placeholder="Studio Name" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-xs-3 col-form-label">Studio Email</label>
  <div class="col-xs-10">
    <input class="form-control" type="email" placeholder="example@example.com" id="example-email-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-xs-3 col-form-label">Studio Website or Facebook</label>
  <div class="col-xs-10">
    <input class="form-control" type="url" placeholder="Website or Facebook" id="example-url-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-xs-3 col-form-label">Studio Phone</label>
  <div class="col-xs-10">
    <input class="form-control" type="tel" placeholder="(55)-555-5555" id="example-tel-input">
  </div>
  </div>
 <div class="form-group">
    <label for="exampleTextarea">About the Studio</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" class="col-xs-3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Upload Studio Image</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Please make sure your image is no larger than 570px by 570px</small>
  </div>
</div>
<? endif;?>