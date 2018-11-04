<?php

	//# Mr.Z
	//# 2018-11-04
	//# 部门信息设置

	//当前页面公共配置
	$pageTitle = '部门信息设置';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'office';
	$where = '';
	$rank = 0;

	//获取值
	$officeName = getVal('officeName',2,'');
	$phone = getVal('phone',2,'');
	$officeCode = getVal('officeCode',2,'');
	$fax = getVal('fax',2,'');
	$address = getVal('address',2,'');
	$function = getVal('function',2,'');
	$rank = getVal('rank',1,'');

	$week = getVal('week',2,'');
	$workBeginTime = getVal('workBeginTime',2,'');
	$workOverTime = getVal('workOverTime',2,'');
	$workCoordinate = getVal('workCoordinate',2,'');
	$workRange = getVal('workRange',1,'');

	$title = getVal('title',2,'');
	$content = getVal('content',2,'');

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($officeName == ''){
			ErrorResturn('请填写部门名称');
		}
		if(stringLen($officeName)>50){
			ErrorResturn('部门名称长度不能超过50个字符');
		}
		if($officeCode == ''){
			ErrorResturn('请填写部门编号');
		}
		if(stringLen($officeCode)>50){
			ErrorResturn('部门编长度不能超过50个字符');
		}
		if($phone == ''){
			ErrorResturn('请填写联系电话');
		}
		if(stringLen($phone)>50){
			ErrorResturn('联系电话长度不能超过50个字符');
		}
		if($fax == ''){
			ErrorResturn('请填写传真');
		}
		if(stringLen($fax)>50){
			ErrorResturn('传真长度不能超过50个字符');
		}
		if($address == ''){
			ErrorResturn('请填写办公地址');
		}
		if(stringLen($address)>60){
			ErrorResturn('办公地址长度不能超过60个字符');
		}
		if(count($week) == 0){
			ErrorResturn('请选择工作日');
		}
		if($workBeginTime == ''){
			ErrorResturn('请填写上班时间');
		}
		if(stringLen($workBeginTime)>10){
			ErrorResturn('上班时间长度不能超过10个字符');
		}
		if($workOverTime == ''){
			ErrorResturn('请填写下班时间');
		}
		if(stringLen($workOverTime)>10){
			ErrorResturn('下班时间长度不能超过10个字符');
		}
		if($workRange == 0){
			ErrorResturn('请选择打卡有效范围');
		}
	}

	//创建初始化数据
	if($act == 'add'){
		$action = 'addSave';
	}

	//创建保存
	if($act == 'addSave'){

		//验证部门是否已存在
		$validate = $db->get_one($table,'where officeCode="'.$officeCode.'" or officeName="'.$cnName.'"','officeId');
		if($validate){
			ErrorResturn('部门已存在，请重新填写');
		}

		$val['officeName'] = $officeName;
		$val['officeCode'] = $officeCode;
		$val['phone'] = $phone;
		$val['fax'] = $fax;
		$val['address'] = $address;
		$val['function'] = $function;
		$val['workWeek'] = implode(",", $week);
		$val['workBeginTime'] = $workBeginTime;
		$val['workOverTime'] = $workOverTime;
		$val['workCoordinate'] = $workCoordinate;
		$val['workRange'] = $workRange;
		$val['rank'] = $rank;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){

			$officeId = $db->get_lastId();

			$count = count(array_filter($title));
			for($e=0;$e<$count;$e++){
				$other = array();
				$other['officeId'] = $officeId;
				$other['otherName'] = $title[$e];
				$other['otherContent'] = $content[$e];
				$other['createTime'] = date('Y-m-d H:i:s');

				$db->insert(PRFIX.'office_other',$other);
			}

			TipsRefreshResturn('操作成功','org.php?_f=office');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//编辑初始化数据
	if($act == 'edit'){

		$action = 'editSave';

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_name = getVal('s_name',2,'');

		$data = $db->get_one($table,'where officeId='.$id.'');
		if($data){
			$data['workWeek'] = explode(',',$data['workWeek']);
			$rank = $data['rank'];
		}

		$others = $db->get_all(PRFIX.'office_other','where officeId='.$id.' order by otherId asc','otherName,otherContent');

	}

	//编辑保存
	if($act == 'editSave'){

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_name = getVal('s_name',2,'');

		//验证名称是否已存在
		$validate = $db->get_one($table,'where (officeCode="'.$officeCode.'" or officeName="'.$officeName.'") and officeId<>'.$id.'','officeId');
		if($validate){
			ErrorResturn('部门已存在，请重新填写');
		}

		$val['officeName'] = $officeName;
		$val['officeCode'] = $officeCode;
		$val['phone'] = $phone;
		$val['fax'] = $fax;
		$val['address'] = $address;
		$val['function'] = $function;
		$val['workWeek'] = implode(",", $week);
		$val['workBeginTime'] = $workBeginTime;
		$val['workOverTime'] = $workOverTime;
		$val['workCoordinate'] = $workCoordinate;
		$val['workRange'] = $workRange;
		$val['rank'] = $rank;
		$val['updateTime'] = date('Y-m-d H:i:s');

		$result = $db->update($table,$val,'where officeId='.$id.'');
		if($result){

			$count = count(array_filter($title));

			//重建其它信息
			$db->delete(PRFIX.'office_other','where officeId='.$id.'');
			for($e=0;$e<$count;$e++){
				$other = array();
				$other['officeId'] = $id;
				$other['otherName'] = $title[$e];
				$other['otherContent'] = $content[$e];
				$other['createTime'] = date('Y-m-d H:i:s');

				$db->insert(PRFIX.'office_other',$other);
			}

			TipsRefreshResturn('操作成功','org.php?_f=office&page='.$page.'&s_name='.$s_name.'');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('i',$data);
	$smarty->assign('others',$others);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);

	
?>