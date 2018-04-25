<?php
//1.连接数据库
include("conn.php");

//2.获取前台传过来的值
$salenum=$_POST['salenum'];
$price=$_POST['price'];
$discount=$_POST['discount'];
$codes=$_POST['codes'];
$names=$_POST['names'];
//3.创建SQL语句写入数据库

$sql="insert into sales(salenum,saleprice,discount,codes,refund,names) values('$salenum','$price','$discount','$codes',0,'$names')";

$r=mysqli_query($conn, $sql);

if($r){
	echo '{"errcode":"0","msg":"添加成功"}';
}
else{
	echo '{"errcode":"1007","msg":"添加失败"}';
}
	
?>