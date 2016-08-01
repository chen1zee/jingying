<?php 
	error_reporting(0);
	require_once("../js/h-conn.php");
	$phoneNum = $_POST["phoneNum"];
	$pwd = $_POST["pwd"];

	$sql = "select * from `o-personalCenter` where `phoneNum` = '$phoneNum' and `pwd` = '$pwd'";
	//3.执行sql语句
	mysql_query($sql);
	if(mysql_affected_rows() > 0) {
		echo '{"msg":1}';
	}else {
		echo '{"msg":0}';
	}
 ?>