<?php
//连接数据库
include("./conn.php");

//构造SQL语句执行查询
$sql="select * from member";

$rs=mysqli_query($conn, $sql);

//var_dump($rs);
//循环将数据写入空数组
$data=[];
while($row=mysqli_fetch_assoc($rs)){
	array_push($data,$row);
}

//将数据返回
echo json_encode($data);
?>