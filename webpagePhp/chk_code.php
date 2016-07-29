<?php 
	// session_start(); 
 
	// $code = trim($_POST['code']); 
	// if($code==$_SESSION["check_code_number"]){ 
 //   		echo '1'; 
	// } 
session_start();
	$backCode = $_SESSION["check_code_number"];
	$frontCode = $_GET["code"];

	if($frontCode == $backCode) {
		echo '{"msg":1}';
	}else {
		echo '{"msg":0}';
	}
 ?>