function Book_menu0_onclick(){
	document.getElementById("current").innerHTML = "当前位置：所有书籍";
	document.getElementById('iframe').src = "menu/book_menu0.html";
}
function Book_menu1_onclick(){
	var ID = prompt("请输入要编辑的书籍编号:");
	document.getElementById("current").innerHTML = "当前位置：信息编辑";
	document.getElementById('iframe').src = "menu/book_menu1.html?book_ID="+ID;
}
function Book_menu2_onclick(){
	document.getElementById("current").innerHTML = "当前位置：新书上架";
	document.getElementById('iframe').src = "menu/book_menu2.html";
}
function Book_menu3_onclick(){
	var ID = prompt("请输入要下架的书籍编号:");
	document.getElementById("current").innerHTML = "当前位置：书籍下架";
	document.getElementById('iframe').src = "menu/book_menu3.html?book_ID="+ID;
}

function User_menu0_onclick(){
	document.getElementById("current").innerHTML = "当前位置：所有用户";
	document.getElementById('iframe').src = "menu/user_menu0.html";
}
function User_menu1_onclick(){
	alert("敬请期待~");
	document.getElementById("current").innerHTML = "当前位置：敬请期待";
	document.getElementById('iframe').src = "menu/1.html";
}

function order_menu0_onclick(){
	document.getElementById("current").innerHTML = "当前位置：所有订单";
	document.getElementById('iframe').src = "menu/order_menu0.html";
}
function order_menu1_onclick(){
	document.getElementById("current").innerHTML = "当前位置：待发订单";
	document.getElementById('iframe').src = "menu/order_menu1.html";
}
function order_menu2_onclick(){
	document.getElementById("current").innerHTML = "当前位置：已发订单";
	document.getElementById('iframe').src = "menu/order_menu2.html";
}