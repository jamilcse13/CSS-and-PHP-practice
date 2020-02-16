<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	$x=1;

	while ($x<=5) {
		echo "The number is: $x <br>";
		$x++;
	}
	?>

	<?php
	$x=6;

	do {
		echo "The number is: $x <br>";
		$x++;
	} while ($x<=10);
	?>

	<?php
	$x=6;

	do {
		echo "<br>The number is: $x <br>";
		$x++;
	} while ($x<=5);
	?>

	<?php
	for ($i=32; $i <= 50 ; $i++) { 
		echo "The number is: $i <br>";
	}
	?>

	<?php
	$colors= array("red", "green", "blue", "yellow");

	foreach ($colors as $value) {
		echo "$value <br>";
	}
	?>

	<?php
	$numbers= array(1,2,3,4,5,6,7,8,9);

	foreach ($numbers as $value) {
		echo "$value <br>";
	}
	?>




</body>
</html>