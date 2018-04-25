<?php
//1.连接数据库
include("conn.php");

//2.获取前台传过来的值
$name=$_POST['name'];
$state=$_POST['state'];
$parentid=$_POST['parentid'];
$id=$_POST['id'];

//3.创建SQL语句写入数据库

$sql="update category set name='$name',state='$state',parentid='$parentid' where id=$id";

$r=mysqli_query($conn, $sql);

if($r){
	echo '1';
}
else{
	echo '0';
}
	
?>