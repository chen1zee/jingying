<?php
	include_once(".././o-conn.php");
	$pwd_new = $_POST["pwd_new"];
	$username = $_POST["username"];
	// $sql = "select * from `o-personalCenter` where `username` = '".$username."'";

	$sql = "UPDATE `o-personalCenter` SET `pwd`= '".$pwd_new."' where `username` = '".$username."'" ;
	//3.执行sql语句
	// echo $sql;
	mysql_query($sql);
	if (mysql_affected_rows() > 0) {
		echo '{"result":"success"}';
	}else {
		echo '{"result":"fail"}';
	}
 ?>