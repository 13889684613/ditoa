/* 
    # 分配备品
    # lfl
    # 2018-11-27
*/

// $(function() {

	$('input').placeholder();

	// oninput="OnInput(event)" onpropertychange="OnPropChanged(event)"onkeyup="this.value=this.value.replace(/\D/g,'');

	$(".tableBox").mCustomScrollbar({
		axis: "x",
		theme: "dark",
		scrollInertia: 0,
	});
	//	操作
	var lei; //类别
	var sName //商品名称
	var sparse // 商品价格
	var sBh //商品编号
	var sNum // 商品数量
	var numbersX = parseInt($('.number').text());
	var numbersJ = parseInt($('.number').text());
	var Jnum = 0;
	var htmls;
	$('.operation').click(function() {

		if($(this).find('.a').length>0){
			htmls = $(this).find('.a').html();
			sNum = $(this).closest('tr').find('td').eq(7).find('span').text();
		}else{
			lei = $(this).closest('tr').find('td').eq(1).find('span').text();
			sName = $(this).closest('tr').find('td').eq(2).find('span').text();
			sparse = $(this).closest('tr').find('td').eq(3).find('span').text();
			sBh = $(this).closest('tr').find('td').eq(8).find('span').text();
			sNum = $(this).closest('tr').find('td').eq(7).find('span').text();
			htmls = '<div class="listBox clearfix"><div class="listNum">01</div><div class="form"><p class="formTitle">备品类别</p><p class="formText">' + lei + '</p></div><div class="form"><p class="formTitle">备品名称</p><p class="formText">' + sName + '</p></div><div class="form"><p class="formTitle">备品编号</p><p class="formText">' + sBh + '</p></div><div class="form"><p class="formTitle">备品价格</p><p class="formText">' + sparse + '</p></div><div class="form projectA"><p class="formTitle">使用人（可选）</p><input type="text" name="workHourFee" readonly="readonly" placeholder="请选择所实领人" class="formInput changeInput workHourFeeInput"/><div class="retrievalsInputNavBox"><ul class="retrievalsInputNav"><li>大连国际货运有限公司1</li><li>大连国际货运有限公司2</li><li>大连国际货运有限公司3</li><li>大连国际货运有限公司4</li><li>大连国际货运有限公司5</li><li>大连国际货运有限公司6</li></ul></div></div><div class="form projectB"><p class="formTitle">分配数量 <span>*</span></p><input type="text" name="workHourFee"  placeholder="请输入使用数量" value="" class="formInput changeInput workHourFeeInput"autocomplete="off"/><p class="formText formTextNumber">未分配数量：<span id="number" class="number">' + sNum + '</span></p></div><div class="addBtn"></div></div>';
		}
		$('.formBtnsBox').show();
		for(var i = 0; i < $('.operation').length; i++){
			if($('.operation').eq(i).attr('data-id') == $('.infoLists').attr('data-id')){
				var htmli = $('.infoLists').contents();
				$('.operation').eq(i).find('.a').remove();
				$('.operation').eq(i).append($('<div class="a" style="display:none"></div>'));
				$('.operation').eq(i).find('.a').append(htmli);
			}
		}
		$('.infoLists .listBox').remove();
		$('.infoLists').append(htmls);
		$('.infoLists').attr('data-id',$(this).attr('data-id'));
		$('.realInfo').show();
		numbersJ = ''
		numbersJ = sNum;
		var jsArr = [];
		numbersX = parseInt($(this).parents('.listBox').find('.projectB .number').text());
		$('.number').text(parseInt(numbersJ))
		if($(this).parents('.infoLists .listBox').find('.projectB input').val() != '') {
			for(var i = 0; i < $('.infoLists .listBox .projectB').length; i++) {
				if($('.infoLists .listBox .projectB').eq(i).find('input').val() != '' && $('.infoLists .listBox .projectB').eq(i).find('input').val() != '请输入使用数量') {
					var jsNum = numbersJ - $('.infoLists .listBox .projectB').eq(i).find('input').val()
					jsArr.push($('.infoLists .listBox .projectB').eq(i).find('input').val());
				}
			}
			var arrNum = 0;
			for(var i = 0; i < jsArr.length; i++) {
				arrNum += parseInt(jsArr[i])
				console.log(jsArr[i]);
			}
			$('.number').text(numbersJ - arrNum)
			console.log(numbersJ)
			console.log(arrNum)
		} else {
			if($('.projectB input').val() == '') {
				
			}
			for(var i = 0; i < $('.infoLists .listBox .projectB').length; i++) {
				if($('.infoLists .listBox .projectB').eq(i).find('input').val() != '') {
					var jsNum = numbersJ - $('.infoLists .listBox .projectB').eq(i).find('input').val()
					jsArr.push($('.infoLists .listBox .projectB').eq(i).find('input').val());
				}
			}
			var arrNum = 0;
			for(var i = 0; i < jsArr.length; i++) {
				arrNum += parseInt(jsArr[i])
			}
			$('.number').text(numbersJ - arrNum)
		}
		if(parseInt($('.number').text()) < 0) {
			$('.number').text(0)
		}
		$(this).attr("value",$(this).val())
		console.log(numbersJ)
		$('input').placeholder();
	})

	$('.operation').mouseenter(function(){
		$(this).find('.mCS_img_loaded').attr('src','images/offCz_h.jpg');
	})
	$('.operation').mouseleave(function(){
		$(this).find('.mCS_img_loaded').attr('src','images/offCz.jpg');
	})

	$('.contentRightBox').delegate('.projectA input', 'click', function(e) {
		$('.retrievalsInputNavBox').hide();
		if($(this).parent().find('.retrievalsInputNavBox')) {
			$(this).parent().find('.retrievalsInputNavBox').show()
		}
		stopBubble(e);
	})

	$('body').click(function() {
		$('.retrievalsInputNavBox').hide();
	})

	$('.contentRightBox').delegate('.retrievalsInputNav li', 'click', function() {
		$(this).parents('.projectA').find('input').val($(this).text()).attr('data-type', '1')
		$(this).parents('.projectA').find('input').attr('value',$(this).text())
		$('.retrievalsInputNavBox').hide()
	})

	var numReg = /^[0-9]+(.[0-9]{1,2})?$/; //验证有一位或两位小数的正实数
	var timeReg = /^[0-9]+(.[0-9]{1})?$/; //验证有一位小数的正实数
	var reg = /^\+?[1-9][0-9]*$/; //验证非零的正整数
	var regNum = /^[0-9]*$/;
	var hold = false;
	//IE placeholder 
	$('.formInput').placeholder();
	$('.resulTax').placeholder();

	//添加维修列表
	$('.contentRightBox').delegate('.addBtn', 'click', function() {
		var numbersc = parseInt($(this).parents('.listBox').find('.projectB .number').text());
		$('.listBox').find('.projectB input').each(function() {
			var numbers = $(this).parents('.listBox').find('.projectB input').val();
			if(!reg.test(numbers) && numbers!='') {
				popAlert('请正确输入分配数量');
				$(this).parents('.listBox').find('.projectB input').focus();
				hold = false;
				return false;
			} else {
				hold = true
			}
		})
		// if(Jnum < 0) {
		// 	popAlert('库存不足');
		// 	$(this).parents('.listBox').find('.projectB input').focus();
		// 	hold = false;
		// 	return false;
		// } else if(numbersc == 0) {
		// 	popAlert('库存不足');
		// 	$(this).parents('.listBox').find('.projectB input').focus();
		// 	hold = false;
		// 	return false;
		// } else {

		// }
		if(hold == true) {
			var i;
			var y = $('.infoLists .listBox').length;
			if(y < 9) {
				i = '0' + (y + 1);
			} else {
				i = y + 1;
			}
			var html = '<div class="listBox clearfix"><div class="listNum">' + i + '</div><div class="form"><p class="formTitle">备品类别</p><p class="formText">' + lei + '</p></div><div class="form"><p class="formTitle">备品名称</p><p class="formText">' + sName + '</p></div><div class="form"><p class="formTitle">备品编号</p><p class="formText">' + sBh + '</p></div><div class="form"><p class="formTitle">备品价格</p><p class="formText">' + sparse + '</p></div><div class="form projectA"><p class="formTitle">使用人（可选）</p><input type="text" name="workHourFee" readonly="readonly" placeholder="请选择所实领人" class="formInput changeInput workHourFeeInput"/><div class="retrievalsInputNavBox"><ul class="retrievalsInputNav"><li>大连国际货运有限公司1</li><li>大连国际货运有限公司2</li><li>大连国际货运有限公司3</li><li>大连国际货运有限公司4</li><li>大连国际货运有限公司5</li><li>大连国际货运有限公司6</li></ul></div></div><div class="form projectB"><p class="formTitle">分配数量 <span>*</span></p><input type="text" name="workHourFee" placeholder="请输入使用数量" value="" class="formInput changeInput workHourFeeInput"autocomplete="off"/><p class="formText formTextNumber">未分配数量：<span id="number" class="number">' + numbersc + '</span></p></div><div class="removeBtn"></div></div>';
			// if($(this).prev().find('input').val() == ''){
			// 	popAlert('1');
			// 	return false;
			// }
			// if($(this).parent().nextAll('.listBox').find('.projectB input').val() == ''){
			// 	popAlert('2');
			// 	return false;
			// }
			for(var i = 0; i < $('.infoLists .listBox').length; i++){
				if($('.infoLists .listBox').eq(i).find('.projectB input').val() == ''){
					popAlert('2');
					return false;
				}	
			}
			if($('.realInfo .number').text() != 0){
				$('.infoLists').append(html);
			}else{
				popAlert('库存不足');
			}
			$('input').placeholder();
		}
	})

	$('body').delegate('.workHourFeeInput', 'change', function() {
		if(!regNum.test($(this).val())){
			popAlert('请输入数字');
			return false;
		}
		// if((parseInt($(this).val())+arrNum) > numbersJ){
		// 	console.log($(this).val())
		// 	// console.log($(this).next().find('.number').text())
		// 	$(this).val(numbersJ-arrNum);
		// }
		var jsArr = [];
		numbersX = parseInt($(this).parents('.listBox').find('.projectB .number').text());
		$('.number').text(parseInt(numbersJ))
		if($(this).parents('.infoLists .listBox').find('.projectB input').val() != '') {
			for(var i = 0; i < $('.infoLists .listBox .projectB').length; i++) {
				if($('.infoLists .listBox .projectB').eq(i).find('input').val() != '') {
					var jsNum = numbersJ - $('.infoLists .listBox .projectB').eq(i).find('input').val()
					jsArr.push($('.infoLists .listBox .projectB').eq(i).find('input').val());
				}
			}
			var arrNum = 0;
			for(var i = 0; i < jsArr.length; i++) {
				arrNum += parseInt(jsArr[i])
			}
			$('.number').text(numbersJ - arrNum)
			console.log(numbersJ)
			console.log(arrNum)
		} else {
			if($('.projectB input').val() == '') {
				
			}
			for(var i = 0; i < $('.infoLists .listBox .projectB').length; i++) {
				if($('.infoLists .listBox .projectB').eq(i).find('input').val() != '') {
					var jsNum = numbersJ - $('.infoLists .listBox .projectB').eq(i).find('input').val()
					jsArr.push($('.infoLists .listBox .projectB').eq(i).find('input').val());
				}
			}
			var arrNum = 0;
			for(var i = 0; i < jsArr.length; i++) {
				arrNum += parseInt(jsArr[i])
			}
			$('.number').text(numbersJ - arrNum)
		}
		// console.log($(this).next().find('.number').text())
		console.log(numbersJ)
		var arrNew=0;
		var jsArrNew = [];
		if(parseInt($('.number').text()) < 0) {
			for(var i = 0; i < $('.infoLists .listBox .projectB').length-1; i++) {
				if($('.infoLists .listBox .projectB').eq(i).find('input').val() != '') {
					var jsNum = numbersJ - $('.infoLists .listBox .projectB').eq(i).find('input').val()
					jsArrNew.push($('.infoLists .listBox .projectB').eq(i).find('input').val());
				}
			}
			for(var i = 0; i < jsArrNew.length; i++) {
				arrNew += parseInt(jsArr[i])
			}
			$(this).val(parseInt(numbersJ)-parseInt(arrNew));
			$('.number').text(0)
		}
		$(this).attr("value",$(this).val())
		
		// if($(this).val()>numbersX){
		// 	$(this).val(numbersX);
		// }
	})		

	//删除维修列表
	var $this
	$('.infoLists').delegate('.removeBtn', 'click', function() {
		$this = $(this);
		tic('确定删除吗？', '删除后无法恢复！请谨慎操作！', '确定删除', '取消');
		// $('.popTicButtonL a').attr('href','javascript:;');
	})
	
	$('body').delegate('.popTicButtonL,.popTicButtonR,.popTicTitle img,.popTicMask', 'click', function() {
		$('.popTic').remove();
	})
	
	$('body').delegate('.popTicButtonL','click',function(){
		$this.parents('.listBox').remove();
		$('.infoLists .listBox').each(function(idx) {
			if(idx < 9) {
				$(this).find('.listNum').text('0' + (idx + 1));
			} else {
				$(this).find('.listNum').text(idx + 1);
			}
		})
		var jsArr = [];
		numbersX = parseInt($(this).parents('.listBox').find('.projectB .number').text());
		$('.number').text(numbersJ)
		if($(this).parents('.listBox').find('.projectB input').val() != '') {
			for(var i = 0; i < $('.projectB').length; i++) {
				if($('.projectB').eq(i).find('input').val() != '') {
					var jsNum = numbersJ - $('.projectB').eq(i).find('input').val()
					jsArr.push($('.projectB').eq(i).find('input').val());
				}
			}
			var arrNum = 0;
			for(var i = 0; i < jsArr.length; i++) {
				arrNum += parseInt(jsArr[i])
			}
			$('.number').text(numbersJ - arrNum)
		} else {
			if($('.projectB input').val() == '') {

			}
			for(var i = 0; i < $('.projectB').length; i++) {
				if($('.projectB').eq(i).find('input').val() != '') {
					var jsNum = numbersJ - $('.projectB').eq(i).find('input').val()
					jsArr.push($('.projectB').eq(i).find('input').val());
				}
			}
			var arrNum = 0;
			for(var i = 0; i < jsArr.length; i++) {
				arrNum += parseInt(jsArr[i])
			}
			$('.number').text(numbersJ - arrNum)
		}
		if(parseInt($('.number').text()) < 0) {
			$('.number').text(0)
		}
		
		$('.popTic').remove()
	})
	 // 提交表单
    $('.formBtnSave').click(function() {
    	var jsArr = [];
    	for(var i = 0; i < $('.projectB').length; i++) {
				if($('.projectB').eq(i).find('input').val() != '' && $('.infoLists .listBox .projectB').eq(i).find('input').val() != '请输入使用数量') {
					var jsNum = numbersJ - $('.projectB').eq(i).find('input').val()
					jsArr.push($('.projectB').eq(i).find('input').val());
				}
			}
       		var arrNum = 0;
			for(var i = 0; i < jsArr.length; i++) {
				arrNum += parseInt(jsArr[i])
			}
		$('.listBox').find('.projectB input').each(function() {
			var numbers = $(this).parents('.listBox').find('.projectB input').val();
			if(!reg.test(numbers) && numbers!='') {
				popAlert('请正确输入分配数量');
				$(this).parents('.listBox').find('.projectB input').focus();
				hold = false;
				return false;
			} else {
				hold = true
			}
		})
		// if(sNum - arrNum < 0) {
		// 	popAlert('库存不足');
		// 	$(this).parents('.listBox').find('.projectB input').focus();
		// 	hold = false;
		// 	return false;
		// }
		if(hold == true) {
			$('#form').submit()
		}
    })
// })

//	计算
// function OnInput(event) {
// 	console.log("The new content: " + event.target.value);
// 	event.target.value=event.target.value.replace(/\D/g,'');
// 	// if(isNaN(event.target.value))execCommand('undo');
// 	var jsArr = [];
// 	numbersX = parseInt($(this).parents('.listBox').find('.projectB .number').text());
// 	$('.number').text(parseInt(numbersJ))
// 	if($(this).parents('.listBox').find('.projectB input').val() != '') {
// 		for(var i = 0; i < $('.projectB').length; i++) {
// 			if($('.projectB').eq(i).find('input').val() != '') {
// 				var jsNum = numbersJ - $('.projectB').eq(i).find('input').val()
// 				jsArr.push($('.projectB').eq(i).find('input').val());
// 			}
// 		}
// 		var arrNum = 0;
// 		for(var i = 0; i < jsArr.length; i++) {
// 			arrNum += parseInt(jsArr[i])
// 		}
// 		$('.number').text(numbersJ - arrNum)
// 	} else {
// 		if($('.projectB input').val() == '') {

// 		}
// 		for(var i = 0; i < $('.projectB').length; i++) {
// 			if($('.projectB').eq(i).find('input').val() != '') {
// 				var jsNum = numbersJ - $('.projectB').eq(i).find('input').val()
// 				jsArr.push($('.projectB').eq(i).find('input').val());
// 			}
// 		}
// 		var arrNum = 0;
// 		for(var i = 0; i < jsArr.length; i++) {
// 			arrNum += parseInt(jsArr[i])
// 		}
// 		$('.number').text(numbersJ - arrNum)
// 	}
// 	if(parseInt($('.number').text()) < 0) {
// 		$('.number').text(0)
// 	}
// }
// function OnPropChanged(event) {
// 	console.log("The new content: " + event.srcElement.value);
// 	// event.srcElement.value=event.srcElement.value.replace(/\D/g,'');
// 	// if(isNaN(event.srcElement.value))execCommand('undo');
// 	var jsArr = [];
// 	numbersX = parseInt($(this).parents('.listBox').find('.projectB .number').text());
// 	$('.number').text(numbersJ)
// 	if($(this).parents('.listBox').find('.projectB input').val() != '') {
// 		for(var i = 0; i < $('.projectB').length; i++) {
// 			if($('.projectB').eq(i).find('input').val() != '') {
// 				var jsNum = numbersJ - $('.projectB').eq(i).find('input').val()
// 				jsArr.push($('.projectB').eq(i).find('input').val());
// 			}
// 		}
// 		var arrNum = 0;
// 		for(var i = 0; i < jsArr.length; i++) {
// 			arrNum += parseInt(jsArr[i])
// 		}
// 		$('.number').text(numbersJ - arrNum)
// 	} else {
// 		if($('.projectB input').val() == '') {

// 		}
// 		for(var i = 0; i < $('.projectB').length; i++) {
// 			if($('.projectB').eq(i).find('input').val() != '') {
// 				var jsNum = numbersJ - $('.projectB').eq(i).find('input').val()
// 				jsArr.push($('.projectB').eq(i).find('input').val());
// 			}
// 		}
// 		var arrNum = 0;
// 		for(var i = 0; i < jsArr.length; i++) {
// 			arrNum += parseInt(jsArr[i])
// 		}
// 		$('.number').text(numbersJ - arrNum)
// 	}
// 	if(parseInt($('.number').text()) < 0) {
// 		$('.number').text(0)
// 	}
// }