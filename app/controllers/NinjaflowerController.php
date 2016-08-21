<?php

class NinjaflowerController extends PageController {

	public function ninjaflowerPage(){

	}


public function buildHTML(){

	$plates = new League\Plates\Engine('app/templates');
	
	echo $plates->render('ninjaflowerPierce');
}

}