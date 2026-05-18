<?php
// Database connection configuration
$host = 'localhost';
$dbname = 'baseball_01;';
$username = 'student1';
$password = 'pass';

// Connect to the database using PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Initialize variables
$results = [];
$params = [];
$conditions = [];

// Define your table columns that correspond to the 4 text areas
$columns = ['game_name', 'developer', 'year_released', 'publisher'];

// Check which text areas have inputs and build the query
for ($i = 1; $i <= 4; $i++) {
    $input_name = 'param' . $i;
    // Trim whitespace and check if not empty
    if (!empty(trim($_POST[$input_name]))) {
        $val = trim($_POST[$input_name]);
        
        // Add conditions checking if the column LIKE the user input
        $conditions[] = $columns[$i-1] . " LIKE ?";
        
        // Add wildcards for partial matching
        $params[] = "%$val%"; 
    }
}

// Build the final SQL query
$sql = "SELECT * FROM Video_Games";
if (count($conditions) > 0) {
    $sql .= " WHERE " . implode(" OR ", $conditions); // Change "OR" to "AND" if all criteria must match
}

// Prepare and execute the statement
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
</head>
<body>
    <h2>Search Results</h2>
    <a href="AnthonySearch.php">&larr; Back to Search</a>
    
    <div class="results">
        <?php if (count($results) > 0): ?>
            <p>Found <?php echo count($results); ?> record(s).</p>
            <?php foreach ($results as $row): ?>
                <div class="result-item">
                    <!-- Output your table columns here -->
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($row['game_name']); ?></p>
                    <p><strong>Developed by:</strong> <?php echo htmlspecialchars($row['developer']); ?></p>
                    <p><strong>Released in:</strong> <?php echo htmlspecialchars($row['year_released']); ?></p>
                    <p><strong>Published by:</strong> <?php echo htmlspecialchars($row['publisher']); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No records found matching your criteria.</p>
        <?php endif; ?>
    </div>
</body>
</html>
