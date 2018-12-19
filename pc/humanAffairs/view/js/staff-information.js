
/* 
    # 员工基本资料页面
    # Bowen
    # 2018-11-12  
*/

$(function(){

    //IE placeholder 
    $('.formInput').placeholder();

    // 关闭select
    $('body').click(function(){
        $('.formSelect').each(function(){
            if($(this).hasClass('on')){
                $(this).parents('.form').find('.formSelectList').hide();
                $(this).removeClass('on'); 
            }
        })
    })
    
    // 提交表单
    $('.formBtnSave').click(function() {
        //必填
        var companyId = $('.companyIdForm').val();                  //请选择所属企业
        var officeId = $('.officeIdForm').val();                    //请选择部门名称
        var preview = $('#preview').attr('src');                    //请上传照片
        var groupId = $('.groupIdForm').val();                      //请选择所属小组
        var sysRoleId = $('.sysRoleIdForm').val();                  //请选择职务
        var telForm = $('.telForm').val();                          //请输入手机号
        var nameForm = $('.nameForm').val();                        //请输入员工真实姓名
        var sexForm = $('.sexForm').val();                          //请选择性别
        var zoneNumInput = $('.zoneNumInput').val();                //请输入区号
        var landLineInput = $('.landLineInput').val();              //请输入座机号
        var extensionNumInput = $('.extensionNumInput').val();      //请输入分机号
        var idForm = $('.idForm').val();                            //请输入身份证号
        var birthDateForm = $('.birthDateForm').val();              //请选择出生日期
        var emailForm = $('.emailForm').val();                      //请输入邮箱地址
        var addressForm = $('.addressForm').val();                  //请输入联系地址
        var schoolForm = $('.schoolForm').val();                    //请输入毕业学校
        var majorForm = $('.majorForm').val();                      //请输入毕业专业
        var education = $('.educationForm').val();                  //请选择学历
        var registerAddressForm = $('.registerAddressForm').val();  //请输入户口所在地
        var registerNatureForm = $('.registerNatureForm').val();    //请选择户口性质
        var modifyRemarkInput = $('.modifyRemarkInput').val();      //请输入修改备注信息
        

        // var phone = zoneNumInput + landLineInput;  //座机号
        var phone = landLineInput;
        var regex = /^(\w)+(\.\w+)*@(\w)+((\.[A-Za-z]{2,3}){1,3})$/;
        var pReg = /^1\d{10}$/;

        if(companyId == "" || companyId == "请选择所属企业") {
            popAlert('请选择所属企业');
            return false;
        }
        if(officeId == ""|| officeId == "请选择部门名称") {
            popAlert('请选择部门名称');
            return false;
        } 
        // if(preview == "" || preview == undefined) {
        //     popAlert('请上传照片');
        //     return false;
        // }
        if(groupId == "" || groupId == "请选择所属小组") {
            popAlert('请选择所属小组');
            return false;
        }
        if(sysRoleId == "" || sysRoleId == "请选择职务") {
            popAlert('请选择职务');
            return false;
        }
        if(telForm == "") {
            popAlert('请输入手机号');
            $('.telForm').focus();
            return false;
        }    
        if(!pReg.test(telForm)) {
            popAlert('请确认手机号格式是否正确');
            $('.telForm').focus();
            return false;
        }
        if(nameForm == "") {
            popAlert('请输入员工真实姓名');
            $('.nameForm').focus();
            return false;
        }
        if(nameForm.length > 20) {
            popAlert('姓名长度需在20字以内');
            $('.nameForm').focus();
            return false;
        }
        if(sexForm == "") {
            popAlert('请选择性别');
            return false;
        }
        // if(zoneNumInput == "") {
        //     popAlert('请输入区号');
        //     $('.zoneNumInput').focus();
        //     return false;
        // }
        // if(isNaN(zoneNumInput)) {
        //     popAlert('区号需为数字');
        //     $('.zoneNumInput').focus();
        //     return false;
        // }
        // if(landLineInput == "") {
        //     popAlert('请输入座机号');
        //     $('.landLineInput').focus();
        //     return false;
        // }
        if(landLineInput!=''){
            if(isNaN(landLineInput)) {
                popAlert('座机号需为数字');
                $('.landLineInput').focus();
                return false;
            }
        }
        if(phone!=""){
            if(phone.length > 50) {
                popAlert('座机号长度需在11个字符以内');
                $('.zoneNumInput').focus();
                return false;
            }
        }
        if(extensionNumInput!=""){
            if(extensionNumInput == "") {
                popAlert('请输入分机号');
                $('.extensionNumInput').focus();
                return false;
            }
            if(isNaN(extensionNumInput)) {
                popAlert('分机号需为数字');
                $('.extensionNumInput').focus();
                return false;
            }
            if(extensionNumInput.length > 20) {
                popAlert('分机号长度需在20个字符以内');
                $('.extensionNumInput').focus();
                return false;
            }
        }
        if(idForm == "") {
            popAlert('请输入身份证号');
            $('.idForm').focus();
            return false;
        }
        if(idForm.length != 15 && idForm.length != 18) {
            popAlert('请输入正确的身份证号');
            $('.idForm').focus();
            return false;
        }
        if(birthDateForm == "") {
            popAlert('请选择出生日期');
            return false;
        }
        // if(emailForm == "") {
        //     popAlert('请输入邮箱地址');
        //     $('.emailForm').focus();
        //     return false;
        // }
        if(emailForm!=""){
            if(!regex.test(emailForm)) {
                popAlert('请输入正确的邮箱地址');
                $('.emailForm').focus();
                return false;
            }
        }
        if(addressForm == "") {
            popAlert('请输入联系地址');
            $('.addressForm').focus();
            return false;
        }
        if(addressForm.length > 50) {
            popAlert('联系地址长度需在50个字符以内');
            $('.addressForm').focus();
            return false;
        }
        if(schoolForm == "") {
            popAlert('请输入毕业学校');
            $('.schoolForm').focus();
            return false;
        }
        if(schoolForm.length > 50) {
            popAlert('毕业学校长度需在50个字符以内');
            $('.schoolForm').focus();
            return false;
        }
        if(majorForm == "") {
            popAlert('请输入毕业专业');
            $('.majorForm').focus();
            return false;
        }
        if(majorForm.length > 50) {
            popAlert('毕业专业长度需在50个字符以内');
            $('.majorForm').focus();
            return false;
        }
        if(education == "" || education == "请选择学历") {
            popAlert('请选择学历');
            return false;
        }
        if(registerAddressForm == "") {
            popAlert('请输入户口所在地');
            $('.registerAddressForm').focus();
            return false;
        }
        if(registerAddressForm.length > 50) {
            popAlert('户口所在地长度需在50个字符以内');
            $('.registerAddressForm').focus();
            return false;
        }
        if(registerNatureForm == "") {
            popAlert('请选择户口性质');
            return false;
        }
        if($('.modifyBox').css('display') != 'none'){
            if(modifyRemarkInput == "") {
                popAlert('请输入修改备注信息');
                $('.modifyRemarkInput').focus();
                return false;
            }
            if(modifyRemarkInput.length > 100){
                popAlert('修改备注长度需在100个字符以内');
                $('.modifyRemarkInput').focus();
                return false;
            }
        }

        var nationForm = $('.nationForm').val();                    //请输入民族
        var heightForm = $('.heightForm').val();                    //请输入身高
        var weightForm = $('.weightForm').val();                    //请输入体重
        var cnBankAccountForm = $('.cnBankAccountForm').val();      //请输入中国银行卡号    
        var busFeeForm = $('.busFeeForm').val();                    //请输入公交线路单程车费（元
        var backgroundInput = $('.backgroundInput').val();          //请输入北背景调查
        var remarkInput = $('.remarkInput').val();                  //请输入备注

        //选填
        if(nationForm != "" && nationForm.length > 20) {
            popAlert('民族长度需在20个字符以内');
            $('.nationForm').focus();
            return false;
        }
        if(cnBankAccountForm != "" && cnBankAccountForm.length > 50) {
            popAlert('银行账号长度需在50个字符以内');
            $('.cnBankAccountForm').focus();
            return false;
        }
        // if(busFeeForm != "" && busFeeForm.length > 8) {
        //     popAlert('公交车费长度需在8个字符以内');
        //     $('.busFeeForm').focus();
        //     return false;
        // }
        if(backgroundInput != "" && backgroundInput.length > 100) {
            popAlert('背景调查长度需在100个字符以内');
            $('.backgroundInput').focus();
            return false;
        }
        if(remarkInput != "" && remarkInput.length > 100) {
            popAlert('备注长度需在100个字符以内');
            $('.remarkInput').focus();
            return false;
        }
        
        $('#staffForm').ajaxSubmit({
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


function stopBubble(e) { 
    //如果提供了事件对象，则这是一个非IE浏览器 
    if ( e && e.stopPropagation ){ 
        //因此它支持W3C的stopPropagation()方法 
        e.stopPropagation(); 
    }else{ 
        //否则，我们需要使用IE的方式来取消事件冒泡 
        window.event.cancelBubble = true; 
    }
}