$(function(){
	$('body').delegate('.retrievalsInput input,.StableTdR input', 'click', function(e) {
		$('.retrievalsInputNavBox').hide();
		if($(this).parent().find('.retrievalsInputNavBox')) {
			$(this).parent().find('.retrievalsInputNavBox').show()
		}
		stopBubble(e);
	})
	$('.editButtonL').hover(function(){
		$(this).find('img').attr('src','public/html/images/bjActive.png')
		$(this).css('background-color','#4d76cc');
	},function(){
		$(this).find('img').attr('src','public/html/images/edit.jpg')
		$(this).css('background-color','#fff');
	})
	
	$('.editButtonR').hover(function(){
		$(this).find('img').attr('src','public/html/images/shanchuActive.png')
		$(this).css('background-color','#fb545a');
	},function(){
		$(this).find('img').attr('src','public/html/images/del.jpg')
		$(this).css('background-color','#fff');
	})
	$('.editButtonZ').hover(function(){
		$(this).find('img').attr('src','public/html/images/chakanActive.png')
		$(this).css('background-color','#969696');
	},function(){
		$(this).find('img').attr('src','public/html/images/bj.jpg')
		$(this).css('background-color','#fff');
	})
	$('.contentTic img').click(function(){
		$('.contentTic').fadeOut();
	})
	
	$('.sortText img').hover(function(){
		$('.sortTic').toggle()
	})
	
	$('.editButtonR').click(function(){
		tic('确定删除企业吗？','删除后无法恢复！请谨慎操作！','确定删除','取消')
	})
	
	$('body').delegate('.popTicButtonL,.popTicButtonR,.popTicTitle img,.popTicMask','click',function(){
		$('.popTic').remove();
	})
	
	$('.clearButton').click(function(){
		$('.retrievalsForm input').val('')
	})
})