		$(".words-num span").html(200-$(".refund-details textarea").val().length);
		$("textarea[name='evaluate-textarea']").focus(function(){
			$(this).on("keyup",function(){
				$(this).next().find("span").html(200-$(this).val().length);
			})
		})
		var i = 1;
		$(".orders-operation-evaluate").on("click",function(){
			
			if(i == 1){
			$(this).parent().parent().find(".evaluate-wrap").css("display","block");
		}else{
			$(this).parent().parent().find(".evaluate-wrap").css("display","none");
		};
			i *=-1;
		});
		
//		复选框
		$(".evaluate-wrap-grade div").on("click",function(){
			$(this).nextAll().css("background-position",0+"px"+" "+ 0+"px");
			$(this).css("background-position",0+"px"+" "+ -16+"px");
			$(this).prevAll().css("background-position",0+"px"+" "+ -16+"px");
		})