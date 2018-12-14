/* 
    # 调转部门
	# lfl
	# 2018-11-27
*/

$(function(){
	$('.InputLb').mouseover(function() {
		if($(this).parent().find('.retrievalsInputNavBox')) {
			$(this).parent().find('.retrievalsInputNavBox').show()
		}
	})
	$('.retrievalsInputNavBox').mouseleave(function() {
		$(this).hide();
	})

	$('.retrievalsInputNav li').click(function() {
		$(this).parents('.staffInfoFormCnt').find('input').val($(this).text()).attr('data-type', '1')
		$('.retrievalsInputNavBox').hide()
	})
	
	$('.formBtnSave').click(function(){
		var val = $('.InputLb').attr('data-type');
		if(val == 0){
			popAlert('请选择所属部门')
		}else{
			$('form').submit()
		}
	})
})