<!DOCTYPE HTML>
<html>
<body>
	
	<?php		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {//receive post from php in the same directory to trigger this if block
			// if EVEN ONE of these fields are empty, the script will stop.
			if (empty(trim($_POST["name"]))) {
				exit('ERROR: Name is empty.');
			}
			if (empty(trim($_POST["email"]))) {
				exit('ERROR: Email is empty.');
			}
			if (empty(trim($_POST["menu"]))) {
				exit('ERROR: Occupation is empty.');
			}
			if (empty(trim($_POST["birthday"]))) {
				exit('ERROR: Birthday is empty.');
			}
			if (empty(trim($_POST["birthplace"]))) {
				exit('ERROR: Birthplace is empty.');
			}
			if (empty(trim($_POST["description"]))) {
				exit('ERROR: Description is empty.');
			}
			if (empty(trim($_POST["gender"]))) {
				exit('ERROR: Gender is empty.');
			}
		}
		
	?>

	
<h1 style="text-align: center;">Displaying the Form</h1><br><br><br>

<!-- If NONE of the fields are empty, the entire page will display. -->

	<section style="text-align: center;">
		<h3>Welcome, <?php echo $_POST["name"]; ?>.</h3><br><br>
		Your email address is: <?php echo $_POST["email"]; ?>.<br><br>
		You are currently: <?php echo $_POST["menu"]; ?>.<br><br>
		You were born on: <?php echo $_POST["birthday"]; ?>, in: <?php echo $_POST["birthplace"]; ?>.<br><br>
		You describe yourself as: <br><?php echo $_POST["description"]; ?><br><br>
		You call yourself: <?php echo $_POST["gender"]; ?>.<br><br>
	</section>

</body>
</html>