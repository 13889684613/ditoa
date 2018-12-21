$(function(){

//	$(".tableBox").mCustomScrollbar({
//		axis:"x",
//		theme:"dark",
//		scrollInertia :0,
//	});
	
	$('.official-assessment-navBox div').click(function(){
		$('.official-assessment-navBox div').removeClass('active');
		$('.tabBox').hide();
		$(this).addClass('active');
		$('.tabBox').eq($(this).index()).show();
	})
	
})