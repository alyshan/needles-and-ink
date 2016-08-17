<?php

class MapController extends PageController {

	public function mapPage(){

	}


public function buildHTML(){

	$plates = new League\Plates\Engine('app/templates');
	
	echo $plates->render('map');
}

}
