<?php 
	header('Content-Type:text/html;charset=utf8');
	$url = 'localhost:3306';
	$root = 'root';
	$pwd = 'root';

	// 连接，返回资源标识符
	$conn = @mysql_connect($url,$root,$pwd) or die("连接失败");

	// 选择数据库
	mysql_select_db('gzh160301');
	mysql_query('set names utf8');
 ?>