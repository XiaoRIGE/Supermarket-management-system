<?php
//1.连接数据库
include("conn.php");

//2.获取前台传过来的值
$cate_id=$_POST['cate_id'];
$name=$_POST['name'];
$code=$_POST['code'];
$costprice=$_POST['costprice'];
$price=$_POST['price'];
$saleprice=$_POST['saleprice'];
$num=$_POST['num'];
$weight=$_POST['weight'];
$saled=$_POST['saled'];
$intro=$_POST['intro'];

$id=$_POST['id'];

//3.创建SQL语句写入数据库

$sql="update goods set name='$name',cate_id='$cate_id',code='$code',costprice='$costprice',price='$price',saleprice='$saleprice',num='$num',weight='$weight',saled='$saled',intro='$intro' where id=$id";

$r=mysqli_query($conn, $sql);

if($r){
	echo '1';
}
else{
	echo '0';
}
	
?>