<?php

class LoginController extends PageController {

	public function __contstruct($dbc){
		parent::__contstruct();

		$this->dbc = $dbc;

		if ( isset($_POST['login']) ) {
			$this->processLoginForm();
		}
	}

	public function buildHTML(){
		echo $this->plates->render('login', $this->data);
	}

private function processLoginForm(){
	$totalErrors = 0;

	if( strlen($_POST['email']) < 6 ){
		$this->data['emailMessage']='Invalid E-Mail';
		$totalErrors ++;
		}

	if( strlen($_POST['password']) < 8 ){
		$this->data['passwordMessage']='Invalid password';
		$totalErrors ++; 
	}

	if($totalErrors == 0) {

		$filteredEmail = $this->dbc->real_escape_string($_POST['email'] );

		}

	}


}


