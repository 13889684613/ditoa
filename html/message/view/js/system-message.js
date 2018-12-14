$(function(){
	$(".tableBox").mCustomScrollbar({
		axis: "x",
		theme: "dark",
		scrollInertia: 0,
	});
	
	$('.downloadAddButtonL').click(function(){
		tic('提示','确认全部已读吗？','确认','取消')
	})
	$('body').delegate('.popTicButtonL,.popTicButtonR,.popTicTitle img,.popTicMask', 'click', function() {
		$('.popTic').remove();
	})
})