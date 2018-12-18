
/* 
    # 新增系统角色
	# Bowen
	# 2018-11-23
*/

$(function(){
    //IE placeholder 
    $('.formInput').placeholder();

    //显示隐藏tips
    $('.tipsIcon').mouseenter(function() {
        $('.tips').show();
    })

    $('.tipsIcon').mouseleave(function() {
        $('.tips').hide();
    })

    // 提交表单
    $('.formBtnSave').click(function() {
        var nameInput = $('.nameInput').val();
        var numInput = $('.numInput').val();
        if(nameInput == '') {
            popAlert('请输入角色名称');
            $('.nameInput').focus();
            return false;
        }
        if(numInput == '') {
            popAlert('请输入排序');
            $('.numInput').focus();
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




