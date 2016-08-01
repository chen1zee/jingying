<?php 
	include_once("../js/h-conn.php");
	$phoneNum = $_POST["phoneNum"];
	$pwd = $_POST["pwd"];
	$sql = "insert into `o-personalCenter`(`id`,`pwd`,`phoneNum`) values(null,'$pwd','$phoneNum')";
	// echo $sql;
	mysql_query($sql);
	// echo mysql_insert_id();
	if(mysql_insert_id()>0){
		echo '{"msg":1}';
	}else{
		echo '{"msg":0}';
	}

 ?>