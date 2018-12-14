$(function(){
	$(".outForm").datepicker({
		inline: true,
		showOtherMonths: true,
		selectOtherMonths: true,
		changeMonth: true,
		changeYear: true,
		yearRange: "1950:2050",
		dateFormat: 'yy-mm-dd'
	});

//	$('.official-assessment-navBox div').click(function(){
//		$('.official-assessment-navBox div').removeClass('active');
//		$('.official-assessment-out-content').hide();
//		$(this).addClass('active');
//		$('.official-assessment-out-content').eq($(this).index()).show();
//	})
	
	$('.button-submit-bottom-out').click(function(){
		if($('.birthDateForm').val()==""){
				popAlert('请选择离职日期');
//			$('.alertTips-out').show();
			return false;
		}else{
			$('.official-assessment-out-form').submit();
		}
		
	})
	
	$(".startForm").datepicker({
		inline: true,
		showOtherMonths: true,
		selectOtherMonths: true,
		changeMonth: true,
		changeYear: true,
		yearRange: "1950:2050",
		dateFormat: 'yy-mm-dd',
		changeMonth: true,
		onClose: function(selectedDate) {
			$(".endForm").datepicker("option", "minDate", selectedDate);
		}
	});
	$(".endForm").datepicker({
		inline: true,
		showOtherMonths: true,
		selectOtherMonths: true,
		changeMonth: true,
		changeYear: true,
		yearRange: "1950:2050",
		dateFormat: 'yy-mm-dd',
		onClose: function(selectedDate) {
			$(".startForm").datepicker("option", "maxDate", selectedDate);
		}
	});
	
	$('.button-submit-bottom-extend').click(function(){
		if($('.startForm').val()==""||$('.endForm').val()==""){
			popAlert('请选择延长试用期时间')
		}else{
			$('.official-assessment-extend-form').submit();
		}
		
	});
	
	$('.button-submit-bottom-regular').click(function(){
//		if($('.startForm').val()==""||$('.endForm').val()==""){
//			popAlert('请选择延长试用期时间')
//		}else{
			$('.official-assessment-regular-form').submit();
//		}
		
	})
	
	$('.official-assessment-navBox div').eq(0).click(function(){
		$('.official-assessment-navBox div').removeClass('active');
		$('.tabBox-extend').hide();
		$('.tabBox-out').hide();
		$('.tabBox-regular').hide();
		$(this).addClass('active');
		$('.tabBox-list').show();
	});
	
	$('.official-assessment-navBox div').eq(1).click(function(){
		$('.official-assessment-navBox div').removeClass('active');
		$('.tabBox-extend').hide();
		$('.tabBox-out').hide();
		$('.tabBox-list').hide();
		$('.tabBox-regular').show();
		$(this).addClass('active');
	})
	
	$('.button-out').click(function(){
		$('.official-assessment-navBox div').removeClass('active');
		$('.official-assessment-navBox div').eq(1).addClass('active');
		$('.tabBox-extend').hide();
		$('.tabBox-list').hide();
		$('.tabBox-regular').hide();
		$('.tabBox-out').show();
		$(this).closest('.buttonGroup2').find('#assessmentType').val($(this).attr('data-type'));
	});
	
	$('.button-regular').click(function(){
		$('.official-assessment-navBox div').removeClass('active');
		$('.official-assessment-navBox div').eq(1).addClass('active');
		$('.tabBox-extend').hide();
		$('.tabBox-out').hide();
		$('.tabBox-list').hide();
		$('.tabBox-regular').show();
		$(this).closest('.buttonGroup2').find('#assessmentType').val($(this).attr('data-type'));
	})
	
	$('.button-extend').click(function(){
		$('.official-assessment-navBox div').removeClass('active');
		$('.official-assessment-navBox div').eq(1).addClass('active');
		$('.tabBox-out').hide();
		$('.tabBox-list').hide();
		$('.tabBox-regular').hide();
		$('.tabBox-extend').show();
		$(this).closest('.buttonGroup2').find('#assessmentType').val($(this).attr('data-type'));
	})
	
})