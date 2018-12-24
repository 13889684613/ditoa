
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

    // 表单页 -- select选择框
	$('.staffFamilyContent').delegate('.formSelect','click',function(e){
		if($(this).hasClass('on')){
			$(this).parents('.form').find('.formSelectList').hide();
			$(this).removeClass('on');
		}else{
			$('.formSelectList').hide();
			$('.formSelect').removeClass('on'); 
			$(this).parents('.staffFamilyInfo').find('.formSelectList').show();
			$(this).addClass('on');
		}
		stopBubble(e);
	})

	// 表单页 -- select 选择
	$('.staffFamilyContent').delegate('.formSelectList li','click',function(){
		var type = $(this).attr('data-type');
		var txt = $(this).text();
		if($(this).hasClass('default')){
			$(this).parents('.staffFamilyInfo').find('.formSelect').removeClass('on').text(txt).css('color','#aaa');
			$(this).parents('.staffFamilyInfo').find('input[type="hidden"]').val($(this).data('type'));
			$(this).parents('.formSelectList').hide();
			return false;
		}
		$(this).parents('.staffFamilyInfo').find('.formSelect').removeClass('on').text(txt).css('color','#222');
		$(this).parents('.staffFamilyInfo').find('input[type="hidden"]').val($(this).data('type'));
		$(this).parents('.formSelectList').hide();
	})

    
    //添加关系
    var i = 0;
    $('.add').click(function(){
        i++;
        var html = '<div class="staffFamilyInfo clearfix"><div class = "formInput formSelect company w250Mr14Fl">请选择所属企业</div><ul class = "formSelectList"><li class = "default">请选择所属企业</li>{{foreach item=c name=companys from=$companys}}<li data-type="{{$c.companyId}}">{{$c.cnName}}</li>{{/foreach}}</ul><input type="hidden" name = "company[]" class = "companyIdForm"/><input type="hidden" name="contractId[]" value="0" /><input type="text" name="contractNo[]" placeholder="合同编号"class="formInput contractNoForm w150Mr14Fl"autocomplete="off"/><input type="text"name="beginDate[]" placeholder="开始日期"class="formInput beginDateForm dataInput w180Mr12Fl datepicker'+i+'"autocomplete="off"/><span class="leftLh42DisBlock">至</span><input type="text" name="overDate[]" placeholder="结束日期"class="formInput overDateForm dataInput w180Mr14Ml12Fl datepicker'+i+'"autocomplete="off"/><img src="public/html/images/input_remove.png"alt=""class="remove"></div>';
        $('.staffFamilyContent').append(html);
        // $(".datepicker"+i).datepicker({
        //     inline: true,
        //     showOtherMonths: true,
        //     selectOtherMonths: true,
        //     changeMonth: true,
        //     changeYear: true,
        //     yearRange: "1950:2050",
        //     dateFormat: 'yy-mm-dd'
        // });
        $( ".beginDateForm" ).datepicker({
			inline: true,
			showOtherMonths: true,
			selectOtherMonths: true,
			changeMonth: true,
			changeYear: true,
			yearRange: "1950:2050",
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			onSelect: function( selectedDate ) {
				$(this).parent().find( ".overDateForm" ).datepicker( "option", "minDate", selectedDate );
			}
		});
		$( ".overDateForm" ).datepicker({
			inline: true,
			showOtherMonths: true,
			selectOtherMonths: true,
			changeMonth: true,
			changeYear: true,
			yearRange: "1950:2050",
			dateFormat: 'yy-mm-dd',
			onSelect: function( selectedDate ) {
				$(this).parent().find( ".beginDateForm" ).datepicker( "option", "maxDate", selectedDate );
			}
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
        $('.overDateForm').each(function() {
            var inputValue = $(this).val();
            if(inputValue == '' || inputValue == '结束日期') {
                popAlert('请选择结束日期');
                // $(this).focus();
                hold = false;
                return false;
            }else{
                hold = true;
            }
        })
        $('.beginDateForm').each(function() {
            var inputValue = $(this).val();
            if(inputValue == '' || inputValue == '请开始日期') {
                popAlert('请选择开始日期');
                // $(this).focus();
                hold = false;
                return false;
            }
        })
        $('.company').each(function() {
			var inputValue = $(this).text();
			if(inputValue == '' || inputValue == '所属企业') {
				popAlert('请选择所属企业');
				$(this).focus();
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
                   $('#contractFrom').ajaxSubmit({
                        type:'post',
                        success:function(data){
                            data = $.parseJSON(data);
                            if(data.status == 'success'){
                                // location.href = data.url;
                                popAlert(data.message,data.url);
                            }else{
                                popAlert(data.message); //弹出错误信息
                            }
                        }
                    })
                }
            }else{
               $('#contractFrom').ajaxSubmit({
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


