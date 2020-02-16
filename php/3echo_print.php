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
echo "<h4>PHP is Fun!</h4>";
echo "Hello World!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>

<?php
$txt1= "Learn PHP";
$txt2= "W3Schools.com";
$x= 5;
$y= 4;
echo "<h4>" .$txt1. "</h4>";
echo "Study PHP at " .$txt2. "<br>";
echo $x + $y;
?>

<?php
print "<h4>PHP is Fun!</h4>";
print "Hello World!<br>";
print "I'm about to learn PHP!<br>";
?>

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h4>" . $txt1 . "</h4>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
?>

</section>

<div class="footer">
		<h2><?php echo "MD. Jamil Ahsan"; ?></h2>
	</div>

</section>
</body>
</html>