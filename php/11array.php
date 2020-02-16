<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	$cars= array("Volvo", "BMW", "Toyota");
	echo "I like " .$cars[0]. ", " .$cars[1]. " and " .$cars[2]. ".<br>";
	echo "Length of the array: ";
	echo count($cars);
	echo "<br>";
	?>

	<?php
	$cars= array("Volvo", "BMW", "Toyota");
	$arrlength= count($cars);

	for ($i=0; $i < $arrlength; $i++) { 
		echo $cars[$i];
		echo "<br>";
	}
	?>

	<?php
	$age= array("jamil"=>"25", "jawad"=>"17", "sajid"=>"16", "najib"=>"9");
	echo "Jawad is " .$age['jawad']. " years old.<br>";
	?>

	<?php
	$age= array("jamil"=>"25", "jawad"=>"17", "sajid"=>"16", "najib"=>"9");
	
	foreach ($age as $x => $x_value) {
		echo "Key=" .$x. ", Value=" .$x_value;
		echo "<br>";
	}
	?>

	//Array sorting: 
	<?php
	echo "<br>";
	$cars= array("Volvo", "BMW", "Toyota");
	sort($cars);

	$carlen= count($cars);
	for ($i=0; $i < $carlen; $i++) { 
		echo $cars[$i];
		echo "<br>";
	}
	?>

	<?php
	echo "<br>";
	$cars= array("Volvo", "BMW", "Toyota");
	rsort($cars);

	$carlen= count($cars);
	for ($i=0; $i < $carlen; $i++) { 
		echo $cars[$i];
		echo "<br>";
	}
	?>

	<?php
	echo "<br>";
	$age= array("jamil"=>"25", "jawad"=>"17", "sajid"=>"16", "najib"=>"9");
	asort($age);
	
	foreach ($age as $x => $x_value) {
		echo "Key=" .$x. ", Value=" .$x_value;
		echo "<br>";
	}
	?>

	<?php
	echo "<br>";
	$age= array("jamil"=>"25", "jawad"=>"17", "sajid"=>"16", "najib"=>"9");
	arsort($age);
	
	foreach ($age as $x => $x_value) {
		echo "Key=" .$x. ", Value=" .$x_value;
		echo "<br>";
	}
	?>

	<?php
	echo "<br>";
	$age= array("jamil"=>"25", "jawad"=>"17", "sajid"=>"16", "najib"=>"9");
	ksort($age);
	
	foreach ($age as $x => $x_value) {
		echo "Key=" .$x. ", Value=" .$x_value;
		echo "<br>";
	}
	?>

	<?php
	echo "<br>";
	$age= array("jamil"=>"25", "jawad"=>"17", "sajid"=>"16", "najib"=>"9");
	krsort($age);
	
	foreach ($age as $x => $x_value) {
		echo "Key=" .$x. ", Value=" .$x_value;
		echo "<br>";
	}
	?>

	<?php
	$car= array(
	array("BMW", 20, 15),
	array("Volvo", 14, 32),
	array("Toyota", 65, 22)
	);

	echo $car[1][0];
	echo "<br>";
	?>

	<?php
	$car= array(
	array("BMW", 20, 15),
	array("Volvo", 14, 32),
	array("Toyota", 65, 22),
	array("NOAH", 45, 85)
	);

	for($row=0; $row<4; $row++){
		echo "<p>Row Number $row</p>";
		echo "<ul>";
		for($col=0; $col<3; $col++){
			echo "<li>".$car[$row][$col]."</li>";
		}
		echo "</ul>";
	}
	?>










</body>
</html>