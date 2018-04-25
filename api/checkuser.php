<?php
	//开启session机制
	session_start();
	
	//读取session
	//检测变量是否设置，并且不是 NULL
	if(isset($_SESSION['username'])){
		echo '1';
	}
	else{
		echo 'alert("登录超时，请重新输入");location.href="login.html";';
	}
?>