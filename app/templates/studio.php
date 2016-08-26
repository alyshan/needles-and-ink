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
        <h1><?= $this->e($studio['studio_name']) ?></h1>
        <p><?= $this->e($studio['description']) ?></p>
    		<br>
    	<h4>To make an appointment, our contact details are below!</h4>
        <p><?= $this->e($studio['studio_email']) ?>
         	<br>
        <?= $this->e($studio['studio_phone']) ?>
         	<br>
       <?= $this->e($studio['studio_address1']) ?>
        	<br>
        <?= $this->e($studio['studio_address2']) ?>
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
  <form action="index.php?page=studio&studioid=<?= $_GET['studio_id'] ?>" method="post">
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
                      <p><?= $this->e($comment['comment']) ?></p>
                </div>
            </li>
          <?php if(isset($_SESSION['id'])){ 

                if($_SESSION['id'] == $comment['user_id'] ){
                  
                  echo 'Delete';
                  echo '<a href="index.php?page=edit-comment&id='.$comment['id'].'">Edit</a>';
                }

          }?>

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
