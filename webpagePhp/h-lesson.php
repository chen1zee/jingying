<?php 
	include_once('../js/h-conn.php');



	$sql ="select * from `h-lesson`";
	$result = mysql_query($sql);
	if (mysql_affected_rows() > 0 ) {
		$row = mysql_fetch_assoc($result);
		# code...
	}

 ?>

