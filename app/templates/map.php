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
	 	<h1> <?= $studio['studio_name'] ?> </h1>
	 	<p><?= $studio['studio_phone'] ?></p>
	 	<p><?= $studio['studio_address1'] ?>
	 		<br>
	 	<?= $studio['studio_address2'] ?>
	 	</p>
      	</div>
		</article>
<?php endforeach ?>

	