<?php
$fonts= "verdana";
$bgcolor= "#444";
$fontcolor= "orange";
$errname= $erremail= $errwebsite= $errgender= "";

$name= $email= $website= $comment= $gender= "";
	

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_POST["name"])){
			$errname= "<span style= 'color: red'>Name is required</span>";
		}
		else{
			$name     = validate($_POST["name"]);	
		}

		if(empty($_POST["email"])){
			$erremail= "<span style= 'color: red'>E-mail is required</span>";
		}
		elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			$erremail= "<span style= 'color: red'>Invalid E-mail format</span>";	
		}
		else{
			$email     = validate($_POST["email"]);	
		}

		if(empty($_POST["website"])){
			$errwebsite= "<span style= 'color: red'>Website is required</span>";
		}
		elseif (!filter_var($_POST["website"], FILTER_VALIDATE_URL)) {
			$errwebsite= "<span style= 'color: red'>Invalid Website format</span>";	
		}
		else{
			$website     = validate($_POST["website"]);	
		}
		if(empty($_POST["gender"])){
			$errgender= "<span style= 'color: red'>Gender is required</span>";
		}
		else{
			$gender     = validate($_POST["gender"]);	
		}
		
		$comment  = validate($_POST["comment"]);
		
		echo "Name: " .$name. "<br>";
		echo "E-mail: " .$email. "<br>";
		echo "Website: " .$website. "<br>";
		echo "Comment: " .$comment. "<br>";
		echo "Gender: " .$gender;
	}

	function validate($data){
		$data= trim($data);
		$data= stripcslashes($data);
		$data= htmlspecialchars($data);

		return $data;
	}

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
	PHP Form Validation
	<hr>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

		<p style="color: red">* required field</p>
	<table>
		<tr>
			<td>Name: </td>
			<td>
				<input type="text" name="name">*<?php echo $errname; ?>
			</td>
		</tr>
		<tr>
			<td>E-mail: </td>
			<td>
				<input type="text" name="email">*<?php echo $erremail; ?>
			</td>
		</tr>
		<tr>
			<td>Website: </td>
			<td>
				<input type="text" name="website">*<?php echo $errwebsite; ?>
			</td>
		</tr>
		<tr>
			<td>Comment: </td>
			<td>
				<textarea name="comment" rows="5" cols="40"></textarea>
			</td>
		</tr>
		<tr>
			<td>Gender: </td>
			<td>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="other">Other *<?php echo $errgender; ?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" value="Submit">
			</td>
		</tr>
	</table>
	</form>










</section>

<div class="footer">
		<h2><?php echo "MD. Jamil Ahsan"; ?></h2>
	</div>

</section>
</body>
</html>