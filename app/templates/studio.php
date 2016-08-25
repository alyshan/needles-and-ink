<?php 
  $this->layout('master', [
      'title'=>'Studio Page',
      'desc'=>'Review page for Tattoo or Piercing Studio'
    ]);
?>

<section class="container">
    <div class="row">
      <div class="col-md-6">
      <img src="<?= $studio['image'] ?>" class="alexh"></a>
      </div>

      <div class="col-md-6">
        <h1><?= $studio['studio_name'] ?></h1>
        <p><?= $studio['description'] ?></p>
    		<br>
    	<h4>To make an appointment, our contact details are below!</h4>
        <p><?= $studio['studio_email'] ?>
         	<br>
        <?= $studio['studio_phone'] ?>
         	<br>
       <?= $studio['studio_address1'] ?>
        	<br>
        <?= $studio['studio_address2'] ?>
        </p>
     </div>
      </div>
      </div>

</section>

  <?php if(!isset($_SESSION['id'])): ?>
   <h4> Please register an account to view the comments!</h4>
  <?php endif; ?>

<!-- Comment box -->
<?php if(isset($_SESSION['id'])): ?>
  <form action="index.php?page=studio&studioid=<?= $_GET['studioid'] ?>" method="post">
    <div class="detailBox">
    <div class="titleBox">
      <label>Write your review here!</label>
    </div>
    <div class="actionBox">
        <ul class="commentList">
         <?php foreach($allComments as $comment):  ?>
            <li>
                <div class="commenterImage">
                  <img src="http://placekitten.com/50/50" />
                </div>
                <div class="commentText">
                     <small>Written by: <?= $comment['author']?></small>
                      <p><?= $comment['comment'] ?></p>
                </div>
            </li>
         <?php endforeach ?>
        </ul>
        <form class="form-inline" role="form">
            <div class="form-group">
                <input class="form-control" name="comment" id="exampleTextarea" rows="10" class="col-xs-10" placeholder="Your review...."/>
            </div>
            <div class="form-group">
                <button class="btn btn-default" type="submit" name="new-comment" value="Submit" class="btn btn-default">Submit!</button>
            </div>
        </form>
    </div>
</div>

<?php endif; ?>
