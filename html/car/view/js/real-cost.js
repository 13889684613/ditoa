
/* 
    # 录入实际使用花费
    # Bowen
    # 2018-11-20
*/

$(function(){
    var numReg = /^[0-9]+(.[0-9]{1,2})?$/; //验证有一位或两位小数的正实数
    var timeReg = /^[0-9]+(.[0-9]{1})?$/; //验证有一位小数的正实数
    var reg = /^\+?[1-9][0-9]*$/; //验证非零的正整数
    var hold = false;
    //IE placeholder 
    $('.formInput').placeholder();
    $('.resulTax').placeholder();

    //添加维修列表
    $('.addBtn').click(function(){
        $('.workHourFeeInput').each(function(){
            var workHourFeeInput = $(this).val();
            if(workHourFeeInput == '') {
                popAlert('请输入工时费用');
                $(this).focus();
                hold = false;
                return false;
            }else if(!numReg.test(workHourFeeInput)){
                popAlert('请输入正确工时费用');
                $(this).focus();
                hold = false;
                return false;
            }else{
                hold = true;
            }
        }) 
        $('.workHoursInput').each(function(){
            var workHoursInput = $(this).val();
            if(workHoursInput == '') {
                popAlert('请输入工时数');
                $(this).focus();
                hold = false;
                return false;
            }
            if(!timeReg.test(workHoursInput)){
                popAlert('请输入正确工时数');
                $(this).focus();
                hold = false;
                return false;
            }
        })
        $('.repairFeeInput').each(function(){
            var repairFeeInput = $(this).val();
            if(repairFeeInput == '') {
                popAlert('请输入维修费用');
                $(this).focus();
                hold = false;
                return false;
            }
            if(!numReg.test(repairFeeInput)){
                popAlert('请输入正确维修费用');
                $(this).focus();
                hold = false;
                return false;
            }
        })
        $('.numberInput').each(function(){
            var numberInput = $(this).val();
            if(numberInput == '') {
                popAlert('请输入数量');
                $(this).focus();
                hold = false;
                return false;
            }
            if(!reg.test(numberInput) || numberInput.length > 4){
                popAlert('请输入正确数量');
                $(this).focus();
                hold = false;
                return false;
            }
        })
        $('.itemInput').each(function(){
            var itemInput = $(this).val();
            if(itemInput == '') {
                popAlert('请输入维修项目');
                $(this).focus();
                hold = false;
                return false;
            }
        })
        if(hold == true) {    
            var i;
            var y = $('.listBox').length;
            if(y < 9) {
                i = '0'+(y+1);         
            }else{
                i = y+1;
            }
            var html = '<div class="listBox clearfix"><div class="listNum">'+i+'</div><div class="form project"><p class="formTitle">维修项目<span>*</span></p><input type="text"name="item"placeholder="请输入维修项目"class="formInput itemInput"/></div><div class="form"><p class="formTitle">数量<span>*</span></p><input type="text"name="number"placeholder="请输入数量"class="formInput numberInput"/></div><div class="form"><p class="formTitle">维修费<span>*</span></p><input type="text"name="repairFee"placeholder="请输入维修费用"class="formInput repairFeeInput"/></div><div class="form"><p class="formTitle">工时数<span>*</span></p><input type="text"name="workHours"placeholder="请输入工时数"class="formInput workHoursInput"/></div><div class="form"><p class="formTitle">工时费用<span>*</span></p><input type="text"name="workHourFee"placeholder="请输入工时费用"class="formInput workHourFeeInput"/></div><div class="removeBtn"></div></div>';
            $('.infoLists').append(html);
            $('.formInput').placeholder();
            $('.resulTax').placeholder();
        }   
    })

    //删除维修列表
    $('.infoLists').delegate('.removeBtn','click',function(){
        $this = $(this);
        tic('确定删除吗？', '删除后无法恢复！请谨慎操作！', '确定删除', '取消');
        $('.popTicButtonL a').attr('href','javascript:;');
    })
    $('body').delegate('.popTicButtonL,.popTicButtonR,.popTicTitle img,.popTicMask', 'click', function() {
		$('.popTic').remove();
	})
	
	$('body').delegate('.popTicButtonL','click',function(){
		$this.parents('.listBox').remove();
		$('.listBox').each(function(idx){
            if(idx<9){
                $(this).find('.listNum').text('0'+(idx+1));
            }else{
                $(this).find('.listNum').text(idx+1);
            }
        })
        var all = 0;
        var all2 = 0;
        $('.repairFeeInput').each(function(){
            if(!numReg.test($(this).val())){
                popAlert('请确认维修费是否正确');
                $(this).focus();
                return false;
            }else{
                all += parseFloat($(this).val());
            }
        })
        $('.resultFix span').text(all);
        $('.fixHidden').val(all);
        $('.workHourFeeInput').each(function(){
            if(!numReg.test($(this).val())){
                popAlert('请确认维修费是否正确');
                $(this).focus();
                return false;
            }else{
                all2 += parseFloat($(this).val());
            }
        })
        $('.resultWork span').text(all2);
        $('.workHidden').val(all2);
        var resulTax = $('.resulTax').val();
        if(resulTax != '' && numReg.test(resulTax)){
            $('.resultAll span').text(parseFloat(all)+parseFloat(resulTax)+parseFloat(all2));
            $('.allHidden').val(parseFloat(all)+parseFloat(resulTax)+parseFloat(all2));
        }
		$('.popTic').remove()
	})
        
    //验证维修数量
    $('.infoLists').delegate('.numberInput','change',function(){
        var numberInput = $(this).val();
        if(!reg.test(numberInput) || numberInput.length > 4){
            popAlert('请输入正确数量');
            $(this).focus();
            hold = false;
            return false;
        }
    })

    //计算维修费合计
    $('.infoLists').delegate('.repairFeeInput','change',function(){
        var all = 0;
        $('.repairFeeInput').each(function(){
            if(!numReg.test($(this).val())){
                popAlert('请确认维修费是否正确');
                $(this).focus();
                return false;
            }else{
                all += parseFloat($(this).val());
            }
        })
        $('.resultFix span').text(all);
        $('.fixHidden').val(all);
        var resultWork = $('.resultWork span').text();
        var resulTax = $('.resulTax').val();
        if(resultWork != 0 && resulTax != ''){
            $('.resultAll span').text(parseFloat(all)+parseFloat(resulTax)+parseFloat(resultWork));
            $('.allHidden').val(parseFloat(all)+parseFloat(resulTax)+parseFloat(resultWork));
        }
    })

    //计算工时费合计
    $('.infoLists').delegate('.workHourFeeInput','change',function(){
        var all = 0;
        $('.workHourFeeInput').each(function(){
            if(!numReg.test($(this).val())){
                popAlert('请确认工时费是否正确');
                $(this).focus();
                return false;
            }else{
                all += parseFloat($(this).val());
            }
        })
        $('.resultWork span').text(all);
        $('.workHidden').val(all);
        var resultFix = $('.resultFix span').text();
        var resulTax = $('.resulTax').val();
        if(resultFix != 0 && resulTax != '' && numReg.test(resulTax)){
            $('.resultAll span').text(parseFloat(all)+parseFloat(resulTax)+parseFloat(resultFix));
            $('.allHidden').val(parseFloat(all)+parseFloat(resulTax)+parseFloat(resultFix));
        }
    })

    //添加税费
    $('.resulTax').change(function(){
        var resulTax = $(this).val();
        $('.taxHidden').val(resulTax);
        var all = $('.resultFix span').text();
        var all2 = $('.resultWork span').text();
        $('.resultAll span').text(parseFloat(all)+parseFloat(resulTax)+parseFloat(all2));
        $('.allHidden').val(parseFloat(all)+parseFloat(resulTax)+parseFloat(all2));
    })
   
    // 提交表单
    $('.formBtnSave').click(function() {
        $('.formInput').each(function() {
            if($(this).val() == ''){
                popAlert('请完善维修信息');
                $(this).focus();
                return false;
            }
        })
        $('.workHourFeeInput').each(function(){
            var workHourFeeInput = $(this).val();
            if(workHourFeeInput == '') {
                popAlert('请输入工时费用');
                $(this).focus();
                hold = false;
                return false;
            }else if(!numReg.test(workHourFeeInput)){
                popAlert('请输入正确工时费用');
                $(this).focus();
                hold = false;
                return false;
            }else{
                hold = true;
            }
        }) 
        $('.workHoursInput').each(function(){
            var workHoursInput = $(this).val();
            if(workHoursInput == '') {
                popAlert('请输入工时数');
                $(this).focus();
                hold = false;
                return false;
            }
            if(!timeReg.test(workHoursInput)){
                popAlert('请输入正确工时数');
                $(this).focus();
                hold = false;
                return false;
            }
        })
        $('.repairFeeInput').each(function(){
            var repairFeeInput = $(this).val();
            if(repairFeeInput == '') {
                popAlert('请输入维修费用');
                $(this).focus();
                hold = false;
                return false;
            }
            if(!numReg.test(repairFeeInput)){
                popAlert('请输入正确维修费用');
                $(this).focus();
                hold = false;
                return false;
            }
        })
        $('.numberInput').each(function(){
            var numberInput = $(this).val();
            if(numberInput == '') {
                popAlert('请输入数量');
                $(this).focus();
                hold = false;
                return false;
            }
            if(!reg.test(numberInput) || numberInput.length > 4){
                popAlert('请输入正确数量');
                $(this).focus();
                hold = false;
                return false;
            }
        })
        $('.itemInput').each(function(){
            var itemInput = $(this).val();
            if(itemInput == '') {
                popAlert('请输入维修项目');
                $(this).focus();
                hold = false;
                return false;
            }
        })

        if(hold == true){
            $('form').submit();
        }
    })   
})




