<?php
	$server = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'workwise';

	$error_page = 'error.html';

	function error() {
		header("Location: $error_page");
	}

	function openConn($_db = '') {
		global $server, $user, $password, $db;
		if ($_db == '') {
			$conn = new mysqli($server, $user, $password, $db);
		}
		else {
			$conn = new mysqli($server, $user, $password);
		}

		// Check connection
		if ($conn->connect_error) {
	  		error();
		}

		return $conn;
	}

	function checkDatabase($type = '') {
		global $db;
		$conn = openConn('empty');

		// Check if database exists or create it
		if ($conn->query("SHOW DATABASES LIKE '$db'")->num_rows == 0) {
			if ($type == 'init') {
				// Create database or throw error if error occured
				if ($conn->query("CREATE DATABASE {$db}") != TRUE) {
					error();
				}
			}
			else {
				error();
				return;
			}
		}

		// Connect to right database
		$conn->close();
		$conn = openConn();

		// Check if tables are OK
		// TO DO
		$conn->query("CREATE TABLE IF NOT EXISTS users(
						id INT NOT NULL AUTO_INCREMENT,
						name VARCHAR(50) NOT NULL,
						surname VARCHAR(50) NOT NULL,
						email VARCHAR(50) NULL,
						login VARCHAR(50) NOT NULL,
						password VARCHAR(64) NOT NULL,
						PRIMARY KEY(id))");
		
		$passwd = hash('sha256', '1234');
		if ($conn->query("SELECT * FROM users")->num_rows == 0) {
			$conn->query("INSERT INTO users(name, surname, login, password) VALUES (
							'Adam',
							'Nowak',
							'a.nowak',
							'$passwd')");			
		}

		$conn->close();
	}

	function checkCredentials($login, $passwd) {
		$conn = openConn();

		$passwd = hash('sha256', $passwd);
		$result = $conn->query("SELECT DISTINCT * FROM users WHERE login = '$login' AND password = '$passwd'");
		if ($result->num_rows) {
			header('Location: mainPage.php');
		}

		$conn->close();
	}
?>