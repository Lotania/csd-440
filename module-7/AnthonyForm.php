<!DOCTYPE HTML>
<html>
<body>

<h1>Forming the Form</h1>

<form action="AnthonySubmit.php" method="post">
	<!-- Setting up the form -->
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
	<label for="menu">What are you?</label>
	<select id="menu" name="menu">
		<option value="" selected disabled></option>
		<option value="Student">Student</option>
		<option value="Employed Full Time">Employed Full-Time</option>
		<option value="Employed Part Time">Employed Part-Time</option>
		<option value="Unemployed">Unemployed</option>
		<option value="Self-Employed">Self-Employed</option>
	</select><br>
	
	<label for="birthday">Birthday:</label>
	<input type="date" id="birthday" name="birthday" placeholder="mm/dd/yyyy">
	<br>
	
	Birthplace: <input type="text" name="birthplace"><br><br>
	Description of You: <br>
	
	<textarea name="description" rows="4" cols="50"></textarea><br>
	
	<p>Again, what are you?</p>
	<input type="radio" id="male" name="gender" value="male">
	<label for="male">Male</label><br>
	
	<input type="radio" id="female" name="gender" value="female">
	<label for="female">Female</label><br>
	
	<input type="radio" id="other" name="gender" value="other">
	<label for="other">Other</label><br>

<input type="submit">
</form>

</body>
</html>