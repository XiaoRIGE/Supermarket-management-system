<?php
//1.连接数据库
include("conn.php");

//2.获取前台传过来的值
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$usergroup=$_POST['usergroup'];


//3.创建SQL语句写入数据库

$sql="insert into admin(username,password,usergroup) values('$username','$pwd','$usergroup')";

$r=mysqli_query($conn, $sql);

if($r){
	echo '1';
}
else{
	echo '0';
}
	
?>