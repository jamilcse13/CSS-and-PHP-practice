<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	$x= 1234;
	var_dump($x);
	echo "<br>";
	?>

	<?php
	$x= 12.34;
	var_dump($x);
	echo "<br>";
	?>

	<?php
	$cars= array("Volvo", "BMW", "Toyota", "NOAH");
	var_dump($cars);
	echo "<br>";
	?>

	<?php
	//Object
	
	class Car{
		function Car(){
			$this->model= "NOAH";
		}
	}
	//create object
	$herbie= new Car();
	//show object properties
	echo $herbie->model;
	?>
	<hr>
<?php
$x= "i am a muslim";
echo $x; 
echo "<br>";
var_dump($x);
?>
<hr>

</body>
</html>