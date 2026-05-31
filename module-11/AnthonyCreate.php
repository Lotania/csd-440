<?php
	$servername = "localhost";
	$username = "student1";
	$password = "pass";
	$dbname = "baseball_01";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql2 = "CREATE TABLE IF NOT EXISTS Video_Games (
		id INT(6) PRIMARY KEY,
		game_name VARCHAR(30) NOT NULL,
		developer VARCHAR(30) NOT NULL,
		year_released INT(11) NOT NULL,
		publisher VARCHAR(30)
	)";
	
	if ($conn->query($sql2) === FALSE) {
		echo "Error: " . $conn->error;
	}
	$conn = null;
?>