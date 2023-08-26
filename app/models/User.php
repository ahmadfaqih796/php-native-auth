<?php
require_once('../config/config.php');

class User
{
	protected $conn;

	public function __construct()
	{
		$this->conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
	}

	public function createUser($username, $password)
	{
		$query = "INSERT INTO users (username, password) VALUES (:username, :password)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $password);
		$stmt->execute();
	}

	public function getUserByUsername($username)
	{
		$query = "SELECT * FROM users WHERE username = :username";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(':username', $username);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}
