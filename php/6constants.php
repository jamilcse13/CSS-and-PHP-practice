<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	define("myname", "Jamil Ahsan");
	echo myname;
	//case sensitive false by default
	echo "<br>";
	?>	

	<?php
	define("Mname", "Jamil Ahsan 1", true);
	 function name1(){
	 	echo mname;
	 }
	 name1();
	//case insensitive
	echo "<br>";
	?>

	<?php
	define("Name", "Jamil Ahsan", true);
	echo name;
	//case insensitive
	echo "<br>";
	?>

	<?php
	define("prophets", ["Muhammad (sm)", "Ibrahim (a)", "Isa (a)", "Adam (a)"]);
	echo prophets[0];
	//case sensitive
	echo "<br>";
	?>

	<?php
	define("nam", "Jamil Ahsan");

	function name(){
	echo nam;
	//case sensitive
	echo "<br>";
	}
	name();
	?>



</body>
</html>