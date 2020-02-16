<?php
$fonts= "verdana";
$bgcolor= "#444";
$fontcolor= "orange";
session_start();
//setcookie("visited", "", time()-3600);
setcookie("visited", "test", time() + 3600, '/');

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
Session
<span style="float: right;">
	<?php
	date_default_timezone_set('Asia/Dhaka');
		echo "Time: " .date("h:i:sa");
	?>
</span>
<hr>

	<?php  
	$_SESSION['user']      = "Jamil";
	$_SESSION['password']  = "123";

	echo "Username is ".$_SESSION['user']. "<br>";
	//session_unset();
	echo "Password is: ".$_SESSION['password'];
	session_destroy();
	?>

	<?php
	//setcookie(name, value, expire, path, domain, secure, httponly)
	
	if (!isset($_COOKIE['visited'])) {
		setcookie("visited", "1", time()+86400, "/") or die("Could not set cookie<br>");
	echo "<br>This is your first visit in this website<br>";
	}
	else{
		echo "<br>You are our old visitor<br>";
	}
	//echo "<br>deleted";
	
	?>

	<?php
	if(count($_COOKIE) > 0) {
    	echo "Cookies are enabled.";
	} else {
    	echo "Cookies are disabled.";
	}
?>










</section>

<div class="footer">
		<br>

		<p>&copy; <?php echo date('Y');?> having with J@mil Ahsan</p>
		<h2><?php echo "MD. Jamil Ahsan"; ?></h2>
	</div>

</section>
</body>
</html>