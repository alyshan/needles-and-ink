<?php

session_start();

require 'vendor/autoload.php';

$plates = new League\Plates\Engine('app/templates');

$page = isset($_GET['page']) ? $_GET['page'] : 'landing';

$dbc = new mysqli('localhost', 'root', '', 'needles_and_ink');

switch ($page) {
	case 'landing':
		require 'app/controllers/LandingController.php';
		$controller = new LandingController();
	break;
	
	case 'register';
		require 'app/controllers/RegisterController.php';
		$controller = new RegisterController($dbc);
	break;

	case 'login';
		echo $plates->render('login');
	break;

	case 'blueLotusInk':
		echo $plates->render('blueLotusInk');
	break;
	
	case 'editDetails';
		echo $_SESSION['id'];
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









