<?php

class RegisterController {

	public function registerAccount(){

	}


public function buildHTML(){

	$plates = new League\Plates\Engine('app/templates');
	
	echo $plates->render('register');
}

}





?>