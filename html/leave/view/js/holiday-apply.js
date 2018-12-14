
/* 
    # 假期申请
    # Bowen
    # 2018-11-16
*/

// 假数据
data = {
    "code": "200",
    "message": "",
    "data": {
        "jia": [
            {
                "jiaId": "0",
                "jiaTitle": "请选择假期类型",
                "jiaContent": "",
                "bingli": 0
            },
            {
                "jiaId": "1",
                "jiaTitle": "事假",
                "jiaContent": "这是事假说明",
                "bingli": 0,
            },
            {
                "jiaId": "2",
                "jiaTitle": "病假",
                "jiaContent": "这是病假说明",
                "bingli": 1,
            },
            {
                "jiaId": "3",
                "jiaTitle": "工伤假",
                "jiaContent": "这是工伤假说明",
                "bingli": 1,
            },
            {
                "jiaId": "4",
                "jiaTitle": "婚假",
                "jiaContent": "这是婚假说明",
                "bingli": 0,
            },
            {
                "jiaId": "5",
                "jiaTitle": "丧假",
                "jiaContent": "这是丧假说明",
                "bingli": 0,
            },
            {
                "jiaId": "6",
                "jiaTitle": "探亲假",
                "jiaContent": "这是探亲假说明",
                "bingli": 1,
            },
            {
                "jiaId": "7",
                "jiaTitle": "产假",
                "jiaContent": "这是产假说明",
                "bingli": 1,
            },
            {
                "jiaId": "8",
                "jiaTitle": "公假",
                "jiaContent": "这是公假说明",
                "bingli": 1,
            },
            {
                "jiaId": "9",
                "jiaTitle": "年休假",
                "jiaContent": "这是年休假说明",
                "bingli": 0,
            },
            {
                "jiaId": "10",
                "jiaTitle": "产检假",
                "jiaContent": "这是产检假说明",
                "bingli": 1,
            }
        ]
    }
} 

// $(function(){

    // $.ajax({
        // url:data,
        // type:'GET',
        // success:function(data){	//成功回调函数
           var xdata = data.data.jia;
           $.each(xdata,function(idx){
                var html = '<li data-id='+xdata[idx].bingli+'>'+xdata[idx].jiaTitle+'</li>';
                var html2 = '<p class="tips">'+xdata[idx].jiaContent+'</p>';
                $('.holidayList').append(html);
                $('.holidayList').parent().append(html2);
           })
        // },
        // error:function (err){	//失败回调函数
            // console.log(err);
        // }
    // })

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

    $('.holidayForm').delegate('.holidayList li','click',function(){
        if($(this).data('id') == 0){
            $('.uploadFile').hide();
        }else{
            $('.uploadFile').show();
        }
        var idx = $(this).index();
        $('.tips').hide();
        $('.tips').eq(idx).show();
    })

    $(".uploadFile").on("change","input[type='file']",function(e){
        var filePath=$(this).val();
        // var size =  e.currentTarget.files[0].size;
        var arr=filePath.split('\\');
        var fileName=arr[arr.length-1];
        $(this).parents('.form').find('.showFileName').show();
        $(this).parents('.form').find(".showFileName span").text(fileName);
        // if(filePath.indexOf("pdf")!=-1){
        //     if(size > 200*1024) {
        //         $(this).parents('.form').find('.showFileName').hide();
        //         $(this).parents('.form').find(".showFileName span").text("");
        //         popAlert('上传文件大小不超过200KB');
        //         return false ;
        //     }else {
        //         var arr=filePath.split('\\');
        //         var fileName=arr[arr.length-1];
        //         $(this).parents('.form').find('.showFileName').show();
        //         $(this).parents('.form').find(".showFileName span").text(fileName);
        //     }
        // }else{
        //     $(this).parents('.form').find('.showFileName').hide();
        //     $(this).parents('.form').find(".showFileName span").text("");
        //     popAlert('上传文件有误');
        //     return false ;
        // }
    })

    //添加请假信息
    $('.add').click(function(){
        var startDate = $(this).parent().find('.formInput').eq(0).val();
        var endDate = $(this).parent().find('.formInput').eq(2).val();
        var startTime = $(this).parent().find('.formInput').eq(1).val();
        var endTime = $(this).parent().find('.formInput').eq(3).val();
        var startTimeHour = startTime.substring(0,2);
        var fhStart = startTime.substring(2,3);
        var startTimeMin = startTime.substring(3,5);
        var endTimeHour = endTime.substring(0,2);
        var fhEnd = endTime.substring(2,3);
        var endTimeMin = endTime.substring(3,5);
        var day = 0;
        var hour = 0;

        if(startDate == '' || endDate == '') {
            popAlert('请填写正确的请假时间');
            return false;
        }
        
        if(startTime == '' && endTime == ''){
            startTime = '08:00';
            endTime = '17:00';
            if(startDate == endDate) {
                hour = 8;
                day = 1;
            }else{
                startTime = '08:00';
                endTime = '17:00';
                var date1 = new Date(Date.parse(startDate.replace(/-/g,  "/"))); //开始日期
                var time3 = date1.getTime(); //开始日期时间戳
                var date2 = new Date(Date.parse(endDate.replace(/-/g,  "/")));//结束日期
                var time4 = date2.getTime();//结束日期时间戳
                var time; //开始结束时间戳间隔
                startTime1 = 8; //开始工作时间
                endTime1 = 17;  //结束工作时间
                var startHour1; //开始请假当天请假时长
                var endHour1;   //结束请假当天请假时长
                time = parseInt(time4)-parseInt(time3);
                day = timestampToTime3(time);
                if(startTime1 <= 12){
                    startHour1 = 16 - startTime1;
                }else{
                    startHour1 = 17 - startTime1;
                }
                if(endTime1 >= 13) {
                    endHour1 = endTime1 - 9;
                }else{
                    endHour1 = endTime1 - 8;
                }
                hour = startHour1 + (day-2)*8 + endHour1;
            }
        }else{
            if(startTimeHour != '08' && startTimeHour != '09' && startTimeHour != '10' && startTimeHour != '11' && startTimeHour != '12' && startTimeHour != '13' && startTimeHour != '14' && startTimeHour != '15' && startTimeHour != '16' && startTimeHour != '17') {
                popAlert('请填写正确的请假时间');
                return false;
            }else{
                if(startTimeMin != '00' && startTimeMin != '30') {
                    popAlert('请假时间以半小时为单位');
                    return false;
                }
            }

            if(endTimeHour != '08' && endTimeHour != '09' && endTimeHour != '10' && endTimeHour != '11' && endTimeHour != '12' && endTimeHour != '13' && endTimeHour != '14' && endTimeHour != '15' && endTimeHour != '16' && endTimeHour != '17') {
                popAlert('请填写正确的请假时间');
                return false;
            }else{
                if(endTimeMin != '00' && endTimeMin != '30') {
                    popAlert('请假时间以半小时为单位');
                    return false;
                }else{
                    if(endTimeHour == '17' && endTimeMin == '30'){
                        popAlert('请填写正确的请假时间');
                        return false;
                    }
                }
            }

            if(startTime.length != 5) {
                popAlert('请填写正确的请假时间');
                return false;
            }else{
                if(fhStart != ':' && fhStart != '：' ){
                    popAlert('请填写正确的请假时间');
                    return false; 
                }else{
                    startTime = startTime.replace(/：/g,":");
                }
            }

            if(endTime.length != 5) {
                popAlert('请填写正确的请假时间');
                return false;
            }else{
                if(fhEnd != ':' && fhEnd != '：' ){
                    popAlert('请填写正确的请假时间');
                    return false; 
                }else{
                    endTime = endTime.replace(/：/g,":");
                }
            }

            var min1 = 0; //开始时间分钟数值型 
            var min2 = 0; //结束时间分钟数值型 
            var hour1; //开始时间小时数值型
            var hour2; //结束时间小时数值型
            var allStart; //开始总时间数值型
            var allEnd; //结束总时间数值型
            var startDayTime; //开始请假当天请假时长
            var endDayTime; //结束请假当天请假时长
            if(startTimeMin == 30) {
                min1 = 0.5;
            }
            if(endTimeMin == 30) {
                min2 = 0.5;
            }
            hour1 = parseInt(startTimeHour,10);
            hour2 = parseInt(endTimeHour,10);
            allStart = parseInt(hour1);
            allEnd = parseInt(hour2);
            if(startDate == endDate) {
                if(hour2 >= 13) {
                    hour = allEnd - allStart - 1;
                }else{
                    hour = allEnd - allStart;
                }

            }else{
                var date1 = new Date(Date.parse(startDate.replace(/-/g,  "/"))); //开始日期
                var time3 = date1.getTime(); //开始日期时间戳
                var date2 = new Date(Date.parse(endDate.replace(/-/g,  "/")));//结束日期
                var time4 = date2.getTime();//结束日期时间戳
                var time; //开始结束时间戳间隔
                startTime1 = 8; //开始工作时间
                endTime1 = 17;  //结束工作时间
                var startHour1; //开始请假当天请假时长
                var endHour1;   //结束请假当天请假时长
                time = parseInt(time4)-parseInt(time3);
                day = timestampToTime3(time);
                console.log(day);
                if(hour1 <= 12) {
                    startDayTime = 16 - allStart;
                }else{
                    startDayTime = 17 - allStart;
                }
    
                if(hour2 >= 13) {
                    endDayTime =  allEnd - 9;
                }else{
                    endDayTime =  allEnd - 8;
                }
                hour = startDayTime + (day-2)*8 + endDayTime;
            }
            day = hour/8;
        }
        var num = $('.num').length + 1;
        if(num == 1) {
            $('.tableBox').show();
        }
        var days = 0;
        var hours = 0;
        var allDay;
        var allHour;
        $('.day').each(function(){
            var num = $(this).text();
            days += parseInt(num);
        })
        allDay = parseInt(days)+parseInt(day);
        $('.hour').each(function(){
            var num = $(this).text();
            hours += parseInt(num);
        })
        allHour = parseInt(hours)+parseInt(hour);
        var html = '<tr><td class="num">'+num+'</td><td class="beginTime">'+startDate+'&nbsp;'+startTime+'</td><td class="overTime">'+endDate+'&nbsp;'+endTime+'</td><td><span class="day">'+day+'</span>天(<span class="hour">'+hour+'</span>小时)</td><td><div class = "editButton"><img src="../../public/html/images/del.jpg" alt="" class = "remove"></div></td></tr>'
        $('.tableBox table').append(html); 
        $(this).parent().find('.formInput').eq(0).val('');
        if($(this).parent().find('.formInput').eq(1).val() != '08:00'){
            $(this).parent().find('.formInput').eq(1).val('');
        }
        $(this).parent().find('.formInput').eq(2).val('');
        if($(this).parent().find('.formInput').eq(3).val() != '17:00'){
            $(this).parent().find('.formInput').eq(3).val('');
        }
        $( ".startForm" ).datepicker( "option", "maxDate", '' );
        $( ".endForm" ).datepicker( "option", "minDate", '' );
        $('.allDay').text(allDay);
        $('.allHour').text(allHour);
    })

    //删除请假信息
    $('.tableBox').delegate('.remove','click',function() {
        $this = $(this);
        tic('确定删除吗？', '删除后无法恢复！请谨慎操作！', '确定删除', '取消');
        $('.popTicButtonL a').attr('href','javascript:;');
    })
    $('body').delegate('.popTicButtonL,.popTicButtonR,.popTicTitle img,.popTicMask', 'click', function() {
		$('.popTic').remove();
	})
	
	$('body').delegate('.popTicButtonL','click',function(){
		$this.parents('tr').remove();
		var num = $('.num').length;
        var j = 0;
        var allDay = 0;
        var allHour = 0;
        $('.num').each(function(){
            j++;
            $(this).text(j);
        })
        $('.allDay').each(function(idx){
            var num = $('.day').eq(idx).text();
            allDay += parseInt(num);
            $('.allDay').eq(idx).text(allDay);
        })
        $('.allHour').each(function(idx){
            var num = $('.hour').eq(idx).text();
            allHour += parseInt(num);
            $('.allHour').eq(idx).text(allHour);
        })
        if(num == 0) {
            $('.tableBox').hide();
        }
        $('.popTic').remove()
        $('.formInput').placeholder();
	})
   


    // 提交表单
    $('.formBtnSave').click(function() {
        var typeId = $('.typeId').val();
        var uploadFile = $('.uploadFile').css('display');
        var uploadInput = $('.uploadInput').val();
        var receiverUsr = $('.receiverUsr').val();
        var table = $('.tableBox').css('display');
        var reason = $('.holidayReason').val();
        $('.beginDate').remove();
        $('.overDate').remove();

        if(typeId == '' || typeId == '请选择假期类型') {
            popAlert('请选择假期类型');
            return false;
        }

        if(uploadFile != 'none' && uploadInput == '') {
            popAlert('请上传病例文件');
            return false;
        }

        if(receiverUsr == '' || receiverUsr == '请选择工作接管人') {
            popAlert('请选择工作接管人');
            return false;
        }

        
        if(table == 'none') {
            popAlert('请选择请假时间');
            return false;
        }   
        
        if(reason == '') {
            popAlert('请输入请假原因');
            $('.holidayReason').focus();
            return false;
        }

        if(reason.length > 100) {
            popAlert('请假原因需在100字符以内');
            $('.holidayReason').focus();
            return false;
        }
        
        $('.beginTime').each(function(idx){
            var time = $(this).text();
            var beginDate = '<input type="hidden" class="beginDate" name="beginDate[]" value="'+time+'"/>';
            $('form').append(beginDate);
        })
        $('.overTime').each(function(idx){
            var time = $(this).text();
            var overDate = '<input type="hidden" class="overDate" name="overDate[]" value="'+time+'"/>';
            $('form').append(overDate);
        })

        $('.totalDay').val($(".allDay").text());
        $('.totalHour').val($(".allHour").text());

        $('form').submit();
    })




   
// })


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

