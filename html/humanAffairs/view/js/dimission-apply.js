
/* 
    # 提交离职申请
    # Bowen
    # 2018-11-15
*/

$(function(){

    //IE placeholder 
    $('.formInput').placeholder();


    // 提交表单
    $('.formBtnSave').click(function() {
        var reason = $('.dimissionReason').val();
        var quitDate = $('.quitDateForm').val();

        if(reason == '') {
            popAlert('请填写离职原因');
            $('.dimissionReason').focus();
            return false;
        }
        if(reason.length > 100) {
            popAlert('离职原因需在100字符以内');
            $('.dimissionReason').focus();
            return false;
        }
        if(quitDate == '') {
            popAlert('请选择离职时间');
            $('.quitDateForm').focus();
            return false;
        }

        // var modifyRemarkInput = $('.modifyRemarkInput').val();
        // if(modifyRemarkInput != "" && modifyRemarkInput.length > 100) {
        //     popAlert('修改备注长度需在100个字符以内');
        //     $('.modifyRemarkInput').focus();
        //     return false;
        // }
       
        $('form').submit();
    })

   
})


