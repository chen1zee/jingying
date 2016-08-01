<?php
	header('Content-Type:text/html;charset=utf8');
	//1.打开数据库
	$url = "172.16.14.14:3306";
	$root = "OY";
	$pwd = "root";
	@mysql_connect($url,$root,$pwd) or die("数据库连接失败");

	//2.选择哪个数据库
	mysql_select_db("gzh160301");
	//设置查询数据库的字符集
	mysql_query("set names utf8");
 ?>