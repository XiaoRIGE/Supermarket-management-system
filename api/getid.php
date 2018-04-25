<?php
session_start();
//		连接数据库
	include('./conn.php');
	
//	获取数据


$ID=$_SESSION['id'];

//构造SQL语句 insert into 插入数据到数据库

$sql= "select * from admin where id='$ID'";

$rs=mysqli_query($conn, $sql);
//	返回执行结果
if($row=mysqli_fetch_assoc($rs)){
	echo json_encode($row);
}
else {
	echo '{"errcode":"165","msg":"数据不存在"}';
}
?>