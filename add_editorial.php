<?php
ob_start();
session_start();
include 'testmysql.php';
if (!isset($_SESSION['username'])||trim($_SESSION['username'])=="") {
	session_regenerate_id();
	$redirect_url=$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
	$_SESSION['redirect_url']=$redirect_url;
	session_write_close();
	header('Location:login.php');
	exit();
	# code...
}
$username=$_SESSION['username'];
$temp=mysqli_query($con,"SELECT * FROM usermyca WHERE username='$username'");
$res=mysqli_fetch_array($temp);
$ad=$res['admin'];
$ed=$res['editorial'];
if ($ad!=1||$ed!=1) {
	header('Location:unauthorised_access.php');
	exit();
	# code...
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Contribute!	
		</title>
		<style type="text/css">
		#e
		{	
			color: red;
		}
		</style>
	</head>
	<body>
			<form action="add1.php" method="post">
				Name:<input type="text" name='name' required/>
				<?php
					if(isset($_SESSION['er'])&&$_SESSION['er']=='Editorial Name already exist!')
					{
						unset($_SESSION['er']);
						echo "<span id='e'>Editorial Name Already exist</span>";
					}
				?>
				<div id="spacer"></div>
				<br>
				Full Editorial:
				<textarea id="statement" name="content">
				</textarea>
				<br><br>
				Write A short Note:
				<textarea id="statement" name="shortnote">
				</textarea>
				<div id="spacer"></div>
				<button>
				Submit
				</button>
			</form>
	</body>
	<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
	tinymce.init({
	    selector: "textarea",
	    theme: "modern",
	    plugins: [
	        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
	        "searchreplace wordcount visualblocks visualchars code fullscreen",
	        "insertdatetime media nonbreaking save table contextmenu directionality",
	        "emoticons template paste textcolor colorpicker textpattern"
	    ],
	    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
	    toolbar2: "print preview media | forecolor backcolor emoticons",
	    image_advtab: true,
	    templates: [
	        {title: 'Test template 1', content: 'Test 1'},
	        {title: 'Test template 2', content: 'Test 2'}
	    ]
	});
	</script>
</html>