<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<style type="text/css">
	#drop-down
	{
		border-radius: 4px;
		box-shadow: 10px 10px 5px #888888;
	}
	</style>
</head>
<body>

</body>
</html>
<?php
	ob_start();
	session_start();
	include 'testmysql.php';
	$result=mysqli_query($con,"SELECT username FROM usermyca");
	//$row=mysqli_fetch_array($result);
	$q=$_REQUEST['q'];
	//echo $q;
	$hint="";
	if ($q !== "")
  	{ 
  		$flag=0;
  		echo "<div id='drop-down' style='height:100%;'>";
  		$q=strtolower($q); 
  		$len=strlen($q);
    	while($row=mysqli_fetch_array($result))
    	{
    		$name=$row['username'];
    		//echo $name; 
    		//echo stristr($name,$q);
    		if (stristr($name,$q))
      		{ 
      			$flag=1;
      			echo "<div id='result'>";
      			echo "<a href='/codemyca/profile.php?id=".$name."'>";
      			echo $name;
      			echo "</a>";
       			/*if ($hint==="")
        		{ 
        			//echo "here";
        			$hint=$name; 
        		}
        		else
        		{ 
        			//echo "con";
        			$hint .= ", $name"; 
        		}*/
        		echo "</div>";
      		}
      		
    	}
    	if($flag==0)
    	{
    		
      			echo "<div id='result'>No Result Found</div>";
    	}
    	echo "</div>";
  }

// Output "no suggestion" if no hint were found
// or output the correct values 
//echo $hint==="" ? "no suggestion" : $hint;
?>