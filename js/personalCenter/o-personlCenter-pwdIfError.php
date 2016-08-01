<?php 
	include_once(".././o-conn.php");
	$username = $_POST["username"];
	$pwd_current = $_POST["pwd_current"];
	$sql = "select * from o-personalCenter where `username` = '".$username."' and `pwd` = '".$pwd_current."'";
	//3.执行sql语句
	// echo $sql;
	mysql_query($sql);
	if (mysql_affected_rows() > 0) {
		echo '{"msg":"success"}';
	}else{
		echo '{"msg":"fail"}';
	}
	select * from o-personalCenter where `username` = '快枪手' and `pwd` = md5('123456')
 ?>