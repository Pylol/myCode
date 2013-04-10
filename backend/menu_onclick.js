function Book_menu0_onclick(){
	document.getElementById('iframe').src = "menu/book_menu0.html";
}
function Book_menu1_onclick(){
	var ID = prompt("请输入要编辑的书籍编号:");
	document.getElementById('iframe').src = "menu/book_menu1.html?book_ID="+ID;
}
function Book_menu2_onclick(){
	document.getElementById('iframe').src = "menu/book_menu2.html";
}
function Book_menu3_onclick(){
	var ID = prompt("请输入要下架的书籍编号:");
	document.getElementById('iframe').src = "menu/book_menu3.html?book_ID="+ID;
}
function Book_menu4_onclick(){
	alert("敬请期待~");
	document.getElementById('iframe').src = "menu/book_menu4.html";
}
function User_menu0_onclick(){
	alert("敬请期待~");
	document.getElementById('iframe').src = "menu/book_menu4.html";
}
function User_menu1_onclick(){
	alert("敬请期待~");
	document.getElementById('iframe').src = "menu/book_menu4.html";
}
function User_menu2_onclick(){
	alert("敬请期待~");
	document.getElementById('iframe').src = "menu/book_menu4.html";
}
function User_menu3_onclick(){
	alert("敬请期待~");
	document.getElementById('iframe').src = "menu/book_menu4.html";
}