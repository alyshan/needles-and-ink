<?php 
  $this->layout('master', [
      'title'=>'Suggest a Studio',
      'desc'=>'Suggest your favourite Studio'
    ]);
?> 
   <?= isset($suggestMessage) ?  $suggestMessage : ''?>

<form action="index.php?page=suggest" method="post" enctype="multipart/form-data">
<div id="form">
<div class="form-group row">
  <label for="example-text-input" class="col-xs-3 col-form-label">Studio Name</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" placeholder="Studio Name" id="example-text-input" name="studio-name">
    <?= isset($studioNameMessage) ?  $studioNameMessage : ''?>
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-xs-3 col-form-label">Studio Email</label>
  <div class="col-xs-10">
    <input class="form-control" type="email" placeholder="example@example.com" id="example-email-input" name="studio-email">
    <?= isset($studioEmailMessage) ?  $studioEmailMessage : ''?>
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-3 col-form-label">Studio Street Address</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" placeholder="Street Address" id="example-text-input"
     name="street-address">
    <?= isset($streetAddressMessage) ?  $streetAddressMessage : ''?>
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-3 col-form-label">Studio City</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" placeholder="City" id="example-text-input"
     name="city">
    <?= isset($cityMessage) ?  $cityMessage : ''?>
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-xs-3 col-form-label">Studio Phone</label>
  <div class="col-xs-10">
    <input class="form-control" type="tel" placeholder="(55)-555-5555" id="example-tel-input" name="studio-phone">
    <?= isset($studioPhoneMessage) ?  $studioPhoneMessage : ''?>
  </div>
  </div>
 <div class="form-group">
    <label for="exampleTextarea">About the Studio</label>
    <textarea class="form-control" id="exampleTextarea" rows="5" class="col-xs-2" name="desc"></textarea>
      <?= isset($descMessage) ?  $descMessage : ''?>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Upload Studio Image</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="image">
      <?= isset($fileMessage) ?  $fileMessage : ''?>
    <small id="fileHelp" class="form-text text-muted">Please make sure your image is no larger than 570px by 570px</small>
  </div>
</div>

<div class="form-group row">
  <div class="col-xs-10">
   <input type="submit" name="new-studio" class="btn btn-primary" class="col-xs-4 col-form-label value="Submit">
  </div>
</div>
</form>