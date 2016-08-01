<?php 
	error_reporting(0);
	include_once("../js/h-conn.php");

	$phoneNum = $_POST["phoneNum"];
	$sql = "SELECT * FROM `o-personalCenter` ORDER BY `o-personalCenter`.`phoneNum`";
	// $sql = "select * from o-personalCenter where `phoneNum` = '$phoneNum' and `pwd` = MD5('$pwd')";
	mysql_query($sql);
	//3.执行sql语句
	mysql_query($sql);
	if(mysql_affected_rows() > 0) {
		echo '{"msg":1}';
	}else {
		echo '{"msg":0}';
	}
 ?>