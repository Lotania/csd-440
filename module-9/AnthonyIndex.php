<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>MySQLi page</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
		<h1 style="text-align: center;">MySQLi Home Page</h1>
		<p style="text-align: center;">Use the following navigation bar to go to separate pages to search a table.</p>
		<nav>
			<ul>
				<li><a href="AnthonyIndex.php">Home</a></li>
				<li><a href="AnthonySearch.php">Search</a></li>
				<li><a href="AnthonyAdd.php">Add</a></li>
			</ul>
		</nav>
		
		<?php include('AnthonyCreate.php'); ?>
		
		<?php include('AnthonyPopulate.php'); ?>
		
		<br><br><h3 style="text-align: center;">Another way to access these pages is:</h3>
		
		<p>This is the <b><a href="AnthonyIndex.php">Home Page</a></b></p>
		<p>This is the page that lets you <a href="AnthonySearch.php">search for a game.</a></p>
		<p>This is the page that lets you <a href="AnthonySearch.php">add a game.</a></p>
		<br><br><br>
		
		<p>Click this button if you wish to reset the table.</p>
		
		<!-- The form sends the request to drop.php -->
		<form action="AnthonyDrop.php" method="post" onsubmit="return confirm('WARNING: This will reset the table and all its data. Are you sure?');">
			<input type="hidden" name="table_name" value="your_table_name">
			<button type="submit">Drop Table</button>
		</form>
		
	</body>
</html>