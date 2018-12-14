$(".tableBox").mCustomScrollbar({
		axis:"x",
		theme:"dark",
		scrollInertia :0,
	});
//关闭弹出层
	$('.popTicTitle img,.button-cancel-popTic').click(function(){
		$('.popTic-email-refuse').fadeOut();
		$('.popTic-quit-pass').fadeOut();
		$('.refuseContent').val("");
		$('.emailPassword').val("");
	})
	//点击页面中的拒绝
	$('.button-refuse').click(function(){
		$('.popTic-email-refuse').fadeIn();
	})

	//点击弹出层的拒绝	
	$('.button-refuse-popTic').click(function(){
		$('.wrongTic').hide();
		var val = $('.refuseContent').val();
		if(val==""){
			popAlert('请输入拒绝原因')
		}else{
			$(this).closest('.popTic-email-refuse').find('form').submit();
		}
	})
	
	//点击页面中的审批通过-email
	$('.button-pass-quit').click(function(){
		$('.popTic-quit-pass').fadeIn();
	})
	
	//点击弹出层的审批通过
	$('.button-pass-quitpass-popTic').click(function(){
		var val = $('.passContent').val();
			$(this).closest('.popTicBox').find('form').submit();
	})