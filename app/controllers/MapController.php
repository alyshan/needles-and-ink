<?php

class MapController extends PageController {

	public function __construct($dbc){
			parent:: __construct();
			$this->dbc = $dbc;

	}


public function buildHTML(){

	$allData = $this->getLatestStudios();

	$data = [];

	$data['allStudios'] = $allData;

	$plates = new League\Plates\Engine('app/templates');
	
	echo $plates->render('map', $data);
}

	private function getLatestStudios(){
		$sql = "SELECT *
				FROM suggest";

		$result = $this->dbc->query($sql);

		$allData = $result->fetch_all(MYSQLI_ASSOC);

		return $allData;

	}

}
