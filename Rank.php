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
<HTML>
<head>
	<title>
		Rank List
	</title>
	<style type="text/css">
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
	}/*#DIV_2*/
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
	#header
	{
		font-size: 50px;
	}
	#main
	{
		height: 100%;
		margin-left: 250px;
		width: 850px;
	}
	a
	{
		text-decoration: none;
		color: rgb(0,9,0);
	}
	table
	{
		border: 1px solid black;
		table-layout: fixed;
		border-collapse: collapse;
		border-color: black;
		width: 100%;
		font-size: 18px;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;

	}
	td,th
	{
		border: 1px solid black;
		overflow: hidden;
		text-align: center;
	}
	td
	{
		height: 40px;
	}
	th
	{
		background-color: #e6e6e6;
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
	</style>
</head>
<BODY>
	<header id="raja" >
				<div  id="DIV_1">
            		<div  id="DIV_2">   
                		<nav  id="NAV_6">
                    		<ul id="UL_7">
                    		                    			<script type="text/javascript" src="/codemyca/drop-down.js"></script>
                        		<li class="" id="LI_8"><span onMouseOver="Show('dropdown');" onMouseOut="Hide('dropdown');" id="A_9">Problems</span></li>
                        		<!--
                    -->			<li id="LI_10"><a href="/codemyca/schedule.php" title="Schedule" id="A_11">Schedule</a></li><!--
                    -->			<li id="LI_12"><a href="/codemyca/Editorials.php" title="Editorials" id="A_13">Editorials</a></li><!--
                    -->			<li id="LI_14"><a href="/codemyca/rank.php" title="Ahaa!Where u stand!!" id="A_15">Ranks</a></li>
                    			<?php
                    				$id=$_SESSION['user_id'];
                    				$result=mysqli_query($con,"SELECT * FROM usermyca WHERE id='$id'");
                    				$row=mysqli_fetch_array($result);
                    				$username=$row['username'];
                    				echo "<li id='LI_16'><a href='/codemyca/profile.php?id=".$username."' title='View My Profile' id='A_17'>Account</a></li>";
                    			?>
                   				
                    			<li id="LI_17"><a href="/codemyca/logout.php" title="Log Me Outta here" id="A_17">Log-Out</a></li>
                    		</ul>
                		</nav>                        
            		</div>
            	</div>
            </header>
            <div id="dropdown" style="visibility:hidden;" onmouseover="Show('dropdown');" onmouseout="Hide('dropdown');">
                        			<li class="d1"><a href="/codemyca/level1.php">Level 1</a></li>
                        			<li class="d2" ><a href="/codemyca/level2.php">Level 2</a><span id="d21"><img src="/codemyca/lock.png" width="5" height="5"></span></li>
                        			<li class="d3" ><a href="/codemyca/level3.php">Level 3</a><span id="d31"><img src="/codemyca/lock.png" width="5" height="5"></span></li>
           </div>
           <script type="text/javascript" src="jquery-1.11.1.min.js"></script>
           <script type="text/javascript" src="back2top.js"></script>
           <div id="main">
           		<div id="header"><font color="red">Rank List</font></div>
           		<table>
           			<col style="width:10%"></col>
           			<col style="width:30%"></col>
           			<col style="width:20%"></col>
           			<col style="width:20%"></col>
           			<col style="width:20%"></col>
           			<tr>
           				<th>Rank</th>
           				<th>User</th>
           				<th>Level</th>
           				<th>Accuracy</th>
           				<th>Problems Solved</th>
           			</tr>
           			<?php
           				$flag=0;
	           			$id=$_SESSION['user_id'];
	           			$name=$_SESSION['username'];
	           			$i=mysqli_query($con,"SELECT * FROM usermyca ORDER BY points DESC");
	           			$my=mysqli_query($con,"SELECT *  FROM usermyca WHERE points>(SELECT points FROM usermyca WHERE id='$id')");
	           			$my2=$my->num_rows;
	           			$myrank=$my2+1;
	           			$rank=0;
	           				if (!$flag) 
	           				{

	           					$real=mysqli_query($con,"SELECT * FROM usermyca WHERE username='$name'");
	           					$ans=mysqli_fetch_array($real);
	           					echo "<tr style='background:yellow;'>";
	           					echo "<td>$myrank</td>";
	           					echo "<td><a href='/codemyca/profile.php?id=".$name."'>";
	           					echo $name;
	           					echo "</a></td>";
	           					echo "<td>";
	           					echo $ans['level'];
	           					echo "</td><td>";
	           					if($ans['problems_attempted'])
	           						echo $ans['problems_solved']/$ans['problems_attempted'];
	           					else
	           						echo "0";
	           					echo "%</td><td>";
	           					echo $ans['problems_solved'];
	           					echo "</td></tr>";
	           					$flag=1;	
	           				}
	           					while($row=mysqli_fetch_array($i))
		           				{	$nm=$row['username'];
		           					$rank++;
		           					echo "<tr>";
		           					echo "<td>$rank</td>";
		           					echo "<td><a href='/codemyca/profile.php?id=".$nm."'>";
		           					echo $nm;
		           					echo "</a></td>";
		           					echo "<td>";
		           					echo $row['level'];
		           					echo "</td><td>";
		           					if($row['problems_attempted'])
		           					echo $row['problems_solved']/$row['problems_attempted'];
		           					else
		           						echo "0";
		           					echo "%</td><td>";
		           					echo $row['problems_solved'];
		           					echo "</td></tr>";
		           				}
	      
	           				# code...
	           			//echo $myrank;
           			?>

           		</table>	
           </div>

</BODY>
</HTML>