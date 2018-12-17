
/* 
    # 企业详情编辑
	# Bowen
	# 2018-11-21
*/

$(function(){
    //IE placeholder 
    $('.formInput').placeholder();
    $('.otherFormBox').placeholder();

    //添加维修列表
    $('.addBtn').click(function(){
        var html = '<div class="otherForm clearfix"><div class="otherFormBox titleForm w28 clearfix"><p>标题</p><input type="text"name="title[]" placeholder="请输入信息标题"class="otherInput otherTitleInput"/></div><div class="otherFormBox infoForm w33 clearfix"><p>信息内容</p><input type="text" name="content[]" placeholder="请输入内容"class="otherInput otherContentInput"/></div><div class="removeBtn"></div></div>';
        $('.otherAllbox').append(html);
        $('input').placeholder();
    })

    //删除维修列表
    $('.otherAllbox').delegate('.removeBtn','click',function(){
        $this = $(this);
        tic('确定删除吗？', '删除后无法恢复！请谨慎操作！', '确定删除', '取消');
        $('.popTicButtonL a').attr('href','javascript:;');
    })
    $('body').delegate('.popTicButtonL,.popTicButtonR,.popTicTitle img,.popTicMask', 'click', function() {
		$('.popTic').remove();
	})
	
	$('body').delegate('.popTicButtonL','click',function(){
		$this.parents('.otherForm').remove();
		// for(var i = 0; i < $('.table1Content tr').length; i++) {
		// 		$('.table1Content tr').eq(i + 1).find('td').eq(0).find('span').text(i + 1)
		// 	}
		$('.popTic').remove()
	})

    // 提交表单
    var hold = false;
    $('.formBtnSave').click(function() {
        var cnNameInput = $('.cnNameInput').val();                   //请输入企业名称
        var enNameInput = $('.enNameInput').val();                   //请输入企业英文名称
        var cnAddressInput = $('.cnAddressInput').val();             //请输入详细地址
        var enAddressInput = $('.enAddressInput').val();             //请输入企业英文地址
        var cnOfficeAddress = $('.cnOfficeAddress').val();           //请输入办公地址
        var enOfficeAddress = $('.enOfficeAddress').val();           //请输入企业英文办公地址
        var zipCodeInput = $('.zipCodeInput').val();                 //请输入企业邮编
        var phoneInput = $('.phoneInput').val();                     //请输入企业电话
        var faxInput = $('.faxInput').val();                         //请输入企业传真号码
        var cnBankInput = $('.cnBankInput').val();                   //请输入企业开户行名称
        var enBankInput = $('.enBankInput').val();                   //请输入开户行英文名称
        var cnBankAddressInput = $('.cnBankAddressInput').val();     //请输入开户行地址
        var enBankAddressInput = $('.enBankAddressInput').val();     //请输入开户行英文地址
        var bankAccountInput = $('.bankAccountInput').val();         //请输入开户行账号
        var businessInput = $('.businessInput').val();               //企业经营范围
        var createDateForm = $('.createDateForm').val();             //企业成立日期

        if(cnNameInput == '') {
            popAlert('请输入企业名称'); 
            hold = false;
            $('.cnNameInput').focus(); 
            return false;
        }
        if(enNameInput == '') {
            popAlert('请输入企业英文名称'); 
            hold = false;
            $('.enNameInput').focus(); 
            return false;
        }
        if(cnAddressInput == '') {
            popAlert('请输入详细地址'); 
            hold = false;
            $('.cnAddressInput').focus(); 
            return false;
        }
        if(enAddressInput == '') {
            popAlert('请输入企业英文地址');
            hold = false; 
            $('.enAddressInput').focus(); 
            return false;
        }
        if(cnOfficeAddress == '') {
            popAlert('请输入办公地址'); 
            hold = false;
            $('.cnOfficeAddress').focus(); 
            return false;
        }
        if(enOfficeAddress == '') {
            popAlert('请输入企业英文办公地址'); 
            hold = false;
            $('.enOfficeAddress').focus(); 
            return false;
        }
        if(zipCodeInput == '') {
            popAlert('请输入企业邮编'); 
            hold = false;
            $('.zipCodeInput').focus(); 
            return false;
        }
        if(phoneInput == '') {
            popAlert('请输入企业电话'); 
            hold = false;
            $('.phoneInput').focus(); 
            return false;
        }
        if(faxInput == '') {
            popAlert('请输入企业传真号码'); 
            hold = false;
            $('.faxInput').focus(); 
            return false;
        }
        if(cnBankInput == '') {
            popAlert('请输入企业开户行名称'); 
            hold = false;
            $('.cnBankInput').focus(); 
            return false;
        }
        if(enBankInput == '') {
            popAlert('请输入开户行英文名称');
            hold = false; 
            $('.enBankInput').focus(); 
            return false;
        }
        if(cnBankAddressInput == '') {
            popAlert('请输入开户行地址'); 
            hold = false;
            $('.cnBankAddressInput').focus(); 
            return false;
        }
        if(enBankAddressInput == '') {
            popAlert('请输入开户行英文地址'); 
            hold = false;
            $('.enBankAddressInput').focus(); 
            return false;
        }
        if(businessInput != '' && businessInput.length > 500) {
            popAlert('企业经营范围需在500字以内'); 
            hold = false;
            $('.businessInput').focus(); 
            return false;
        }
        if(createDateForm == '') {
            popAlert('请输入企业成立日期'); 
            hold = false;
            $('.createDateForm').focus(); 
            return false;
        }
        if(bankAccountInput == '') {
            popAlert('请输入开户行账号');
            hold = false; 
            $('.bankAccountInput').focus(); 
            return false;
        }else{
            hold = true;
        }

        if(hold == true){
            var count = 0;
            $('.otherInput').each(function(){
                if($(this).val() == ''){
                    // count++;
                    if($(this).hasClass('otherTitleInput')){
                        if($(this).val().length > 50) {
                            count++;
                            popAlert('信息标题需在50字以内'); 
                            $(this).focus(); 
                            return false;
                        }else if($(this).parent().next().find('input').val() != '') {
                            count++;
                            popAlert('请完善其他信息'); 
                            $(this).focus(); 
                            return false;
                        }
                    }
                    if($(this).hasClass('otherContentInput')){
                        if($(this).val().length > 500) {
                            count++;
                            popAlert('信息内容需在500字以内'); 
                            $(this).focus(); 
                            return false;
                        }else if($(this).parent().prev().find('input').val() != '') {
                            count++;
                            popAlert('请完善其他信息'); 
                            $(this).focus(); 
                            return false;
                        }
                    }
                }
            })
            if(count == 0){
                $('#companyForm').ajaxSubmit({
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
            }
        }

    })   
})




