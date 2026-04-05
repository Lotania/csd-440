<!DOCTYPE html>
<html>
<body>
    
    <h1>Numbers and Dates</h1>
    <br>

<?php
// Creating a 2D array
$numbers = array (
array(12, 34, 56),
    array(78, 90, 13),
    array(87, 56, 28),
    array(27, 17, 15)
);
    
    include 'AnthonyFunction3.php';

// Start the HTML table
echo "<table>";

// Outer loop: iterates through each inner array (row)
foreach ($numbers as $row) {
    echo "<tr>"; // Start a new table row

    // Inner loop: iterates through each element in the current row (column)
    foreach ($row as $cell) {
        echo "<td>" . $cell . "</td>"; // Display cell data
    }

    echo "</tr>"; // End the table row
}

// End the HTML table
echo "</table>";
?>
    <br>
    <?php echo "The sum of two random numbers is " . sumRandNum($numbers) . "."; ?>

</body>
</html>