/* 
    # 办公备品申请
	# lfl
	# 2018-11-26
*/

$(function() {
	//	$(".tableBox").mCustomScrollbar({
	//		axis: "x",
	//		theme: "dark",
	//		scrollInertia: 0,
	//	});
	$('input').placeholder();
	var reg = /^\+?[1-9][0-9]*$/; //验证非零的正整数

	var $this
	$('.table1Content').delegate('.del', 'click', function() {
		$this = $(this);
		tic('确定删除吗？', '删除后无法恢复！请谨慎操作！', '确定删除', '取消');
		$('.popTicButtonL a').attr('href','javascript:;');
	})
	
	$('body').delegate('.popTicButtonL,.popTicButtonR,.popTicTitle img,.popTicMask', 'click', function() {
		$('.popTic').remove();
	})
	
	$('body').delegate('.popTicButtonL','click',function(){
		$this.parents('tr').remove();
		$('input').placeholder();
		for(var i = 0; i < $('.table1Content tr').length; i++) {
			$('.table1Content tr').eq(i + 1).find('td').eq(0).find('span').text(i + 1);
		}
		$('.popTic').remove();
		
	})
	$('.contentRightBox').delegate('.tdInput input', 'click', function(e) {
		$('.retrievalsInputNavBox').hide();
		if($(this).parent().find('.retrievalsInputNavBox')) {
			$(this).parent().find('.retrievalsInputNavBox').show()
		}
		stopBubble(e);
	})
	$('body').click(function() {
		$('.retrievalsInputNavBox').hide();
	})
	$('.contentRightBox').delegate('.retrievalsInputNav li', 'click', function() {
		if(!$(this).hasClass('selectLi')){
			$(this).parents('.tdInput').find('input').val($(this).text()).attr('data-type', '1')
		}else{
			$(this).parents('.tdInput').find('input').val($(this).text()).attr('data-type', '0')
		}
		$('.retrievalsInputNavBox').hide()
	})
	var hold = false;
	$('.addButton img').click(function() {
		var html = $('<tr class="choseStyle"><td class="paddingLeft27 text-center"><span>4</span></td><td><div class="tdInput"><input type="text" placeholder="请选择备品类别" readonly="readonly" data-type="0" class="InputDown InputLb" value="" /><div class="retrievalsInputNavBox"><ul class="retrievalsInputNav"><li class="selectLi">请选择备品类别</li><li>办公用品1</li><li>办公用品2</li><li>办公用品3</li><li>办公用品4</li><li>办公用品5</li><li>办公用品6</li></ul></div></div></td><td><div class="tdInput"><input type="text" placeholder="请选择备品名称" readonly="readonly" data-type="0" class="InputDown InputNa" value="" /><div class="retrievalsInputNavBox"><ul class="retrievalsInputNav"><li class="selectLi">请选择备品名称</li><li>办公用品1</li><li>办公用品2</li><li>办公用品3</li><li>办公用品4</li><li>办公用品5</li><li>办公用品6</li></ul></div></div></td><td><div class="tdInput"><input type="text" placeholder="规格型号" class="InputXh" value="" /></div></td><td><div class="tdInput text-center"><input type="text" placeholder="请输入数量" class="InputNm text-center" value="" /></div></td><td><div class="tdInput text-center"><input type="text" placeholder="单位" class="InputDw text-center" value="" /></div></td><td><div class="tdInput"><input type="text" placeholder="请输入申请原因或备注信息" class="InputTr" value="" /></div></td><td class="del"><span><img src="images/del.jpg" alt=""></span></td></tr>')
		$('.InputDw').each(function() {
			var workdInput = $(this).val();
			if(workdInput == '') {
				popAlert('请输入单位');
				$(this).focus();
				hold = false;
				return false;
			}else{
				hold = true;
			}
		})
		$('.InputNm').each(function() {
			var workmInput = $(this).val();
			if(workmInput == '') {
				popAlert('请输入数量');
				$(this).focus();
				hold = false;
				return false;
			}
			if(workmInput == 0) {
				popAlert('数量不能为0');
				$(this).focus();
				hold = false;
				return false;
			}
			if(!reg.test(workmInput)){
				popAlert('数量请输入数字');
				$(this).focus();
				hold = false;
				return false;
			}
		})
		$('.InputXh').each(function() {
			var workXhInput = $(this).val();
			if(workXhInput == '') {
				popAlert('规格型号');
				$(this).focus();
				hold = false;
				return false;
			}
		})
		$('.InputNa').each(function() {
			var workNaInput = $(this).attr('data-type');
			if(workNaInput == 0) {
				popAlert('请输入备品名称');
				$(this).focus();
				hold = false;
				return false;
			}
		})
		$('.InputLb').each(function() {
			var workHoursInput = $(this).attr('data-type');
			if(workHoursInput == 0) {
				popAlert('请输入类别');
				$(this).focus();
				hold = false;
				return false;
			}
		})
		
		
		if(hold == true){
			$('.table1Content').append(html);
			for(var i = 0; i < $('.table1Content tr').length; i++) {
				$('.table1Content tr').eq(i + 1).find('td').eq(0).find('span').text(i + 1)
			}
			$('input').placeholder();
		}
		
		
	})
	$('.formBtnSave').click(function(){
		$('.InputDw').each(function() {
			var workdInput = $(this).val();
			if(workdInput == '') {
				popAlert('请输入单位');
				$(this).focus();
				hold = false;
				return false;
			}else{
				hold = true;
			}
		})
		$('.InputNm').each(function() {
			var workmInput = $(this).val();
			if(workmInput == '') {
				popAlert('请输入数量');
				$(this).focus();
				hold = false;
				return false;
			}
			if(workmInput == 0) {
				popAlert('数量不能为0');
				$(this).focus();
				hold = false;
				return false;
			}
			if(!reg.test(workmInput)){
				popAlert('数量请输入数字');
				$(this).focus();
				hold = false;
				return false;
			}
		})
		$('.InputXh').each(function() {
			var workXhInput = $(this).val();
			if(workXhInput == '') {
				popAlert('规格型号');
				$(this).focus();
				hold = false;
				return false;
			}
		})
		$('.InputNa').each(function() {
			var workNaInput = $(this).attr('data-type');
			if(workNaInput == 0) {
				popAlert('请输入备品名称');
				$(this).focus();
				hold = false;
				return false;
			}
		})
		$('.InputLb').each(function() {
			var workHoursInput = $(this).attr('data-type');
			if(workHoursInput == 0) {
				popAlert('请输入类别');
				$(this).focus();
				hold = false;
				return false;
			}
		})
		if(hold == true){
			$('form').submit()
		}
		})
	
})