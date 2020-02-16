<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	function name($fname){
		echo "$fname Ahsan <br>";
	}

	name("Jamil");
	name("Jawad");
	name("Sajid");
	name("Najib");
	?>

	<?php
	function name1($fname, $year){
		echo "$fname Ahsan, born in $year <br>";
	}

	name1("Jamil", "1994");
	name1("Jawad", "2003");
	name1("Sajid", "2004");
	name1("Najib", "2010");
	?>

	<?php
	function addNum(int $a, int $b){
		return $a + $b;
	}
	echo addNum(5, 5);
	echo("<br>")
	?>

	<?php 
	//declare(strict_types=1); // strict requirement
	function addNumb(int $a, int $b){
		return $a + $b;
	}
	echo addNumb(5, "5 days");
	echo "<br>";
	?>	

	<?php
	function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
	}

	setHeight(350);
	setHeight();
	setHeight(135);
	setHeight(80);
	?>

	<?php
	function sum(int $a, int $b){
		$c= $a + $b;
		return $c;
	}

	echo "5+10= " .sum(5,10). "<br>";
	echo "77+158= " .sum(77,158). "<br>";
	echo "123+321= " .sum(123,321). "<br>";
	?>

	<?php
	function sum1(float $a, float $b): float{
		return $a+$b;
	}
	echo sum1(1.6, 5.3);
	echo "<br>";
	?>

	<?php
	function sum2(float $a, float $b): int{
		return (int)($a+$b);
	}
	echo sum2(1.6, 5.3);
	?>









</body>
</html>