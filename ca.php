<?php
	ob_start();
	session_start();
	include "testmysql.php";

	$username=stripslashes($_POST['user']);
	$knaive_pass=stripslashes($_POST['password']);
	$salt=uniqid(mt_rand(),true);
	$encrypt_pass=crypt($knaive_pass,$salt);
	$email=stripslashes($_POST['email']);
	$result=mysqli_query($con,"SELECT * FROM usermyca where username='$username' ") or die(mysqli_error($con));
	$count=$result->num_rows;
	if($count>=1)//username exist
	{
		$error='Username Already exist.Choose some other!';
		session_regenerate_id();
		$_SESSION['error_msg']=$error;
		session_write_close();
		header('Location:login.php');
		exit();
	}
	//username is unique now check for email
		else{
				$result=mysqli_query($con,"SELECT * FROM usermyca where email='$email'");
				$c_email=$result->num_rows;
				if($c_email>=1)//email already in use
				{
					$error='Do not try to be witty!This email is already in use.Choose another!';
					session_regenerate_id();
					$_SESSION['error_msg']=$error;
					session_write_close();
					header('Location:login.php');
					exit();
				}
				else//both are unique insert them in db
				{
					mysqli_query($con,"INSERT INTO usermyca(level,username,password,salt,email,points,problems_solved,problems_attempted,admin,editorial,setter) VALUES (1,'$username','$encrypt_pass','$salt','$email',0,0,0,0,0,0)") or die(mysqli_error($con));
					//$headers='From:codemyca@gmail.com'."/r/n".'Reply To:tarungarg546@gmail.com'."/r/n";
					//mail($email,'Congrats!Your account has been created!', 'You account has been created with following credentials \n Username:$username and password:$knaive_pass');
					$result=mysqli_query($con,"SELECT * FROM usermyca WHERE username='$username'") or die('error in DB1');
					$row=mysqli_fetch_array($result);
					$user_id=$row['id'];
					session_regenerate_id();
					$_SESSION['user_id'] = $user_id;
					$_SESSION['username'] = $username;
					session_write_close();
					if(isset($_SESSION['redirect_url']))
					{
						$redirect_url = (isset($_SESSION['redirect_url'])) ? $_SESSION['redirect_url'] : '/';
						unset($_SESSION['redirect_url']);
						header('Location: ' . $redirect_url);
						exit();
					}
					else
					{
						header("Location:welcome.php");
						exit();
					}
				}
			}
?>