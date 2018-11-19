<?php

	//# Mr.Z
	//# 2018-11-19
	//# 邮箱申请详情

	//当前页面公共配置
	$pageTitle = '邮箱申请详情';
	$page = $_REQUEST['page'];
	$table = PRFIX.'mailapply';	
	$where = '';

	$mailApplyId = getVal('id',1,'');
	if($mailApplyId == 0){
		exit;
	}

	//记录列表页检索条件begin
	$s_office = getVal('s_office',1,'');
	$s_group = getVal('s_group',1,'');
	$s_name = getVal('s_name',2,'');
	//记录列表页检索条件over

	//拉取申请详情信息
	$data = $db->get_one($table,'where mailApplyId='.$mailApplyId.'','applyUsrId,mailName,reason,applyTime');
	if($data){

		$staffInfo = getStaffInfo($data['applyUsrId']);
		$data['applyName'] = $staffInfo[0];

		$officeId = $staffInfo[2];
		$groupId = $staffInfo[3];
		$checkRole = $staffInfo[4];

		$data['office'] = getOfficeName($officeId);
		$data['group'] = getGroupName($groupId);

	}

	//拉取审批进度轴
	$where = 'where checkCategory=9 and beginRole='.$checkRole.' and officeId='.$officeId.' and groupId='.$groupId.' and checkProcessId in(select checkProcessId from '.PRFIX.'checkprocess_detail)';
	$process = $db->get_all(PRFIX.'checkprocess',$where,'checkProcessId');
	if($process){
		
	}

	//拉取审批记录表格

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_group',$s_group);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('i',$data);
	$smarty->assign('id',$mailApplyId);
	$smarty->assign('page',$page);
	$smarty->assign('action',$action);

?>