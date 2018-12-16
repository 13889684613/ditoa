/* 
    # 建自定义审批流程
	# lfl
	# 2018-11-24
*/
$(function() {
	$('input').placeholder();
	$(".tableBox").mCustomScrollbar({
		axis: "x",
		theme: "dark",
		scrollInertia: 0,
	});
	$('.contentTic img').click(function() {
		$('.contentTic').fadeOut();
	})

	$('.sortText').hover(function() {
		$(this).next().toggle()
	})

	$('.editButtonR').click(function() {
		tic('确定删除企业吗？', '删除后无法恢复！请谨慎操作！', '确定删除', '取消')
	})

	$('body').delegate('.popTicButtonL,.popTicButtonR,.popTicTitle img,.popTicMask', 'click', function() {
		$('.popTic').remove();
	})
	$('body').delegate('.retrievalsInput input,.StableTdR input', 'click', function(e) {
		$('.retrievalsInputNavBox').hide();
		if($(this).parent().find('.retrievalsInputNavBox')) {
			$(this).parent().find('.retrievalsInputNavBox').show()
		}
		stopBubble(e);
	})
	$('body').click(function() {
		$('.retrievalsInputNavBox').hide();
	})
	$('body').delegate('.retrievalsInputNav li', 'click', function() {
		$(this).parents('.retrievalsInput').find('input').val($(this).text()).attr('data-type', '1')
		$(this).parents('.StableTdR').find('input').val($(this).text()).attr('data-type', '1')
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
		onSelect: function(year, month, inst) {
			$(".startForm").attr('data-type', '1');
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
		onSelect: function(year, month, inst) {
			$(".endForm").attr('data-type', '1');
		}
	});
	var hold = false;
	$('.queryButton').click(function() {
		var choseInputLc = $('.choseInputLc').attr('data-type');
		var choseInputQy = $('.choseInputQy').attr('data-type');
		var choseInputBm = $('.choseInputBm').attr('data-type');
		var choseInputJs = $('.choseInputJs').attr('data-type');
		if(choseInputLc == 0) {
			popAlert('请选择审批流程类别')
		} else if(choseInputQy == 0) {
			popAlert('请选择所属办事处')
		} else if(choseInputBm == 0) {
			popAlert('请选择所属工作组')
		} else if(choseInputJs == 0) {
			popAlert('请选择发起审批角色')
		} else {
			$('.approvalInformationBox').show()
			//			$('form').submit();
		}
	})
	$('.approvalInformationBox').delegate('.addInformationBox', 'click', function() {
		$('.InputJs').each(function() {
			var workHourFeeInput = $(this).attr('data-type');
			if(workHourFeeInput == 0) {
				popAlert('请选择所属角色');
				$(this).focus();
				hold = false;
				return false;
			} else {
				hold = true;
			}
		})
		$('.InputBm').each(function() {
			var workHourFeeInput = $(this).attr('data-type');
			if(workHourFeeInput == 0) {
				popAlert('请选择所属工作组');
				$(this).focus();
				hold = false;
				return false;
			}
		})
		$('.InputQy').each(function() {
			var workHourFeeInput = $(this).attr('data-type');
			if(workHourFeeInput == 0) {
				popAlert('请选择所属办事处');
				$(this).focus();
				hold = false;
				return false;
			}
		})

		if(hold == true) {
			var choseInputLc = $('.choseInputLc').val();
			var choseInputQy = $('.choseInputQy').val();
			var choseInputBm = $('.choseInputBm').val();
			var choseInputJs = $('.choseInputJs').val();
//			$.ajax({
//				type:"get",
//				url:"",
//				async: true,
//				dataType: 'json',
//				data:{
//					choseInputLc:choseInputLc,
//					choseInputQy:choseInputQy,
//					choseInputBm:choseInputBm,
//					choseInputJs:choseInputJs
//				},
//			});
			var i;
			var y = $('.approval-information').length;
			if(y < 9) {
				i = '0' + (y + 1);
			} else {
				i = y + 1;
			}
			var html = $('<div class="approval-information"><div class="approval-informationTitle">设置审批信息</div><table class="Stable"><tr><td width="84" class="td1 text-center"><span class="center-block">' + i + '</span></td><td class="td2" width="392"><div class="StableTd clearfix"><div class="StableTdL pull-left">所属企业<span class="must">*</span></div><div class="StableTdR pull-left"><input type="text" data-type="0" readonly="readonly" onfocus="this.blur()" class="InputQy" placeholder="请选择" /><div class="retrievalsInputNavBox"><ul class="retrievalsInputNav"><li>大连国际货运有限公司1</li><li>大连国际货运有限公司2</li><li>大连国际货运有限公司3</li><li>大连国际货运有限公司4</li><li>大连国际货运有限公司5</li><li>大连国际货运有限公司6</li></ul></div></div></div></td><td class="td3" width="398"><div class="StableTd clearfix"><div class="StableTdL pull-left">所属部门<span class="must">*</span></div><div class="StableTdR pull-left"><input type="text" readonly="readonly" onfocus="this.blur()" class="InputBm" data-type="0" placeholder="请选择" /><div class="retrievalsInputNavBox"><ul class="retrievalsInputNav"><li>大连国际货运有限公司1</li><li>大连国际货运有限公司2</li><li>大连国际货运有限公司3</li><li>大连国际货运有限公司4</li><li>大连国际货运有限公司5</li><li>大连国际货运有限公司6</li></ul></div></div></div></td><td class="td4" width="633"><div class="StableTd clearfix"><div class="StableTdL pull-left">所属角色<span class="must">*</span></div><div class="StableTdR pull-left"><input type="text" readonly="readonly" onfocus="this.blur()" class="InputJs" data-type="0" placeholder="请选择" /><div class="retrievalsInputNavBox"><ul class="retrievalsInputNav"><li>大连国际货运有限公司1</li><li>大连国际货运有限公司2</li><li>大连国际货运有限公司3</li><li>大连国际货运有限公司4</li><li>大连国际货运有限公司5</li><li>大连国际货运有限公司6</li></ul></div></div><div class="Sdel"><img src="images/del.jpg" alt="" /></div></div></td></tr></table></div>')
			$('.approval-informationBox').append(html);
			$('input').placeholder();
		}
	})
	
	
	$('.formBtnSave').click(function(){
		var choseInputLc = $('.choseInputLc').attr('data-type');
		var choseInputQy = $('.choseInputQy').attr('data-type');
		var choseInputBm = $('.choseInputBm').attr('data-type');
		var choseInputJs = $('.choseInputJs').attr('data-type');
		if(choseInputLc == 0) {
			popAlert('请选择审批流程类别')
		} else if(choseInputQy == 0) {
			popAlert('请选择所属办事处')
		} else if(choseInputBm == 0) {
			popAlert('请选择所属工作组')
		} else if(choseInputJs == 0) {
			popAlert('请选择发起审批角色')
		} else {
			$('.approvalInformationBox').show()
			//			$('form').submit();
		}
	})
	$('body').delegate('.formBtnSave', 'click', function() {
		$('.InputJs').each(function() {
			var workHourFeeInput = $(this).attr('data-type');
			if(workHourFeeInput == 0) {
				popAlert('请选择所属角色');
				$(this).focus();
				hold = false;
				return false;
			} else {
				hold = true;
			}
		})
		$('.InputBm').each(function() {
			var workHourFeeInput = $(this).attr('data-type');
			if(workHourFeeInput == 0) {
				popAlert('请选择所属工作组');
				$(this).focus();
				hold = false;
				return false;
			}
		})
		$('.InputQy').each(function() {
			var workHourFeeInput = $(this).attr('data-type');
			if(workHourFeeInput == 0) {
				popAlert('请选择所属办事处');
				$(this).focus();
				hold = false;
				return false;
			}
		})

		if(hold == true) {
			$('#form').submit();
		}
	})
	
	var $this
	$('body').delegate('.Sdel', 'click', function() {
		$this = $(this);
		tic('确定删除吗？', '删除后无法恢复！请谨慎操作！', '确定删除', '取消');
		$('.popTicButtonL a').attr('href','javascript:;');
	})
	$('body').delegate('.popTicButtonL','click',function(){
		$this.parents('.approval-information').remove();
		for(var i = 0; i < $('.approval-information').length; i++) {
				var numy = i + 1;
				if(numy<9){
					numy = '0'+(i+1);
				}else{
					numy = (i+1);
				}
				$('.approval-information').eq(i).find('.td1 span').text(numy)
			}
		$('.popTic').remove()
	})
})