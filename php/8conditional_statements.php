<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	$t= date("H");

	if($t < "20"){
		echo "Have a good day!";
	}
	echo "<br>";
	?>

	<?php
	$t= date("H");

	if($t < "6"){
		echo "Have a good day!";
	}
	else{
		echo "have a good night!";
	}
	echo("<br>");
	?>	

	<?php
	$t= date("H");
	echo "<p>The hour (of the server) is " . $t; 
	echo ", and will give the following message:</p>";

	if($t< "10"){
		echo "Have a good morning!";
	}
	elseif ($t< "20") {
		echo "Have a good day!";
	}
	else{
		echo "Have a good nght!";
	}
	echo "<br>";
	?>

	<?php
	$favcolor= "green";

	switch ($favcolor) {
		case 'red':
			echo "Your favourite color is red!";
			break;
		case 'green':
			echo "Your favourite color is green!";
			break;
		case 'blue':
			echo "Your favourite color is blue!";
			break;
		default:
			echo "Your favourite color is neither red, green nor blue!";
			break;
	}
	?>







</body>
</html>