<?php

class PageNotFoundController extends PageController {

	public function pageNotFoundPage(){

	}


public function buildHTML(){

	$plates = new League\Plates\Engine('app/templates');
	
	echo $plates->render('page-not-found');
}

}