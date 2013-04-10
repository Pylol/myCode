function _remove(parentNode)
{
	while(parentNode.firstChild)
	{
		var oldNode = parentNode.removeChild(parentNode.firstChild);
        oldNode = null;
	}
}
function management_Book()
{
	var ul = document.getElementById("li_Element");
	_remove(ul);
	var element_list = new Array("所有书籍","信息编辑","新书上架","旧书下架","交易订单");
	var obj0 = document.createElement("li");
	obj0.innerHTML = "<a style='Cursor:pointer' onclick='Book_menu"+0+"_onclick()'>所有书籍</a>";
	ul.appendChild(obj0);
	var obj1 = document.createElement("li");
	obj1.innerHTML = "<a style='Cursor:pointer' onclick='Book_menu"+1+"_onclick()'>信息编辑</a>";
	ul.appendChild(obj1);
	var obj2 = document.createElement("li");
	obj2.innerHTML = "<a style='Cursor:pointer' onclick='Book_menu"+2+"_onclick()'>新书上架</a>";
	ul.appendChild(obj2);
	var obj3 = document.createElement("li");
	obj3.innerHTML = "<a style='Cursor:pointer' onclick='Book_menu"+3+"_onclick()'>书籍下架</a>";
	ul.appendChild(obj3);
	var obj4 = document.createElement("li");
	obj4.innerHTML = "<a style='Cursor:pointer' onclick='Book_menu"+4+"_onclick()'>交易订单</a>";
	ul.appendChild(obj4);
}
function management_User()
{
	var ul = document.getElementById("li_Element");
	_remove(ul);
	var element_list = new Array("所有用户","敬请期待");
	var obj0 = document.createElement("li");
	obj0.innerHTML = "<a style='Cursor:pointer' onclick='User_menu"+0+"_onclick()'>所有用户</a>";
	ul.appendChild(obj0);
	var obj0 = document.createElement("li");
	obj0.innerHTML = "<a style='Cursor:pointer' onclick='User_menu"+0+"_onclick()'>敬请期待</a>";
	ul.appendChild(obj0);
/*	var obj1 = document.createElement("li");
	obj1.innerHTML = "<a style='Cursor:pointer' onclick='User_menu"+1+"_onclick()'>信息编辑</a>";
	ul.appendChild(obj1);
	var obj2 = document.createElement("li");
	obj2.innerHTML = "<a style='Cursor:pointer' onclick='User_menu"+2+"_onclick()'>添加用户</a>";
	ul.appendChild(obj2);
	var obj3 = document.createElement("li");
	obj3.innerHTML = "<a style='Cursor:pointer' onclick='User_menu"+3+"_onclick()'>删除用户</a>";
	ul.appendChild(obj3);
*/
}
function management_MySQL()
{
	var menu = document.getElementById('left');
	menu.removeChild(menu.childNodes[0]);
	document.getElementById('iframe').src = "http://125.221.225.210/phpmyadmin/index.php?db=db_BookStore";
}