<?php
	//1、打开session
	session_start();
	
	//2、创建随机码并保存到SESSION
	$num = "";
	for($i=0 ; $i<4 ; $i++)
	{
		$num .= dechex(mt_rand(0,15));
	}
	//3、创建一张图像
	$_width = 75;
	$_height = 25;
	$img = imagecreatetruecolor($_width,$_height); //width,height
	
	//4、填充图片背景颜色
	$_white = imagecolorallocate($img,255,255,255); //RGB
	imagefill($img,0,0,$_white);
	
	//5、给图像画个框框，个人喜好
	$_black = imagecolorallocate($img,0,0,0);
	imagerectangle($img,0,0,$_width-1,$_height-1,$_black);
	
	//6、加入线条干扰信息
	for($i=0 ; $i<2 ; $i++)
	{
		$rand_color = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
		imageline($img,mt_rand(0,$_width),mt_rand(0,$_height),mt_rand(0,$_width),mt_rand(0,$_height),$rand_color);
	}
	
	//7、加入雪花(*)干扰信息
	for($i=0 ; $i<15 ; $i++)
	{
		$rand_color = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
		imagestring($img,1,mt_rand(0,$_width),mt_rand(0,$_height),"*",$rand_color);
	}
	
	//8、将验证码加入到图片
	for($i=0 ;$i<strlen($_SESSION['code']) ; $i++)
	{
		imagestring($img,5,20+$i*15,mt_rand(0,10),$_SESSION['code'][$i],$rand_color);
	}
	
	//9、输出验证码
	header("Content-Type:image/png");
	imagepng($img);
	imagedestroy($img);
	$_SESSION['code'] = $num;
?>
	
	
	
	
	
	
	
	
	
	
	
	
