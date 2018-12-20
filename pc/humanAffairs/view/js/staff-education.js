
/* 
    # 家庭主要成员页面
    # Bowen
    # 2018-11-14  
*/

$(function(){
    
    //IE placeholder 
    $('.formInput').placeholder();
    $('.familyAge').hide();
    
    // 关闭select
    $('body').click(function(){
        $('.formSelect').each(function(){
            if($(this).hasClass('on')){
                $(this).parents('.form').find('.formSelectList').hide();
                $(this).removeClass('on'); 
            }
        })
    })
    
    //添加关系
    var i = 0;
    $('.add').click(function(){
        i++;
        var html = '<div class="staffFamilyInfo clearfix"><input type="hidden" name="resumeId[]" value="0" /><input type="text"name="beginDate[]" placeholder="开始日期"class="formInput startForm dataInput w150LeftMr12 datepicker'+i+'"autocomplete="off"/><span class="leftLh42DisBlock">至</span><input type="text" name="overDate[]" placeholder="结束日期"class="formInput endForm dataInput w150LeftMl12Mr14 datepicker'+i+'"autocomplete="off"/><input type="text" name="workUnit[]" placeholder="单位名称"class="formInput workUnitForm"autocomplete="off"/><input type="text" name="postName[]" placeholder="职务"class="formInput postNameForm w100LeftMr14"autocomplete="off"/><input type="text"name="remark[]"placeholder="备注"class="formInput remarkForm w200LeftMr14"autocomplete="off"/><img src="public/html/images/input_remove.png"alt=""class="remove"></div>';
        $('.staffFamilyContent').append(html);
        $(".datepicker"+i).datepicker({
            inline: true,
            showOtherMonths: true,
            selectOtherMonths: true,
            changeMonth: true,
            changeYear: true,
            yearRange: "1950:2050",
            dateFormat: 'yy-mm-dd'
        });
        $('.familyAge').hide();
        $('.formInput').placeholder();
    })

    //年龄
    $('.staffFamilyContent').delegate('.dataInput','change',function(){
        $(this).parent().find('.familyAge span').text('');
        var value = $(this).val();
        var date = new Date;
        var year = date.getFullYear(); 
        if(value != ''){
            var birthYear = value.substring(0, 4);
            if(birthYear <= year) {
                var txt = year - birthYear;
                $(this).parent().find('.familyAge span').text(txt);
            }else{
                popAlert('请选择正确的出生日期');
                $(this).val(''); 
            }
        }
        $(this).parents('.staffFamilyInfo').find('.familyAge').show();
    })
    var xthis;
    //删除关系
    $('.staffFamilyContent').delegate('.remove','click',function(){
        xthis = $(this);
        // $this.parent().remove();
        tic('确定删除吗？', '删除后无法恢复！请谨慎操作！', '确定删除', '取消');
        $('input').placeholder();
        $('.popTicButtonL a').attr('href','javascript:;');
    })
    $('body').delegate('.popTicButtonR,.popTicTitle img,.popTicMask', 'click', function() {
		$('.popTic').remove();
	})
	
	$('body').delegate('.popTicButtonL','click',function(){
        xthis.parent().remove();
        // $('input,textarea').placeholder();
        $('.popTic').remove()
	})

    // 提交表单
    var hold = false;
    var regTel = /^1\d{10}$/;
    $('.formBtnSave').click(function() {
        $('.postNameForm').each(function() {
			var inputValue = $(this).val();
			if(inputValue == '') {
				popAlert('请填写职务');
				$(this).focus();
				hold = false;
				return false;
            }else{
                if(inputValue.length > 50){
                    popAlert('职务长度需在50个字符以内');
                    $(this).focus();
                    hold = false;
                    return false;
                }else {
                    hold = true;
                }
            }
        })
        $('.workUnitForm').each(function() {
			var inputValue = $(this).val();
			if(inputValue == '') {
				popAlert('请填写单位名称');
				$(this).focus();
				hold = false;
				return false;
            }else{
                if(inputValue.length > 50){
                    popAlert('单位名称需在50个字符以内');
                    $(this).focus();
                    hold = false;
                    return false;
                }
            }
        })
        $('.endForm').each(function() {
            var inputValue = $(this).val();
            if(inputValue == '' || inputValue == '结束日期') {
                popAlert('请选择结束日期');
                $('input').blur();
                hold = false;
                return false;
            }
        })
        $('.startForm').each(function() {
            var inputValue = $(this).val();
            if(inputValue == '' || inputValue == '请开始日期') {
                popAlert('请选择开始日期');
                $('input').blur();
                hold = false;
                return false;
            }
        })
        
        if(hold == true){
            var modifyRemarkInput = $('.modifyRemarkInput').val();      //请输入修改备注信息
            if($('.modifyBox').css('display') != 'none'){
                if(modifyRemarkInput == "") {
                    popAlert('请输入修改备注信息');
                    $('.modifyRemarkInput').focus();
                    return false;
                }else if(modifyRemarkInput.length > 100){
                    popAlert('修改备注长度需在100个字符以内');
                    $('.modifyRemarkInput').focus();
                    return false;
                }else{
                   $('#educationFrom').ajaxSubmit({
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
                }
            }else{
               $('#educationFrom').ajaxSubmit({
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
            }
        }
        // $('input.formInput').each(function() {
        //     var value = $(this).val();
        //     if(value == '' && !$(this).hasClass('workUnitForm')){
        //         popAlert('请完善家庭成员信息');
        //         $(this).focus();
        //         return false;
        //     }
        //     if($(this).hasClass('familyNameForm') && value.length > 50) {
        //         popAlert('姓名长度需在50个字符以内');
        //         $(this).focus();
        //         return false;  
        //     }
        //     if($(this).hasClass('relationForm') && value.length > 20) {
        //         popAlert('关系长度需在20个字符以内');
        //         $(this).focus();
        //         return false;  
        //     }
        //     if($(this).hasClass('telphoneForm') && value.length > 30) {
        //         popAlert('手机号长度需在20个字符以内');
        //         $(this).focus();
        //         return false;  
        //     }
        //     if($(this).hasClass('workUnitForm') && value != '' && value.length > 50) {
        //         popAlert('工作单位长度需在50个字符以内');
        //         $(this).focus();
        //         return false;  
        //     }
        // })

        
    })

})


