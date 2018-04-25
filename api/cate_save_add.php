<?php
//1.连接数据库
include("conn.php");

//2.获取前台传过来的值
$name=$_POST['name'];
$state=$_POST['state'];
$parentid=$_POST['parentid'];

//var_dump($parentid);
//4.判断leve的值
if($parentid==0){
	$level=1;
}
else{
	$rs=mysqli_query($conn, "select level from category where id='$parentid'");
	$row=mysqli_fetch_assoc($rs);
	$level=$row['level']+1;
}
//3.创建SQL语句写入数据库

$sql="insert into category(name,state,parentid,level) values('$name','$state','$parentid','$level')";

$r=mysqli_query($conn, $sql);

if($r){
	echo '{"errcode":"0","msg":"添加成功"}';
}
else{
	echo '{"errcode":"1007","msg":"添加失败"}';
}
	
?>