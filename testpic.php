<!DOCTYPE HTML>
<html>
<head>
	<title>test pic</title>
</head>
<body>
<div id="main">
	<?php
		ob_start();
		session_start();
		include 'testmysql.php';
		$username='dholuram';
		$i=mysqli_query($con,"SELECT * FROM usermyca WHERE username='$username'");
		$j=mysqli_fetch_array($i);
		$img=$j['pic'];
		echo "<img src='$img' height='1000' width='1000'></img>";
	?>
</div>
</body>
</html>
