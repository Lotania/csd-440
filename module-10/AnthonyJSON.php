<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>JSON page</title>
		<style>
			#heading{
				text-align: center;
			}
			
			.section1 {
				border: 1px solid black;
			}
			.submit-group {
				text-align: center;
			}

		</style>
	</head>
	
	<body>
		
			<section id="heading">
				<h1>Form Submission</h1>
				<p>Welcome to the Form Submission! Here, you will submit things to 8 different fields; feel free to input whatever you want in the text fields.</p>
				<p>For the numbered fields, you must adhere to the specified structure. Any deviation will be rejected.</p>
			</section>
			<br><br>
			

			<form action="AnthonyAction.php" method="POST">
				<div class="section1">
					<h3>The First Four Fields</h3>
					<p>Name, Date of Birth, Email, Description</p>
					
					<label for="fname">Full Name:</label>
					<input type="text" id="fname" name="fname" required><br><br>
					<label for="birthday">Birthday:</label>
					<input type="date" id="birthday" name="birthday" required><br><br>
					<label for="email">Email:</label>
					<input type="email" id="email" name="email" required><br><br>
					<label for="description">Describe Yourself:</label><br>
					<textarea id="description" name="description" rows="4" cols="50" required></textarea>
				</div>
				<br><br>
				
				<div class="section1">
					<h3>The Last Four Fields</h3>
					<p>Job, Age, Status, Status</p>
					
					<label for="job">Job:</label>
					<input type="text" id="job" name="job" required><br><br>
					
					<label for="age">Age:</label>
					<input type="number" id="age" name="age" min="0" max="100" required><br><br>
					
					<label for="employ">Employment Status:</label><br>
					
					<input type="radio" id="ftime" name="employ" value="ftime" required>
					<label for="ftime">Full-Time</label><br>
					
					<input type="radio" id="ptime" name="employ" value="ptime">
					<label for="ptime">Part-Time</label><br>
					
					<input type="radio" id="unemp" name="employ" value="unemp">
					<label for="unemp">Unemployed</label><br><br>
					
					<label for="status">Marital Status:</label>
					<select id="status" name="status" required>
						<option value="single">Single</option>
						<option value="married">Married</option>
						<option value="widowed">Widowed</option>
						<option value="divorced">Divorced</option>
						<option value="separated">Separated</option>
					</select>
				</div>
				<br><br>
				
				<div class="submit-group">
					<button type="submit">Submit Form</button>
				</div>
			</form>
		
	</body>
</html>