<?php
$db =  new MySQLi("localhost","root","123456","bookshop");
if($db->connect_error){
	echo "连接失败:".connect_error;
}else{
	// echo "连接成功！";
}
?>