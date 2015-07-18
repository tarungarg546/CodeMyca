<?php
	ob_start();
	session_start();
	include 'testmysql.php';
	$level=$_POST['level'];
	//echo $level;
	$contest=$_POST['contest'];
	if($contest="")
	{
		echo "contest=".$contest;
		$ran=mysqli_query($con,"SELECT * FROM contestmyca WHERE contest_code='$contest' ");
	$j=mysqli_fetch_array($ran);
	$start=$j['start_time'];
	$cuur=date("Y-m-d H:i:s");
	if (strtotime($start)<strtotime($cuur)) 
	{
		echo "Can't add a problem in past and present contests";
		exit();
		# code...
	}
	
	}
	$code=$_POST['p_code'];
	$i=mysqli_query($con,"SELECT * FROM problemyca WHERE problem_code='$code'");
	$count=$i->num_rows;
	if ($count>=1) 
	{
		session_regenerate_id();
		$_SESSION['err']='Problem Code already exist';
		session_write_close();
		header('Location:add_problem.php');
		exit();
		# code...
	}
	//echo "code=".$code;
	$name=$_POST['name'];
	//echo "name=".$name;
	$i=mysqli_query($con,"SELECT * FROM problemyca WHERE name='$name'");
	$count=$i->num_rows;
	if ($count>=1) 
	{
		session_regenerate_id();
		$_SESSION['err']='Problem Name already exist';
		session_write_close();
		header('Location:add_problem.php');
		exit();
		# code...
	}
	$statement=$_POST['content'];
	//echo "statement=".$statement;
	$tl=$_POST['time'];
	//echo "time_limit=".$tl;
	$ip=$_POST['ip'];
	$op=$_POST['op'];
	$setter=$_SESSION['username'];
	mysqli_query($con,"INSERT into problemyca(problem_code,contest_code,level_code,name,statement,time_limit,setter,test_ip,test_op) Values ('$code','$contest','$level','$name','$statement','$tl','setter','ip','op')");
	header('Location:add_problem.php');
?>