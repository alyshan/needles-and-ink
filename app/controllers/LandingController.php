<?php

class LandingController {

	public function homePage(){

	}


public function buildHTML(){

	$plates = new League\Plates\Engine('app/templates');
	
	echo $plates->render('landing');
}

}





?>