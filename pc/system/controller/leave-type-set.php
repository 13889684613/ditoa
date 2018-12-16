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
			$data['status'] = 'fail';
			$data['message'] = '请设置假期类型名称';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($typeName)>50){
			$data['status'] = 'fail';
			$data['message'] = '假期类型名称长度不能超过50个字符';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($dayNumber == 0){
			$data['status'] = 'fail';
			$data['message'] = '请设置假期天数';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($remark == ''){
			$data['status'] = 'fail';
			$data['message'] = '请设置假期说明';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($remark)>100){
			$data['status'] = 'fail';
			$data['message'] = '假期说明长度不能超过100个字符';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
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
			$data['status'] = 'fail';
			$data['message'] = '假期名称已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
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
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'system.php?_f=leave-type';
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;

	}

	//编辑初始化数据
	if($act == 'edit'){

		$action = 'editSave';

		$leaveTypeId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_name = getVal('s_name',2,'');

		$data = $db->get_one($table,'where leaveTypeId='.$leaveTypeId.'','typeName,dayNumber,annualLeave,isSameSetting,isAttach,rank,remark');
		if($data){
			$rank = $data['rank'];
		}

	}

	//编辑保存
	if($act == 'editSave'){

		$leaveTypeId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_name = getVal('s_name',2,'');

		//验证名称是否已存在
		$validate = $db->get_one($table,'where typeName="'.$postName.'" and leaveTypeId<>'.$leaveTypeId.'','leaveTypeId');
		if($validate){
			$data['status'] = 'fail';
			$data['message'] = '假期名称已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
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
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'system.php?_f=leave-type&page='.$page.'&s_name='.$s_name.'';
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('i',$data);
	$smarty->assign('id',$leaveTypeId);
	$smarty->assign('page',$page);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);

	
?>