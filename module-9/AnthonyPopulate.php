<?php
  //establish connection
  $servername = "localhost";
    $username = "student1";
  $password = "pass";
  $dbname = "baseball_01";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // preparation (ignore - skip that row if it already exists)
    // required because each time they enter the page, the scripts will be triggered
    $stmt = $conn->prepare("INSERT IGNORE INTO Video_Games (game_name, developer, year_released, publisher) VALUES (:game_name, :developer, :year_released, :publisher)");

    $data = [
      //initial table will hold 10 games
      ['game_name' => 'Super Smash Bros.', 'developer' => 'HAL Laboratories', 'year_released' => '1999', 'publisher' => 'Nintendo'],
      ['game_name' => 'Baten Kaitos', 'developer' => 'Monolith Soft, tri-Crescendo', 'year_released' => '2003', 'publisher' => 'Namco'],
      ['game_name' => 'The Need for Speed', 'developer' => 'Volition', 'year_released' => '1994', 'publisher' => 'Electronic Arts'],
      ['game_name' => 'Saints Row', 'developer' => 'Doe', 'year_released' => '2006', 'publisher' => 'THQ'],
      ['game_name' => 'Tales of Symphonia', 'developer' => 'Namco Tales Studio', 'year_released' => '2003', 'publisher' => 'Namco'],
      ['game_name' => 'Overwatch', 'developer' => 'Blizzard Entertainment', 'year_released' => '2016', 'publisher' => 'Blizzard Entertainment'],
      ['game_name' => 'Honkai Star Rail', 'developer' => 'miHoYo', 'year_released' => '2023', 'publisher' => 'HoYovverse'],
      ['game_name' => 'Mortal Kombat', 'developer' => 'Midway', 'year_released' => '1992', 'publisher' => 'Midway'],
      ['game_name' => 'MadWorld', 'developer' => 'PlatinumGames', 'year_released' => '2009', 'publisher' => 'SEGA'],
      ['game_name' => 'Twisted Metal', 'developer' => 'Eat Sleep Play', 'year_released' => '2012', 'publisher' => 'Sony Computer Entertainment'],
    ];

    // Execute in a loop
    $conn->beginTransaction(); // Using transactions for speed
    foreach ($data as $row) {
      $stmt->execute($row);
    }
    $conn->commit();

  }catch(PDOException $e) {
    if ($conn->inTransaction()) {
        $conn->rollBack();
    }
    echo "Error: " . $e->getMessage();
  }

  $conn = null;
?>
