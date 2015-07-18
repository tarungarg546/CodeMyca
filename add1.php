<?php
	ob_start();
	session_start();
	include 'testmysql.php';
	$name=$_POST['name'];
	$short_note=$_POST['shortnote'];
	$content=$_POST['statement'];
	$author=$_SESSION['username'];
	$posted_on=date("Y-m-d H:i:s");
	$temp=mysqli_query($con,"SELECT * FROM editorialmyca WHERE name='$name'");
	$count=$temp->num_rows;
	if ($count>=1) 
	{
		session_regenerate_id();
		$_SESSION['er']='Editorial Name already exist!';
		session_write_close();
		exit();
		# code...
	}
	$ran=mysqli_query($con,"INSERT INTO editorialmyca(name,shortnote,content,Author,Posted_On) VALUES ('$name','$short_note','$content','$author','$posted_on')");
	
	header('Location:add_editorial.php');
?>

