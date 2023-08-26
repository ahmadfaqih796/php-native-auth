<?php
require_once('../app/controllers/AuthController.php');
require_once('../app/controllers/HomeController.php');

if (isset($_GET['controller'])) {
	$controllerName = $_GET['controller'] . 'Controller';
	if (class_exists($controllerName)) {
		$controller = new $controllerName();
		$controller->handleRequest();
	} else {
		// Handle controller not found
	}
} else {
	// Default to Home controller
	$controller = new HomeController();
	$controller->handleRequest();
}
