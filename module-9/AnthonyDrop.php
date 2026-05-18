<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=baseball_01", "student1", "pass");
    
    $sql = "DROP TABLE IF EXISTS Video_Games";
    $pdo->exec($sql);
    
    echo "Table dropped successfully or did not exist.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>