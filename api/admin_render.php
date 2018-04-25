<?php
//		连接数据库
	include('./conn.php');

//构造SQL语句
$ID=$_POST['id'];
//var_dump($ID);
$sql="select * from admin where id='$ID'";

$rs=mysqli_query($conn, $sql);
//	返回执行结果
if($row=mysqli_fetch_assoc($rs)){
	echo json_encode($row);
}
else{
	echo '{"errcode":"165","msg":"数据不存在"}';
}

?>