<?php

require 'vendor/autoload.php';

$plates = new League\Plates\Engine('app/templates');

if (isset( $_GET['page']) ){
	$page = $_GET['page'];
}else{
	$page = 'landing';
}


switch ($page) {
	case 'landing':
		echo $plates->render('landing');
	break;
	
	case 'register';
		require 'app/controllers/RegisterController.php';
		$controller = new RegisterController();
	break;

	case 'login';
		echo $plates->render('login');
	break;

	case 'blueLotusInk':
		echo $plates->render('blueLotusInk');
	break;
	
	case 'editDetails';
		echo $plates->render('editDetails');
	break;

	case 'map';
		echo $plates->render('map');
	break;

	case 'ninjaflowerPierce':
		echo $plates->render('ninjaflowerPierce');
	break;
	
	case 'suggest';
		echo $plates->render('suggest');
	break;

	default:
		echo $plates->render('landing');
	break;
}

$controller->buildHTML();









