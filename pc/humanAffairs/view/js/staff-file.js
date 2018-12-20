
/* 
    # 资料上传
    # Bowen
    # 2018-11-14  
*/

$(function(){

    //IE placeholder 
    $('.formInput').placeholder();


    //显示上传文件的名字

    // $('.dataContent').delegate('.uploadBtnTxt,.uploadBtnBox img','click',function(){
    //     console.log(111);
    //     // $(this).parent().find('.inputFile').click();
    // })

    $(".dataContent").on("change","input[type='file']",function(e){
        var filePath=$(this).val();
        if(filePath.indexOf("pdf")!=-1){
            var arr=filePath.split('\\');
            var fileName=arr[arr.length-1];
            $(this).parents('.uploadBox').find('.showFileName').show();
            $(this).parents('.uploadBox').find(".showFileName span").text(fileName);
            // fileLoad(this);  //ajax自动上传文件，先隐藏，确认需求后判断是否需要删除
        }else{
            $(this).parents('.uploadBox').find('.showFileName').hide();
            $(this).parents('.uploadBox').find(".showFileName span").text("");
            popAlert('上传文件有误');
            return false ;
        }
    })

    //添加更多文件
    $('.add').click(function(){
        var html = '<div class="uploadBox uploadOtherBox clearfix"><input type="hidden" name="otherId[]" value="0" /><input type="text"placeholder="请输入证件名称" name="otherName[]" class="setUploadFileTitle"autocomplete="off"/><div class="uploadBtnBox"><input type="file"class="inputFile noMust"name="staffFile[]"/><img src="public/html/images/upload_file_icon.png"alt=""/><p class="uploadBtnTxt">上传文件</p></div><div class="remove"><img src="public/html/images/input_remove.png"alt=""></div><div class="showFileName">已选择：<span></span></div></div>'
        $('.dataContent').append(html);
        $('input').placeholder();
    })
    
    //删除更多文件
    $('.dataContent').delegate('.remove','click',function(){
        $this = $(this);
        tic('确定删除吗？', '删除后无法恢复！请谨慎操作！', '确定删除', '取消');
        $('.popTicButtonL a').attr('href','javascript:;');
    })
    $('body').delegate('.popTicButtonL,.popTicButtonR,.popTicTitle img,.popTicMask', 'click', function() {
		$('.popTic').remove();
	})
	
	$('body').delegate('.popTicButtonL','click',function(){
		$this.parent().remove();
		// for(var i = 0; i < $('.table1Content tr').length; i++) {
		// 		$('.table1Content tr').eq(i + 1).find('td').eq(0).find('span').text(i + 1)
		// 	}
		$('.popTic').remove()
	})

    // 提交表单
    var hold = false;
    $('.formBtnSave').click(function() {
        

    //    $('.uploadOtherBox').each(function(){
    //         if($(this).hasClass('holdBox')) {
    //             if($(this).find('.setUploadFileTitle').val() != '' && $(this).find('.noMust').val() == ''){
    //                 var pop = $(this).find('.setUploadFileTitle').val();
    //                 popAlert('请上传'+pop+'证件文件');
    //                 hold = false;
    //                 return false;
    //             }else if($(this).find('.setUploadFileTitle').val() == '' && $(this).find('.noMust').val() != ''){
    //                 $(this).find('.setUploadFileTitle').focus();
    //                 popAlert('请输入证件名称');
    //                 hold = false;
    //                 return false;
    //             }else{
    //                 hold = true;
    //             }
    //         }else{
    //             if($(this).find('.setUploadFileTitle').val() == '' && $(this).find('.noMust').val() == ''){
    //                 $(this).find('.setUploadFileTitle').focus();
    //                 popAlert('请输入证件名称并上传');
    //                 hold = false;
    //                 return false;
    //             }else if($(this).find('.setUploadFileTitle').val() != '' && $(this).find('.noMust').val() == ''){
    //                 var pop = $(this).find('.setUploadFileTitle').val();
    //                 popAlert('请上传'+pop+'证件文件');
    //                 hold = false;
    //                 return false;
    //             }else if($(this).find('.setUploadFileTitle').val() == '' && $(this).find('.noMust').val() != ''){
    //                 $(this).find('.setUploadFileTitle').focus();
    //                 popAlert('请输入证件名称');
    //                 hold = false;
    //                 return false;
    //             }else{
    //                 hold = true;
    //             }
    //         }
    //    })

    //     $('.inputFile').each(function(){
    //         if($(this).val() == ''){
    //             if(!$(this).hasClass('noMust')) {
    //                 var pop = $(this).parents('.uploadBtnBox').find('.uploadBtnTxt').text();
    //                 popAlert('请'+pop);
    //                 hold = false;
    //                 return false;
    //             }
    //         }
    //     })

        hold = true;
        if(hold == true){
            var modifyRemarkInput = $('.modifyRemarkInput').val();
            if($('.modifyBox').css('display') != 'none'){
                if(modifyRemarkInput == "") {
                    popAlert('请输入修改备注信息');
                    $('.modifyRemarkInput').focus();
                    return false;
                }else if(modifyRemarkInput.length > 100){
                    popAlert('修改备注长度需在100个字符以内');
                    $('.modifyRemarkInput').focus();
                    return false;
                }else{
                    $('#fileFrom').ajaxSubmit({
                        type:'post',
                        success:function(data){
                            data = $.parseJSON(data);
                            if(data.status == 'success'){
                                popAlert(data.message,data.url);
                            }else{
                                popAlert(data.message); //弹出错误信息
                            }
                        }
                    })
                }
            }else{
                $('#fileFrom').ajaxSubmit({
                    type:'post',
                    success:function(data){
                        data = $.parseJSON(data);
                        if(data.status == 'success'){
                            popAlert(data.message,data.url);
                            // location.href = data.url;
                        }else{
                            popAlert(data.message); //弹出错误信息
                        }
                    }
                })
            }
        }  
    })
})


