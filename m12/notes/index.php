<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP</title>
</head>
<body>

	<?php
		echo "Hello World";
		echo "<div>Hello World</div>";
		echo "<h2>Hello World</h2>";
		echo "<p>Hello World</p>";

		$number = "number"; 
		$a = 5;
		$bool = true;

		$float = 0.678;

		echo '<p>'.$number.'</p>';
		echo '<p>'.'This '.$number.' is equal to 5'.'</p>';
		echo '<p>'."This $number is equal to 5".'</p>';
		echo '<p>'.'This is a "quote"'.'</p>';

		echo 5+3;

		$firstname = "Haewon";
		$lastname = "Lee";
		$fullname = $firstname.' '.$lastname;

		echo $fullname;

		echo $_GET['name'].'<br>';
		echo "My name is {$_GET['name']}! I am {$_GET["age"]} years old".'<br>';

		$colors = array("Red", "Yellow", "Blue");
		echo $colors[0].'<br>';
		print_r($colors).'<br>'; 

	?>

	<div style="color:<?= $colors[0]; ?>">
		This text has a different color. 
	</div>
	
	<?

		$colorsAssociatve = [
			"red" => "#f00", 
			"yellow" => "#ff0",
			"blue" => "#00f"
		];

		echo $colorsAssociatve['yellow'];

	?>

	<div style="color:<?= $colorsAssociatve['blue']; ?>">
		This text has a different color. 
	</div>

	<?
		$a = 5;
		$c = $a;
		$d = $c*2;

		echo $d;

		echo '<p>This is a paragraph.</p>';
		echo "<p>This is a paragraph.</p>";


		function print_p($v) {
			echo "<pre>", print_r($v), "</pre>"; 
		}

		print_p($_GET);
		print_p($colors);
		print_p($colorsAssociatve);


	?>

</body>
</html>





















