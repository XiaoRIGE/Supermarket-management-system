<?php
session_start();
//		连接数据库
	include('./conn.php');
	
//	获取数据

$pwd1=$_POST['pwd1'];
$pwd2=$_POST['pwd2'];
$pwd3=$_POST['pwd3'];
$ID=$_SESSION['id'];
//构造SQL语句 insert into 插入数据到数据库

$sql1="select * from admin where password='$pwd1' and id='$ID'";

$rs=mysqli_query($conn, $sql1);

if(mysqli_fetch_assoc($rs)>0){
	$sql= "update admin set password='$pwd2' where id='$ID'";
	$r=mysqli_query($conn, $sql);
	//	返回执行结果
	if($r){
		echo '{"errcode":"0","msg":"修改密码成功"}';
	}
	else {
		echo '{"errcode":"1005","msg":"修改密码失败"}';
	}
}
else {
	echo '{"errcode":"1003","msg":"旧密码错误"}';
}
 
 
 



?>