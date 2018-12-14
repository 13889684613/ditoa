$(function(){
	$('input').placeholder();
	$('.submit').click(function(){
		var name = $('.name').val();
		var password = $('.password').val();
		var regTel = /^1\d{10}$/;
		$('.wrongText').hide();
		if(!regTel.test(name)){
			popAlert('请正确填写您的手机号');
		}else if(password == ''){
			popAlert('请填写登录密码');
		}else{
			$('#loginForm').ajaxSubmit({
				type:'post',
				success:function(data){
					data = $.parseJSON(data);
					if(data.status == 'success'){
						location.href = data.url;
					}else{
						popAlert(data.message);	//弹出错误信息
					}
				}
			})
		}
	})
	
	$('.loginFor').click(function(){
		if($(this).hasClass('on')){
			$(this).removeClass('on')
			$('.loginHide').val(0);
		}else{
			$(this).addClass('on')
			$('.loginHide').val(1);
		}
	})
})