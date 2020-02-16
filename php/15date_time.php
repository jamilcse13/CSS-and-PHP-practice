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
PHP Date and Time
<span style="float: right;">
	<?php
	date_default_timezone_set('Asia/Dhaka');
		echo "Time: " .date("h:i:sa");
	?>
</span>
<hr>

	<?php
		echo "Today is: " .date("d-m-Y"). "<br>";
		echo "Today is: " .date("l"). "<br>";
		echo "Default time is: " .date("h:i:sa"). "<br>";

		date_default_timezone_set('Asia/Dhaka');
		echo "Bangladesh time is: " .date("h:i:sa"). "<br>";		
		echo date_default_timezone_get();
		echo "<br>";
	?>

	<?php
	$nextweek= time() + (7*24*60*60);
	echo "Now:         " .date("d-m-Y"). "<br>";
	echo "Next Week:   " .date("d-m-Y", $nextweek). "<br>";
	echo "Next Week:   " .date("d-m-Y", strtotime("+1 week")). "<br>";
	?>





	

</section>

<div class="footer">
	<p><br>&copy; <?php echo date('Y'); ?> having with J@mil Ahsan</p>
		<h2><?php echo "MD. Jamil Ahsan"; ?></h2>
	</div>

</section>
</body>
</html>