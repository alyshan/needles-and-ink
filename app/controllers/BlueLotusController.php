<?php

class BlueLotusController extends PageController {

	public function blueLotusTattooPage(){

	}


public function buildHTML(){

	$plates = new League\Plates\Engine('app/templates');
	
	echo $plates->render('blueLotusInk');
}

}