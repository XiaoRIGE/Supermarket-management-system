<?php
//1.连接数据库
include("conn.php");

//2.获取前台传过来的值
$name=$_POST['name'];
$cardnum=$_POST['cardnum'];
$idcard=$_POST['idcard'];
$usergroup=$_POST['usergroup'];
$status=$_POST['status'];
$phone=$_POST['phone'];
$landline=$_POST['landline'];
$email=$_POST['email'];
$city=$_POST['city'];
$address=$_POST['address'];
$postcode=$_POST['postcode'];
//var_dump($usergroup);

//3.创建SQL语句写入数据库

$sql="insert into member(name,cardnum,idcard,usergroup,status,phone,landline,email,city,address,postcode) values('$name','$cardnum','$idcard','$usergroup','$status','$phone','$landline','$email','$city','$address','$postcode')";

$r=mysqli_query($conn, $sql);

if($r){
	echo '{"errcode":"0","msg":"添加成功"}';
}
else{
	echo '{"errcode":"1003","msg":"添加失败"}';
}
	
?>