＜?php
　// 建立数据库连接 
　$link = mysql_connect("localhost", "mysql_user", "mysql_password") 
　　　or die("Could not connect: " . mysql_error()); 
　// 获取当前页数
　if( isset($_GET['page']) ){
　　$page = intval( $_GET['page'] );
　}
　else{
　　$page = 1;
　} 
　// 每页数量
　$PageSize = 10; 
　// 获取总数据量
　$sql = "select count(*) as amount from table";//count(*)的内容保存在amount里
　$result = mysql_query($sql);
　$row = mysql_fetch_row($result);
　$amount = $row['amount']; 
　// 记算总共有多少页
　if( $amount ){
　　if( $amount ＜ $page_size ){ $page_count = 1; } //如果总数据量小于$PageSize，那么只有一页
　　if( $amount % $page_size ){ //取总数据量除以每页数的余数
　　　$page_count = (int)($amount / $page_size) + 1; //如果有余数，则页数等于总数据量除以每页数的结果取整再加一
　　}else{
　　　$page_count = $amount / $page_size; //如果没有余数，则页数等于总数据量除以每页数的结果
　　}
　}
　else{
　　$page_count = 0;
　}

　// 翻页链接
　$page_string = '';
　if( $page == 1 ){
　　$page_string .= '第一页|上一页|';
　}
　else{
　　$page_string .= '＜a href=?page=1＞第一页＜/a＞|＜a href=?page='.($page-1).'＞上一页＜/a＞|';
　} 
　if( ($page == $page_count) || ($page_count == 0) ){
　　$page_string .= '下一页|尾页';
　}
　else{
　　$page_string .= '＜a href=?page='.($page+1).'＞下一页＜/a＞|＜a href=?page='.$page_count.'＞尾页＜/a＞';
　}
　// 获取数据，以二维数组格式返回结果
　if( $amount ){
　　$sql = "select * from table order by id desc limit ". ($page-1)*$page_size .", $page_size";//limit 第一个参数指定第一个返回记录行的偏移量，第二个参数指定返回记录行的最大数目
　　$result = mysql_query($sql);

　　while ( $row = mysql_fetch_row($result) ){
　　　$rowset[] = $row;
　　}
　}else{
　　$rowset = array();
　}
　// 没有包含显示结果的代码，那不在讨论范围，只要用foreach就可以很简单的用得到的二维数组来显示结果
?＞