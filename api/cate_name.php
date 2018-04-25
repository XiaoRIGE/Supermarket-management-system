<?php
//1.连接数据库
include("conn.php");




//2.创建SQL语句查询
$sql="select id as value,name as label from category";

$rs=mysqli_query($conn, $sql);

$data=[];
while($row=mysqli_fetch_assoc($rs)){
	array_push($data,$row);
}	
echo json_encode($data);
?>