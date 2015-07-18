<?PHP
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
?>
<!DOCTYPE HTML>
<HTML>
	<head>
		<title>
			Access Not Granted
		</title>
		<style type="text/css">
		#img
		{
			height: 400px;
			width: 600px;
			background:url('404.png');
			margin-left: 20%;
			margin-top: 5%;
		}
		#link
		{
			margin-left: 35%;
			padding-top: 2%;
			font-size: 24px;
			color: green;
			text-decoration: none;
		}
		#rdr
		{
			font-size: 34px;
			color: green;
			text-decoration: none;
		}
		</style>
	</head>
	<body>
		<div id="img">
			
		</div>
		<div id="link">
			<a href="welcome.php" id="rdr">Go to Home Page</a>
		</div>
	</body>
</HTML>