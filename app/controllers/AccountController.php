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

			if( strlen( $_POST['first-name']) > 50 ){
				$this->firstNameMessage = 'Must be at most 50 characters';
				$totalErrors++;
			}
			if( strlen( $_POST['last-name']) > 50 ){
				$this->lastNameMessage = 'Must be at most 50 characters';
				$totalErrors++;
			}
			if( strlen( $_POST['email']) > 50 ){
				$this->emailNameMessage = 'Must be at most 50 characters';
				$totalErrors++;
			}
			if( strlen( $_POST['display-name']) > 6 ){
				$this->displayNameMessage = 'Must be at most 6 characters';
				$totalErrors++;
			}
		
			if( $totalErrors == 0 ){

				$firstName = $this->dbc->real_escape_string($_POST['first-name']);
				$lastName = $this->dbc->real_escape_string($_POST['last-name']);
				$email = $this->dbc->real_escape_string($_POST['email']);
				$displayName = $this->dbc->real_escape_string($_POST['display-name']);
				$userID = $_SESSION['id'];
	
				$sql = "UPDATE users
						SET first_name = '$firstName', 
							last_name = '$lastName',
							email = '$email',
							display_name = '$displayName'
						WHERE id = $userID";

				$this->dbc->query( $sql );

				if( $this->dbc->affected_rows ){
						$this->data['accountMessage'] = 'Changes saved!';
					}else{
						$this->data['accountMessage'] = 'Something went wrong!';
					}
			}

		}
	}