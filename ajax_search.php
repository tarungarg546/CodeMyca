
<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<style type="text/css">
	#rest
	{
		background-color: white;
		position: absolute;
		border-radius: 4px;
		box-shadow: 10px 10px 5px #888888;
	}
	#result
	{
		font-size: 31px;
		padding-left: 4%;
		border:1px solid ;
		height: 100%;
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

	$q=$_POST['q'];
	if (is_null($q)) {
		header('Location:welcome.php');
		exit();
		# code...
	}
	//$row=mysqli_fetch_array($result);
	//echo $q;
	$hint="";
	if ($q !== "")
  	{ 
  		$result=mysqli_query($con,"SELECT name FROM editorialmyca WHERE name like '%$q%'");
  		$rows=$result->num_rows;
  		$flag=0;
  		echo "<div id='rest'>";
  		$q=strtolower($q); 
  		$len=strlen($q);
  		if($rows>=1)
  		{
  			$flag=1;
    		while($row=mysqli_fetch_array($result))
    		{
    			$name=$row['name'];
    			//echo $name; 
    			//echo stristr($name,$q);
      			echo "<div id='result'>";
      			echo "<a href='/codemyca/Read_it.php?name=".$name."'>";
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
    	else
    	{
    		
      			echo "<div id='result'>No Result Found</div>";
    	}
    	echo "</div>";
  }

// Output "no suggestion" if no hint were found
// or output the correct values 
//echo $hint==="" ? "no suggestion" : $hint;
?>