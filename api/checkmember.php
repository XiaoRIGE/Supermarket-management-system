<?php
	//连接数据库
	include("./conn.php");
	
	//获取传过来的值
	$cardnum=$_GET['cardnum'];
	
	//构建SQL语句执行查询
	
	$rs=mysqli_query($conn, "select * from member where cardnum='$cardnum'");
	
	if($row=mysqli_fetch_assoc($rs)){
		echo json_encode($row);
	}
	else{
		echo '{"errcode":"1009","msg":"账户不存在"}';
	}
?>