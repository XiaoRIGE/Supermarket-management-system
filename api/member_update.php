<?php
//1.连接数据库
include("conn.php");

//2.获取前台传过来的值
$id=$_POST['id'];
$name=$_POST['name'];
$cardnum=$_POST['cardnum'];
$usergroup=$_POST['usergroup'];
$idcard=$_POST['idcard'];
$status=$_POST['status'];
$phone=$_POST['phone'];
$landline=$_POST['landline'];
$email=$_POST['email'];
$city=$_POST['city'];
$address=$_POST['address'];
$postcode=$_POST['postcode'];

//3.创建SQL语句写入数据库
$sql="update member set name='$name',cardnum='$cardnum',usergroup='$usergroup',idcard='$idcard',status='$status',phone='$phone',landline='$landline',city='$city',address='$address',postcode='$postcode' where id=$id";

$r=mysqli_query($conn, $sql);

if($r){
	echo '1';
}
else{
	echo '0';
}
	
?>