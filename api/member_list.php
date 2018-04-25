<?php
//用于获取goods表的数据并且分页和执行查询

//连接数据库
include("./conn.php");

//获取查询条件
$keywords=$_GET['keywords'];

//构造SQL语句执行查询
$sql="select  * from member where 1=1";
if($keywords!=""){
	$sql.=" and name like '%$keywords%' or address like '%$keywords%' or usergroup like '%$keywords%' or cardnum like '%$keywords%'";
}

//定义页面显示数量
$pagesize=3;
//定义获取当前页面
$page=$_GET['page'];

//计算一共有多少数据
$rs=mysqli_query($conn, $sql);
$recordcount=mysqli_num_rows($rs);
//定义开始位置
$start=($page-1)*$pagesize;

$sql.=" limit $start,$pagesize";

//echo $sql;
//exit;

$rs=mysqli_query($conn, $sql);
//循环将数据写入空数组
//循环将数据写入空数组
$data=[];
while($row=mysqli_fetch_assoc($rs)){
	array_push($data,$row);
}
//将数据库数据的页数返回前端
$pagecount=ceil($recordcount / $pagesize);
array_push($data,$pagecount);

//将数据返回
echo json_encode($data);
?>