<?php
	header('content-type:text/html;charset=utf-8');
	//开启session共享文件机制
	session_start();
	
	//清除SESSION,清除登录标识
	$_SESSION=[];
	//清除服务器端COOKIE机制
	session_destroy();
	
	echo '<script>alert("退出成功！");location.href="../login.html";</script>'
?>