<?php
//		连接数据库
	include('./conn.php');

//构造SQL语句 select 插入数据到数据库

$sql="select * from category";

$rs=mysqli_query($conn, $sql);
//创建数组保存数据
$data=[];
while($row=mysqli_fetch_all($rs,1)){
	//php方法  在数组后面添加内容
	array_push($data,$row);
}
	//json_encode将文件以JSON格式传回
echo json_encode($data);


?>