<!-- index.php -->
<!DOCTYPE html>
<html>
<body>
    <h1>Welcome to The Table Page</h1>
    <p>This script is to create a table in a database</p>
    <?php
        $servername = "localhost";
        $username = "student1";
        $password = "pass";
        
        // 1. Create connection to the MySQL server
        $conn = new mysqli($servername, $username, $password);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "CREATE DATABASE IF NOT EXISTS baseball_01";
        
        if ($conn->query($sql) === TRUE) {
            echo "Database checked/created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }?>
    <?php include('AnthonyCreate.php'); ?>
    <p><br>This next script is to populate the table.</p>
    <?php include('AnthonyPopulate.php'); ?>
    <p><br>This next script is to show the contents of the table.</p>
    <?php include('AnthonyQuery.php'); ?>
    <p><br>This next script is to delete the table.</p>
    <?php include('AnthonyDrop.php'); ?>
    <?php
        $conn->close();
    ?>
</body>
</html>