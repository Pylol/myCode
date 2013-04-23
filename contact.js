var current="1";
function contact_onmouseover(num)
{
	$("#item"+num).addClass("mouseover");
}
function contact_onmouseout(num)
{
	$("#item"+num).removeClass("mouseover");
}
function contact_onclick(num)
{
	if(num != current)
	{
		$("#item"+current).removeClass("clicked");
		$("#item"+num).addClass("clicked");
		if(num == "1")
		{
			$("#main_header_text").text("联系我们");
			$("#info").css("margin-top","20px");
		}
		else
		{
			$("#main_header_text").text("关于我们");
			$("#info").css("margin-top","-600px");
		}
		current = num;
	}
}