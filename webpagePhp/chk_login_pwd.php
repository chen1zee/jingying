<?php 
	// error_reporting(0);
	require_once("../js/h-conn.php");

	@$pwd = $_POST["pwd"];
	$sql = "SELECT * FROM `o-personalCenter` ORDER BY `o-personalCenter`.`pwd`";
	//3.执行sql语句
	mysql_query($sql);
	if(mysql_affected_rows() > 0) {
		echo '{"msg":1}';
	}else {
		echo '{"msg":0}';
	}
 ?>