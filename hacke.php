<?php
	ob_start();
	session_start();
	include 'testmysql.php';
	if (!isset($_SESSION['user_id'])||trim($_SESSION['user_id'])=="") {
		session_regenerate_id();
		header('Location":/codemyca/login.php');
		session_write_close();
		exit();
		# code...
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			
		</title>
	</head>
	<body>
		<?php
			$compile_url="http://api.hackerearth.com/code/compile/";
			$run_url="http://api.hackerearth.com/code/run/";
			//initialise your code
			$id="";
			$memory_status="";
			$compile_status="";
			$run_status="";
			$message="";
			$run_details="";
			$op="";
			$op_html="";
			$client_secret="465ec7d0fef7d08c2e3744bc95e560fbfd1fe2d7";

			//compile first..
			$ch=curl_init();
			// set URL and other appropriate options
			$options=array(
				CURLOPT_URL=>$run_url,
				CURLOPT_RETURNTRANSFER =>false,
				CURLOPT_POST=>4,
				CURLOPT_MAXREDIRS=>10,
				CURLOPT_POSTFIELDS=> $parameter,
				CURLOPT_SSL_VERIFYPEER=>false,
				CURLOPT_SSL_VERIFYHOST=>true,
				);
			curl_setopt_array($ch,$options);
			$response = curl_exec($ch);
			//since he returns string in json format...read more at developer.hackerearth.com/...we have to decode it...using json_decode
			$result=json_decode($response,true);//now json string has been conevrted in assoc. array
			$message=$result['message'];
			if ($message=='OK') 
			{
				$code_id=$result['code_id'];
				$compile_status=$result['compile_status'];
				if ($compile_status=="OK") 
				{
					$row=$result['run_status'];
					$status=$row['status'];
					$time_used=$row['time_used'];
					$memory_used=$row['memory_used'];
					$op=$row['output'];
					$op_html=$row['output_html'];
					$signal=$row['signal'];
					$status_detail=$row['status_detail'];
					$time_limit=$row['time_limit'];
					$memory_limit=$row['time_limit'];
					if ($status=='AC'&&$time_used<=$time_limit&&$memory_used<=$memory_limit) {
						//code for AC
					}
					else if ($status!='AC') {
						if ($status=='TLE') {
							//code for tle
							# code...
						}
						else if($status=='')
						# code...
					}
				}
			}


		?>
	</body>
</html>