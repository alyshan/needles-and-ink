<?php

abstract class PageController {

	protected $title;
	protected $metaDesc;
	protected $dbc;
	protected $plates;

	public function __construct(){

		$this->plates = new League\Plates\Engine('app/templates');

		
	}
	

	abstract public function buildHTML();

	public function mustBeLoggedIn(){

		if ( !isset($_SESSION['id']) ){
			header('Location: index.php?page=login');
		}
	}

}