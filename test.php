<?php 

	include_once('./js/c-conn.php');

	// $sql = 'UPDATE `gzh160301`.`c-offline-course-comment` SET `course_id` = 1 WHERE `c-offline-course-comment`.`id` != 2;';

	// mysql_query($sql);
	




	// // 老师版
	// header("Content-Type:text/html;charset=utf8");//设置字符编码

	// $url = "172.16.14.56:3306";//数据库的地址以及端口号，默认3306
	// $root = "root";//数据库的超级管理员
	// $pwd = "123456";//数据库的密码

	// //1.链接MYSQL,返回一个资源标识符
	// $conn = mysql_connect($url,$root,$pwd);
	// if(!$conn) {
	// 	echo "连接数据库失败";
	// 	exit();//退出，不往下执行了
	// }
	// // var_dump($conn);
	// //2.选择具体的某一个database数据库
	// mysql_select_db("gzh160301");
	// mysql_query("set names utf8");//设置查询数据库的字符集

	// $sql = "select * from student";//查询语句
	// $result = mysql_query($sql);//执行查询语句，返回结果集
	// // var_dump($result);
	// // echo mysql_num_rows($result);//返回的是记录数
	// if(mysql_num_rows($result) > 0) {
	// 	while($row = mysql_fetch_array($result)) {
	// 		echo "名字:".$row["name"]."<br>";
	// 		echo "性别：".$row["gender"]."<br>";
	// 	}
	// }

 ?>