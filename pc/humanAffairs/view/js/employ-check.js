$(function() {
	$(".tableBox").mCustomScrollbar({
		axis: "x",
		theme: "dark",
		scrollInertia: 0,
	});
	$('.editButtonL').hover(function(){
		$(this).find('img').attr('src','public/html/images/chakanActive.png')
		$(this).css('background-color','#969696');
	},function(){
		$(this).find('img').attr('src','public/html/images/bj.jpg')
		$(this).css('background-color','#fff');
	})
	
	$('.editButtonR').hover(function(){
		$(this).find('img').attr('src','public/html/images/shanchuActive.png')
		$(this).css('background-color','#fb545a');
	},function(){
		$(this).find('img').attr('src','public/html/images/del.jpg')
		$(this).css('background-color','#fff');
	})
	$('.contentTic img').click(function() {
		$('.contentTic').fadeOut();
	})

	$('.sortText img').hover(function() {
		$(this).next().toggle()
	})

	$('.editButtonR').click(function() {
		tic('确定删除企业吗？', '删除后无法恢复！请谨慎操作！', '确定删除', '取消')
	})

	$('body').delegate('.popTicButtonL,.popTicButtonR,.popTicTitle img,.popTicMask', 'click', function() {
		$('.popTic').remove();
	})

	$('.retrievalsInput input').click(function() {
		if($(this).parent().find('.retrievalsInputNavBox')) {
			$(this).parent().find('.retrievalsInputNavBox').show()
		}
	})
	$('.retrievalsInputNavBox').mouseleave(function() {
		$(this).hide();
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
		},
		onSelect:function(year, month, inst){
			$(".startForm").attr('data-type','1');
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
		},
		onSelect:function(year, month, inst){
			$(".endForm").attr('data-type','1');
		}
	});
	
	$('.queryButton').click(function(){
//		var choseInputQy = $('.choseInputQy').attr('data-type');
//		var choseInputBm = $('.choseInputBm').attr('data-type');
//		var choseInputJs = $('.choseInputJs').attr('data-type');
//		var choseInputZw = $('.choseInputZw').attr('data-type');
//		var choseInputZt = $('.choseInputZt').attr('data-type');
//		var startForm = $(".startForm").attr('data-type');
//		var endForm = $(".endForm").attr('data-type');
//		var choseInputName = $(".choseInputName").val();
//		var choseInputNum = $('.choseInputNum').val();
//		if(choseInputQy == 0){
//			popAlert('请选择所属企业')
//		}else if(choseInputBm == 0){
//			popAlert('请选择所属部门')
//		}else if(choseInputZw == 0){
//			popAlert('请选择员工职务')
//		}else if(choseInputName == ''){
//			popAlert('请输入真实姓名')
//		}else if(startForm == 0){
//			popAlert('请选择合同开始时间')
//		}else if(endForm == 0){
//			popAlert('请选择合同结束时间')
//		}else if(choseInputZt == 0){
//			popAlert('请选择状态')
//		}else{
			$('form').submit();
//		}
	})
	
	$('.clearButton').click(function(){
		$('.retrievalsInput input').val('').attr('data-type','0');
	})
})