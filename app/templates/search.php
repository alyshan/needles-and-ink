<?php 
	$this->layout('master',[
		'title'=>'Search',
		'desc'=>'Search Results'
	]);
 ?>

<h1 class="search">Search Results for "<i><?= $this->e($searchTerm) ?></i>"</h1>

<?php if(strlen($searchTerm) > 0): ?>
	<?php if($searchResults > 0): ?>
		<?php foreach($searchResults as $Result): ?>
			<div class="studio">
				<h3><?= $Result['score_title'] ?></h3>
				    <img src="<?= $Result['image'] ?>" width="200" height="200"  class="alexh"></a>
			</div>
				<hr>
		<?php endforeach; ?>
	<?php else: ?>
		<p>There was no results for "<i><?= $this->e($searchTerm) ?></i>"</p>
	<?php endif; ?>
<?php else: ?>
	<p>Please put something into the search bar</p>
<?php endif; ?>