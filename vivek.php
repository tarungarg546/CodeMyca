<!DOCTYPE HTML>
<html>
<head>
	<title>
		Exp
	</title>
</head>
<body>
	<?php
		ob_start();
		session_start();
		include 'testmysql.php';
		$id=7;
		$sql="SELECT * FROM usermyca WHERE id='$id'";
		$result=mysqli_query($con,$sql) or die("error");
		if (!$result) {
			echo "dont know why";
			# code...
		}
		else
		{
			$row=mysqli_fetch_array($result);

			echo $row['username'];
		}
	?>
</body>
</html>