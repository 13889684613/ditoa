
/* 
    # 新增系统角色
	# Bowen
	# 2018-11-23
*/

$(function(){
    //IE placeholder 
    $('.formInput').placeholder();

    //显示隐藏tips
    $('.tipsIcon').mouseenter(function() {
        $('.tips').show();
    })

    $('.tipsIcon').mouseleave(function() {
        $('.tips').hide();
    })

    //树 显示隐藏
    $('.staffInfoForm').delegate('.treeNavContentBoxPartImageNew','click',function(e){
		if($(this).hasClass('on')){
			$(this).removeClass('on').parents('.treeNavContentBoxPart').removeClass('on');
		}else{
			$(this).addClass('on').parents('.treeNavContentBoxPart').addClass('on');
        }
        stopBubble(e);
    })
    
    //全选
    $('.staffInfoForm').delegate('.treeNavContentBoxPartImageNew span','click',function(e){
        var id = $(this).data('id');
        if($(this).hasClass('on')){
            $(this).removeClass('on').parents('.treeNavContentBoxPart').find('ul li').removeClass('on');
            $(this).parents('.treeNavContentBoxPart').find('input').val('0');
            $('.cloneItem').each(function(){
                if($(this).data('id') == id) {
                    $(this).hide().removeClass('on');
                    $(this).parent().hide().removeClass('on');
                    $(this).parent().next('ul').find('li').hide().removeClass('on');
                }
                if($('.treeNavContentClone').find('.on').length == 0) {
                    $('.treeNavContentClone').hide().removeClass('on');
                }
            })
		}else{
            $(this).addClass('on')
            $(this).parents('.treeNavContentBoxPart').addClass('on');
            $(this).parents('.treeNavContentBoxPart').find('.treeNavContentBoxPartImageNew').addClass('on');
            $(this).parents('.treeNavContentBoxPart').find('ul li').addClass('on');
            $(this).parents('.treeNavContentBoxPart').find('input').val('1');
            $('.cloneItem').each(function(){
                if($(this).data('id') == id) {
                    $(this).show().addClass('on');
                    $(this).parent().show().addClass('on');
                    $('.treeNavContentClone').show().addClass('on');
                    $(this).parent().next('ul').find('li').show().addClass('on');
                }
            })
        }
        stopBubble(e);
    })

    $('.staffInfoForm').delegate('.treeNavContentBoxPart li','click',function(e){
        var id = $(this).data('id');
        var spanDiv = $(this).parents('.treeNavContentBoxPart').find('.treeNavContentBoxPartImageNew span');
        // var length = $(this).parent().find('li').length;
        if($(this).hasClass('on')){
            $(this).removeClass('on');
            var on_length = $(this).parent().find('li.on').length;
            if(on_length == 0) { 
                spanDiv.removeClass('on');
            }
            $('.cloneItem').each(function(){
                if($(this).data('id') == id) {
                    $(this).hide().removeClass('on');
                    $(this).next('input').val('0');
                    if($(this).parent().find('.on').length == 0){
                        $(this).parent().hide().removeClass('on');
                        $(this).parent().prev('.treeNavContentBoxPartImageNewClone').hide().removeClass('on');
                        $(this).parent().prev('.treeNavContentBoxPartImageNewClone').find('.cloneItem').hide().removeClass('on');
                    }
                    if($('.treeNavContentClone').find('.on').length == 0) {
                        $('.treeNavContentClone').hide().removeClass('on');
                    }
                }
            })
		}else{
            $(this).addClass('on');
            $(this).next('input').val('1');
            if(!spanDiv.hasClass('on')) {
                spanDiv.addClass('on');
            }
            $('.cloneItem').each(function(){
                if($(this).data('id') == id) {
                    $(this).show().addClass('on');
                    $(this).parent().show().addClass('on');
                    $('.treeNavContentClone').show().addClass('on');
                    $(this).parent().prev('.treeNavContentBoxPartImageNewClone').show().addClass('on');
                    $(this).parent().prev('.treeNavContentBoxPartImageNewClone').find('.cloneItem').show().addClass('on');
                }
            })
        }
        stopBubble(e);
    })

    // 提交表单
    $('.formBtnSave').click(function() {
        var nameInput = $('.nameInput').val();
        var numInput = $('.numInput').val();
        var arr = [];
        $('.cloneItem').each(function(){
            if($(this).hasClass('on')){
                arr.push($(this).attr('data-id'));
            }
        })
        if(nameInput == '') {
            popAlert('请输入角色名称');
            $('.nameInput').focus();
            return false;
        }
        if(numInput == '') {
            popAlert('请输入排序');
            $('.numInput').focus();
            return false;
        }
        if(arr == '') {
            popAlert('请选择权限');
            return false;
        }
        $('#setForm').ajaxSubmit({
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




