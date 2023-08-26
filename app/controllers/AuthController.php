<?php
require_once('../app/models/User.php');

class AuthController
{
	public function handleRequest()
	{
		if (isset($_POST['action'])) {
			if ($_POST['action'] == 'register') {
				$this->register();
			} elseif ($_POST['action'] == 'login') {
				$this->login();
			}
		}
	}

	public function register()
	{
		// Handle user registration
		// Validate input, create user, etc.
	}

	public function login()
	{
		// Handle user login
		// Validate credentials, set session, etc.
	}
}
