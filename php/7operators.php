<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	$x= 5;
	$y= 3;
	echo $x ** $y;   //exponential 
	echo "<br>";
	?>

	<?php
	$x = 100;  
	$y = "100";

	var_dump($x === $y); // returns false because types are not equal
	echo "<br>";
	?> 

	<?php
	$x = 100;  
	$y = "100";

	var_dump($x != $y); // returns false because values are equal
	var_dump($x <> $y);
	var_dump($x !== $y); // returns true because types are not equal
	echo "<br>";
	?>

	<?php
	$x = 5;  
	$y = 10;

	echo ($x <=> $y); // returns -1 because $x is less than $y
	echo "<br>";

	$x = 10;  
	$y = 10;

	echo ($x <=> $y); // returns 0 because values are equal
	echo "<br>";

	$x = 15;  
	$y = 10;

	echo ($x <=> $y); // returns +1 because $x is greater than $y
	echo "<br>";
	?>

	<?php
	$x= 10;
	echo "Real number $x";
	echo "<br>";
	echo ++$x;
	echo "<br>";
	$x= 10;
	echo $x++;
	echo "<br>";
	$x= 10;
	echo --$x;
	echo "<br>";
	$x= 10;
	echo $x--;
	echo "<br>";
	?>
	
	<?php
	$x=100;
	$y=50;

	if ($x==100 and $y==50) {
		echo "Hey, it's true!";
	}
	echo "<br>";

	if ($x==100 and $y==40) {
		echo "true";
	}
	else{
		echo "Oh, it's false!";
	}
	echo "<br>";

	if ($x==100 or $y==40) {
		echo "Hey, it's true!";
	}
	echo "<br>";

	if ($x==100 xor $y==50) {
		echo "Hey, it's true!";
	}
	else{
		echo "wrong";     //either x or y can be true but not the both
	}
	echo "<br>";

	if ($x !=200) {
		echo "Oh, it's false!";
	}
	echo "<br>";
	echo "<br>";
	?>

	<?php
	$txt1= "Hello ";
	$txt2= "World";
	echo $txt1 . $txt2;
	echo "<br>";
	?>

	<?php
	$txt1= "Jamil ";
	$txt2= "Ahsan";
	$txt1 .= $txt2;
	echo $txt1;
	echo "<br>";
	?>

	<?php
	$x= array("a"=> "red", "b"=> "green");
	$y= array("c"=> "blue", "d"=> "yellow");

	//var_dump($x+$y);
	print_r($x + $y);
	echo "<br>";
	echo($x + $y);   //wroooooong
	echo "<br>";
	?>

	<?php
	echo $status= (empty($user)) ? "anonymous" : "logged in";
	echo("<br>");

	$user= "Jamil";
	echo $status= (empty($user)) ? "anonymous" : "logged in";
	echo("<br>");	
	?>










</body>
</html>