
/* 
    # 出差申请
    # Bowen
    # 2018-11-19
*/

$(function(){

    //IE placeholder 
    $('.formInput').placeholder();
    $('.allDay').hide();
    // 关闭select
    $('body').click(function(){
        $('.formSelect').each(function(){
            if($(this).hasClass('on')){
                $(this).parents('.form').find('.formSelectList').hide();
                $(this).removeClass('on'); 
            }
        })
    })

    //出差时间
    $( ".startForm" ).datepicker({
        inline: true,
        showOtherMonths: true,
        selectOtherMonths: true,
        changeMonth: true,
        changeYear: true,
        yearRange: "1950:2050",
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        onClose: function( selectedDate ) {
            $( ".endForm" ).datepicker( "option", "minDate", selectedDate );
        },
        onSelect: function(selectedDate) {
            var end = $( ".endForm" ).val();
            var start = selectedDate;
            var date = new Date(Date.parse(start.replace(/-/g,"/"))); //开始日期
            var time3 = date.getTime(); //开始日期时间戳
            var date2 = new Date(Date.parse(end.replace(/-/g,"/")));//结束日期
            var time4 = Date.parse(date2);//结束日期时间戳
            var time; //开始结束时间戳间隔
            time = time4-time3;
            day = timestampToTime3(time);
            if(end != ''){
                if(start != ''){
                    $('.allDay').show();
                    $('.allDay span').text(day);
                }
            }
        }
    });

    $( ".endForm" ).datepicker({
        inline: true,
        showOtherMonths: true,
        selectOtherMonths: true,
        changeMonth: true,
        changeYear: true,
        yearRange: "1950:2050",
        dateFormat: 'yy-mm-dd',
        onClose: function( selectedDate ) {
            $( ".startForm" ).datepicker( "option", "maxDate", selectedDate );
        },
        onSelect: function(selectedDate) {
            var start = $( ".startForm" ).val();
            var end = selectedDate;
            var date = new Date(Date.parse(start.replace(/-/g,"/"))); //开始日期
            var time3 = date.getTime(); //开始日期时间戳
            var date2= new Date(Date.parse(end.replace(/-/g,"/")));//结束日期
            var time4 = Date.parse(date2);//结束日期时间戳
            var time; //开始结束时间戳间隔
            time = time4-time3;
            day = timestampToTime3(time);
            if(start != ''){
                if(end != ''){
                    $('.allDay').show();
                    $('.allDay span').text(day);
                }
            }
        }
    });

    $('.dataInput').change(function(){
        if($(this).val() == ''){
            $('.allDay').hide();
        }
    })
   
    //显示隐藏tips
    $('.tipsIcon').mouseenter(function() {
        $('.tips').show();
    })

    $('.tipsIcon').mouseleave(function() {
        $('.tips').hide();
    })

    // 提交表单
    $('.formBtnSave').click(function() {
        var startForm = $('.startForm').val();
        var endForm = $('.endForm').val();
        var tripForm = $('.tripForm').val();
        var receiverUsrForm = $('.receiverUsrForm').val();
        var reasonInput = $('.reasonInput').val();
        var remarkInput = $('.remarkInput').val();
        if(startForm == '') {
            popAlert('请选择出差开始时间');
            return false;
        }
        if(endForm == '') {
            popAlert('请选择出差结束时间');
            return false;
        }
        if(tripForm == '') {
            popAlert('请输入出差行程');
            $('.tripForm').foucs();
            return false;
        }
        if(tripForm.length > 100) {
            popAlert('出差行程需在100字之内');
            $('.tripForm').foucs();
            return false;
        }
        if(receiverUsrForm == '') {
            popAlert('请选择工作接管人');
            return false;
        }
        if(reasonInput == '') {
            popAlert('请输入出差目的及事由');
            return false;
        }
        if(reasonInput.length > 100) {
            popAlert('出差目的及事由需在100字之内');
            $('.reasonInput').foucs();
            return false;
        }

        if(remarkInput != '' && remarkInput.length > 100) {
            popAlert('备注需在100个字以内');
            $('.remarkInput').focus();
            return false;
        }

        $('form').submit();
    })




   
})


function timestampToTime3(timestamp) {
    var date = new Date(timestamp);
    var Y = date.getFullYear() + '-';
    var M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '月';
    var D = date.getDate() + '';
    var h = date.getHours() + ':';
    var m = date.getMinutes() + ':';
    var s = date.getSeconds();
    return D;
}

