<?php 
	header('Content-Type:text/html;charset=utf8');
	$url = '172.16.14.14:3306';
	$root = 'root';
	$pwd = 'root';

	// 连接，返回资源标识符
	$conn = @mysql_connect($url,$root,$pwd);

	if (!$conn) {
		echo "连接失败";
		exit();
		# code...
	}



	// 2，选择数据库
	mysql_select_db('gzh160301');
	mysql_query('set names utf8');


	$sql = 'select * from student';

	$result = mysql_query($sql);
	
	
	while($row = mysql_fetch_array($result)){
		echo '名字：'.$row['name'].'<br />';
		echo '性别：'.$row['gender'].'<br />';
	}


 ?>