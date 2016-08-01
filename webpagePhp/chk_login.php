<?php 
	include_once("../js/h-conn.php");
	$phoneNum = $_POST["phoneNum"];
	$pwd = $_POST["pwd"];


	$sql="SELECT `phoneNum` FROM `o-personalCenter` WHERE `phoneNum` = '$phoneNum'";
	// 3.执行sql语句：
	$result=mysql_query($sql);
	if(mysql_affected_rows()>0){
		$row=mysql_fetch_assoc($result);
		if($pwd==$row["pwd"]){
			echo '{"msg":"1"}';
		}else{
			echo '{"msg":"2"}';
		}
	}else{
		echo '{"msg":"0"}';
	}
 ?>