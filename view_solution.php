<?php
ob_start();
session_start();
include 'testmysql.php';
if (!(isset($_SESSION['user_id']))||trim($_SESSION['user_id'])=='')
	{
		session_regenerate_id();
		$redirect_url=$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
		$_SESSION['redirect_url']=$redirect_url;
		session_write_close();
		header('Location:login.php');
		exit();
	}
//check for id
	if (!isset($_GET['id'])) {
		header('Location:502.php');
		exit();
		# code...
	}
	else
	{
		$id=$_GET['id'];
		$i=mysqli_query($con,"SELECT * FROM submissionmyca WHERE submission_id='$id'");
		$row=$i->num_rows;
		if ($row<1) {
			header('Location:502.php');
			exit();
		}
		$j=mysqli_fetch_array($i);
		$id=$j['id'];
		if($id!==$_SESSION['user_id'])
		{
			header('Location:unauthorised_access.php');
			exit();
		}
	}
?>
<!DOCTYPE HTML>
<HTML>
<head>
	<link rel="stylesheet" href="styles/default.css">
	<script src="highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
	<title>
		Solution
	</title>
	<style type="text/css">

	</style>
</head>
<body>
	<div id="main">
			<?php
			echo "<div id='left' style='float:left'>";
				$sub_id=$_GET['id'];
				$i=mysqli_query($con,"SELECT * FROM submissionmyca WHERE submission_id='$sub_id'");
				$j=mysqli_fetch_array($i);
				$id=$j['id'];
				$level_code=$j['level_code'];
				$contest_code=$j['contest_code'];
				if(!is_null($level_code))
				{
					echo "<span id='level'><a href='level$level_code.php'>";
					echo $level_code;
					echo "</a></span>";
				}
				if(!is_null($contest_code))
				{
					echo "<span id='level'><a href='__.php'>";
					echo $contest_code;
					echo "</a></span>";	
				}
				$p_code=$j['problem_code'];
				$temp=mysqli_query($con,"SELECT * FROM problemyca WHERE problem_code='$p_code'");
				$res=mysqli_fetch_array($temp);
				$name=$res['name'];
				echo "->";
				echo "<span id='problem'><a href='problem.php?id=".$p_code."'>";
				echo $name;
				echo "</a></span>";
				$user=$_SESSION['username'];
				echo "->";
				echo "<span id='user'><a href='profile.php?id=".$user."'>";
				echo $user;
				echo "($sub_id)";
				echo "</a></span>";
				echo "<br>";
				$lang=$j['language'];
				echo "<pre><code class='$lang'>".htmlspecialchars($j['source_code'])."</code></pre>";
				echo "</div>";//end of left divison
				echo "<div id='right' style='float:right;'>";//right side containing info for that submission
				if(!is_null($level_code))
				{
					echo "Source:-<a href='level$level_code.php' style='text-decoration:none;'>"."Level ".$level_code."</a>";	
				}
				
				if (!is_null($contest_code)) {
					echo "Source:-<a href='___.php' style='text-decoration:none;'>".$level_code."</a>";
					# code...
				}
				echo "<br>";
				echo "Problem:<a href='problem.php?id=".$p_code."'>";
				echo $name;
				echo "</a>";
				echo "<br>";
				echo "Language:-".$lang;
				echo "<br>";
				echo "Result:-".$j['status'];
				echo "<br>";
				echo "Time Used:-".$j['time_taken'];
				echo "<br>";
				echo "Memory Used:-".$j['memory_taken'];
				echo "<br>";

				echo "</div>";
			?>
	</div>
</body>
</HTML>