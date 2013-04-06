<?php
$conn = mysql_connect('125.221.225.210:3306','root','88888888');
mysql_select_db('db_BookStore',$conn);
mysql_query("set names utf8");

////////////////////////
//////Book_menu0///////
///////////////////////
$sql = "SELECT tb_BookInfo.book_ID, book_Name, book_Author, book_Publisher, book_CountRest FROM tb_BookInfo, tb_BookCount";
$arr = mysql_query($sql,$conn);
$book_menu0 = "
	//Book_option
function Book_menu0_onclick()
{
	content = \"<table id='content_tr'>\\
				<tr>\\
					<td style='width:50px;' class='header_td'>编号</td>\\
					<td  class='header_td'>名称</td>\\
					<td  class='header_td'>作者</td>\\
					<td  class='header_td'>出版社</td>\\
					<td style='width:50px;'  class='header_td'>库存</td>\\
				</tr>\\";
while($value = mysql_fetch_array($arr))
{
	if($value[4] < 10)
	{
		$color = "red";
	}
	else
	{
		$color = "black";
	}
	$book_menu0 .= "<tr>\\
						<td style='width:50px;'>$value[0]</td>\\
						<td>$value[1]</td>\\
						<td>$value[2]</td>\\
						<td>$value[3]</td>\\
						<td style='width:50px;color:$color;'>$value[4]</td>\\
					</tr>\\";
}
$book_menu0 .= "</table>\"
	document.getElementById('main').innerHTML = content;
}";
echo $book_menu0;


////////////////////////
//////Book_menu1///////
///////////////////////
//$book = $_COOKIE['book_ID'];
$book_menu1 = " 
function Book_menu1_onclick()
{
	var ID = prompt('请输入书籍编号:');
	document.cookie = 'book_ID=' + ID;
";
//$book = '<script>document.write(ID);</script>';
$book_menu1 .= "
	content = \"the book_ID is $book \"
	document.getElementById('main').innerHTML = content;
}";
$book = $_COOKIE['book_ID'];
echo $book_menu1;
/*
$sql = "SELECT * FROM tb_BookInfo, tb_BookPrice, tb_BookCount where tb_BookInfo.book_ID=$bookId";
$value = mysql_query($sql,$conn);
//$value = mysql_fetch_array($arr);
$book_menu1 .= "content = \"<form action=' ' method='post'>
	<label for='bookid'>书籍编号:</label>\\
	<input type='text' name='bookid' value='$value[0]' readonly /><br /></form>\";
	document.getElementById('main').innerHTML = content;
}
";

echo $book_menu1;
////////////////////////
//////Book_menu2///////
///////////////////////
echo "
function Book_menu2_onclick()
{
	document.getElementById('main').innerHTML = 'Book_menu2_onclick';
}
function Book_menu3_onclick()
{
	document.getElementById('main').innerHTML = 'Book_menu3_onclick';
}

//User_option
function User_menu0_onclick()
{
	document.getElementById('main').innerHTML = 'User_menu0_onclick';
}
function User_menu1_onclick()
{
	document.getElementById('main').innerHTML = 'User_menu1_onclick';
}
function User_menu2_onclick()
{
	document.getElementById('main').innerHTML = 'User_menu2_onclick';
}
function User_menu3_onclick()
{
	document.getElementById('main').innerHTML = 'User_menu3_onclick';
}
";
?>*/