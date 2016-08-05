<?php $this->layout('master') ?>


<!-- Suggest a studio page -->
<div id="form">
<div class="form-group row">
  <label for="example-text-input" class="col-xs-3 col-form-label">Studio Name</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" value="Studio Name" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-xs-3 col-form-label">Studio Email</label>
  <div class="col-xs-10">
    <input class="form-control" type="email" value="example@example.com" id="example-email-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-xs-3 col-form-label">Studio Website</label>
  <div class="col-xs-10">
    <input class="form-control" type="url" value="Website" id="example-url-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-xs-3 col-form-label">Studio Phone</label>
  <div class="col-xs-10">
    <input class="form-control" type="tel" value="(55)-555-5555" id="example-tel-input">
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