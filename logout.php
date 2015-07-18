<?php
	session_start();
	//sesion_unset();	
	session_destroy();
	header("Location: /codemyca/login.php");
?>