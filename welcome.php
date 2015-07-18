<?php
	ob_start();
	session_start();
	include "testmysql.php";
	if (!(isset($_SESSION['user_id']))||trim($_SESSION['user_id'])=='')
	 {
		session_regenerate_id();
		$redirect_url=$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
		$_SESSION['redirect_url']=$redirect_url;
		session_write_close();
		header('Location:/codemyca/login.php');
		exit();
		# code...
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Codemyca</title>
		<style type="text/css">
		body
		{
			background:url('railroad.jpg');
		}
		#main
		{
			height: 100%;
		}
		#main h2
		{
			margin-top: 70px;
			text-align: center;
			font-family: 'georgia';
			font-size: 15px;
		}
		#motto
		{
			font-style: italic;
			color: indigo;
			quotes: "«" "»";
		}
		#left-floater
		{
			padding-top: 5px;
			height: 100%;
			width:250px;
			float: left;
			margin: auto;

		}
		#levels
		{
			border-color: black;
			border-collapse: collapse;
			height: 32%;
			cursor: pointer;
		}
		#spacer
		{
			clear: both;
			padding: 0%;
		}
		#link1,#link2,#link3
		{
			width: 200px;
			border-radius: 2em 1em 4em / 0.5em 3em;
			text-align: center;
			border:1px  solid black;
			padding-left: 20%;
			padding-right: 20%;
			background-color: #CC853E;

		}
		#link5
		{
			background-color: #CC853E;
			width: 200px;
			border-radius: 2em 1em 4em / 0.5em 3em;
			text-align: center;
			border:1px  solid black;
			padding-left: 11%;
			padding-right: 13%;

		}
		#link6
		{
			background-color: #CC853E;
			width: 200px;
			border-radius: 2em 1em 4em / 0.5em 3em;
			text-align: center;
			border:1px  solid black;
			padding-left: 14%;
			padding-right: 16%;

		}
		#l1,#l2,#l3,#l4,#l5,#l6,#l
		{
			text-align: center;
			font-style: bold;
			font-size: 25px;
		}
		#link4
		{
			background-color: #CC853E;
			border-radius: 2em 1em 4em / 0.5em 3em;
			width: 200px;
			padding-left: 23px;
			padding-right: 11%;
			margin-left: auto;
			text-align: center;
			padding-left: 15%;
			padding-right: 16%;
			border:1px  solid black;

		}
		#levels nav
		{
			height: 100%;
		}
		a
		{
			text-align: left;
			color: white;
			text-decoration: none;
			cursor: pointer;
		}
		a:hover
		{
			color: #FFF9CC;
			text-decoration: underline;
		}
		nav ul
		{
			font-size: 20px;
			text-transform: uppercase;
			letter-spacing:0.1em;
			height: 100%;
		}
		nav ul li
		{
			width: 100%;
			display: inline;
			cursor: pointer;
		}
		#right-floater
		{
			color: black;
			padding-left: 1%;
			display: inline-block;
			width: 1040px;
			height: 100%;
			float: left;
			border-radius: 24px;
			border: 1px solid black;
			padding-bottom: 1%;
		}
		#t1,#t2,#t3,#t4,#t5,#t6
		{
			font-family: 'georgia';
			letter-spacing: 3px;
			line-height: 16px;
		}
		#b1,#b2,#b3,#b5,#b6
		{
			width: 165px;
			height: 35px;
			margin-left: 43%;
			border-radius: 4px;
			border: 1px solid green;
			background-color: green;
			color: white;
			cursor: pointer;

		}
		#lock1
		{
			width: 165px;
			height: 35px;
			margin-left: 43%;
			border-radius: 4px;
			border: 1px solid ;
			color: #888;
			background: url('lock.jpg');
			cursor: pointer;

		}
		#left-other
		{
			float: left;
			padding-left: 45px;

		}
		</style>
	</head>
	<body>
		<div id="main">
			<h2 style="color:indigo;">Step By Step move ahead and as we said become</Br>
			<span id="motto">"Learner to a Leader"</span></h2>
			<div id="content">
				<div id="left-floater">
					<div id="levels">
					<nav>
						<ul>
							<div id="link1" style="display:inline;"><li type="none"><a href="#1">Level 1</a></li></div>
							<div id="link2" style="display:inline;"><li type="none"><a href="#2">Level 2</a></li></div>
							<div id="link3" style="display:inline;"><li type="none"><a href="#3">Level 3</a></li></div>
							<div id="link4" style="display:inline;"><li type="none"><a href="#4">Contests</a></li></div>
						</ul>
					</nav>
					</div>
					<div id="spacer"></div>
					<div id="other">
						<nav>	
							<ul>
								<div id="link5" style="display:inline;"><li type="none"><a href="#5">Editorials</a></li></div>
								<div id="link6" style="display:inline;"><li type="none"><a href="#6">Schedule</a></li></div>
							</ul>
						</nav>
					</div>
					<div id="left-other">
						<a href="http://hck.re/oG6vwt"><img src="hackerearth.jpg" alt="Join Hackerearth:http://hck.re/oG6vwt" style="border:0;" width="175" height="100"></a>
					</div>
				</div>
				<div id="right-floater">
					<div id="1" style="display:none;">
					<p id="l1">Welcome to level 1</p>
					<p id="t1">Level 1:</Br>					</br>This is very first and basic level for our viewers.In this levels viewers will gotta learn from printing helllo world! to solving great ad-hoc,array and string manipulation problems.
						In this levels we'd also play with bits and unleash their potential.
						</Br></br>Scoring Criteria:</Br></br>
							In this levels scores will be evaluated as follows..score=3/(no. of AC solutions)
						</Br></br>Unlocking the Next level:
						</Br></br>
						You Have to get AC in minimum 80% of the problems</p>
						<form action="level1.php">
							<button id="b1" class="b1">Proceed</button>
						</form>
				</div>
					<div id="2" style="display:none;">
					<p id="l2">Welcome to level 2</p>
					<p id="t2">Level 2:</Br>					</br>This is very middle level for our viewers.In this levels viewers will gotta learn number theory to interview and some good ad-hoc+string problems.
						In this levels we'd also play with primes and unleash their potential.
						</Br></br>Scoring Criteria:</Br></br>
							In this levels scores will be evaluated as follows..score=5/(no. of AC solutions)
						</Br></br>Unlocking the Next level:
						</Br></br>
						You Have to get AC in minimum 70% of the problems</p>
						<?php
							$level_code=1;
							$id=$_SESSION['user_id'];
							$result=mysqli_query($con,"SELECT * FROM problemyca where level_code='$level_code'");
							$total=$result->num_rows;
							$result=mysqli_query($con,"SELECT DISTINCT problem_code FROM submissionmyca WHERE id='$id' AND status='AC' AND level_code='$level_code'");
							$ans=$result->num_rows;
							//echo "<span id='ac'>$ans/$total</span>";
							$per=$ans*100/$total;
							$ans=0;
						/*while ($data=mysqli_fetch_array($result)) {
							$problem_code=$data['problem_code'];
							$temp=mysqli_query($con,"SELECT * FROM submissionmyca WHERE problem_code='$problem_code' AND status='AC'");
							$row=$temp->num_rows;
							if($row!=0){
								$ans+=3/$row;
							}
							else{
								$ans+=3;
							}

						}
						echo "<span id='score'>Your Score:$ans</span>";*/
							if ($per>=80) {
							echo"<form action='level2.php'>";
							echo"<button id='b3' class='b3'>Proceed</button>";
							echo"</form>";
							}
							else
							{
								echo"<form>";
								echo"<button id='lock1' class='lock1'>Locked</button>";
								echo"</form>";
							}
					?>
					</div>
					<div id="3" style="display:none;">
					<p id="l3">Welcome To Final Lap</p>
					<p id="t3">Level 3:</Br>					</br>This is very last and most tough level for our viewers.In this levels viewers will gotta learn 
					some game theory,hard number theory and dp problems.
						In this levels we'd also play with euler function 
and unleash it's potential.
						</Br></br>Scoring Criteria:</Br></br>
							In this levels scores will be evaluated as follows..score=10/(no. of AC soolution)
						</Br></br>Becoming the panel member:
						</Br></br>
						You Have to get AC in minimum 70% of the problems to be in our panel</p>
							<?php
								$level_code=2;
								$id=$_SESSION['user_id'];
								$result=mysqli_query($con,"SELECT * FROM problemyca where level_code='$level_code'");
								$total=$result->num_rows;
								$result=mysqli_query($con,"SELECT DISTINCT problem_code FROM submissionmyca WHERE id='$id' AND status='AC' AND level_code='$level_code'");
								$ans=$result->num_rows;
								$per=0;
								//echo "<span id='ac'>$ans/$total</span>";
								if($total)
								$per=$ans*100/$total;
								$ans=0;
								/*while ($data=mysqli_fetch_array($result)) {
									$problem_code=$data['problem_code'];
									$temp=mysqli_query($con,"SELECT * FROM submissionmyca WHERE problem_code='$problem_code' AND status='AC'");
									$row=$temp->num_rows;
									if($row!=0){
										$ans+=3/$row;
									}
									else{
										$ans+=3;
									}

								}
								echo "<span id='score'>Your Score:$ans</span>";*/
								if ($per>=70) {
									echo"<form action='level2.php'>";
									echo"<button id='b3' class='b3'>Go to Final Lap</button>";
									echo"</form>";
								}
								else
								{
									echo"<form>";
													echo"<button id='lock1' class='lock1'>Locked</button>";
													echo"</form>";

								}
								
							?>
					</div>
					<div id="4" style="display:none;">
						<p id="l4">Welcome To contests</p>
					</div>
					<div id="text">
						<p id="l">Welcome to Codemyca.com</p>
						<p id="t1">This Website is maintained and designed by premier technical club of <a href="http://www.ymcaust.ac.in/">
						<font color="blue">YMCAUST</font></a> i.e. Manan-A Techno Surge.This website is intended for our helping students to get well in programming step by step.We have categorized problem in 3 levels mainly 1,2,3.those who completes all those levels will get a chance to be in our admin panel.
						</Br></br>
						P.S. It feels awesome to be here..:).</Br></Br>
						We have made a schedule page exclusively for YMCA students which will have schedules that when our next session will be taken with time and place mentioned there.</Br></br>
						Have fun and for any queries feel free to ask at codemyca@gmail.com or you may meet admin in person at YMCA campus</br></br>We have a contest page also for our viewers there they can participate in various contsest held by us.<br><Br>Enjoy guys cheers</p>
					</div>
					<div id="5" style="display:none;">
						<p id="l5">Welcome to Editorial</p>
						<p id="t3">Level 3:</Br>					</br>This is part of website dedicated fpr tutorial,suggestion for newbiews as well as editorials for some standard algorithma nd data structures with stl.
						</Br></br>
						This page will also have editorials for contest and content of seminar that will be delivered to YMCA's student
						</Br></br>Becoming the editorial:
						</Br></br>
						If you want to write editorial for us drop a mail at codemyca@gmail.com.Your application will be viewed and you will be informed what are our requirements</p>
					
					<form action="Editorials.php">
					<button id="b5" class="b5" action="level1.html">Read Them!</button>
					</form>
					</div>
					<div id="6" style="display:none;"><p  id="l6"> Schedule for seminars</p>
					</br><p id="t1">
					Seminars are a way to taeach students of YMCA about various feilds of programmings.Providing them lectures about data structure with stl,array
					,string manipulaion,number theory.We'll try to interact with our students in one to one basis.Lectures will be provide by our family i.e. manan members and some good coders who are not a member of manan<Br><br>Some of them are Vivek Malasi,Abhishek Subal,Ramjeet yadav and some others<Br><Br>
					In the seminars students will be motivated and we'll to  unleash their potential.
					</p>
					
					<form action="schedule.php">
						<button id="b6" class="b6">Check it Out!</button>
					</form>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	//level1 fade toggle
	$('#link1').click(function(){
		$('#2').hide();
		$('#3').hide();
		$('#4').hide();
		$('#text').hide();
		$('#5').hide();
		$('#6').hide();
		$('#1').fadeIn();
	});
	$('#link2').click(function(){
		$('#5').hide();
		$('#6').hide();
		$('#1').hide();
		$('#3').hide();
		$('#4').hide();
		$('#text').hide();
		$('#2').fadeIn();
	});
	$('#link3').click(function(){
		$('#5').hide();
		$('#6').hide();
		$('#2').hide();
		$('#1').hide();
		$('#4').hide();
		$('#text').hide();
		$('#3').fadeIn();
	});
	$('#link4').click(function(){
		$('#5').hide();
		$('#6').hide();
		$('#2').hide();
		$('#3').hide();
		$('#1').hide();
		$('#text').hide();
		$('#4').fadeIn();
	});
	$('#link5').click(function(){
		$('#4').hide();
		$('#6').hide();
		$('#2').hide();
		$('#3').hide();
		$('#1').hide();
		$('#text').hide();
		$('#5').fadeIn();
	});
	$('#link6').click(function(){
		$('#5').hide();
		$('#4').hide();
		$('#2').hide();
		$('#3').hide();
		$('#1').hide();
		$('#text').hide();
		$('#6').fadeIn();
	});
});</script>
</html>