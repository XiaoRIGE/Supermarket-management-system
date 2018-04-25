<?php
//1.连接数据库
include("conn.php");

//2.获取前台传过来的值
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$usergroup=$_POST['usergroup'];
$id=$_POST['id'];

//3.创建SQL语句写入数据库

$sql="update admin set username='$username',password='$pwd',usergroup='$usergroup' where id='$id'";

$r=mysqli_query($conn, $sql);

if($r){
	echo '1';
}
else{
	echo '0';
}
	
?>