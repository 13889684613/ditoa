
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

    $(".uploadFile").on("change","input[type='file']",function(e){
        var filePath=$(this).val();
        var arr=filePath.split('\\');
        var fileName=arr[arr.length-1];
        $(this).parents('.form').find('.showFileName').show();
        $(this).parents('.form').find(".showFileName span").text(fileName);
    })

    // 提交表单
    $('.formBtnSave').click(function() {
        var nameInput = $('.nameInput').val();
        var numInput = $('.numInput').val();
        if(nameInput == '') {
            popAlert('请输入制度名称');
            $('.nameInput').focus();
            return false;
        }
        if(numInput == '') {
            popAlert('请设置排序');
            $('.numInput').focus();
            return false;
        }
        $('#rulesForm').ajaxSubmit({
            type:'post',
            success:function(data){
                data = $.parseJSON(data);
                if(data.status == 'success'){
                    popAlert(data.message,data.url);
                    // location.href = data.url;
                }else{
                    popAlert(data.message); //弹出错误信息
                }
            }
        })
    })   
})




