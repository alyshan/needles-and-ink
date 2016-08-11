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

		echo $this->plates->render('editDetails');
	}
		private function processNewContactDetails(){
			$totalErrors = 0;

			if( strlen($_POST['first-name']) > 50 ){

				$this->firstNameMessage = 'Must be at most 50 characters';
				$totalErrors++;
			}

			if( strlen($_POST['last-name']) > 50 ){

				$this->lastNameMessage = 'Must be at most 50 characters';
				$totalErrors++;
			}

			if( strlen($_POST['display-name']) > 10 ){

				$this->displayNameMessage = 'Must be at most 10 characters';
				$totalErrors++;
			}

			if( $totalErrors == 0 ){
				
			}
		}

}