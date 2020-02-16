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

	<?php

		if(isset($_FILES['image'])){
			$filename = $_FILES['image']['name'];
			$filetmp = $_FILES['image']['tmp_name'];
			move_uploaded_file($filetmp, "image/".$filename);
			echo "Image uploaded successfully!";
		}



	?>

	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" value="Submit">
	</form>




</section>

<div class="footer">
		<h2><?php echo "MD. Jamil Ahsan"; ?></h2>
	</div>

</section>
</body>
</html>