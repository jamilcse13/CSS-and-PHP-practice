<?php
$fonts= "verdana";
$bgcolor= "#444";
$fontcolor= "orange";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			font-family: <?php echo $fonts;?>
		}
		.phpcoding{
			width: 900px;
			margin: 0 auto;
			background: <?php echo "#ddd";?>;
		}
		.header, .footer{
			text-align: center;
			background: <?php echo $bgcolor;?>;
			color: <?php echo $fontcolor;?>;
			
		}
		.mainportion{
			min-height: 400px;
			padding: 5px;
		}
		.header h2, .footer h2{
			margin: 0;
			padding: 1px 0 1px 0;
		}
	</style>
</head>
<body>
<section class="phpcoding">
	<div class="header">
		<h2>PHP Fundamental</h2>
	</div>

<section class="mainportion">	

	<?php

	$x=15;

	function test1(){
		global $x;
		$a= 5;
		echo $a;
		echo "<br>";
		echo "Access from function test1 " .$x;
		echo "<br>";
	}

	function test2(){
		global $x;
		$b=10;
		echo $b;
		echo "<br>";
		echo "Access from function test2 " .$x;
	}
	test1();
	test2();
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
	echo $q;
	echo "<br>"
	?>

</section>

<div class="footer">
		<h2><?php echo "MD. Jamil Ahsan"; ?></h2>
	</div>

</section>
</body>
</html>