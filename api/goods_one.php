<?php
//		连接数据库
	include('./conn.php');

//获取ID
$id=$_GET['id'];

//构造SQL语句 select 插入数据到数据库

$sql="select * from goods where id=$id";

$rs=mysqli_query($conn, $sql);

if($row=mysqli_fetch_assoc($rs)){
	echo json_encode($row);
}
else {
	echo '{"errcode":"1008","msg":"查询失败"}';
}


?>