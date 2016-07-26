// ——————————Tab 切换
var perW = $('#tabList').children('li').eq(0).width();
$('#tabList').on('click','li',function () {
	var $index = $(this).index();
	$('#greenBar').css('left',(perW * $index));//---绿条位置

	// 显示对应tab页面
	$('#tabBox').children('.tab').eq($index).css('display','block').siblings().css('display','none');

	 /* body... */ 
})