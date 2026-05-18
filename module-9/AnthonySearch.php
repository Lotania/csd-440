<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>MySQLi page</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
		<h1 style="text-align: center;">MySQLi Search Page</h1>
		<p style="text-align: center;">Use the following navigation bar to go to separate pages to search a table.</p>
		<nav>
			<ul>
				<li><a href="AnthonyIndex.php">Home</a></li>
				<li><a href="AnthonySearch.php">Query</a></li>
				<li><a href="AnthonyAdd.php">Add</a></li>
			</ul>
		</nav>
		
		<br><br><h3 style="text-align: center;">Enter a search term:</h3>
		
		<form action="AnthonyQueryResult.php" method="post">
			<label for="game_name">Game:</label>
			<input type="text" name="game_name" id="game_name">
			
			<label for="developer">Developer:</label>
			<input type="text" name="developer" id="developer">
			
			<label for="year_realeased">Year Released:</label>
			<input type="text" name="year_realeased" id="year_realeased">
			
			<label for="publisher">Publisher:</label>
			<input type="text" name="publisher" id="publisher">
			
			<button type="submit">Search</button>
		</form>		
	</body>
</html>