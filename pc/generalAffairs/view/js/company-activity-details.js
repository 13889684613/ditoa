$(function(){
	
//	选择参与
	$('.activity-choose').click(function(){
		$('.activity-choose').removeClass('activity-chosen');
		$('.company-activity-formBox-row2').hide();
		var joinType = $(this).attr('id');
		$('.joinType').val(joinType);
		$(this).addClass('activity-chosen');
		$('.company-activity-formBox-row2').eq($(this).index()).show();
	});
	
	//点击提交反馈
	$('.button-feedback-bottom').click(function(){
		var chooseVal = $('.joinType').val();
		if(chooseVal==1){
			for(var i=0;i<$('.company-activity-formBox-join input.must').length;i++){
				if($('.company-activity-formBox-join input.must').eq(i).val()==""){
					var name = $('.company-activity-formBox-join input.must').eq(i).attr('data-name');
					popAlert('请输入'+name);
					break;
					
				}else{
					$('.company-activity-formBox form').submit();
				}
			}
		}
		if(chooseVal==2){
			if(reason==''){
				alert('请输入不参与原因');
			}else{
				$('.company-activity-formBox form').submit();
			}
		}
	})
})