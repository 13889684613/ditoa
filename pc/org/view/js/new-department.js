/* 
    # 企业详情编辑
	# Bowen
	# 2018-11-21
*/

$(function() {
	$('.addFormBtnL').click(function() {
		$('.map').hide();

	})

	$('.addressForm').click(function() {
		$('.map').show();
	})
	$('body').delegate('.retrievalsInput input,.StableTdR input', 'click', function(e) {
		$('.retrievalsInputNavBox').hide();
		if($(this).parent().find('.retrievalsInputNavBox')) {
			$(this).parent().find('.retrievalsInputNavBox').show()
		}
		stopBubble(e);
	})
	$('body').click(function() {
		$('.retrievalsInputNavBox').hide();
	})
	$('body').delegate('.retrievalsInputNav li', 'click', function() {
		$(this).parents('.retrievalsInput').find('input').val($(this).text()).attr('data-type', '1')
		$(this).parents('.StableTdR').find('input').val($(this).text()).attr('data-type', '1')
		$('.retrievalsInputNavBox').hide()
	})
	//IE placeholder 
	$('.formInput').placeholder();
	$('.otherFormBox').placeholder();

	//添加维修列表
	$('.addBtn').click(function() {
		var html = '<div class="otherForm clearfix"><div class="otherFormBox titleForm w28 clearfix"><p>标题</p><input type="text"name=""placeholder="请输入信息标题"class="otherInput otherTitleInput"/></div><div class="otherFormBox infoForm w33 clearfix"><p>信息内容</p><input type="text"name=""placeholder="请输入内容"class="otherInput otherContentInput"/></div><div class="removeBtn"></div></div>';
		$('.otherAllbox').append(html);
	})

	//删除维修列表
	$('.otherAllbox').delegate('.removeBtn', 'click', function() {
		$this = $(this);
		tic('确定删除吗？', '删除后无法恢复！请谨慎操作！', '确定删除', '取消');
		$('.popTicButtonL a').attr('href', 'javascript:;');
	})
	$('body').delegate('.popTicButtonL,.popTicButtonR,.popTicTitle img,.popTicMask', 'click', function() {
		$('.popTic').remove();
	})

	$('body').delegate('.popTicButtonL', 'click', function() {
		$this.parents('.otherForm').remove();
		// for(var i = 0; i < $('.table1Content tr').length; i++) {
		// 		$('.table1Content tr').eq(i + 1).find('td').eq(0).find('span').text(i + 1)
		// 	}
		$('.popTic').remove()
	})
	//显示隐藏tips
	$('.tipsIcon').mouseenter(function() {
		$(this).find('.tips').show();
	})

	$('.tipsIcon').mouseleave(function() {
		$(this).find('.tips').hide();
	})
	//选择部门、工作组
	$('.workingDay').delegate('.workingDayBox', 'click', function() {
		var idx = $(this).index();
		if($(this).hasClass('on')) {
			$(this).removeClass('on');
			//          if($(this).hasClass('selectSector')) {
			$('.groupBox').eq(idx).hide();
			//          }
		} else {
			$(this).addClass('on');
			//          if($(this).hasClass('selectSector') && !$('.pulishBtn.sector').hasClass('on')) {
			//              $('.groupBox').eq(idx).show();
			//          }
		}
	})
	// 提交表单
	$('.formBtnSave').click(function() {
		var cnNameInput = $('.cnNameInput').val();
		var enNameInput = $('.enNameInput').val();
		var cnAddressInputb = $('.cnAddressInputb').val();
		var enAddressInput = $('.enAddressInput').val();
		var businessInput = $('.businessInput').val();
		var timeForms = $('.timeForms').val();
		var timeFormz = $('.timeFormz').val();
		var reg = /^(20|21|22|23|[0-1]\d):[0-5]\d$/;
		var regExp = new RegExp(reg);
		if(cnNameInput == '') {
			popAlert('请输入部门名称');
			$('.cnNameInput').focus();
			return false;
		}
		if(enNameInput == '') {
			popAlert('部门联系电话');
			$('.enNameInput').focus();
			return false;
		}
		if(cnAddressInputb == '') {
			popAlert('请输入部门编号');
			$('.cnAddressInputb').focus();
			return false;
		}
		if(enAddressInput == '') {
			popAlert('请输入传真');
			$('.enAddressInput').focus();
			return false;
		}
		if(businessInput == '') {
			popAlert('请输入详细地址');
			$('.businessInput').focus();
			return false;
		}
		if(timeForms == '') {
			popAlert('请选择上班时间');
			$('.timeForms').focus();
			return false;
		}
		if(!regExp.test(timeForms)) {　　
			popAlert("时间格式08:00");　　
			return;
		}
		if(timeFormz == '') {
			popAlert('请选择下班时间');
			$('.timeFormz').focus();
			return false;
		}
		if(!regExp.test(timeFormz)) {　　
			popAlert("时间格式17:00");　　
			return;
		}
		if($('.workingDay .on').length < 1) {
			popAlert('请选择工作日');
			return false;
		}
		if($('.foreAddressInfo').text() == '') {
			popAlert('请选择打卡地址');
			return false;
		}
		if($('.formSelect').text() == '请选择有效范围') {
			popAlert('请选择有效范围');
			$('.formSelect').focus();
			return false;
		}
		$('.otherInput').each(function() {
			if($(this).val() != '') {
				if($(this).hasClass('otherTitleInput')) {
					if($(this).val().length > 50) {
						popAlert('信息标题需在50字以内');
						$(this).focus();
						return false;
					}
					if($(this).parent().next().find('input').val() == '') {
						popAlert('请完善其他信息');
						$(this).parent().next().find('input').focus();
						return false;
					}
				}
				if($(this).hasClass('otherContentInput')) {
					if($(this).val().length > 500) {
						popAlert('信息内容需在500字以内');
						$(this).focus();
						return false;
					}
					if($(this).parent().prev().find('input').val() == '') {
						popAlert('请完善其他信息');
						$(this).parent().prev().find('input').focus();
						return false;
					}
				}
			}

		})
		$('form').submit()
	})

})

//地图加载
var longitude;
var latitude;
var address;
var addressInfo;
var map = new AMap.Map("container", {
	resizeEnable: true,
	zoom: 9
});
//输入提示
var autoOptions = {
	input: "tipinput"
};
var auto = new AMap.Autocomplete(autoOptions);
var placeSearch = new AMap.PlaceSearch({
	map: map
}); //构造地点查询类
AMap.event.addListener(auto, "select", select); //注册监听，当选中某条记录时会触发
function select(e) {
	console.log(e)
	placeSearch.setCity(e.poi.adcode);
	placeSearch.search(e.poi.name); //关键字查询查询
	$('.addressNameInput').val(e.poi.name);
	$('.addressInfo span').text(e.poi.district + e.poi.name);
	longitude = e.poi.location.lng;
	latitude = e.poi.location.lat;
	address = e.poi.name;
	addressInfo = e.poi.district + e.poi.name;
}
var toolBar = new AMap.ToolBar({
	visible: true
})
map.addControl(toolBar);

//为地图注册click事件获取鼠标点击出的经纬度坐标
var clickEventListener = map.on('click', function(e) {
	var lng = e.lnglat.getLng();
	var lat = e.lnglat.getLat();
	var url = 'http://restapi.amap.com/v3/geocode/regeo?key=0ea7cc6f9433d93eeea045a58dd1e274&location=' + lng + ',' + lat + '&radius=1000&extensions=all&batch=false&roadlevel=0';
	$.ajax({
		type: "get",
		url: url,
		async: false,
		success: function(e) {
			$('.addressNameInput').val(e.regeocode.pois[0].name);
			$('.addressInfo span').text(e.regeocode.formatted_address);
			longitude = lng;
			latitude = lat;
			address = e.regeocode.pois[0].name;
			addressInfo = e.regeocode.formatted_address;
			//						$('.foreAddress').text(e.regeocode.pois[0].name);
			//						$('.foreAddressInfo').text(e.regeocode.formatted_address)
		}
	});
});

$('.addFormBtnR').click(function() {
	console.log(longitude + ',' + latitude);
	console.log(addressInfo)
	//		$.ajax({
	//			type:"get",
	//			url:"",
	//			async:true,
	//			dataType:'json',
	//			data:{
	//				lonlat:longitude+','+latitude,
	//				addressInfo:addressInfo,
	//			}
	//			success:function(data){
	$('.foreAddress').text(address);
	$('.foreAddressInfo').text(addressInfo);
	$('.map').hide()
	//			}
	//		});
})