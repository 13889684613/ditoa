
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
        var html = '<div class="staffFamilyInfo clearfix"><input type="text"name="familyName"placeholder="姓名"class="formInput familyNameForm"autocomplete="off"/><div class="form width80"><div class="formInput formSelect">性别</div><ul class="formSelectList"><li class="default">性别</li><li>男</li><li>女</li></ul><input type="hidden"name="sex"class="formInput sexForm"/></div><input type="text"name="birthDate"placeholder="请选择出生日期"class="formInput birthDateForm dataInput datepicker'+i+'"autocomplete="off"/><input type="text"name="relation"placeholder="与本人关系"class="formInput relationForm"autocomplete="off"/><input type="text"name="telphone"placeholder="联系电话"class="formInput telphoneForm"autocomplete="off"/><input type="text"name="workUnit"placeholder="工作单位"class="formInput workUnitForm"autocomplete="off"/><img src="../../public/html/images/input_remove.png"alt=""class="remove"><p class="familyAge">年龄：<span>0</span></p></div>';
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
        $('.workUnitForm').each(function() {
			var inputValue = $(this).val();
			if(inputValue == '') {
				popAlert('请填写成员工作单位');
				$(this).focus();
				hold = false;
				return false;
            }else{
                if(inputValue.length > 50){
                    popAlert('工作单位长度需在50个字符以内');
                    $(this).focus();
                    hold = false;
                    return false;
                }else {
                    hold = true;
                }
            }
        })
        $('.telphoneForm').each(function() {
			var inputValue = $(this).val();
			if(inputValue == '') {
				popAlert('请填写成员电话');
				$(this).focus();
				hold = false;
				return false;
            }else{
                if(!regTel.test(inputValue)){
                    popAlert('请输入正确手机号');
                    $(this).focus();
                    hold = false;
                    return false; 
                }
                if(inputValue.length > 30){
                    popAlert('手机号长度需在30个字符以内');
                    $(this).focus();
                    hold = false;
                    return false;
                }
            }
		})
        $('.relationForm').each(function() {
			var inputValue = $(this).val();
			if(inputValue == '') {
				popAlert('请填写成员关系');
				$(this).focus();
				hold = false;
				return false;
            }else{
                if(inputValue.length > 20){
                    popAlert('关系长度需在20个字符以内');
                    $(this).focus();
                    hold = false;
                    return false;
                }
            }
		})
        $('.birthDateForm').each(function() {
			var inputValue = $(this).val();
			if(inputValue == '' || inputValue == '请选择出生日期') {
				popAlert('请选择出生日期');
				// $(this).focus();
				hold = false;
				return false;
            }
		})
        $('.sexForm').each(function() {
			var inputValue = $(this).val();
			if(inputValue == '' || inputValue == '性别') {
				popAlert('请选择成员性别');
				$(this).focus();
				hold = false;
				return false;
			}
		})
		$('.familyNameForm').each(function() {
			var inputValue = $(this).val();
			if(inputValue == '') {
				popAlert('请填写成员姓名');
				$(this).focus();
				hold = false;
				return false;
            }else{
                if(inputValue.length > 50){
                    popAlert('姓名长度需在50个字符以内');
                    $(this).focus();
                    hold = false;
                    return false;
                }
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
                    $('form').submit(); 
                }
            }else{
                $('form').submit();
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


