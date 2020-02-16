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
Headings
<span style="float: right;">
	<?php
	date_default_timezone_set('Asia/Dhaka');
		echo "Time: " .date("h:i:sa");
	?>
</span>
<hr>

	<!-- 
	<table>
		<tr>
			<td>Filter Name</td>
			<td>Filter ID</td>
		</tr>
		<?php
		/*foreach (filter_list() as $id => $filter) {
			echo '<tr><td>' .$filter. '</td><td>' .filter_id($filter). '</td></tr>';
		}*/
		?>
	</table>
	-->

	<?php
	$str= "<h2>I am learning PHP.</h2>";
	$newstr= filter_var($str, FILTER_SANITIZE_STRING);
	echo $newstr. "<br>";
	?>

	<?php
	$int= 50;
	if (filter_var($int, FILTER_VALIDATE_INT)) {
		echo "It is integer value.<br>";
	}
	else{
		echo "It is not integer value.<br>";
	}
	?>

	<?php
	$ip= "127.0.0";
	if (filter_var($ip, FILTER_VALIDATE_IP)) {
		echo "$ip is a valid ip.<br>";	
	}
	else{
		echo "$ip is not a valid ip.<br>";
	}
	?>

	<?php
	$mail= "jamil.cse13@gmail.com";
	if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		echo "$mail is a valid email.<br>";	
	}
	else{
		echo "$mail is not a valid email.<br>";
	}
	?>






</section>

<div class="footer">
		<h2><?php echo "MD. Jamil Ahsan"; ?></h2>
	</div>

</section>
</body>
</html>