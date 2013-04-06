<?php
	session_start();
	$_SESSION['S_user'] = '';
	session_destroy();
	header("Location: admin.php");
?>
	
	