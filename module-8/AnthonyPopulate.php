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
	
	$sql3 = "INSERT INTO Video_Games (id, game_name, developer, year_released, publisher) 
	VALUES (101910, 'Super Smash Bros.', 'HAL Laboratories', '1999', 'Nintendo'),
	(754974, 'Baten Kaitoss', 'Monolith Soft, tri-Crescendo', '2003', 'Namco'),
	(234383, 'The Need for Speed', 'Electronic Arts', '1994', 'Electronic Arts'),
	(156409, 'Tales of Symphonia', 'Namco Tales Studio', '2003', 'Namco'),
	(998800, 'Saints Row', 'Volition', '2006', 'THQ'),
	(878981, 'Overwatch', 'Blizzard Entertainment', '2016', 'Blizzard Entertainment'),
	(395576, 'Honkai Star Rail', 'miHoYo', '2023', 'HoYovverse'),
	(912133, 'Mortal Kombat', 'Midway', '1992', 'Midway'),
	(875474, 'MadWorld', 'PlatinumGames', '2009', 'SEGA'),
	(444767, 'Twisted Metal', 'Eat Sleep Play', '2012', 'Sony Computer Entertainment')";
	
	if ($conn->query($sql3) === TRUE) {
		echo "New records created successfully";
	}
?>