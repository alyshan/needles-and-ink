<?php

class StudioController extends PageController {

	public function studioPage(){

	}


// if( !isset($_SESSION['id']) ){
// }

public function buildHTML(){

	$plates = new League\Plates\Engine('app/templates');
	
	echo $plates->render('blueLotusInk');
	echo $plates->render('ninjaflowerPierce');
}

}

}
