<?php
	ob_start();
	session_start();
	include 'testmysql.php';
	if (!(isset($_SESSION['user_id']))||trim($_SESSION['user_id'])=="") {
		session_regenerate_id();
		$redirect_url=$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
		$_SESSION['redirect_url']=$redirect_url;
		session_write_close();
		header('Location:login.php');
		exit();
	}
	else
	{
		$id=$_SESSION['user_id'];
		$i=mysqli_query($con,"SELECT * FROM usermyca WHERE id='$id'");
		$j=mysqli_fetch_array($i);
		$status=$j['admin'];
		if ($status!=1) 
		{
			header('Location:unauthorised_access.php');
			exit();
			# code...
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Hello Admin!
	</title>
	<style type="text/css">
			#user,#problem,#editorial,#con
			{
				color: red;
				font-size: 50px;
				
			}
	</style>
</head>
<body>
	<div id="problem">
		<a href="add_problem.php?author=<?php echo $_SESSION['username'];?>">Add a problem</a>
	</div>
	<div id="editorial">
		<a href="add_editorial.php?editorialist=<?php echo $_SESSION['username'];?>">Write Editorial</a>
	</div>
	<div id="user">
		<a href="welcome.php">View as user</a>
	</div>
	<div id="con">
		<a href='create.php?creator=<?php echo $_SESSION['username'];?>'>Create a new contest</a>
	</div>
</body>
</html>