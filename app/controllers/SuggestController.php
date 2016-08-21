<?php

class SuggestController extends PageController {

	public function __construct($dbc){
		parent:: __construct();

		$this->dbc = $dbc;

		$this->mustBeLoggedIn();

		if( isset($_POST['new-studio']) ){
			$this->processNewStudio();
		}


	public function buildHTML(){
		echo $this->plates->render('suggest', $this->data);

	}

		private function processNewStudio(){
			
		}
	}