
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
        $('.tips').show();
    })

    $('.tipsIcon').mouseleave(function() {
        $('.tips').hide();
    })

    // 提交表单
    $('.formBtnSave').click(function() {
        var codeInput = $('.codeInput').val();
        var nameInput = $('.nameInput').val();
        var categoryForm = $('.categoryForm').val();
        var rankInput = $('.rankInput').val();
        
        if(codeInput == 0) {
            popAlert('请填写备品编号');
            $('.codeInput').focus();
            return false;
        }
        if(nameInput == '') {
            popAlert('请填写备品名称');
            $('.nameInput').focus();
            return false;
        }
        if(categoryForm == 0) {
            popAlert('请选择备品类别');
            $('.nameInput').focus();
            return false;
        }
        if(rankInput == '') {
            popAlert('请设置排序');
            $('.rankInput').focus();
            return false;
        }
        $('#setForm').ajaxSubmit({
            type:'post',
            success:function(data){
                data = $.parseJSON(data);
                if(data.status == 'success'){
                    location.href = data.url;
                }else{
                    popAlert(data.message); //弹出错误信息
                }
            }
        })
    })   
})




