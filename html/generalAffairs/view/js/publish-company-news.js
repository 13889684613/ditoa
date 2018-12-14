
/* 
    # 发布企业动态
	# Bowen
	# 2018-11-22
*/

$(function(){
    //IE placeholder 
    $('.formInput').placeholder();
    $('.otherFormBox').placeholder();

    //选择按钮
    $('.pulishBtn').click(function(){
        if(!$(this).hasClass('on')) {
            $(this).parent().find('.pulishBtn').removeClass('on');
            $(this).addClass('on');
            if($(this).hasClass('coupleBackOpen')) {
                $('.coupleBackBox').show();
            }else if($(this).hasClass('coupleBackClose')) {
                $('.coupleBackBox').hide();
            }else if($(this).hasClass('sector')){
                $('.sectorBox').show();
                $('.groupBox').hide();
                $('.select').removeClass('on');
            }else{
                $('.sectorBox').show();
                $('.select').removeClass('on');
            }
        }
    })

    //选择部门、工作组
    $('.publishToList').delegate('.select','click',function(){
        var idx = $(this).index();
        console.log(idx);
        if($(this).hasClass('on')){
            $(this).removeClass('on');
            if($(this).hasClass('selectSector')) {
                $('.groupBox').eq(idx).hide();
            }
        }else{
            $(this).addClass('on');
            if($(this).hasClass('selectSector') && !$('.pulishBtn.sector').hasClass('on')) {
                $('.groupBox').eq(idx).show();
            }
        }
    })

    //添加维修列表
    $('.addBtn').click(function(){
        var html = '<div class="coupleBackList clearfix"><div class="formBox clearfix"><p class="coupleBackTitle">反馈项目</p><input type="text"name="title"placeholder="请输入信息标题"class="formInput coupleBackTitleInput"/></div><div class="formBox clearfix"><p class="coupleBackTitle">是否为必填项</p><div class="checkBox clearfix"><div class="checkBtn mRight50">是</div><div class="checkBtn">否</div></div><input type="hidden" name = "" class = "formInput mustForm"/></div><div class="removeBtn"></div></div>';
        $('.coupleBackBox').append(html);
        $('.formInput').placeholder();
        $('.otherFormBox').placeholder();
    })

    //删除维修列表
    $('.coupleBackBox').delegate('.removeBtn','click',function(){
        $this = $(this);
        tic('确定删除吗？', '删除后无法恢复！请谨慎操作！', '确定删除', '取消');
        $('.popTicButtonL a').attr('href','javascript:;');
    })
    $('body').delegate('.popTicButtonL,.popTicButtonR,.popTicTitle img,.popTicMask', 'click', function() {
		$('.popTic').remove();
	})
	
	$('body').delegate('.popTicButtonL','click',function(){
		$this.parents('.coupleBackList').remove();
		// for(var i = 0; i < $('.table1Content tr').length; i++) {
		// 		$('.table1Content tr').eq(i + 1).find('td').eq(0).find('span').text(i + 1)
		// 	}
		$('.popTic').remove()
	})

    // 提交表单
    $('.formBtnSave').click(function() {
        var titleInput = $('.titleInput').val();
        var editor = UE.getEditor('editor').getContent();

        
        if(titleInput == '') {
            popAlert('请输入动态标题');
            $('.titleInput').focus();
            return false;
        }
        if(editor == '') {
            popAlert('请输入信息内容');
            UE.getEditor('editor').focus();
            return false;
        }
        if(!$('.sectorGroup').hasClass('on')) {
            popAlert('请选择推送部门/工作组');
            return false;
        }
        if($('.sector').hasClass('on')){
            if($('.selectSector.on').length < 1){
                popAlert('请选择推送部门');
                return false;
            }
        }
        if($('.group').hasClass('on')){
            if($('.selectSector.on').length < 1){
                popAlert('请选择推送部门');
                return false;
            }
            if($('.selectGroup.on').length < 1){
                popAlert('请选择推送工作组');
                return false;
            }
        }
        var count = 0;
        if($('.coupleBackOpen').hasClass('on')) {
            $('.coupleBackBox .formInput').each(function(){
                if($(this).val() == '') {
                    count++;
                    popAlert('请完善反馈信息');
                    return false;
                }
            })
        }
        if(count == 0){
            $('form').submit();
        }
       
    })   
})




