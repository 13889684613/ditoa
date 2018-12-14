$(function() {
	$(".tableBox").mCustomScrollbar({
		axis: "x",
		theme: "dark",
		scrollInertia: 0,
	});
	$('.editButtonL').hover(function(){
		$(this).find('img').attr('src','../../public/html/images/bj_cActive.png')
		$(this).css('background-color','#4d76cc');
	},function(){
		$(this).find('img').attr('src','images/bj_c.jpg')
		$(this).css('background-color','#fff');
	})
	
	$('.editButtonZ').hover(function(){
		$(this).find('img').attr('src','../../public/html/images/chakanActive.png')
		$(this).css('background-color','#969696');
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
//		var choseInputBm = $('.choseInputBm').attr('data-type');
//		var choseInputXz = $('.choseInputXz').attr('data-type');
//		var choseInputZc = $('.choseInputZc').val();
//		if(choseInputBm == 0){
//			popAlert('请选择所属部门')
//		}else if(choseInputXz == 0){
//			popAlert('请选择所属小组')
//		}else if(choseInputZc == ''){
//			popAlert('请输入资产名称')
//		}else{
			$('form').submit();
//		}
	})
	
	$('.clearButton').click(function(){
		$('.retrievalsInput input').val('').attr('data-type','0');
	})
})