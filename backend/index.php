
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title>
<script language="javascript" src="jquery.js"></script>
<style type="text/css">
<!--
* { 
	margin:0px; 
	padding:0px;
}
html, body{	
	height:100%;
	overflow: hidden;

}
html>body{		/*-- for !IE6.0 --*/
	width: auto;
	height: auto;
	position: absolute;
	top: 0px;
	left: 0px;
	right: 0px;
	bottom: 0px;
}
body {
	border:8px solid #ffffff;
	background-color: #ffffff;min-width:230px;
}
#mainDiv {
	width: 100%;
	height: 100%;
    padding:60px 0px 25px 0px;;
	
	
}
#centerDiv{
	width: 100%;
	height: 100%;
	background-color:#00CCFF;
	padding-left:158px;
}
#mainDiv>#centerDiv{		/*-- for !IE6.0 --*/	
	width: auto;
	height: auto;
	position: absolute;
	top: 56px;
	left: 0px;
	right: 0px;
	bottom: 20px;
	
}
#left{
width:158px;
height:100%;
background:url(slide.jpg) repeat-y;
position:absolute;
left:0px;
}
#lhead{
background:url(left-head.jpg) left top no-repeat;
height:25px;
	font-size:14px;
	color:#FF9933;
    text-align:center;
	line-height:25px;
}
#right{
width:100%;
height:100%;
background:#ffffff;
position:absolute;
overflow-y:auto;
border:1px #003366 solid;
padding:20px 0 0 10px;
font-size:12px;
font-family:"宋体";
}
#centerDiv>#right{
width:auto;
height:auto;
position:absolute;
top:0px;
right:0px;
left:158px;
bottom:0px;
}
#topDiv{
	width:100%;
	height:56px;
	background:url(head-bg.jpg) repeat-x;
	position:absolute;
	top:0px;
	overflow:hidden;
}
#topDiv ul{
list-style:none;
font-size:12px;

width:100%;
margin:0;
padding:0;
}
#topDiv ul li{
float:left;
width:15%
}
#topDiv ul li a {
display:block;
width:100%;
height:25px;
line-height:25px;
background:url(menu-bg.jpg) repeat-x;
color:#FFFFFF;
direction:none;
text-align:center;
border-bottom:1px #000066 solid;
border:1px #06597D solid;
}
#tmenu{
width:100%;
position:absolute;
left:0;
bottom:0;
padding-left:15%;
margin-left:-15%;
}
#current{
background:#ccc;
height:25px;
line-height:25px;
margin:-20px 0 0 -10;
overflow:hidden;
}
#bottomDiv{
	width:100%;
	height:20px;
	background:url(bottom.jpg) repeat-x;
	position:absolute;
	bottom:0px;
	bottom:-1px;		 /*-- for IE6.0 --*/
}
#left ul{
list-style:none;
font-size:12px;
margin:50px 0 0 8px;
}
#left ul li a{
display:block;
width:140px;
height:25px;
line-height:25px;
background:url(menu-bg.jpg) repeat-x;
color:#FFFFFF;
direction:none;
text-align:center;
border-bottom:1px #000066 solid;
border:1px #06597D solid;
}
#left ul li a:hover{

background:url(menu-bg.jpg) 0px 25px;
color:#99FFCC;
direction:none;
text-align:center;
border-bottom:1px #000066 solid;
}
#form{
width:100%;
height:99%;
margin:0 0;
_margin-left:20%;

}
fieldset{
width:100%;
margin:20 auto;
line-height:35px;
padding-left:20PX;
}
#content_tr{
	border:1px solid #73BDE8;
}
#content_tr td{
	font-size:15px;
	text-align: center;
	width:330px;
}
#content_tr td.header_td{
	background-color:#73BDE8;
	color: white;
	font-size:20px;
	text-align: center;
	width:300px;
}
#iframe{
	float:left;
	z-index: 20;
}
-->
</style>
<script type="text/javascript" src="menu_onclick.js"></script>
<script type="text/javascript" src="menu.js"></script>
</head>
<body>
<div id="mainDiv">
	<div id="topDiv">
		<div id="tmenu">
			<ul>
				<li style="width:100px;"><a href="http://125.221.225.209/bgstore">书城首页</a></li>
				<li ><a style="Cursor:pointer" onclick="management_Book()">书籍管理</a></li>
				<li ><a style="Cursor:pointer" onclick="management_User()">用户管理</a></li>
				<li ><a style="Cursor:pointer" onclick="management_order()">订单管理</a></li>
			</ul>
			<div id="suser" style="float:right;margin-right:20px;">
				<span style="color:#FFAE08;font-weight:bold;">
					<?php
					session_start();
					if(isset($_SESSION['S_user']))
					{
						echo $_SESSION['S_user']."，您好!";
					}
					else
					{
						header("Location:admin.php");
					}
					?>
				</span>
				<a href="exit.php" style="color:#0020FF;">退出</a>
			</div>
		</div>
	</div>
	<div id="centerDiv">
		<div id="left">
			<div id="lhead">管理菜单</div>
				<ul id="li_Element">
					<script type="text/javascript">
						management_Book();
					</script>
				</ul>
			</div>
			<div id="right"> 
				<div id="current">&nbsp;&nbsp;&nbsp;&nbsp;当前位置:</div>
				<div id="main" style="overflow:scroll;height:100%;margin-left:-10px;">
					<iframe id="iframe" src='' style="width:100%;height:100%;"></iframe>
				</div>
			</div>
		</div>
	</div>
	<div id="bottomDiv"></div>
</div>
<script language="javascript">
$("#test1").toggle(function(){$("#test").slideDown()},function(){$("#test").slideUp()})
</script>
</body>
</html>