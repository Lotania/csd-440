<?php include 'AnthonyDrop.php' ?>
<?php
    // Database configuration
    $host    = 'localhost';
    $dbName  = 'baseball_01';
    $user    = 'student1';
    $pass    = 'pass';
    $charset = 'utf8mb4';
    
    // Set up the Data Source Name (DSN)
    $dsn = "mysql:host=$host;dbname=$dbName;charset=$charset";
    
    // Options for PDO error handling and fetch styles
    $options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    
    try {
        // Create the database connection
        $pdo = new PDO($dsn, $user, $pass, $options);
        
        $sql = "SELECT id, game_name, developer, year_released, publisher FROM Video_Games";
        $stmt = $pdo->query($sql);
        
    } catch (PDOException $e) {
        // Stop script and display connection error if it fails
        die("Database connection failed: " . $e->getMessage());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Database Table</title>
    <style>
        /* Basic styling for the HTML table */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center;">User Records Table</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Developer</th>
                <th>Release Year</th>
                <th>Publisher</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($stmt->rowCount() > 0): ?>
                <?php while ($row = $stmt->fetch()): ?>
                    <tr>
                        <!-- htmlspecialchars sanitizes output -->
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['game_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['developer']); ?></td>
                        <td><?php echo htmlspecialchars($row['year_released']); ?></td>
                        <td><?php echo htmlspecialchars($row['publisher']); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" style="text-align: center;">No records found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    
    <?php $conn = null; ?>

</body>
</html>