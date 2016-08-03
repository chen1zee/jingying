<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登陆注册</title>
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/second/sign.css">
</head>
<body>
	<!-- 导航 -->
	<nav>
		<div class="title clearfix">
			<div class="title-logo"></div>
			<ul class="pub-list clearfix">
				<li>
					<a href="###">
						IOS
					</a>
				</li>
				<li>
					<a href="###" class="pub-active">
						android
					</a>
				</li>
				<li>
					<a href="###">
						Unity3D
					</a>
				</li>
				<li>
					<a href="###">
						H5
					</a>
				</li>
				<li>
					<a href="###">
						有问必答
					</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- 中间部分 -->
	<div class="main">
		<!-- 登陆框 -->
		<div class="login-box">
			<!-- 标题 -->
			<div class="login-title clearfix">
				<a href="javascript:void(0)" class="loginBtn active">登录</a>
				<a href="javascript:void(0)" class="registerBtn">注册</a>
			</div>
			<!-- 输入框 -->
			<div class="logincont">
				<form action="###" method="post" name="login" class="form-login">
					<!-- 输入手机号 -->
					<div class="phone-box clearfix">
						<span></span>
						<input type="text" placeholder="请输入手机号" name="username" class="loginPhone">
					</div>
					<!-- 提示错误 -->
					<div class="error error1">
						<em></em>
						<span><!-- 手机号码格式不正确 --></span>
					</div>
					<!-- 密码 -->
					<div class="password-box">
						<span></span>
						<input type="password" name="loginPwd" placeholder="请输入密码" class="loginPassword">
					</div>
					<!-- 提示错误 -->
					<div class="error error2">
						<em></em>
						<span><!-- 密码不能为空 --></span>
					</div>
					<!-- 验证码 -->
					<div class="code">
						<div class="code-left">
							<span></span>
							<input type="text" name="code" placeholder="验证码" class="loginCode">
						</div>
						<div class="code-login-right">
							<img src="h-code.php" title="点击更换图片" id="code">
						</div>
					</div>
					<!-- 提示错误 -->
					<div class="error error3">
						<em></em>
						<span><!-- 请输入验证码 --></span>
						
					</div>
					<!-- 记住我 -->
					<div class="rememberMe">
						<p class="remember">
							<input type="checkbox" name="auto" checked="checked" class="checkbox">
							记住我
						</p>
						<p class="forget"> 
							<a href="javascript:void(0)">忘记密码？</a>
						</p>
					</div>
					<!-- 登录 -->
						<div class="button" id="login-submit">
							<input type="submit" name="submit" class="submit" value="登录" >
						</div>
					
					

				</form>
			</div>

			<!-- 注册框 -->
			<div class="registercont">
				<form action="" method="post" name="regist" class="form-register">
					<!-- 注册手机号 -->
					<div class="register-phone clearfix" >
						<span></span>
						<input type="text" placeholder="请输入手机号" name="num" class="registPhone">
					</div>
					<!-- 提示错误 -->
					<div class="error error4">
						<em></em>
						<span><!-- 该手机号已使用 --></span>
						
					</div>
					<!-- 验证码 -->
					<div class="code">
						<div class="code-left">
							<span></span>
							<input type="text" name="code" placeholder="验证码" class="registCode">
						</div>
						<div class="code-right">
							获取验证码
						</div>
					</div>
					<!-- 提示错误 -->
					<div class="error error5">
						<em></em>
						<span><!-- 验证码不能为空 --></span>
						
					</div>
					<!-- 密码 -->
					<div class="password-box">
						<span></span>
						<input type="password" name="password" placeholder="请输入密码" class="registPassword">
					</div>
					<!-- 提示错误 -->
					<div class="error error6">
						<em></em>
						<span><!-- 密码不能为空 --></span>
						
					</div>
					<!-- 再次输入密码 -->
					<div class="password-again-box">
						<span></span>
						<input type="password" name="password" placeholder="请重新输入密码" class="registAgainPassword">
					</div>
					<!-- 提示错误 -->
					<div class="error error7">
						<em></em>
						<span>	<!-- 请再次输入密码 --></span>
					
					</div>
					<!-- 记住我 -->
					<div class="rememberMe">
						<p class="remember">
							<input type="checkbox" name="auto" checked="checked" class="checkbox">
							同意网站条款
						</p>
					</div>
					<!-- 登录 -->
					<div class="button">
						<input type="submit" name="submit" class="submit" value="提交" id="register-submit">
					</div>
				</form>
			</div>
		</div>	
	</div>

	<!-- 底下的部分 -->
	<footer>
		<div class="login-footer">
			<span class="left">蓝鸥科技有限公司©1997-2016</span>
			<span class="middle">|</span>
			<span class="right">北京市海淀区清河毛纺路路南甲36号金五星商业大厦5层</span>
		</div>
	</footer>

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript">
		var a = 0,b = 0,c = 0,d=0,e=0,f=0;
		// var num_arr = new Array(1);
		$(function() {
			$(".login-title a").click(function(){
				$(this).addClass('active').siblings().removeClass('active');
				$('.logincont').hide().eq($(this).index()).show();
				$('.registercont').show().eq($(this).index()).hide();				
			})

      // 正则验证

        // *******************登录页面的事件：

      // 登录手机号码验证
    $(".loginPhone[name=username]").blur(function () {//这里和数据库的验证暂时没写
        var tel = $(".loginPhone").val();
        var reg =/^1[3458][0-9]\d{8}$/;
         if(tel == null || tel == "") {
     	     $(".error1 span").text("登录手机号码不能为空");
     	     $(".error1 ").show();
     	     
     	} 
     	else if(!reg.test(tel)) {
     	     $(".error1 ").show();
             $(".error1 span").text("填写的手机号码格式不正确");
            
     	}else {
     		$.ajax({
            	type:"POST",
            	url:"chk_login_phone.php",
            	data:{
            		phoneNum:$('.loginPhone[name=username]').val().trim()

            	},
            	dataType:"json",
            	success:function(data) {
            		console.log(data) ;
            			if(data.msg == 1) {
            				 $(".error1 ").show();
            				 $(".error1 span").text("该手机号码是会员账户");
            				 a = 0;
            				 
            			} else {
            				  // $(".error1 ").hide();
            				 $(".error1 ").show();
            				 $(".error1 span").text("该手机号码不是会员账户");
            				a = 1;
            			}

            		}
            	
            })
     	}     
        
    });


   //登录密码验证
    $(".loginPassword[name=loginPwd]").on('blur',function(){//这里和数据库的验证暂时没写
     	var tel = $(".loginPassword[name=loginPwd]").val();
     	if(tel == null || tel == "") {
     		$(".error2 span").text("密码不能为空");
     		$(".error2 ").show();
     		
     	}else {
     		// $(".error2 ").hide();
     		$.ajax({
            	type:"POST",
            	url:"chk_login_pwd.php",
            	data:{
            		phoneNum:$('.loginPhone[name=username]').val().trim(),
            		pwd:$('.loginPassword[name=loginPwd]').val().trim()
            	},
            	dataType:"json",
            	success:function(data) {
            		console.log(data);
            			if(data.msg == 1) {
            				 $(".error2 ").show();
            				 $(".error2 span").text("该密码正确");
            				 b = 0;
            				 
            			} else {
            				  // $(".error2 ").hide();
            				 $(".error2 ").show();
            				 $(".error2 span").text("该密码不正确");
            				 b = 1;
            			}

            		}
            	
            })
     	}
     })


      // 点击登录验证码切换图片
      $("#code").click(function(){ //点击后随机生成验证码
		$(this).attr("src",'h-code.php?');
	})

      // 登录验证码后台验证

		$(".loginCode").on('blur',function(){
    
     	if(!$(".loginCode").val().trim()) {
     		$(".error3 span").text("验证码不能为空");
     		$(".error3 ").show();
     	}else {
     		$.ajax({
     			type:"GET",
     			url:"chk_code.php",
     			data:{
     				code:$('.loginCode').val().trim()
     			},
     			dataType:'json',
     			success:function(data) {
     				console.log(data);
     				if(data.msg==1) {
     					$(".error3 span").text("验证码正确");
     					$(".error3 ").show();
     					c = 0;
     				} else {
     					$(".error3 span").text("请输入正确的验证码");
     					$(".error3 ").show();
     					c = 1;
     				}
     			}
     		})
     	}
     })


     // 账号，密码，验证码正确后点击登录
   
	$('#login-submit').on("click",function(){
	
			if (a == 0 && b==0 && c==0) {
				$.ajax({
						type:"POST",
						url:"setUser.php",
						data:{
							phoneNum:$.trim($("#phone").val())
						},
						success:function() {
							window.location.href='./second/index_second.php';
						}
					})
			}
		
	})



       // 注册手机号码验证  
    $(".registPhone").blur(function () {//这里和数据库的验证暂时没写
        var tel = $(".registPhone").val();
        var reg =/^1[3458][0-9]\d{8}$/;
         if(tel == null || tel == "") {
     		$(".error4 span").text("注册手机号码不能为空");
     		$(".error4 ").show();
     	} else if(!reg.test(tel)) {
     		 $(".error4 ").show();
             $(".error4 span").text("该手机号码格式不正确");
     	}
     	else {
     		 $.ajax({
            	type:"POST",
            	url:"chk_register_phone.php",
            	data:{
            		phoneNum:$('.registPhone').val().trim()

            	},
            	dataType:"json",
            	success:function(data) {
            		console.log(data) ;
            			if(data.msg == 1) {
            				 $(".error4 ").show();
            				 $(".error4 span").text("该手机号码已被注册");
            				 d=1;
            			} else {
            				   // $(".error4 ").hide();
            				  $(".error4 ").show();
            				 $(".error4 span").text("该手机号码可以注册");
            				 d=0;
            			}

            		}
            	
            })
     	}

    });



		// 注册获取验证码倒计时
		var wait=60;  
		function time(obj) {  
        if (wait == 0) {   
            $(".code-right").removeAttr("disabled");          
            $(".code-right").html("获取验证码").css({
            	'color':'#29b572',
            	'font-size':'12px',
            	'backgroundColor':'#fff'
            }); 
            wait = 60;  
        } else {  
            $(".code-right").attr("disabled",true);   
            $(".code-right").html(wait + "秒").css({
					'color':'#fff',
					'backgroundColor':'#cccccc',
					'font-size':'14px'
				});

            wait--;  
            setTimeout(function() {  
                time(obj); 
            },  
            1000)  
        } 
   	 }  
      $(".code-right").click(function(){
		time(this); 
		num_arr = new Array(1);
		$.each(num_arr,function(index,val) {
    		num_arr[index] = Math.ceil(Math.random()*9000)+1000;
		});
			alert(num_arr);

	}) 





     // 注册验证码
     $(".registCode").on('blur',function(){//这里和数据库的验证暂时没写
     	var tel = $(".registCode").val();
     	if(tel.length == 0) {
     		$(".error5 span").text("验证码不为空");
     		$(".error5").show();
     	
     	}else {
     		$(".error5").hide();
     		
     	};

     	 // num_arr = new Array(1);
     	if($(".registCode").val() == num_arr) {
     		$(".error5 span").text("验证码正确");
     		$(".error5").show();
     		e=0;
     	}else {
     		$(".error5 span").text("验证码不正确");
     		$(".error5").show();
     		e=1;
     	}
     })

     //注册的密码
      $(".registPassword").on('blur',function(){//这里和数据库的验证暂时没写
     	var tel = $(".registPassword").val();
     	if(tel.length == 0) {
     		$(".error6 span").text("密码不能为空");
     		$(".error6 ").show();
     	}else {
     		$(".error6").hide();
     	}
     })

      $(".registAgainPassword").on('blur',function(){//这里和数据库的验证暂时没写
     	var tel = $(".registAgainPassword").val();
     	var tel1 = $(".registPassword").val();
     	if(tel.length == 0) {
     		$(".error7 span").text("密码不能为空");
     		$(".error7 ").show();
     	}else {
     		$(".error7").hide();
     	}

     	if(tel!==tel1) {
     		$(".error7 span").text("密码不一致");
     		$(".error7 ").show();
     		f=1;
     	}else {
     		$(".error7").hide();
     		f=0;
     	}
     })


      // 注册提交

      $("#register-submit").on("click",function(){
      		if (d == 0 && e==0 && f==0) {
				$.ajax({
						type:"POST",
						url:"setUser.php",
						data:{
							phoneNum:$.trim($(".registPhone").val()),
							pwd:$.trim($(".registPassword").val())

						},
						success:function() {
							alert("恭喜你，注册成功！")
						}
					}).fail(function(){
						alert("3");
					});

				$.ajax({
						type:"POST",
						url:"chk_register.php",
						data:{
							phoneNum:$.trim($(".registPhone").val()),
							pwd:$.trim($(".registPassword").val())
						},
						dataType:"json",
						success:function(data) {
            				window.location.href='sign.php';
            				 	
						}
				})
			}
      })


	
})
	</script>
	
</body>
</html>