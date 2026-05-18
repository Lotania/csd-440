<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>MySQLi page</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
		<h1 style="text-align: center;">MySQLi Add Page</h1>
		<p style="text-align: center;">Use the following navigation bar to go to separate pages to search a table.</p>
		<nav>
			<ul>
				<li><a href="AnthonyIndex.php">Home</a></li>
				<li><a href="AnthonySearch.php">Query</a></li>
				<li><a href="AnthonyAdd.php">Add</a></li>
			</ul>
		</nav>
		
		<br><br><h3 style="text-align: center;">Enter the game information to add to the table:</h3>
		
		<form action="AnthonyInsert.php" method="post">
			<label>Game Name:</label>
			<input type="text" name="game_name">
			
			<label>Developer:</label>
			<input type="text" name="developer">
			
			<label>Released in:</label>
			<input type="number" name="year_released" min="1900" max="2099" step="1">
			
			<label>Publisher:</label>
			<input type="text" name="publisher">
			
			<button type="submit" value="Submit">Submit</button>
		</form>

		
	</body>
</html>