


$(function () {

	// ---上部  tab切换 
	var midLeftIndex = 0;//---记录当前所显页面下标
	var tabLiWidth = $('#tabList>a').eq(0).width();//--每个li长度
	var word = '';//---标识排序方式
	$('#default').on('click',function () {
			// 清除---其他排序样式
			$('#sellSort').attr('class','').children('i').html('&#xe6b6');
			$('#priceSort').attr('class','').children('i').html('&#xe6b6');
			$('#goodSort').attr('class','').children('i').html('&#xe6b6');
			$('#greenBar').css('left',0);
			
			changeLi();
			search();
		 /* body... */ 
	});
	




	// 销量点击
	var sellSortState = 1;//---0为降序 ，，1 为升序
	$('#sellSort').on('click',function () {
		$(this).attr('class','active').siblings('a').attr('class','');
		if (sellSortState == 0) {
			sellSortState = 1;
			$(this).children('i').html('&#xe6b4;');
			word = '`sell_num` asc';
		}else{
			sellSortState = 0;
			$(this).children('i').html('&#xe6b6');
			word = '`sell_num` desc';
		}

		
		$('#greenBar').css('left',(tabLiWidth * 1));
		listIndex = 1;
		changeLi();
		search(word);
		 /* body... */ 
	});


	var priceSortState = 1;//--0降1升
	$('#priceSort').on('click',function () {
		$(this).attr('class','active').siblings('a').attr('class','');
		if (priceSortState == 0) {
			priceSortState = 1;
			$(this).children('i').html('&#xe6b4;');
			word = '`now_price` asc';
		}else{
			priceSortState = 0;
			$(this).children('i').html('&#xe6b6;');
			word = '`now_price` desc';
		}
		$('#greenBar').css('left',(tabLiWidth * 2));
		listIndex = 1;
		changeLi();
		search(word);
		
		 /* body... */ 
	});

	var goodSortState = 1;//---0降1升
	$('#goodSort').on('click',function () {
		$(this).attr('class','active').siblings('a').attr('class','');
		if (goodSortState == 0) {
			goodSortState = 1;
			$(this).children('i').html('&#xe6b4;');
			word = '`score` asc';
		}else{
			goodSortState = 0;
			$(this).children('i').html('&#xe6b6;');
			word = '`score` desc';
		}
		
		$('#greenBar').css('left',(tabLiWidth * 3));
		listIndex = 1;
		changeLi();
		search(word);

		
		 /* body... */ 
	});










	// ---pagaantion  页 tab切换
	var listLength = 10;//---列表长度 不包括省略号
	var listIndex = 1;//---当前为第几页
	var totalListNum = 0;//---总共页数
	var beforeIndex = 0;//---之前一次所在的页面
	function originSet() {//---确定页数 及 初始化按钮
		var perPageLi = 15;//---每页15个课程
		totalListNum = Math.ceil(parseInt($("#totolNum").html()) / perPageLi);

		var str = "";//---装载li
		if (totalListNum <= listLength) {//---小于等于10，不生成省略
			for (var i = 0; i < totalListNum; i++) {
				if (i == 0) {
					str += '<li class="active">1</li>';
				}else{
					str += '<li>' + (i + 1) + '</li>';
				}
			}	
		}else{
			str = '<li class="active">1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li><li class="none">...</li><li>'+ totalListNum +'</li>';
		}
		$('#paganation>ul').html(str);
		 /* body... */ 
	}
	originSet();



	// ---改变页数 函数

	if (totalListNum > listLength) {//---页数大于10页才有事件


		function more7next() {//--大于等于7且没到最底时
			for (var i = 0; i < listLength - 1; i++) {
				$('#paganation li').eq(i).html(listIndex - 6 + i);
			}
			$('#paganation li').eq(6).attr('class','active').siblings().attr('class','');
			$('#paganation li').eq(listLength - 1).html('...').attr('class','none');
			$('#paganation li').eq(listLength).html(totalListNum);
			 /* body... */ 
		}
		function more7prev() {
			$('#paganation li').eq(0).html(1);
			$('#paganation li').eq(1).html('...');
			for (var i = 0; i < listLength - 1; i++) {
				$('#paganation li').eq(i + 2).html(listIndex - 4 + i);
			}
			$('#paganation li').eq(6).attr('class','active').siblings().attr('class','');			

			 /* body... */ 
		}
		function maxEnd() {//---到底时候样式
			$('#paganation li').eq(0).html(1);
			$('#paganation li').eq(1).html('...');
			for (var i = 0; i < listLength - 1; i++) {
				$('#paganation li').eq(i + 2).html((totalListNum - listLength + i + 2));
			}
			$('#paganation li').eq(listLength  - totalListNum + listIndex).attr('class','active').siblings().attr('class','');
			 /* body... */ 
		}

		function changeLi() {
			if (listIndex <= 7) {//---小于7时
				for (var i = 0; i < listLength - 1; i++) {
					$('#paganation li').eq(i).html(i + 1);
				}
				
				$('#paganation li').eq(listLength).html(totalListNum);
				$('#paganation li').eq(listIndex - 1).attr('class','active').siblings().attr('class','');
				$('#paganation li').eq(listLength - 1).html('...').attr('class','none');
			}else if ((listIndex > 7) && (listIndex < totalListNum - listLength + 2)) {//--大于等于7且没到最底时
				if (listIndex > beforeIndex) {
					more7next();
				}else{
					more7prev();
				}
				
				
			}else if (listIndex == totalListNum - listLength + 2) {
				if (listIndex > beforeIndex) {//---向下走
					maxEnd();
					
				}else{
					more7prev();
				}
				
			}else {//---到底时候样式
				maxEnd();
			}
			beforeIndex = listIndex;//---记录之前页面，用作刚好临界条件用
			 /* body... */ 
		}
	}else{//---页数小于10页，，，取消事件

		function changeLi() {
			$('#paganation li').eq(listIndex - 1).attr('class','active').siblings().attr('class','');
			 /* body... */ 
		}
	}



	// -----点击页数 刷新 页数列表
	$('#paganation li').on('click',function () {
		listIndex = parseInt($(this).html());
		changeLi();
		search();
		
		 /* body... */ 
	})

	$('#next').on('click',function () {
		if (listIndex < totalListNum) {
			listIndex++;
			changeLi();
			search();
		}
		 /* body... */ 
	});
	$('#prev').on('click',function () {
		if (listIndex > 1) {
			listIndex--;
			changeLi();
			search();
		}
		 /* body... */ 
	});



	// ------jsonp异步加载
	function search(word) {
		var word = word || '`sell_num` desc';
		
		$.ajax({
			type:'GET',
			url:('./offline_course_handle.php?data='+word+'&num='+listIndex),
			dataType:'jsonp',
			jsonpCallback:'callback',
			success:function (data) {
				var str = '<li class="clearfix">';//---装载数据
				var li = data.list;
				for (var i = 0,len = li.length; i < len; i++) {
					if (i % 5 == 0 && i != 0) {
						str += '</li>';
						str += '<li class="clearfix">';
					}					
					str += '<a href="./course_detail.php?id='+li[i].id+'" class="item-box">'+
						'<div class="top-wrap">'+
							'<img src="../../img/c-course1.png" alt="">'+
							'<span>&nbsp;'+li[i].score+'分&nbsp;</span>'+
						'</div>'+
						'<p class="title">'+
							li[i].title+
						'</p>'+
						'<p class="address">'+
							li[i].address+
						'</p>'+
						'<p class="about-sell clearfix">'+
							'<span class="now-price">'+
								'&yen;'+li[i].now_price+'&nbsp;'+
							'</span>'+
							'<del>&yen;'+li[i].old_price+'</del>'+
							'<span class="number">'+
								'已售'+li[i].sell_num+''+
							'</span>'+
						'</p>'+
					'</a>';
				}
				str += '</li>';
				$('#resultList').html(str);






				 /* body... */ 
			}
		})
		 /* body... */ 
	}



	search();//---开头运行一次ajax

	 /* body... */ 
});




	

