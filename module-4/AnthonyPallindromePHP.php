<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>IS IS IS</title>
	</head>
	<body>
		
		<h1>IS PALINDROME?</h1>
		<!-- This script will ony use IS as indicators-->
		<!-- IS (this is a palindrome). IS NOT (this is not a palindrome)-->
		
		<?php
			$string1 = "racecar";
			$string2 = "drafters";
			$string3 = "A man, a plan, a canal - Panama";
			$string4 = "rotator";
			$string5 = "Bring the pain!";
			$string6 = "palindrome";
			
			function isPalindrome($phrase){
				$testphrase = strtolower(preg_replace("/[^a-zA-Z]/", "", $phrase));
				
				return $testphrase == strrev($testphrase);
			}
		?>
		
		<p>Is "<?php echo $string1;?>" palindrome?    <?php echo isPalindrome($string1) ? "Is<br/>" : "Is not<br/>";?></p>
		
		<p>Is "<?php echo $string2;?>" palindrome?    <?php echo isPalindrome($string2) ? "Is<br/>" : "Is not<br/>";?></p>
		
		<p>Is "<?php echo $string3;?>" palindrome?    <?php echo isPalindrome($string3) ? "Is<br/>" : "Is not<br/>";?></p>
		
		<p>Is "<?php echo $string4;?>" palindrome?    <?php echo isPalindrome($string4) ? "Is<br/>" : "Is not<br/>";?></p>
		
		<p>Is "<?php echo $string5;?>" palindrome?    <?php echo isPalindrome($string5) ? "Is<br/>" : "Is not<br/>";?></p>
		
		<p>Is "<?php echo $string6;?>" palindrome?    <?php echo isPalindrome($string6) ? "Is<br/>" : "Is not<br/>";?></p>
		
	</body>
</html>