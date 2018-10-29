<?php

	//# Mr.Z
	//# 2018-10-25
	//# 请假类型添加/编辑

	//当前页面公共配置
	$pageTitle = '请假类型设置';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'leavetype';
	$where = '';

	//获取值
	$typeName = getVal('typeName',2,'');
	$dayNumber = getVal('day',1,'');
	$annualLeave = getVal('annualLeave',1,'');
	$isAttach = getVal('isAttach',1,'');
	$isSameSetting = getVal('isSameSetting',1,'');
	$remark = getVal('remark',2,'');
	$rank = getVal('rank',1,'');

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($typeName == ''){
			ErrorResturn('请设置假期类型名称');
		}
		if(stringLen($typeName)>50){
			ErrorResturn('假期类型名称长度不能超过50个字符');
		}
		if($dayNumber == 0){
			ErrorResturn('请设置假期天数');
		}
		if($remark == ''){
			ErrorResturn('请设置假期说明');
		}
		if(stringLen($remark)>100){
			ErrorResturn('假期说明长度不能超过100个字符');
		}
	}

	//创建初始化数据
	if($act == 'add'){
		$action = 'addSave';
	}

	//创建保存
	if($act == 'addSave'){

		//验证名称是否已存在
		$validate = $db->get_one($table,'where typeName="'.$typeName.'"','leaveTypeId');
		if($validate){
			ErrorResturn('假期名称已存在，请重新填写');
		}

		$val['typeName'] = $typeName;
		$val['dayNumber'] = $dayNumber;
		$val['annualLeave'] = $annualLeave;
		$val['isSameSetting'] = $isSameSetting;
		$val['isAttach'] = $isAttach;
		$val['remark'] = $remark;
		$val['rank'] = $rank;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){
			TipsRefreshResturn('操作成功','system.php?_f=leave-type');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//编辑初始化数据
	if($act == 'edit'){

		$action = 'editSave';

		$leaveTypeId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_typeName = getVal('s_typeName',2,'');

		$data = $db->get_one($table,'where leaveTypeId='.$leaveTypeId.'','typeName,dayNumber,annualLeave,isSameSetting,isAttach,rank,remark');
		if($data){
			$rank = $data['rank'];
		}

	}

	//编辑保存
	if($act == 'editSave'){

		$leaveTypeId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_typeName = getVal('s_typeName',2,'');

		//验证名称是否已存在
		$validate = $db->get_one($table,'where typeName="'.$postName.'" and leaveTypeId<>'.$leaveTypeId.'','leaveTypeId');
		if($validate){
			ErrorResturn('假期名称已存在，请重新填写');
		}

		$val['typeName'] = $typeName;
		$val['dayNumber'] = $dayNumber;
		$val['annualLeave'] = $annualLeave;
		$val['isSameSetting'] = $isSameSetting;
		$val['isAttach'] = $isAttach;
		$val['remark'] = $remark;
		$val['rank'] = $rank;

		$result = $db->update($table,$val,'where leaveTypeId='.$leaveTypeId.'');
		if($result){
			TipsRefreshResturn('操作成功','system.php?_f=leave-type&page='.$page.'&s_typeName='.$s_typeName.'');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('i',$data);
	$smarty->assign('id',$leaveTypeId);
	$smarty->assign('page',$page);
	$smarty->assign('s_typeName',$s_typeName);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);

	
?>