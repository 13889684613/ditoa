
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
       
       $('#pwdForm').ajaxSubmit({
            type:'post',
            success:function(data){
                data = $.parseJSON(data);
                if(data.status == 'success'){
                    alert(data.message);
                    location.href = 'index.php?_f=login';
                }else{
                    popAlert(data.message); //弹出错误信息
                }
            }
        })
    })
   
})
