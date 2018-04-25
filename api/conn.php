<?php
	header('Content-Type:text/html; charset=utf-8');
	// header('Content-Type:text/json; charset=utf-8');
	
	
	//连接数据库
	$conn = @mysqli_connect('127.0.0.1','root','123456','market');

	//声明编码方式  如果和页面编码方式不同会产生乱码
	mysqli_query($conn, 'set names utf8');