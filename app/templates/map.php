<?php 
  $this->layout('master', [
      'title'=>'Find a Studio',
      'desc'=>'Map to find a studio near you'
    ]);
?>


<div id="map-container" class="col-md-8"></div>
	<div class="col-md-4">
	 <select id="store-picker"></select>

<?php foreach($allStudios as $studio): ?>
<article>
	 	<div>
	 	<a href="index.php?page=studio&studio_id=<?= $studio['id'] ?>">
	 	<h1> <?= $this->e($studio['studio_name']) ?> </h1>
	 	</a>
	 	<p><?= $this->e($studio['studio_phone']) ?></p>
	 	<p><?= $this->e($studio['studio_address1']) ?>
	 		<br>
	 	<?= $this->e($studio['studio_address2']) ?>
	 	</p>
      	</div>
		</article>
<?php endforeach ?>

	