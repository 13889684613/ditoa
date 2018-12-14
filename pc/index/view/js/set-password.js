$(function(){
	$('input').placeholder();
	$('.buttonSure').click(function(){
		$('.wrongText').hide();
		var passd = $('.name').val();
		var sure = $('.password').val();
		var pattern = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,}$/;
		if(passd == ''){
			popAlert('请输入密码');
		}else if(!pattern.test(passd)){
			popAlert('密码格式有误');
		}else if(sure == ''){
			popAlert('请确认密码');
		}else if(sure != passd){
			popAlert('两次密码不一致');
		}else{
			$('#pwdForm').ajaxSubmit({
				type:'post',
				success:function(data){
					data = $.parseJSON(data);
					if(data.status == 'success'){
						location.href = 'index.php?_f=index';
					}else{
						popAlert(data.message);	//弹出错误信息
					}
				}
			})
		}
	})
})