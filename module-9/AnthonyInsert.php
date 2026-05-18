<?php
// Database credentials
$servername = "localhost";
$username = "student1";
$password = "pass";
$dbname = "baseball_01";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get data from form using $_POST
$game_name = $_POST['game_name'];
$developer = $_POST['developer'];
$year_released = $_POST['year_released'];
$publisher = $_POST['publisher'];

// SQL query to insert data
$sql = "INSERT INTO Video_Games (game_name, developer, year_released, publisher) VALUES ('$game_name', '$developer', '$year_released', '$publisher's)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
