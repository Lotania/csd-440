<?php
// 3. Define and execute the SQL query
$sql = "SELECT id, game_name, developer, year_released, publisher FROM Video_Games";
$result = $conn->query($sql);

// 4. Check if results were returned and fetch them
if ($result->num_rows > 0) {
  // Loop through each row of data
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["game_name"]. ". Developed by " . $row["developer"]. ". Released in " . $row["year_released"]. ". Published by " . $row["publisher"]. ".<br>";
  }
} else {
  echo "0 results";
}

?>