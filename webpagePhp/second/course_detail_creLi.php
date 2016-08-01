<?php 
	session
	include_once('../../js/c-conn.php');

	// $coursename = $_GET['coursename'];





	$id = $_GET['id'];
	$line_num = ($_GET['num'] - 1) * 3;//---从第几条开始去数据，，取三条
	$sql = 'select * from `c-offline-course-comment` where `course_id` = '.$id.' order by `c-offline-course-comment`.`date` desc limit '.$line_num.',3';
	$strLi = '';
	$result = mysql_query($sql);
	$str = "";
	$num = 0;
	while ($row = mysql_fetch_assoc($result)) {

		$strLi = $strLi.'{score:"'.$row['score'].'",username:"'.$row['username'].'",date:"'.$row['date'].'",content:"'.$row['content'].'"},';
		# code...
	}
	$strLi = '['.$strLi.']';

	echo 'callback({list:'.$strLi.'});';

	// echo 'callback({key:[{aaa:"aaa",bbb:"bbb"}]});';

	

	// jsonp的返回 需要  返回 回调函名（json对象）
	// 例如： echo 'callback({key:"value"});';

	// {
	// 	list:[
	// 		score:$row['score'],
	// 		username:$row['username'],
	// 		date:$row['date'],
	// 		content:$row['content']
	// 	]
	// }






 ?>