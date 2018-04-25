<?php
//1.连接数据库
include("conn.php");

//2.获取前台传过来的值
$name=$_POST['name'];
$code=$_POST['code'];
$cate_id=$_POST['cate_id'];
$costprice=$_POST['costprice'];
$price=$_POST['price'];
$saleprice=$_POST['saleprice'];
$num=$_POST['num'];
$weight=$_POST['weight'];
$saled=$_POST['saled'];
$intro=$_POST['intro'];

//获取到的$cate_id为字符串  根据字符串再去找到数据库对应的id 再将找到的ID写入数据库







//3.创建SQL语句写入数据库

$sql="insert into goods(cate_id,code,name,costprice,price,saleprice,num,weight,saled,intro) values('$cate_id','$code','$name','$costprice','$price','$saleprice','$num','$weight','$saled','$intro')";

$r=mysqli_query($conn, $sql);

if($r){
	echo '{"errcode":"0","msg":"添加成功"}';
}
else{
	echo '{"errcode":"1007","msg":"添加失败"}';
}
	
?>