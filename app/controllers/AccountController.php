<?php

class AccountController extends PageController {

	public function __construct($dbc){
		parent:: __construct();

		$this->dbc = $dbc;

		$this->mustBeLoggedIn();

		if( isset($_POST['save-changes']) ){
			$this->processNewContactDetails();
		}
	}


	public function buildHTML(){

		echo $this->plates->render('account', $this->data);


	}
	
		private function processNewContactDetails(){

			$totalErrors = 0;

				if( strlen( $_POST['first-name']) == 0 ){
				$this->data['firstNameMessage'] = '<p>Required</p>';
				$totalErrors++;

			} elseif( strlen( $_POST['first-name']) > 50 ){
				$this->data['firstNameMessage'] = '<p>Cannont be more than 50 characters</p>';
				$totalErrors++;
		}

				if( strlen( $_POST['last-name']) == 0 ){
				$this->data['lastNameMessage'] = '<p>Required</p>';
				$totalErrors++;

			} elseif( strlen( $_POST['last-name']) > 50 ){
				$this->data['lastNameMessage'] = '<p>Cannont be more than 50 characters</p>';
				$totalErrors++;
		}

				if( strlen( $_POST['display-name']) == 0 ){
				$this->data['displayNameMessage'] = '<p>Required</p>';
				$totalErrors++;

			} elseif( strlen( $_POST['display-name']) > 10 ){
				$this->data['displayNameMessage'] = '<p>Cannont be more than 10 characters</p>';
				$totalErrors++;
		}


			if( strlen($_POST['email']) == 0 ){
				$this->data['emailMessage'] = '<p>Required</p>';
				$totalErrors++;
			} elseif( strlen( $_POST['email']) > 50 ){
				$this->data['emailMessage'] = '<p>Please check E-Mail</p>';
				$totalErrors++;
		}

			if( $totalErrors == 0 ){

				$firstName = $this->dbc->real_escape_string($_POST['first-name']);
				$lastName = $this->dbc->real_escape_string($_POST['last-name']);
				$displayName = $this->dbc->real_escape_string($_POST['display-name']);
				$email = $this->dbc->real_escape_string($_POST['email']);
				$userID = $_SESSION['id'];

				$sql = "UPDATE users
						SET first_name = '$firstName', 
							last_name = '$lastName',
							display_name = '$displayName',
							email = '$email', 
						WHERE id = $userID";

				$this->dbc->query( $sql );
			}

		}
	}