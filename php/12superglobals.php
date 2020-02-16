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

<hr>
	PHP Supergolbals [$GLOBALS & $_SERVER]
	<br>
	<br>
</hr>

$GLOBALS
<br>
	
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

$_SERVER
<br>

	<?php
		//echo $_SERVER['PHP_SELF'];
		echo "<br>";
		//echo $_SERVER['SERVER_NAME'];
		echo "<br>";
		//echo $_SERVER['SCRIPT_NAME'];
		echo "<br>";
		//echo $_SERVER['HTTP_USER_AGENT'];
		echo "<br>";
		//echo $_SERVER['SERVER_ADDR'];
		echo "<br>";
	?>

	<hr>
		$_REQUEST & $_POST
	</hr>

	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method= "post"> <!-- action means_ where to action
		method= "get": shows the username as well as it is not secure.
		so we use 'post' here-->
		<br>
		Username: <input type="text" name="username">
		<input type="submit" value="Submit">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name= $_REQUEST['username'];
			if(empty($name)){
				echo "<span style= 'color: red'>Username field must not be empty!!</span>";
			}
			else{
				echo "<span style= 'color: green'>You have submitted: " .$name. "</span>";
			}
		}
	?>

	<a href="text.php?msg=Good&txt=Bye">Sent Data</a>







</section>

<div class="footer">
		<h2><?php echo "MD. Jamil Ahsan"; ?></h2>
	</div>

</section>
</body>
</html>