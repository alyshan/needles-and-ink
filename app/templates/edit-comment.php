<?php 
  $this->layout('master', [
      'title'=>'Edit your comment! ',
      'desc'=>'Edit your comment'
    ]);
?>

<h1>Edit your comment</h1>

<form action="index.php?page=edit-comment&id=<?= $_GET['id'] ?>" method="post">
	
	<label for="comment">Comment;</label>
	<textarea name="comment" id="comment"><?= $comment ?></textarea>
	<input type="submit" name="edit-comment" value="submit your changes">


</form>