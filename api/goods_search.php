<?php
//连接数据库
include("./conn.php");

//获取查询条件
$cate_id=$_GET['cate_id'];
$keywords=$_GET['keywords'];

//构造SQL语句执行查询
$sql="select  goods.*,category.name as cate_name from goods,category where goods.cate_id=category.id";
if($cate_id>0){
	$sql.=" and goods.cate_id=$cate_id";
}
if($keywords!=""){
	$sql.=" and goods.name like '%$keywords%'";
}
//echo $sql;
//exit;

$rs=mysqli_query($conn, $sql);

//echo $rs;
//exit;

//循环将数据写入空数组
$data=[];
while($row=mysqli_fetch_assoc($rs)){
	array_push($data,$row);
}

//将数据返回
echo json_encode($data);
?>