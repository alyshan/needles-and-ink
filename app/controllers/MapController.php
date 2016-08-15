<?php  

class MapController extends PageController {
	public function __construct($dbc) {
		parent:: __construct();
			$this->dbc = $dbc;
	}

		