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
		input[type='text']{
			width: 250px;
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
Headings
<span style="float: right;">
	<?php
	date_default_timezone_set('Asia/Dhaka');
		echo "Time: " .date("h:i:sa");
	?>
</span>
<hr>
	<h3>Case change</h3>

	<?php
	if (isset($_POST['text'])) {
		global $txt;
		$txt= $_POST['text'];
		echo strtoupper($txt). "<br>";
		echo strtolower($txt). "<br>";
		echo ucfirst($txt). "<br>";
		echo ucwords($txt). "<br>";
	}
	?>

	<form action="23case_change.php" method="post">
		<input type="text" name="text" value="<?php global $txt; echo($txt) ?>">
		<input type="submit" name="Submit">
	</form>
	
		<?php
			if (isset($_POST['text'])) {
				global $txt;
				$txt= $_POST['text'];
				echo trim($txt, " ."). "<br>";
				echo ltrim($txt, " ."). "<br>";
				echo rtrim($txt, " ."). "<br>";
			}
		?>





</section>

<div class="footer">
		<h2><?php echo "MD. Jamil Ahsan"; ?></h2>
	</div>

</section>
</body>
</html>