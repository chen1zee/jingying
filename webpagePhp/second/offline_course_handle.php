<?php 
	include_once('../../js/c-conn.php');

	$data = $_GET['data'];
	$num = ($_GET['num'] - 1) * 15;
	



	$sql = 'SELECT * FROM `c-offline-course` ORDER BY '.$data.' limit '.$num.',15';
	$result = mysql_query($sql);


	$str = '';//---装载jsonp数据
	if (mysql_affected_rows() > 0) {
		while ($row = mysql_fetch_assoc($result)) {
			$str .= '{title:\''.$row['coursename'].'\',address:\''.$row['address'].'\',now_price:\''.$row['now_price'].'\',old_price:\''.$row['old_price'].'\',sell_num:\''.$row['sell_num'].'\',id:\''.$row['id'].'\',score:\''.$row['score'].'\'},';
			# code...
		}
		# code...
	}



	echo 'callback({list:['.$str.']});';








 ?>