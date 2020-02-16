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
Error
<span style="float: right;">
	<?php
	date_default_timezone_set('Asia/Dhaka');
		echo "Time: " .date("h:i:sa");
	?>
</span>
<hr>
	<h3>Error reporting</h3>
	<?php
		//phpinfo();
	error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
	$price= 45;
	if ($price == 45) {
		echo "Price is $price";
	}
	else{
		print "Price is not 45";
	}
	?>

	<h3>PHP error Handling with Exception</h3>

	<?php
		function numcheck($num){
			if($num != 5){
				throw new Exception("Number is not 5");
			}
			return true;
		}

		try{
			numcheck(5);
			echo "yes, you have done";
		}
		catch(Exception $e){
			echo "Error: " .$e-> getMessage();
		}
	?>












</section>

<div class="footer">
		<h2><?php echo "MD. Jamil Ahsan"; ?></h2>
	</div>

</section>
</body>
</html>