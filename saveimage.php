<?php
	ob_start();
	session_start();
	include 'testmysql.php';
	function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	 
	 
	 
	if (!empty($_FILES["uploadedimage"]["name"])) {
			$username='tarun_19';
			$i=mysqli_query($con,"SELECT * FROM usermyca WHERE username='$username'");
			$j=mysqli_fetch_array($i);
			$user_id=$j['id'];
			$file_name=$_FILES["uploadedimage"]["name"];
			$temp_name=$_FILES["uploadedimage"]["tmp_name"];
			$imgtype=$_FILES["uploadedimage"]["type"];
			$ext= GetImageExtension($imgtype);
			$imagename=$user_id.$ext;
			$target_path = "C:/xampp/htdocs/codemyca/image/".$imagename;
			if(move_uploaded_file($temp_name, $target_path)) {
				$target_path="/codemyca/image/".$imagename;
 			mysqli_query($con,"UPDATE usermyca SET pic='$target_path' WHERE username='$username'");

}else{

   exit("Error While uploading image on the server");
} 

}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>test pic</title>
</head>
<body>
<div id="main">
	<?php
		$username='tarun_19';
		$i=mysqli_query($con,"SELECT * FROM usermyca WHERE username='$username'");
		$j=mysqli_fetch_array($i);
		$img=$j['pic'];
		if (!$img) {
			echo "Null";
			# code...
		}
		echo "<img src='$img' height='1000' width='1000'></img>";
	?>
</div>
</body>
</html>
