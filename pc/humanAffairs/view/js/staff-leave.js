
/* 
    # 员工基本资料页面
    # Bowen
    # 2018-11-12  
*/

$(function(){

    //IE placeholder 
    $('.formInput').placeholder();

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
       
        var modifyRemarkInput = $('.modifyRemarkInput').val();      //请输入修改备注信息

        if($('.modifyBox').css('display') != 'none'){
            if(modifyRemarkInput == "") {
                popAlert('请输入修改备注信息');
                $('.modifyRemarkInput').focus();
                return false;
            }
            if(modifyRemarkInput.length > 100){
                popAlert('修改备注长度需在100个字符以内');
                $('.modifyRemarkInput').focus();
                return false;
            }
        }
        
        $('#leaveForm').ajaxSubmit({
            type:'post',
            success:function(data){
                data = $.parseJSON(data);
                if(data.status == 'success'){
                    popAlert(data.message,data.url);
                }else{
                    popAlert(data.message); //弹出错误信息
                }
            }
        })
    })

})


function stopBubble(e) { 
    //如果提供了事件对象，则这是一个非IE浏览器 
    if ( e && e.stopPropagation ){ 
        //因此它支持W3C的stopPropagation()方法 
        e.stopPropagation(); 
    }else{ 
        //否则，我们需要使用IE的方式来取消事件冒泡 
        window.event.cancelBubble = true; 
    }
}