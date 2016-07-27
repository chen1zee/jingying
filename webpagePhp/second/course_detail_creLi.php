<?php 
	include_once('../../js/c-conn.php');


	$coursename = $_GET['coursename'];
	$sql = 'select * from `c-offline-course-comment` where `coursename` = \''.$row['coursename'].'\' order by `c-offline-course-comment`.`date` desc';

	$result = mysql_query($sql);
	echo "{'asdasdasdas':'asdsadasd'}";
 ?>