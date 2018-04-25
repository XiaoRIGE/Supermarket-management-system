<?php
//1.连接数据库
include("conn.php");

//2.获取数据
$id=$_GET['id'];

//3.构造SQL语句
$sql="delete from category where id='$id'";

$r=mysqli_query($conn, $sql);

if($r){
	echo '1';
}
else {
	echo '0';
}
?>