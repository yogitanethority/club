<?php
	$hostname = "localhost";
	$database = "clubs_v24";
	$username = "root";
	$password = "AS5lSt6brAb4HApAcR&MiP!L";
	$conn = new mysqli($hostname, $username, $password, $database);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// echo "Connected successfully";
?>