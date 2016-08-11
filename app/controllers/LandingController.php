<?php

class LandingController extends PageController {

	public function homePage(){

	}


public function buildHTML(){

	$plates = new League\Plates\Engine('app/templates');
	
	echo $plates->render('landing');
}

}





