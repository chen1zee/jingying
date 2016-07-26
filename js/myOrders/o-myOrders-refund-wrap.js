		$(".words-num span").html(200-$(".refund-details textarea").val().length);
		$("textarea[name='refund-textarea']").focus(function(){
			$(this).on("keyup",function(){
				$(this).next().find("span").html(200-$(this).val().length);
			})
		})
		var i = 1;
		$(".orders-operation-refund").on("click",function(){
			
			if(i == 1){
			$(this).parent().parent().find(".refund-wrap").css("display","block");
		}else{
			$(this).parent().parent().find(".refund-wrap").css("display","none");
		};
			i *=-1;
		});
		
