$(function(){
	$(".datepicker").datepicker({
		inline: true,
		showOtherMonths: true,
		selectOtherMonths: true,
		changeMonth: true,
		changeYear: true,
		yearRange: "1950:2050",
		dateFormat: 'yy-mm-dd'
	});
//	$(".datepicker").init();
	
//	$(".datepicker2").datepicker({
//		inline: true,
//		showOtherMonths: true,
//		selectOtherMonths: true,
//		changeMonth: true,
//		changeYear: true,
//		yearRange: "1950:2050",
//		dateFormat: 'yy-mm-dd'
//	});

//	$('.official-assessment-navBox div').click(function(){
//		$('.official-assessment-navBox div').removeClass('active');
//		$('.official-assessment-out-content').hide();
//		$(this).addClass('active');
//		$('.official-assessment-out-content').eq($(this).index()).show();
//	})
	
	$('.button-submit-bottom').click(function(){
		if($('.birthDateForm').val()==""){
			popAlert('请选择离职日期')
		}else{
			$('.official-assessment-out-form').submit();
		}
		
	})
	
})