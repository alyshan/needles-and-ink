<?php

session_start();

require 'vendor/autoload.php';
require 'app/controllers/PageController.php';

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
		require 'app/controllers/LoginController.php';
		$controller = new LoginController($dbc);
	break; 

	case 'logout': 
		unset($_SESSION['id']); 
		unset($_SESSION['first_name']); 
		unset($_SESSION['last_name']);
		unset($_SESSION['email']); 
		unset($_SESSION['password']);  
		unset($_SESSION['display_name']); 
		unset($_SESSION['image']); 
		unset($_SESSION['privilege']); 
		header('Location: index.php');
	break;

	case 'blueLotusInk':
		echo $plates->render('blueLotusInk');
	break;
	
	case 'account';
		require 'app/controllers/AccountController.php';
		$controller = new AccountController($dbc);
	break;

	case 'map';
		require 'app/controllers/MapController.php';
		$controller = new MapController();
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









