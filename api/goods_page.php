<?php
//连接数据库
include("./conn.php");

//定义页面显示数量
$pagesize=3;
//定义获取当前页面
$page=$_GET['page'];

//计算一共有多少数据
$sql="select * from goods";
$rs=mysqli_query($conn, $sql);
$recordcount=mysqli_num_rows($rs);

$start=($page-1)*$pagesize;

//构造SQL语句执行查询
//$sql="select  goods.*,category.name as cate_name from goods,category where goods.cate_id=category.id";
$sql2="select goods.*,category.name as cate_name from goods,category where goods.cate_id=category.id limit $start,$pagesize";
$rs2=mysqli_query($conn, $sql2);
//循环将数据写入空数组
$data=[];
while($row=mysqli_fetch_assoc($rs2)){
	array_push($data,$row);
}
//将数据库数据的页数返回前端
$pagecount=ceil($recordcount / $pagesize);
array_push($data,$pagecount);

//将数据返回
echo json_encode($data);
?>