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

		$sql = "SELECT password
				FROM users
				WHERE email = '$filteredEmail' ";

		$result = $this->dbc->query($sql);

		if ($result->num_rows == 1){

			$userData = $result->fetch_assoc;

			$passwordResult = password_verify( $_POST['password'], $userData['password'] );

				if ( $passwordResult == true ){
					$_SESSION['id'] = userData['id'];

					header('Location: index.php?page=editDetails');				
				}else{

					$this->data['loginMessage'] = 'E-mail or Password incorrect';
				}


		}else{

			$this->data['loginMessage'] = 'E-mail or Password incorrect';
			}

		}

	}


}


