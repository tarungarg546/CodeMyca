<!DOCTYPE HTML>
<head>
<title>May We Have your login details?</title>
<style type="text/css">
	body
	{
		background-color: #1F1F2E;
	}
	#left
	{
		width: 600px;
		float: left;
	}
	#right
	{
		float: right;
		width: 600px;
	}
	#header
	{
		margin-left:25%; 
		font-size: 50px;
		color: orange;
		letter-spacing: 2px;
	}
	#header_comment
	{
		font-style: italic;
		color: blue;
		letter-spacing: 2px;
				font-size: 20px;

	}
	#int_main
	{
		color: orange;
		letter-spacing: 2px;
		font-size: 20px;
	}
	#ob,#cb
	{
		color: orange;
				font-size: 20px;

	}
	#login,#signup
	{
		font-size: 20px;
		letter-spacing: 2px;
		margin-left: 15%;
	}
	#uerror,#perror,#uerrors,#perrors,#errors
	{
		font-size: 18px;
		font-style: italic;
		font-family: georgia;
		color: #2EB8E6;
	}
	#goto,#sign_up
	{
		border-style: solid;
		background-color: black;
		border-color: black;
		color: white;
		border-radius: 4px;
	}
	#goto:hover,#sign_up:hover
	{
		border-style: solid;
		background-color: white;
		border-color: white;
		color: black;
		border-radius: 4px;
	}
	#php
	{
		margin-left: 15%;
		font-size: 18px;
		color: red;
	}
	</style>
</head>
<body>
<div id="main">
<div id="header">#include&ltcodemyca.com&gt</div>

	<div id="left">
			
		<p id="header_comment">
			//Sign In if you are already a user;
		</p>
		<p id="int_main">
			<font color="yellow">int</font><font color="white"> main </font>()
		</p>
		<p id="ob">
			{
		</p>
		<form id="login" method="post">
		<p id="us"><font color="yellow">char</font><font color="white"> username</font><font color="orange">[</font><font color="pink">1000</font><font color="orange">];</font></p>
		<p id="su">
			<font color="white">scanf </font><font color="orange">(</font><font color="green">"%s"</font><font color="orange">,</font><input type="text" id="username" class="username" name="username" placeholder="Enter Your Username" autocomplete="on" onchange="javscript:verify_username('username');" /><font color="orange">);</font>
			<div id="uerror" style="display:none;">
				//if(strlen(username)&lt4)
				</br>
				//cout&lt&lt"Username Can't be less than 4 characters";
			</div>
		</p>
		<p id="ps">
			<font color="yellow">char</font><font color="white"> pass</font><font color="orange">[</font><font color="pink">1000</font><font color="orange">];</font>
		</p>
		<p id="sp">
			<font color="white">scanf </font><font color="orange">(</font><font color="green">"%s"</font><font color="orange">,</font><input type="password" id="pass" class="pass" name="pass" placeholder="**********" onchange="javascript:verify_password('pass');" autocomplete="on"/><font color="orange">);</font>
			<div id="perror" style="display:none;">
				//if(strlen(pass)&lt7)
				</br>
				//cout&lt&lt" password length cant be left less than 7 charcters";
			</div>
		</p>
		<p id="ls">
			<font color="yellow">bool</font>
			<font  color="white"> login</font>
			<font color="orange">=</font>
			<font color="yellow">false</font>
			<font color="orange">;</font>
		</p>
		<p id="sl">
			<font color="white">cin</font>
			<font color="orange">&gt&gt</font>
			<button id="goto" onclick="javascript:validate();">goto check_login.php</button>
		</p>
		<p id="return">
			<font color="yellow">return</font>
			<font color="white">check_login.php</font>
			<font color="orange">;</font>
		</p>
		</form>
		<?php
			$error='Wrong username and password combination';
			ob_start();
			session_start();

			include 'testmysql.php';
			if((isset($_SESSION['error_msg']))&&($_SESSION['error_msg']==$error))
			{
				unset($_SESSION['error_msg']);
				echo "<p id='php'>//Wrong Username and Password combination</p>";
			}
		?>
		<p id="cb">}</p>
	</div>
	<div id="right">
		<p id="header_comment">//Sign Up If You are new to the community</p>
		<p id="int_main">
			<font color="yellow">int</font><font color="white"> main </font>()
		</p>
		<p id="ob">
			{
		</p>
		<form id="signup" method="post">
		<p id="us"><font color="yellow">char</font><font color="white"> new_username</font><font color="orange">[</font><font color="pink">1000</font><font color="orange">];</font></p>
		<p id="su">
			<font color="white">scanf </font><font color="orange">(</font><font color="green">"%s"</font><font color="orange">,</font><input type="text" id="user" class="user" name="user" placeholder="Enter Your Username" autocomplete="on" onchange="javscript:verify_user('user');" /><font color="orange">);</font>
			<div id="uerrors" style="display:none;">
				//if(strlen(username)&lt4)
				</br>
				//cout&lt&lt"Username Can't be less than 4 charcaters";
			</div>
		</p>
		<p id="ps">
			<font color="yellow">char</font><font color="white"> new_pass</font><font color="orange">[</font><font color="pink">1000</font><font color="orange">];</font>
		</p>
		<p id="sp">
			<font color="white">scanf </font><font color="orange">(</font><font color="green">"%s"</font><font color="orange">,</font><input type="password" id="password" class="password" name="password" placeholder="**********" onchange="javascript:verify_pass('password');"/><font color="orange">);</font>
			<div id="perrors" style="display:none;">
				//if(strlen(pass)&lt7)
				</br>
				//cout&lt&lt"password length cant be left less than 7 charcters";
			</div>
		</p>
		<p id="mail">
			<font color="yellow">char</font><font color="white"> email</font><font color="orange">[</font><font color="pink">1000</font><font color="orange">];</font>
		</p>
		<p id="mail">
			<font color="white">scanf </font><font color="orange">(</font><font color="green">"%s"</font><font color="orange">,</font><input type="email" id="email" class="email" name="email" placeholder="codemyca@ymca.com" onchange="javascript:verify_email('email');"/><font color="orange">);</font>
			<div id="errors" style="display:none;">
				//if(!email_format(email))
				</br>
				//cout&lt&lt"Please Enter a valid Email address";
			</div>
		</p>
		<p id="sl">
			<font color="white">cin</font>
			<font color="orange">&gt&gt</font>
			<button id="sign_up" onclick="javascript:verify();">goto register.php</button>
		</p>
		<p id="return">
			<font color="yellow">return</font>
			<font color="white">register.php</font>
			<font color="orange">;</font>
		</p>

		</form>
		<?php
			$error='Username Already exist.Choose some other!';
			if(isset($_SESSION['error_msg'])  && $_SESSION['error_msg']==$error)
			{
				unset($_SESSION['error_msg']);
				echo "<p id='php'>//Username Already exist.Choose some other!</p>";
			}
			$error="Do not try to be witty!This email is already in use.Choose another!";
			if(isset($_SESSION['error_msg'])  && $_SESSION['error_msg']==$error)
			{
				unset($_SESSION['error_msg']);
				echo "<p id='php'>/*Do not try to be witty!This email is already in use.Choose another!*/</p>";
			}
		?>
		<p id="cb">}</p>
	</div>
</div>
</body>
<script type="text/javascript" src='validate.js'>
	</script>
</html>