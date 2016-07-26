$("#orders-list-allFlag input").click(function(){
				console.log(1);
				if($("#orders-list-allFlag input").prop("checked")) {
					$("input[name='checkbox']").prop("checked","checked"); 
				}else {
					$("input[name='checkbox']").prop("checked",""); 
				}
				
//				for (var i = 0; i < _len; i++) {
//					console.log(2);
//					console.log($("input[name='checkbox']"));
//					
//				}
			})
			$("input[name='checkbox']").on("click", function() {
				var bol = true;
				$("input[name='checkbox']").each(function(index, key) {
					if(!$(key).prop("checked")) {
						$("#orders-list-allFlag input").prop("checked","");
						bol = false;
					}
					
				})
				if(bol) {
					$("#orders-list-allFlag input").prop("checked","checked");
				}
			})