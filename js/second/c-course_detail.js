$(function () {
	// ---上部购买课程，，tab切换图片
	var topImgIndex = 0;//---记录单前图片下标
	$('#imgList>a').on('click',function () {
		var $index = $(this).index();
		if (topImgIndex != $index) {//---点击不等当前页时
			$('#bigImgContain>img').eq($index).attr('class', 'active').siblings().attr('class','');
			topImgIndex = $index;
		}
		 /* body... */ 
	});


	// ---左中部  tab切换 
	var midLeftIndex = 0;//---记录当前所显页面下标
	var tabLiWidth = $('#tabList>li').eq(0).width();//--每个li长度
	$('#tabList>li').on('click',function () {
		var $index = $(this).index();
		if (midLeftIndex != $index) {
			// ---调整绿条位置
			$('#greenBar').stop().animate({
				left:(tabLiWidth * $index),
			},300);

			$('#paraBox>.page').eq($index).css('display','block').siblings('.page').css('display','none');
			midLeftIndex = $index;
		}
		 /* body... */ 
	});

	// ---用户评价  页 tab切换
	var listLength = 10;//---列表长度 不包括省略号
	var listIndex = 1;//---当前为第几页
	var totalListNum = 0;//---总共页数
	var beforeIndex = 0;//---之前一次所在的页面
	;(function(){//---确定页数 及 初始化按钮
		var perPageLi = 3;//---每页3个li
		totalListNum = Math.ceil($("#commentNum").html() / perPageLi);
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
	})();




	// ---改变页数 函数

	if (totalListNum > listLength) {//---页数大于10页才有事件


		function more7() {//--大于等于7且没到最底时
			for (var i = 0; i < listLength - 1; i++) {
				$('#paganation li').eq(i).html(listIndex - 6 + i);
			}
			$('#paganation li').eq(6).attr('class','active').siblings().attr('class','');
			$('#paganation li').eq(listLength - 1).html('...').attr('class','none');
			$('#paganation li').eq(listLength).html(totalListNum);
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
				more7();
				
			}else if (listIndex == totalListNum - listLength + 2) {
				if (listIndex > beforeIndex) {//---向下走
					maxEnd();
					
				}else{
					more7();
				}
				
			}else {//---到底时候样式
				maxEnd();
			}
			beforeIndex = listIndex;//---记录之前页面，用作刚好临界条件用
			 /* body... */ 
		}
	}else{//---页数小于10页，，，取消事件
		var changeLi = null;
	}



	// -----点击页数 刷新 页数列表
	$('#paganation li').on('click',function () {
		listIndex = parseInt($(this).html());	
		changeLi();
		console.log(listIndex);

		 /* body... */ 
	})

	$('#next').on('click',function () {
		if (listIndex < totalListNum) {
			listIndex++;
			changeLi();
		}
		 /* body... */ 
	});
	$('#prev').on('click',function () {
		if (listIndex > 1) {
			listIndex--;
			changeLi();
		}
		 /* body... */ 
	});

	//——————————预约咨询事件————————————


	$('#askBtn').on('click',function () {//————打开蒙层
		$('#askMask').css('display','block');
		 /* body... */ 
	});

	$('#titleClose').on('click',function () {//——关闭蒙层
		$('#askMask').css('display','none');
		 /* body... */ 
	});
	$('#askMask .cancel-btn').on('click',function () {
		$('#titleClose').trigger('click');
		 /* body... */ 
	});

	

	var tranX = 0;//——记录移动的xy值
	var tranY = 0;
	var x = 0;//——移动增量
	var y = 0;
	var upFlag = false;//---鼠标松开标识
	// ————————预约咨询   拖拽
	$('#askMask .title').on('mousedown',function (e) {
		upFlag = false;
		var beginX = e.clientX;//——点下时的坐标
		var beginY = e.clientY;
		x = y = 0;
		var windowW = $(window).width();//---窗口宽高
		var windowH = $(window).height();
		var boxW = $('#askMask>.ask-box').width();//---拖拽盒子尺寸
		var boxH = $('#askMask>.ask-box').height();
		var minX = -(windowW - boxW) / 2;
		// var maxX = -minX;————————对称的，直接用
		var minY = -(windowH - boxH) / 2;
		// var maxY = -minY;————————对称的，直接用

		$(document).on('mousemove',function (e) {

			var nowX = e.clientX;
			var nowY = e.clientY;
			x = nowX - beginX;//——移动增量
			y = nowY - beginY;
			if (x < minX - tranX) {
				x = minX - tranX;
			}
			if(x > -minX - tranX){
				x = -minX - tranX;
			}
			if (y < minY - tranY) {
				y = minY - tranY;
			}
			if(y > -minY - tranY){
				y = -minY - tranY;
			}

			$('#askMask>.ask-box').css({
				transform: ('translateX('+(tranX + x)+'px) translateY('+(tranY + y)+'px)'),
			});
			$(document).on('mouseup',function (e) {
				if (!upFlag) {
					tranX = tranX + x;
					tranY = tranY + y;
					$(document).off('mousemove');				
					e.stopPropagation();
					e.preventDefault();
					upFlag = true;
				}
				 /* body... */ 
			})
			e.preventDefault();



			 /* body... */ 
		});

		 /* body... */ 
	});

	


	 /* body... */ 
});







