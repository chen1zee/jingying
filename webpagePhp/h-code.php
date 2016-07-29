<?php 
	session_start();//要放在开头
	header("Access-Control-Allow-Origin:*");
	$img = imagecreatetruecolor(90, 38);//得到一个80*40的画布
	$black = imagecolorallocate($img, 0x00, 0x00, 0x00);//设置颜色
	$green = imagecolorallocate($img, 0x00, 0xFF, 0x00);//0x 16进制 rgb
	$red = imagecolorallocate($img, 0xFF, 0x00,0x00);
	$white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
	imagefill($img,0,0,$white);//填充
	//生成随机的验证码
	$code = '';
	for($i = 0; $i < 4; $i++) {
	    $code .= rand(0, 9);
	}
	$_SESSION['check_code_number'] = $code;//将生成的随机验证码保存到session
	imagestring($img, 30, 25, 10, $code, $black);
	//加入噪点干扰
	for($i=0;$i<50;$i++) {
	  imagesetpixel($img, rand(0, 100) , rand(0, 100) , $black); 
	  imagesetpixel($img, rand(0, 100) , rand(0, 100) , $green);
	  imagesetpixel($img,rand(0,100),rand(0,100),$red);
	}
	//输出验证码
	header("content-type: image/png");
	imagepng($img);
	imagedestroy($img);
?>