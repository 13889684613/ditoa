
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
        
        //必填
        var quitDateForm = $('.quitDateForm').val();                    //请选择离职日期

        if(quitDateForm == "") {
            popAlert('请选择离职日期');
            return false;
        }
      
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
                    $('#quitForm').ajaxSubmit({
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
                }
            }else{
                $('#quitForm').ajaxSubmit({
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
            }
        }
       
       
    //    popAlert('上传成功！');
    })

    //创建fileLoad方法用来上传文件
    // function fileLoad(ele){
    //     //创建一个formData对象
    //     var formData = new formData();
    //     //获取传入元素的val
    //     var name = $(ele).val();
    //     //获取files
    //     var files = $(ele)[0].files[0];
    //     //将name 和 files 添加到formData中，键值对形式
    //     formData.append("file", files);
    //     formData.append("name", name);
    //     $.ajax({
    //         url: "",
    //         type: 'POST',
    //         data: formData,
    //         processData: false,// 告诉jQuery不要去处理发送的数据
    //         contentType: false, // 告诉jQuery不要去设置Content-Type请求头
    //         beforeSend: function () {
    //             //发送之前的动作
    //             alert("我还没开始发送呢");
    //         },
    //         success: function (responseStr) {
    //             //成功后的动作
    //             alert("成功啦");
    //         }
    //         ,
    //         error : function (responseStr) {
    //             //出错后的动作
    //             alert("出错啦");
    //         }
    //     });
    // }
})


