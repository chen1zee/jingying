
$("#submit-pwd").on("click",function(){
			var a = 0;
			var b = 0;
			var c = 0;
			var regPwd =/^\w{6,12}$/;
			$('.middle4-right>div>input').each(function (index,key) {
//三个input是否有内容
				if($(key).val() == ""){
					$(key).next().next().next().show();
					$(key).addClass("wrong");
					$(key).parent().find(".trueFalse").css("display","inline-block");
					a++;
				}else {
					$(key).next().next().next().hide();
					$(key).removeClass("wrong");
					$(key).parent().find(".trueFalse").css("display","none");
				}
//新密码与旧密码是否相同
				if(($("input[name=pwd-current]").val() == $("input[name=pwd-new]").val()) && ($("input[name=pwd-current]").val() !="") && ($("input[name=pwd-new]").val() != "")){
					b = 1;
					$("input[name=pwd-new]").nextAll(".tips").hide();
					$("input[name=pwd-new]").nextAll(".pwd-same").show();
					$("input[name=pwd-new]").parent().find(".trueFalse").css("display","inline-block");
					$("input[name=pwd-new]").addClass("wrong");
					$("input[name=pwd-new]").focus();
					$("input[name=pwd-new]").select();
				}else{
					b = 0;
					$("input[name=pwd-new]").nextAll(".tips").hide();
					$("input[name=pwd-new]").parent().find(".trueFalse").css({
						"display": "inline-block",
						"background-position-y": -16 + "px"
					});
					$("input[name=pwd-new]").removeClass("wrong");
//新密码是否符合规范
					if(regPwd.test($("input[name=pwd-new]").val())){
// 再次确认密码是否相同
						d = 0;
						if(($("input[name=pwd-confirm]").val() != $("input[name=pwd-new]").val()) && ($("input[name=pwd-confirm]").val() !="") && ($("input[name=pwd-new]").val() != "")){
							c = 1;
							$("input[name=pwd-confirm]").nextAll(".tips").hide();
							$("input[name=pwd-confirm]").nextAll(".pwd-notSame").show();
							$("input[name=pwd-confirm]").parent().find(".trueFalse").css("display","inline-block");
							$("input[name=pwd-confirm]").addClass("wrong");
							$("input[name=pwd-confirm]").focus();
							$("input[name=pwd-confirm]").select();
						}else {
							c = 0;
							$("input[name=pwd-confirm]").nextAll(".tips").hide();
							$("input[name=pwd-confirm]").parent().find(".trueFalse").css({
								"display": "inline-block",
								"background-position-y": -16 + "px"
							});
							$("input[name=pwd-confirm]").removeClass("wrong");
						}
					}else {
						d = 1;
						$("input[name=pwd-new]").nextAll(".tips").hide();
						$("input[name=pwd-new]").nextAll(".pwd-notWorked").show();
						$("input[name=pwd-new]").parent().find(".trueFalse").css("display","inline-block");
						$("input[name=pwd-new]").addClass("wrong");
						$("input[name=pwd-new]").focus();
						$("input[name=pwd-new]").select();
					}

					
				}

			})
			// 发起一个检测用户名是否错误
			if (a == 0 && b == 0 && c == 0 && d == 0){
				$.ajax({
					type:"POST",
					url:"../../js/personalCenter/o-personalCenter-pwdIfError.php",
					data:{
						username:$("#name").html(),
						pwd_current:$("input[name=pwd-current]").val(),
					},
					dataType:"json",
					success:function(data) {
						console.log(data);
						if (data.msg == "success") {
							$("input[name=pwd-current]").next().css({
								"display": "inline-block",
								"background-position-y": -16 + "px"
							});
							$("input[name=pwd-current]").removeClass("wrong");
							$(".wrong-pwd").hide();


							$.ajax({
								type:"POST",
								url:"../../js/personalCenter/o-personalCenter-pwdChange.php",
								data:{
									username:$("#name").html(),
									pwd_new:$("input[name=pwd-new]").val(),
								},
								dataType:"json",
								success:function(data) {
									if (data.result == "success") {
										$(".middle4-right>div>input").val("");
										$(".trueFalse").css("display","none");
										alert("密码修改成功");
									}else{
										alert("系统错误，密码修改失败");
									}
								}
							})
								


						} else {
							$("input[name=pwd-current]").next().css({
								"display": "inline-block",
							});
							$("input[name=pwd-current]").addClass("wrong");
							$(".wrong-pwd").show();
							$("input[name=pwd-current]").focus();
							$("input[name=pwd-current]").select();
						}
					}
				})
			}



})