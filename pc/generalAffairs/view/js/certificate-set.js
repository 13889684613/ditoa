
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

    $('.retrievalsInput input').click(function() {
		if($(this).parent().find('.retrievalsInputNavBox')) {
			$(this).parent().find('.retrievalsInputNavBox').show()
		}
    })
    
	$('.retrievalsInputNavBox').mouseleave(function() {
		$(this).hide();
    })
    
    // 提交表单
    $('.formBtnSave').click(function() {
        var companyInput = $('.companyInput').val();
        var nameInput = $('.nameInput').val();
        var numInput = $('.numInput').val(); 
        var overDateForm = $('.overDateForm').val(); 
        if(companyInput == '') {
            popAlert('请选择所属企业');
            $('.companyInput').focus();
            return false;
        }
        if(nameInput == '') {
            popAlert('请输入证件名称');
            $('.nameInput').focus();
            return false;
        }
        if(overDateForm == '') {
            popAlert('请设置证件到期日');
            $('.overDateForm').focus();
            return false;
        } 
        if(numInput == '') {
            popAlert('请设置排序');
            $('.numInput').focus();
            return false;
        }
        $('#cerForm').ajaxSubmit({
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




