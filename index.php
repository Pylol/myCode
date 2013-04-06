<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>布谷书城</title>
	<script type="text/javascript">
	</script>
</head>
<body>
	<h1 style="color:pink;" align="center">布谷书城</h1>
	<div align="right">
		<?php
			session_start();
	//		echo "current_user" . $_SESSION['current_user'];
			if(isset($_SESSION['current_user']))
			{
				echo "<a href=''>" . $_SESSION['current_user'] . "</a>    <a href='exit.php'>退出</a>";
			}
			else
			{
				echo "<a href='login.html'>登陆</a>   <a href='register.html'>注册</a>";
			}
		?>
		</a>
	</div>
</body>
</html>
