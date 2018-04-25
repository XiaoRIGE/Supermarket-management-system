<?php
//		连接数据库
	include('./conn.php');

//获取条形码的值和商品数量的值
$code=$_GET['code'];
$salenum=$_GET['salenum'];
//构造SQL语句 select 插入数据到数据库

$sql="select goods.name,goods.intro,goods.price,goods.code as goodcode,sales.*,$salenum as salenum from sales,goods where goods.code=$code";


$rs=mysqli_query($conn, $sql);

if($row=mysqli_fetch_assoc($rs)){
	echo json_encode($row);
}
else {
	echo '{"errcode":"1008","msg":"查询失败"}';
}


?>