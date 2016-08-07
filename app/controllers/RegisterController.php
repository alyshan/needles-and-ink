<?php

class RegisterController {

private $emailMessage;
private $passwordMessage;
private $firstNameMessage;
private $lastNameMessage;
private $displayNameMessage;
private $dbc;

	public function __construct($dbc){
	
		$this ->dbc = $dbc;

		if( isset($_POST['new-account']) ){
			$this->validateRegistrationForm();
		}
	}


	public function registerAccount(){
	}


public function buildHTML(){

	$plates = new League\Plates\Engine('app/templates');

	$data = [];

	if ($this->firstNameMessage != '') {
		$data['firstNameMessage'] = $this->firstNameMessage;
	}

	if ($this->lastNameMessage != '') {
		$data['lastNameMessage'] = $this->lastNameMessage;
	}

	if ($this->displayNameMessage != '') {
		$data['displayNameMessage'] = $this->displayNameMessage;
	}

	if ($this->emailMessage != '') {
		$data['emailMessage'] = $this->emailMessage;
	}

	if ($this->passwordMessage != '') {
		$data['passwordMessage'] = $this->passwordMessage;
	}

	

echo $plates->render('register', $data);
	}

private function validateRegistrationForm(){
		
	$totalErrors = 0;

		

	if( $_POST['first_name'] == '' ){
		$this->firstNameMessage = 'Please enter your first name';
		$totalErrors ++;
	}

	if( $_POST['last_name'] == '' ){
		$this->lastNameMessage = 'Please enter your last name';
		$totalErrors ++;
	}

	if( strlen($_POST['display_name']) < 6  ){
	$this->displayNameMessage = 'Must be at least 6 characters';
		$totalErrors++;
	}


	if( $_POST['email'] == '' ){
		$this->emailMessage = 'Invalid E-Mail';
		$totalErrors ++;
	}
	
	if( strlen($_POST['password']) < 8 ){
		$this->passwordMessage = 'Must be at least 8 characters';
		$totalErrors++;
	}
	if($totalErrors == 0) {
		$filteredFirstName = $this->dbc->real_escape_string( $_POST['first_name']);

		$filteredLastName = $this->dbc->real_escape_string( $_POST['last_name']);

		$filteredDisplayName = $this->dbc->real_escape_string( $_POST['display_name']);

		$filteredEmail = $this->dbc->real_escape_string( $_POST['email']);
		
		$hash = password_hash( $_POST['password'], PASSWORD_BCRYPT ); 

		$sql = "INSERT INTO users (first_name, last_name, display_name, email, password)
				VALUES ('$filteredFirstName','$filteredLastName','$filteredDisplayName','$filteredEmail', '$hash')";
			$this->dbc->query($sql);

			header('location: index.php?page=editDetails');
		}

	}



}
