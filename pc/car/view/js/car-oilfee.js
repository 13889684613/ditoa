$(function() {
//	$(".tableBox").mCustomScrollbar({
//		axis: "x",
//		theme: "dark",
//		scrollInertia: 0,
//	});
	$('.editButtonL').hover(function(){
		$(this).find('img').attr('src','../../public/html/images/bjActive.png')
		$(this).css('background-color','#4d76cc');
	},function(){
		$(this).find('img').attr('src','images/bj.jpg')
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

	$('.retrievalsInputNav li').click(function() {
		$(this).parents('.retrievalsInput').find('input').val($(this).text()).attr('data-type', '1')
		$('.retrievalsInputNavBox').hide()
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
	
	$('.queryButtonAdd').click(function(){
		var choseInputAdd1 = $('.choseInputAdd1').val();
		var choseInputAdd2 = $('.choseInputAdd2').val();
		var choseInputAdd3 = $('.choseInputAdd3').val();
		var choseInputAdd4 = $('.choseInputAdd4').val();
		if(choseInputAdd1 == ''){
			popAlert('请输入车辆牌照')
		}else if(choseInputAdd2 == ''){
			popAlert('请选择记录日期')
		}else if(choseInputAdd3 == ''){
			popAlert('请输入油费金额')
		}else if(choseInputAdd4 == ''){
			popAlert('请输入加油升数')
		}else{
			$('#form2').submit();
		}
	})
	
	$('.clearButton').click(function(){
		$(this).parents('.retrievalBox').find('.retrievalsInput input').val('').attr('data-type','0');
	})
})