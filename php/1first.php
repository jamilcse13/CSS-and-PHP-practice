<!DOCTYPE html>
<html>

<body>

<?php
echo "My first PHP script!<br>";
?> 

<?php
echo "I'm Jamil Ahsan<br>";
?>

<?php
//single line comment
#this is also a single line comment
/*
multiple line comment
*/

$x= 5+5;
echo "summation is ";
echo $x;
echo "<br>"
?>

<?php
$color= "red";
echo "<br>My car is " .$color."<br>";
echo "My car is $color. <br>";
?>

<?php
$txt= "Hello World";
$x= 5;
$y= 10;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$z= $x+$y;
echo "summation is $z";
echo "<br>";
?>

<?php
$x= 10; //global

function myTest(){
	// using x inside this function will generate an error

	echo "<p>Variable x inside function is: $x</p>";
}

myTest();
echo "<p>Variable x outside function is: $x</p>";
?>

<?php

function myTest1(){
	$a= 5; //local

	echo "<p>Variable a inside function is: $a</p>";
}

myTest1();
echo "<p>Variable a outside function is: $a</p>";
?>

<?php

$x= 4;
$y= 8;

function sum(){
	global $x, $y;
	$y= $x + $y;
}

sum();
echo "global sum: ";
echo $y;
echo "<br>"
?>

<?php
$q = 5;
$w = 10;

function myTest2() {
    $GLOBALS['q'] = $GLOBALS['q'] + $GLOBALS['w'];
} 

myTest2();
echo $y;
echo "<br>"
?>




</body>
</html>
