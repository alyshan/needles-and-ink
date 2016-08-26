<?php

class LoginController extends PageController {

	public function __construct($dbc){
		parent:: __construct();

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

	if( strlen($_POST['display_name']) < 6 ){
		$this->data['displayNameMessage']='Invalid Display Name';
		$totalErrors ++;
		}

	if( strlen($_POST['password']) < 8 ){
		$this->data['passwordMessage']='Invalid password';
		$totalErrors ++; 
	}

	if($totalErrors == 0) {

		$filteredDisplayName = $this->dbc->real_escape_string($_POST['display_name'] );

		$sql = "SELECT id, password, privilege
				FROM users
				WHERE display_name = '$filteredDisplayName' ";

		$result = $this->dbc->query($sql);
	
		if ($result->num_rows == 1){

			$userData = $result->fetch_assoc();

			$passwordResult = password_verify( $_POST['password'], $userData['password'] );

				if ( $passwordResult == true ){
					$_SESSION['id'] = $userData['id'];
					$_SESSION['privilege'] = $userData['privilege'];

					header('Location: index.php?page=account');	
								
				}else{

					$this->data['loginMessage'] = 'Display Name or Password incorrect';
				}


		}else{

			$this->data['loginMessage'] = 'Display Name or Password incorrect';
			}

		}

	}


}


