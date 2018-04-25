<?php
include('./conn.php');
$data=[];


function show($parentid=0){
	global $conn,$data; //设置函数内需要使用的全局变量
	
	$sql="select id,name,level from category where parentid=$parentid";
	$rs=mysqli_query($conn, $sql);

	while($row=mysqli_fetch_assoc($rs)){
		$arr['value']=$row['id'];
		$arr['label']=$row['name'];
		
		//根据级别生成前置符 |-
		for($i=1; $i<=$row['level']; $i++){
			$arr['label']='|--'.$arr['label'];
		}
		array_push($data,$arr); //将所有数据遍历放在 $data数组中
		
		show($row['id']); //递归调用入口
	}
}

show();

//将所有数据生成的二维数组以JSON格式输出
echo json_encode($data);
?>