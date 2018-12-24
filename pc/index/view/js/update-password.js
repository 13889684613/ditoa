
/* 
    # 出差申请
    # Bowen
    # 2018-11-19
*/

$(function(){

    //IE placeholder 
    $('.formInput').placeholder();
    $('.allDay').hide();
    // 关闭select
    $('body').click(function(){
        $('.formSelect').each(function(){
            if($(this).hasClass('on')){
                $(this).parents('.form').find('.formSelectList').hide();
                $(this).removeClass('on'); 
            }
        })
    })

    // 提交表单
    $('.formBtnSave').click(function() {
       $('.wrongText').hide();
		var oldPwd = $('.formInput[name="oldPwd"]').val();
		var newPwd = $('.formInput[name="newPwd"]').val();
		var enterPwd = $('.formInput[name="enterPwd"]').val();
		var pattern = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,}$/;
		if(oldPwd == ''){
			popAlert('请输入原密码');
			return false;
		}else if(newPwd == ''){
			popAlert('请输入新密码');
			return false;
		}else if(!pattern.test(newPwd)){
			popAlert('新密码格式有误');
			return false;
		}else if(enterPwd == ''){
			popAlert('请确认新密码');
			return false;
		}
       $('#pwdForm').ajaxSubmit({
            type:'post',
            success:function(data){
                data = $.parseJSON(data);
                if(data.status == 'success'){
                    popAlert(data.message,data.url); //弹出错误信息
                }else{
                    popAlert(data.message); //弹出错误信息
                }
            }
        })
    })
   
})
