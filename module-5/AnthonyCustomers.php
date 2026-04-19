<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
	<title>PHP Array Functions</title>
	<!--Anthony Nguyen, CSD-440, assignment 5.2-->
	<!--The purpose of this program is to demonstrate PHP array fucntions-->
</head>

<body>
	
	<h1 style="text-align: center;">Array Functions</h1>
	<p style="text-align: center;">There's an array of customers that we're going to attempt to sort through.</p>

<?php //create the initial array
	$customers = [
		["f_name" => "Annthoy", "l_name" => "Gunyen", "age" => 29, "phone" => "9375936141"],
		["f_name" => "Miranda", "l_name" => "York", "age" => 33, "phone" => "9375933141"],
		["f_name" => "Thomas", "l_name" => "Array", "age" => 59, "phone" => "9375936141"],
		["f_name" => "Carlos", "l_name" => "Lopez", "age" => 26, "phone" => "9375967141"],
		["f_name" => "Yasmin", "l_name" => "Gunyen", "age" => 57, "phone" => "9375936141"],
		["f_name" => "Luke", "l_name" => "Nolan", "age" => 46, "phone" => "9375936341"],
		["f_name" => "Manuel", "l_name" => "Villalobos", "age" => 18, "phone" => "9379936141"],
		["f_name" => "Kyle", "l_name" => "Iona", "age" => 49, "phone" => "9370039141"],
		["f_name" => "Darius", "l_name" => "Bruker", "age" => 30, "phone" => "9372936141"],
		["f_name" => "Greg", "l_name" => "Flat", "age" => 33, "phone" => "9375936241"],
		["f_name" => "Derrick", "l_name" => "Plom", "age" => 45, "phone" => "9371936141"],
		["f_name" => "Benjamin", "l_name" => "Gunyen", "age" => 63, "phone" => "9175936141"]
	];
	
?>
	
	<h4>foreach</h4>
	
	<p>What are the names of the people in the array?</p>
	
	<section style="margin: 0 auto; width: 50%;">
	<?php 
		//establish a table for listing all records
		echo "<table border='1'>";
		echo "<tr><th>First name</th><th>Last name</th></tr>";
		
		//search the array for names
		foreach ($customers as $customer) {
			echo "<tr>";
			echo "<td>" . $customer['f_name'] . "</td>";
			echo "<td>" . $customer['l_name'] . "</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	?>
	
	</section>
	
	<h4>array_search</h4>
	<p>Who's the first 33 year old in the array?</p>
	<?php
		$keys = array_column($customers, 'age'); //extracts the age column
		$key = array_search(33, $keys, true); //matches the column against the value of 33, returning only the first match
	
		if ($key !== false) {
			echo "First User found: " . $customers[$key]['f_name'] ." " . $customers[$key]['l_name'];
		} else {
			echo "User not found.";
		}
	?>
	
	<p>How many people have the last name "Gunyen"?</p>
	
	<?php
		$counts = array_count_values(array_column($customers, "l_name")); //extracts the l-name column from the array
		echo "There are " . $counts["Gunyen"] . " matches."; //matches the new array (column) against the specified value
	?>
	
	<h4>array_count_values</h4>
	<p>How many people are 33 years old?</p>
	
	<?php
		$counts = array_count_values(array_column($customers, "age"));
		echo "There are " . $counts[33] . " matches.";
	?>
	
	<h4>array_filter</h4>
	<p>Who all has the phone number (937) 593-6141?</p>
	
	<?php
		$matches = array_filter($customers, function($row) {
			return $row['phone'] === '9375936141';//set up another array as the indexes of keys with that phone number
		});
		
		//display first and last name of the phone number
		foreach ($matches as $match) {
			echo $match['f_name'] . " - " . $match['l_name'] . "<br>";
		}
	?>
	
	<h3>We're going to add to and take from the array.</h3>
	
	<?php
		array_splice($customers, -1); //remove last elements
		unset($customers[0]); //delete the first element and re-index array
		array_push($customers, ["f_name" => "Greg", "l_name" => "Orio", "age" => 43, "phone" => "9375930941"]); //add to the end of the array
	?>
	
	<p>What are the names of the people in the array?</p>
	
	<section style="margin: 0 auto; width: 50%;">
		<?php 
			echo "<table border='1'>";
			echo "<tr><th>First name</th><th>Last name</th></tr>";
			
			foreach ($customers as $customer) {
				echo "<tr>";
				echo "<td>" . $customer['f_name'] . "</td>";
				echo "<td>" . $customer['l_name'] . "</td>";
				echo "</tr>";
			}
			
			echo "</table>";
		?>
	</section>

</body>