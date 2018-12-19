$(function(){
	
	//选择分数
	
	$('.radioBox-official-assessment').click(function(){
		var a=0;
		var b=0;
		var score = $(this).attr('data-score');
		$(this).closest('td').find('.garde-type').val(score);
		$(this).closest('tr').find('input').val(score);
		$(this).closest('tr').find('.radioBox-official-assessment').removeClass('radioBox-official-assessment-active');
		$(this).addClass('radioBox-official-assessment-active');
		for(var i=0;i<$(this).closest('table').find('input').length;i++){
			if($(this).closest('table').find('input').eq(i).val()!=""){
				a = parseInt(a)+parseInt( $(this).closest('table').find('input').eq(i).val());
			};
		};
		$(this).closest('.tableBox').find('.score').text(a);
		for(var i=0;i<$('.score').length;i++){
			if($('.score').eq(i).text()!=""){
				b = parseInt(b)+parseInt( $('.score').eq(i).text());
			};
		};
		$('.totalScoreValue').val(b);
		$('.score2').text(b);
		
	});
	
	var testVal = /^[0-9]+([.]{1}[0-9]+){0,1}$/;
	$('.button-submit-bottom').click(function(){
		var late = $('.late').val();
		var early = $('.early').val();
		var sickLeave = $('.sickLeave').val();
		var compassionateLeave = $('.compassionateLeave').val();
		var absenteeism = $('.absenteeism').val();
		var scoreVal = $('.scoreInput').val();
		for (var i=0;i<$('.scoreInput').length;i++) {
			if($('.scoreInput').eq(i).val()==""){
				console.log($('.scoreInput').eq(0).val());
				popAlert('请选择评分');
				return false;
				break;
			}
		}
		
		
//		console.log()
//		if(scoreVal==""){
//			popAlert('请选择评分')
//		}else 
		if(!testVal.test(late)){
			popAlert('请输入迟到次数')
		}else if(!testVal.test(early)){
			popAlert('输入早退次数')
		}else if(!testVal.test(sickLeave)){
			popAlert('输入病假天数')
		}else if(!testVal.test(compassionateLeave)){
			popAlert('输入事假天数')
		}else if(!testVal.test(absenteeism)){
			popAlert('输入旷工天数')
		}else{
			$('#checkForm').ajaxSubmit({
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
	});
	
})