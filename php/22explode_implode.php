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
Explode() and Implode()
<span style="float: right;">
	<?php
	date_default_timezone_set('Asia/Dhaka');
		echo "Time: " .date("h:i:sa");
	?>
</span>
<hr>
	<h3>Explode</h3>
	<?php
	$mystr= "We are learning PHP";
	//print_r(explode(" ", $mystr));
	$str= explode(" ", $mystr);
	echo $str[2];
	?>

	<h3>Implode</h3>

	<?php
	$mystr= array("We", "are", "learning", "PHP");
	//print_r(explode(" ", $mystr));
	echo implode(",", $mystr);
	
	?>









</section>

<div class="footer">
		<h2><?php echo "MD. Jamil Ahsan"; ?></h2>
	</div>

</section>
</body>
</html>