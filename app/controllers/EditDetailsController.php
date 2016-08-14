<?php

class EditDetailsController extends PageController {

	private $firstNameMessage;
	private $lastNameMessage;
	private $dispayNameMessage;
	private $emailMessage;



	public function __construct($dbc){
		parent::__construct();

		$this->dbc = $dbc;

		$this->mustBeLoggedIn();

		if( isset($_POST['save-changes']) ){
			$this->processNewContactDetails();
		}
	}

	public function buildHTML(){

		echo $this->plates->render('editDetails', $this->data);
	}
		private function processNewContactDetails(){
			$totalErrors = 0;

			if( strlen($_POST['first-name']) > 50 ){

				$this->data['firstNameMessage'] = '<p>Must be at most 50 characters</p>';
				$totalErrors++;
			}

			if( strlen($_POST['last-name']) > 50 ){

				$this->data['lastNameMessage'] = '<p>Must be at most 50 characters</p>';
				$totalErrors++;
			}

			if( strlen($_POST['display-name']) > 10 ){

				$this->data['displayNameMessage'] = '<p>Must be at most 10 characters</p>';
				$totalErrors++;
			}

			if( strlen($_POST['email']) > 8 ){

				$this->data['emailMessage'] = '<p>Must be at most 8 characters</p>';
				$totalErrors++;
			}


			if( $totalErrors == 0 ){

				$firstName = $this->dbc->real_escape_string($_POST['first-name']);
				$lastName = $this->dbc->real_escape_string($_POST['last-name']);

				$userID = $_SESSION['id'];
				$sql = "UPDATE users
						SET first_name = '$firstName', 
							lastn_name = '$lastName' 
						WHERE id = $userID ";

				$this->dbc->query( $sql );
			}
		}

}