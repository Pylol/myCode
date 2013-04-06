<?php
	$email = $_POST['Email'];
	$passwd = md5($_POST['passwd']);

	$conn = mysql_connect("125.221.225.210:3306","root","88888888");
	mysql_select_db("db_BookStore",$conn);
	mysql_query("set names utf-8");

	$sql = "select * from tb_User where user_Email='$email' and user_Passwd='$passwd'";
	$arr = mysql_query($sql,$conn);

	if(mysql_num_rows($arr) != 0)
	{
		session_start();
		$_SESSION['current_user'] = $email;
		header("Location:index.php");
	}
	else
	{
		echo "
			<script language='javascript'>
		//		window.location.href='login.html';
				alert('用户名或密码错误！');
			</script>
		";
	}
?>
