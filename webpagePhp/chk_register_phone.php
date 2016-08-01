<?php 
	error_reporting(0);
	include_once("../js/h-conn.php");

	$phoneNum = $_POST["phoneNum"];
	$sql = "SELECT * FROM `o-personalCenter` ORDER BY `o-personalCenter`.`phoneNum`";
	//3.执行sql语句
	mysql_query($sql);
	if(mysql_affected_rows() > 0) {
		echo '{"msg":1}';
	}else {
		echo '{"msg":0}';
	}
 ?>