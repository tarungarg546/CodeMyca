<?php
	ob_start();
	session_start();
	include "testmysql.php";
	$username=stripcslashes($_POST['username']);
	$knaive_pass=stripcslashes($_POST['pass']);
	$result=mysqli_query($con,"SELECT * FROM usermyca WHERE username='$username'");
	$count=$result->num_rows;
	$data=mysqli_fetch_array($result);
	$user_name=$data['username'];
	$user_id=$data['id'];
	$salt=$data['salt'];
	$real_pass=$data['password'];
	$admin_status=$data['admin'];
	$editorialist=$data['editorial'];
	$encrypt_pass=crypt($knaive_pass,$salt);
	$setter=$data['setter'];
	if($count==1&&($encrypt_pass==$real_pass))//password and username match
	{
		//create sessiona nd store user_name and user_id in it
		session_regenerate_id();
		$_SESSION['username']=$user_name;
		$_SESSION['user_id']=$user_id;
		if($admin_status==1)
		{
			$_SESSION['admin']=1;
			session_write_close();
			header('Location:admin.php');
			exit();
		}
		else
		{
			if ($editorialist==1) {
					$_SESSION['editorial']=1;
					session_write_close();
					header('Location:add_editorial.php');
					exit();
				# code...
			}
			else if($setter==1)
			{
				$_SESSION['setter']=1;
				session_write_close();
				header('Location:add_problem.php');
				exit();
			}
			else
			{
				session_write_close();
				if (isset($_SESSION['redirect_url'])) {
					$redirect_url = (isset($_SESSION['redirect_url'])) ? $_SESSION['redirect_url'] : '/';
					unset($_SESSION['redirect_url']);
					header('Location:'. $redirect_url);
					exit();
					# code...
				}
				else
				{
					header('Location:welcome.php');
					exit();
				}

			}

		}
	}
	else
	{
		$error_msg='Wrong username and password combination';
		session_regenerate_id();
		$_SESSION['error_msg']=$error_msg;
		session_write_close();
		header('Location:login.php');
		exit();
	}
?>