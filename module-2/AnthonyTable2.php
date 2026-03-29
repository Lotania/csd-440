<!DOCTYPE html>
<html>
<body>
    
    <h1>Numbers and Dates</h1>
    <br>

<?php
// Creating a 2D array
$numbers = array (
array(98, 22, 18),
    array(24, 15, 13),
    array(987, 5, 2),
    array(2, 17, 15)
);

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

</body>
</html>