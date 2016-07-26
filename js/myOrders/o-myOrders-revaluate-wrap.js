$("#words-num span").html(200-$(".refund-details textarea").val().length);
		function len(){
			$("#words-num span").html(200-$(".refund-details textarea").val().length);
		};
		var i = 1;
		$(".orders-operation-evaluate").on("click",function(){
			
			if(i == 1){
			$(this).parent().parent().find(".evaluate-wrap").css("display","block");
		}else{
			$(this).parent().parent().find(".evaluate-wrap").css("display","none");
		};
			i *=-1;
		});
		$(".evaluate-wrap-grade div").on("click",function(){
			$(this).nextAll().css("background-position-y",0);
			$(this).css("background-position-y",-16+"px");
			$(this).prevAll().css("background-position-y",-16+"px");
		})