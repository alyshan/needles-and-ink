<?php

class SuggestController extends PageController {

	public function __construct($dbc){
		parent:: __construct();

		$this->dbc = $dbc;

		$this->mustBeLoggedIn();

		if( isset($_POST['new-studio']) ){
			$this->processNewStudio();
		}

}
	public function buildHTML(){
		echo $this->plates->render('suggest', $this->data);

	}

	private function processNewStudio(){
		$totalErrors = 0;
		
		$studioName = trim($_POST['studio-name']); 
		$desc = trim($_POST['desc']);
		$website = trim($_POST['website-link']);
		$phone = trim($_POST['studio-phone']);
		$email = trim($_POST['studio-email']);


			if( strlen( $studioName) == 0 ){
				$this->data['studioNameMessage'] = '<p>Required</p>';
				$totalErrors++;

			} elseif( strlen( $studioName) > 100 ){
				$this->data['studioNameMessage'] = '<p>Cannont be more than 100 characters</p>';
				$totalErrors++;
		}

		if( strlen($email) == 0 ){
				$this->data['studioEmailMessage'] = '<p>Required</p>';
				$totalErrors++;
			} elseif( strlen( $email) > 50 ){
				$this->data['studioEmailMessage'] = '<p>Cannont be more than 50 characters</p>';
				$totalErrors++;
		}

		if( strlen($website) == 0 ){
				$this->data['websiteLinkMessage'] = '<p>Required</p>';
				$totalErrors++;
			} elseif( strlen( $website) > 200 ){
				$this->data['websiteLinkMessage'] = '<p>Cannont be more than 200 characters</p>';
				$totalErrors++;
		}

		if( strlen($phone) == 0 ){
				$this->data['studioPhoneMessage'] = '<p>Required</p>';
				$totalErrors++;
			} elseif( strlen( $phone) > 20 ){
				$this->data['studioPhoneMessage'] = '<p>Cannont be more than 20 characters</p>';
				$totalErrors++;
		}

			if( strlen($desc) == 0 ){
				$this->data['descMessage'] = '<p>Required</p>';
				$totalErrors++;
			} elseif( strlen( $desc) > 2000 ){
				$this->data['descMessage'] = '<p>Cannont be more than 2000 characters</p>';
				$totalErrors++;
		}
			if($totalErrors == 0){

				$studioName = $this->dbc->real_escape_string($studioName);
				$desc = $this->dbc->real_escape_string($desc);
				$website = $this->dbc->real_escape_string($website);
				$email = $this->dbc->real_escape_string($email);
				$phone = $this->dbc->real_escape_string($phone);

				$userID = $_SESSION['id'];

				$sql = "INSERT INTO suggest (studio_name, studio_email, studio_link, studio_phone, description, user_id)
					VALUES('$studioName', '$desc', '$email', '$website', '$phone', '$desc', $userID)";

					$this->dbc->query($sql);

					if( $this->dbc->affected_rows ){
						$this->data['suggestMessage'] = 'Thank you for you suggestion!';
					}else{
						$this->data['suggestMessage'] = 'Something went wrong!';
					}
		}
	}
}
