<?php
	function sumRandNum($array2D) {
		$flatArray = [];
		foreach ($array2D as $row) {
			foreach ($row as $number) {
				$flatArray[] = $number;
			}
		}
		
		// 2. Select two random keys from the flattened array
		$randomKeys = array_rand($flatArray, 2);
		
		// 3. Get the values using the random keys
		$number1 = $flatArray[$randomKeys[0]];
		$number2 = $flatArray[$randomKeys[1]];
		
		echo "The first random number is " . $number1 . ".";
		echo nl2br("\n");
		echo "The first random number is " . $number2 . ". \n";
		echo nl2br("\n");
		
		// 4. Return the sum
		return $number1 + $number2;
	}
?>