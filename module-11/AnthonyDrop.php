<?php
    try 
    {
        $pdo = new PDO("mysql:host=localhost;dbname=baseball_01", "student1", "pass");
    
        $sql = "DROP TABLE IF EXISTS Video_Games";
        $pdo->exec($sql);
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    include 'AnthonyCreate.php';
    include 'AnthonyPopulate.php';
    
?>