
/* 
    # 新增请假类型
	# Bowen
	# 2018-11-23
*/

$(function(){
    //IE placeholder 
    $('.formInput').placeholder();

    //显示隐藏tips
    $('.tipsIcon').mouseenter(function() {
        $(this).find('.tips').show();
    })

    $('.tipsIcon').mouseleave(function() {
        $('.tips').hide();
    })

    // 提交表单
    $('.formBtnSave').click(function() {
        var nameInput = $('.nameInput').val();
        var dayInput = $('.dayInput').val();
        var rankInput = $('.rankInput').val();
        var modifyRemarkInput = $('.modifyRemarkInput').val();
        
        if(nameInput == '') {
            popAlert('请填写假期类型名称');
            $('.nameInput').focus();
            return false;
        }
        if(dayInput == 0) {
            popAlert('请填写假期天数');
            $('.dayInput').focus();
            return false;
        }
        if(rankInput == '') {
            popAlert('请设置排序');
            $('.rankInput').focus();
            return false;
        }
        if(modifyRemarkInput == '') {
            popAlert('请填写假期说明');
            $('.modifyRemarkInput').focus();
            return false;
        }
        $('#setForm').ajaxSubmit({
            type:'post',
            success:function(data){
                data = $.parseJSON(data);
                if(data.status == 'success'){
                    popAlert(data.message,data.url); //弹出成功信息
                    // location.href = data.url;
                }else{
                    popAlert(data.message); //弹出错误信息
                }
            }
        })
    })   
})




