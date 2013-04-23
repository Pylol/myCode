<?php
	include("verify_login.php");
	if(isset($_POST['submit']))
	{
		$result = verify_login();
	}
?>
<form action="" method="post">
	Email:
	<input type="text" name="username" />
	<br />
	密码:
	<input type="password" name="password"  />
	<br />
	验证码:
	<input type="text" name="validationcode" maxlength="4" />
	<img src="imgcode.php" alt="验证码" style="cursor:pointer;" onclick="newcode(this,this.src);"/>
	<br />
	<input type="submit" value="登录" name="submit"/>
</form>
<p id="error_info" style="color:red;"><? echo $result ?></p>
<script type="text/javascript">
	function newcode(obj,url)
	{
		obj.src = url + "?nowtime=" + new Date().getTime();
	}
</script>
