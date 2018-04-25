<?php
//		连接数据库
	include('./conn.php');

//构造SQL语句 select 插入数据到数据库

$sql="select * from admin order by usergroup desc,username";

$rs=mysqli_query($conn, $sql);
//创建数组保存数据
$data=[];
while($row=mysqli_fetch_assoc($rs)){
	//php方法  在数组后面添加内容
	array_push($data,$row);
}
	//json_encode将文件以JSON格式传回
echo json_encode($data);
//	返回执行结果
//if($r){
//	echo '1';
//}
//else {
//	echo '0';
//}
?>