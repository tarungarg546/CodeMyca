<?php
ob_start();
session_start();
include 'testmysql.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editorial</title>
	<style type="text/css">
	.main
	{
		height: 100%;
		margin-left: 10%;
		margin-right: 30%;
		margin-top: 1%;
	}
	.main h1
	{
		float: left;
		font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
		color:rgba(0,0,0,0.6);
		font-size: 20px;
		width: 40%;
	}
	.nav_1
	{
		margin-top: 5%;
		font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
		color:rgba(0,0,0,0.4);
	}
	.dark
	{
		float: left;
		font-size: 23px;
		font-style: italic;
		font-weight: bolder;
		color: rgb(70, 83, 94);
	}
	.no-underline
	{
		text-decoration: none !important;
	}
	.weight-500
	{
		font-weight:500;
	}
	.regular
	{
		font-size: 18px;
	}
	.hr
	{

     -moz-use-text-color -moz-use-text-color;   
    -moz-border-top-colors: none;
    -moz-border-right-colors: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    
    border-image: none;
    padding: 0px;
    width: 100%;
    display: block;

	height: 0px;
	border: 0;
	border-top: 2px solid #e5e7e8;
	
	}

	#A_13
	{
		color:#000;
	}
	.margin-after
	{
		margin: 30px 0 0 0;
	}
	.text
	{
		font-style: callibri;
		color:rgba(0,0,0,0.8);
	}
	#back2top
	{
		display: none;
		position: fixed;
		bottom: 20px;
		right: 20px;
		width: 30px;
		height: 30px;
		cursor: pointer;
		z-index: 10;
		background: url('arrow.png') no-repeat 0 0 #333; /* fallback for older browsers */
		background: url('arrow.png') no-repeat 0 0 red;
		border-radius: 5px;
	}
	#A_9:hover{color: #d3e026}#A_13:hover{color: #d3e026}#A_15:hover{color: #d3e026}#A_17:hover
	{
    	color: #d3e026;
	}
	#A_11:hover{color: #d3e026;}  
	#A_17 
	{
		    border-bottom-color: rgb(0, 0, 0);
		    border-left-color: rgb(0, 0, 0);
		    border-right-color: rgb(0, 0, 0);
		    border-top-color: rgb(0, 0, 0);
		    color: rgb(0, 0, 0);
		    display:inline;
		    font-family: ProximaNova, Arial, Helvetica, sans-serif;
		    font-size: 13px;
		    font-weight: bold;
		    height: 65px;
		    line-height: 65px;
		    list-style-type: none;
		    outline-color: rgb(0, 0, 0);
		    /*padding-left: 20px;*/
		    padding-right: 20px;
		    text-align: left;
		    text-decoration: none solid rgb(0, 0, 0);
		    text-transform: uppercase;
		    width: 100%;
		/**/
		    border: 0px none rgb(0, 0, 0);
		    border-top: 0px none rgb(0, 0, 0);
		    border-right: 0px none rgb(0, 0, 0);
		    border-bottom: 0px none rgb(0, 0, 0);
		    border-left: 0px none rgb(0, 0, 0);
		    border-color: rgb(0, 0, 0);
		    font: normal normal bold 13px/65px ProximaNova, Arial, Helvetica, sans-serif;
		    list-style: none outside none;
		    outline: rgb(0, 0, 0) none 0px;
		    padding: 0px 20px;
	}/*#A_17*/
	#A_13 {
    border-bottom-color: rgb(0, 0, 0);
    border-left-color: rgb(0, 0, 0);
    border-right-color: rgb(0, 0, 0);
    border-top-color: rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    display: block;
    font-family: ProximaNova, Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: bold;
    height: 65px;
    line-height: 65px;
    list-style-type: none;
    outline-color: rgb(0, 0, 0);
    text-align: center;
    text-decoration: none solid rgb(0, 0, 0);
    text-transform: uppercase;
    width: 100%;
    perspective-origin: 46.5px 32.5px;
    transform-origin: 46.5px 32.5px;
    border: 0px none rgb(0, 0, 0);
    border-top: 0px none rgb(0, 0, 0);
    border-right: 0px none rgb(0, 0, 0);
    border-bottom: 0px none rgb(0, 0, 0);
    border-left: 0px none rgb(0, 0, 0);
    border-color: rgb(0, 0, 0);
    font: normal normal bold 13px/65px ProximaNova, Arial, Helvetica, sans-serif;
    list-style: none outside none;
    outline: rgb(0, 0, 0) none 0px;
    padding: 0px 0px;
	}/*#A_13*/
	#A_15 
	{
    border-bottom-color: rgb(0, 0, 0);
    border-left-color: rgb(0, 0, 0);
    border-right-color: rgb(0, 0, 0);
    border-top-color: rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    display:inline;
    font-family: ProximaNova, Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: bold;
    height: 65px;
    line-height: 65px;
    list-style-type: none;
    outline-color: rgb(0, 0, 0);
    padding-left: 20px;
    padding-right: 20px;
    text-align: center;
    text-decoration: none solid rgb(0, 0, 0);
    text-transform: uppercase;
    width: 120px;
    perspective-origin: 74.5px 32.5px;
    transform-origin: 74.5px 32.5px;
    border: 0px none rgb(0, 0, 0);
    border-top: 0px none rgb(0, 0, 0);
    border-right: 0px none rgb(0, 0, 0);
    border-bottom: 0px none rgb(0, 0, 0);
    border-left: 0px none rgb(0, 0, 0);
    border-color: rgb(0, 0, 0);
    font: normal normal bold 13px/65px ProximaNova, Arial, Helvetica, sans-serif;
    list-style: none outside none;
    outline: rgb(0, 0, 0) none 0px;
    padding: 0px 29%;
	}/*#A_15*/
    #A_9 {
    border-bottom-color: rgb(0, 0, 0);
    border-left-color: rgb(0, 0, 0);
    border-right-color: rgb(0, 0, 0);
    border-top-color: rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    display: block;
    font-family: ProximaNova, Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: bold;
    height: 65px;
    line-height: 65px;
    list-style-type: none;
    outline-color: rgb(0, 0, 0);
    padding-left: 20px;
    padding-right: 20px;
    text-align: left;
    text-decoration: none solid rgb(0, 0, 0);
    text-transform: uppercase;
    width: 61px;
    perspective-origin: 50.5px 32.5px;
    transform-origin: 50.5px 32.5px;
    border: 0px none rgb(0, 0, 0);
    border-top: 0px none rgb(0, 0, 0);
    border-right: 0px none rgb(0, 0, 0);
    border-bottom: 0px none rgb(0, 0, 0);
    border-left: 0px none rgb(0, 0, 0);
    border-color: rgb(0, 0, 0);
    font: normal normal bold 13px/65px ProximaNova, Arial, Helvetica, sans-serif;
    list-style: none outside none;
    outline: rgb(0, 0, 0) none 0px;
    padding: 0px 20px;
	}/*#A_9*/
	#A_11 {
    border-bottom-color: rgb(0, 0, 0);
    border-left-color: rgb(0, 0, 0);
    border-right-color: rgb(0, 0, 0);
    border-top-color: rgb(0, 0, 0);
    color: rgb(0, 0, 0);
    display: block;
    font-family: ProximaNova, Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: bold;
    height: 65px;
    line-height: 65px;
    list-style-type: none;
    outline-color: rgb(0, 0, 0);
    padding-left: 20px;
    padding-right: 20px;
    text-align: left;
    text-decoration: none solid rgb(0, 0, 0);
    text-transform: uppercase;
    width: 59px;
    perspective-origin: 49.5px 32.5px;
    transform-origin: 49.5px 32.5px;
    border: 0px none rgb(0, 0, 0);
    border-top: 0px none rgb(0, 0, 0);
    border-right: 0px none rgb(0, 0, 0);
    border-bottom: 0px none rgb(0, 0, 0);
    border-left: 0px none rgb(0, 0, 0);
    border-color: rgb(0, 0, 0);
    font: normal normal bold 13px/65px ProximaNova, Arial, Helvetica, sans-serif;
    list-style: none outside none;
    outline: rgb(0, 0, 0) none 0px;
    padding: 0px 20px;
	}/*#A_11*/

	a
	{
		text-decoration: none;
	}
	#DIV_1 {
	    background-color: rgb(255, 255, 255);
	    box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 2px 0px;
	    font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    height: 65px;
	    line-height: 28px;
	    position: relative;
	    width: 100%;
	    z-index: 998;
	    perspective-origin: 711.5px 32.5px;
	    transform-origin: 711.5px 32.5px;
	    background: rgb(255, 255, 255) none repeat scroll 0% 0% / auto padding-box border-box;
	    font: normal normal normal 16px/28px 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	}/*#DIV_1*/

	#DIV_2 {
	    font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    line-height: 28px;
	    margin-left: 135.5px;
	    margin-right: 135.5px;
	    position: relative;
	    width: 1152px;
	    perspective-origin: 576px 0px;
	    transform-origin: 576px 0px;
	    font: normal normal normal 16px/28px 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    margin: 0px 135.5px;
	}/*#DIV_2*/

	#NAV_6 {
	    font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    height: 65px;
	    left: 40%;
	    line-height: 28px;
	    position: absolute;
	    top: 0px;
	    width: 64%;
	    perspective-origin: 260.5px 32.5px;
	    transform-origin: 260.5px 32.5px;
	    font: normal normal normal 16px/28px 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	}/*#NAV_6*/

	#UL_7 {
	    font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    height: 65px;
	    line-height: 28px;
	    list-style-type: none;
	    margin-bottom: 0px;
	    margin-top: 0px;
	    padding-left: 0px;
	    width: 100%;
	    perspective-origin: 260.5px 32.5px;
	    transform-origin: 260.5px 32.5px;
	    font: normal normal normal 16px/28px 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    list-style: none outside none;
	    margin: 0px;
	    padding: 0px;
	}/*#UL_7*/

	#LI_8 {
	    border-right-color: rgba(0, 0, 0, 0.0980392);
	    border-right-style: solid;
	    border-right-width: 1px;
	    display: inline-block;
	    font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    height: 65px;
	    line-height: 65px;
	    list-style-type: none;
	    width: 16%;
	    perspective-origin: 51px 32.5px;
	    transform-origin: 51px 32.5px;
	    border-right: 1px solid rgba(0, 0, 0, 0.0980392);
	    border-width: 0px 1px 0px 0px;
	    border-color: rgb(0, 0, 0) rgba(0, 0, 0, 0.0980392) rgb(0, 0, 0) rgb(0, 0, 0);
	    border-style: none solid none none;
	    font: normal normal normal 16px/65px 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    list-style: none outside none;
	}/*#LI_8*/
	#LI_10 {
	    border-right-color: rgba(0, 0, 0, 0.0980392);
	    border-right-style: solid;
	    border-right-width: 1px;
	    display: inline-block;
	    font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    height: 65px;
	    line-height: 65px;
	    list-style-type: none;
	    width: 16%;
	    perspective-origin: 50px 32.5px;
	    transform-origin: 50px 32.5px;
	    border: ;
	    border-right: 1px solid rgba(0, 0, 0, 0.0980392);
	    border-width: 0px 1px 0px 0px;
	    border-color: rgb(0, 0, 0) rgba(0, 0, 0, 0.0980392) rgb(0, 0, 0) rgb(0, 0, 0);
	    border-style: none solid none none;
	    font: normal normal normal 16px/65px 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    list-style: none outside none;
	}/*#LI_10*/
	#LI_12 {
	    border-right-color: rgba(0, 0, 0, 0.0980392);
	    border-right-style: solid;
	    border-right-width: 1px;
	    display: inline-block;
	    font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    height: 65px;
	    line-height: 65px;
	    list-style-type: none;
	    width: 16%;
	    perspective-origin: 47px 32.5px;
	    transform-origin: 47px 32.5px;
	    border: ;
	    border-right: 1px solid rgba(0, 0, 0, 0.0980392);
	    border-width: 0px 1px 0px 0px;
	    border-color: rgb(0, 0, 0) rgba(0, 0, 0, 0.0980392) rgb(0, 0, 0) rgb(0, 0, 0);
	    border-style: none solid none none;
	    font: normal normal normal 16px/65px 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    list-style: none outside none;
	}/*#LI_12*/

	#LI_14 {
	    border-right-color: rgba(0, 0, 0, 0.0980392);
	    border-right-style: solid;
	    border-right-width: 1px;
	    display: inline-block;
	    font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    height: 65px;
	    line-height: 65px;
	    list-style-type: none;
	    width:16%;
	    perspective-origin: 75px 32.5px;
	    transform-origin: 75px 32.5px;
	    border-right: 1px solid rgba(0, 0, 0, 0.0980392);
	    border-width: 0px 1px 0px 0px;
	    border-color: rgb(0, 0, 0) rgba(0, 0, 0, 0.0980392) rgb(0, 0, 0) rgb(0, 0, 0);
	    border-style: none solid none none;
	    font: normal normal normal 16px/65px 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    list-style: none outside none;
	}/*#LI_14*/
	#LI_17 
	{
	    display: inline;
	    font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    height: 65px;
	    line-height: 65px;
	    list-style-type: none;
	    width: 16%;
	    perspective-origin: 37.5px 32.5px;
	    transform-origin: 37.5px 32.5px;
	    font: normal normal normal 16px/65px 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    list-style: none outside none;
	}
	#LI_16 {
		border-right: 1px solid rgba(0, 0, 0, 0.0980392);
	    border-width: 0px 1px 0px 0px;
	    border-color: rgb(0, 0, 0) rgba(0, 0, 0, 0.0980392) rgb(0, 0, 0) rgb(0, 0, 0);
	    border-style: none solid none none;
	    font: normal normal normal 16px/65px 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
		border-right-color: rgba(0, 0, 0, 0.0980392);
	    border-right-style: solid;
	    border-right-width: 1px;
	    display: inline-block;
	    font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    height: 65px;
	    line-height: 65px;
	    list-style-type: none;
	    width: 16%;
	    perspective-origin: 37.5px 32.5px;
	    transform-origin: 37.5px 32.5px;
	    font: normal normal normal 16px/65px 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	    list-style: none outside none;
	}/*#LI_16*/
    #raja
    {
        
    font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
    width: 100%;
    -webkit-font-smoothing: subpixel-antialiased;
    perspective-origin: 711.5px 1982px;
    -webkit-perspective-origin: 711.5px 1982px;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    transform-origin: 711.5px 1982px;
    -webkit-transform-origin: 711.5px 1982px;
    -webkit-user-drag: none;
    -webkit-user-select: none;
    font: normal normal normal 16px/28px 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	}
	#i
	{
		font-size: 13px;
	}
	#i
	{
		float: right;
	}
	/*#j
	{
		padding-left: 1%;
		width: 1px;
	}*/
	#k
	{
		text-align: center;
		padding-left: 10%;
		font-size: 18px;
		font-style: italic;
	}
	#dropdown
	{
		color: black;
		background-color:white;
		position: absolute;
		font: normal normal normal 16px/28px 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
		margin-left: 44%;
		border: 1px solid rgba(0, 0, 0, 0.0980392);
		list-style: none;
		width: 113px;
		text-align: center;
		font: normal normal normal 16px/28px 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
	}
	.d1,.d2,.d3
	{
		height:35px; 
		width:100%;
	}
	.d1
	{
		padding-top: 5%;
	}
	#search
	{
		float: right;
		width: 35%;
		margin-top: 2.1%;
	}
	#rest
	{
		margin-left: 9.97%;
		width: 45.9%;
		margin-top: 1.86%;
		float: right;
		display: inline-block;
	}
	</style>
</head>
<body>
	<header id="raja" >
				<div  id="DIV_1">
            		<div  id="DIV_2">   
                		<nav  id="NAV_6">
                    		<ul id="UL_7">
                    		    <script type="text/javascript" src="drop-down.js"></script>
                        		<li class="" id="LI_8"><span onMouseOver="Show('dropdown');" onMouseOut="Hide('dropdown');" id="A_9">Problems</span></li>
                    			<li id="LI_10"><a href="schedule.php" title="Schedule" i="A_11">Schedule</a></li><!--
                    -->			<li id="LI_12"><a href="Editorials.php" title="Editorials" id="A_13">Editorials</a></li><!--
                    -->			<li id="LI_14"><a href="rank.php" title="Ahaa!Where u stand!!" id="A_15">Ranks</a></li><!--
                    -->			<?php
                    				if(isset($_SESSION['user_id']))
                    				{
                    					$id=$_SESSION['user_id'];
                    					$result=mysqli_query($con,"SELECT * FROM usermyca WHERE id='$id'");
                    					$row=mysqli_fetch_array($result);
                    					$username=$row['username'];
                    					echo "<li id='LI_16'><a href='profile.php?id=".$username."' title='View My Profile' id='A_17'>Account</a></li>";
                    				}
                    				else
                    				{
                    					//dispaly login here
                    					echo "<li id='LI_16'><a title='Log Me In!' id='A_17' href='login.php'>LogIn</a></li>";
                    				}
                    			?>
                    			<li id="LI_17"><a href="logout.php" title="Log Me Outta here" id="A_17">Log-Out</a></li>
                    		</ul>
                		</nav>                        
            		</div>
            	</div>
            </header>
            <div id="dropdown" style="visibility:hidden;" onmouseover="Show('dropdown');" onmouseout="Hide('dropdown');">
                        			<li class="d1"><a href="level1.php">Level 1</a></li>
                        			<li class="d2" ><a href="level2.php">Level 2</a></li>
                        			<li class="d3" ><a href="level3.php">Level 3</a></li>
           </div>
           <div id="back2top"></div>
          <div class="main">
 			<div id="discussion_head"><h1>Place to Read</h1>

  				<input type="text" id="search" name="search" autocomplete="on" onkeyup="search('search');"/>
 				<div id="rest"></div>
 			</div>
 			<Br>
 			<nav class="nav_1">
 			<?php
 				$a=mysqli_query($con,"SELECT * FROM editorialmyca ORDER BY Posted_On DESC");
 				//row=$a->num_rows;
 				//echo "$row";
 				while ($b=mysqli_fetch_array($a)) {
 					$name=$b['name'];
 					$date=$b['Posted_On'];
 					$by=$b['Author'];
 					echo '<a class="dark" title='.$name.' href="Read_it.php?name='.$name.'">';
 					echo $name;
 					echo '</a>';
 					echo "<span id='i'>Posted On:";
 					echo $date;
 					echo "</span>";
 					echo "<span id='k'>By:-";
 					echo "<font color='blue'><a href='profile.php?id=".$by."'>";
 					echo $by;
 					echo "</a></font>";
 					echo "</span>";
 					echo "<hr class='hr'>";
 					$descitpion=$b['short note'];
 					echo "<p class='text'>$descitpion</p>";
 					echo "<div class='margin-after'></div>";

 					# code...
 				}
 			?>
 				<!---<a href="test.htm" title="test" class="dark regular no-underline weight-500">Test1</a>
 				<hr class="hr">
 				<p class="text">The quick brown<br/>fox jumped over <br/> lazy dog</p>
 				<div class="margin-after">
 				<a href="test2.htm" title="test2" class="dark regular no-underline weight-500">Test2</a>
 				<hr class="hr">
 				<p class="text">some faaltu descitpion over here or anything about the tutorial you want to add! :P</p>
 				</div>-->
 				
 			</nav>
 			<?php
 				include 'share.php';
 			?>
 	</div>
</body>
<script type="text/javascript">

	function search (Id) {
		//alert();
		var a=document.getElementById(Id);
		if(Id.length<=0)
		{
			document.getElementById('rest').innerHTML="";
			return ;
		}
		if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById("rest").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("POST","ajax_search.php", true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("q="+a.value);
        }
	</script>
	
	<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="back2top.js"></script>
</html>