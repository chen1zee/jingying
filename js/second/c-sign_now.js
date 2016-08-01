
// ----折叠  支付方式 事件
$('#payStyle').on('click','.title',function () {
	$(this).next().toggle();
	$(this).children('.icon').toggleClass('active');
	 /* body... */ 
});