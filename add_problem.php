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
$set=$res['setter'];
if ($ad!=1||$set!=1) {
	header('Location:unauthorised_access.php');
	exit();
	# code...
}
?>
<!DOCTYPE html>
<HTML>
<head>
	<title>
		Add a Problem
	</title>
	<style type="text/css">
	#e
	{
		color: red;
	}
	</style>
</head>
<body>
	<form action="add.php" method="post">
		Level Code:<input type="number" min='1' max='3' name='level' required/>
		<input type="checkbox" id="type" name="check" onclick="handle(this);"/>Problem For Contest
		<input type="text" id="contest" name="contest" style="visibility:hidden;" placeholder="Enter your contest code"/>
		Enter Your Problem Code:<input type="text" id="p_code" name="p_code" placeholder="Your Problem Code" required/>
		<?php
			if(isset($_SESSION['err'])&&$_SESSION['err']=='Problem Code already exist')
			{
				unset($_SESSION['err']);
				echo "<span id='e'>Problem Code Already exist</span>";
			}
		?>
		<div id="spacer">
		</div>
		Enter Your Problem Name:<input type="text" id="p_name" name="name" placeholder="Enter Your Problem Name" required/>
		<?php
			if(isset($_SESSION['err'])&&$_SESSION['err']=='Problem Name already exist')
			{
				unset($_SESSION['err']);
				echo "<span id='e'>Problem Name Already exist</span>";
			}
		?>
		<div id="spacer"></div>
		<textarea id="statement" name="content">
		</textarea>
		Time Limit:<input type="text" placeholder="Time Limit" name="time" id="p_time_limit" required/>
		<div id="spacer"></div>
		Test Input:<input type="text" placeholder="Test Input" name="ip" id="t_input" required/>
		<div id="spacer"></div>
		Test Output:<input type="text" name="op" placeholder="Test output" id="t_output" required/>
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
<script type="text/javascript">
	function handle(Id)
	{
			if (Id.checked)
			{
				document.getElementById('contest').style.visibility='visible';
			}
			else
			{
				document.getElementById('contest').style.visibility='hidden';	
			}
	}
</script>
</HTML>