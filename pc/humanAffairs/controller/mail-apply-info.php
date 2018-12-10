<?php

	//# Mr.Z
	//# 2018-11-24
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
	$data = $db->get_one($table,'where mailApplyId='.$mailApplyId.'','applyUsrId,applyUsrRole,applyUsrOffice,applyUsrGroup,mailName,reason,applyTime,checkCategory,checkProcessId,checkStatus');
	if($data){

		$staffInfo = getStaffInfo($data['applyUsrId']);
		$data['applyName'] = $staffInfo[0];
		$data['photo'] = '/upload/images/staff/head/'.$staffInfo[4];

		$officeId = $data['applyUsrOffice'];
		$groupId = $data['applyUsrGroup'];

		$data['office'] = getOfficeName($officeId);
		$data['group'] = getGroupName($groupId);

		if($data['checkStatus'] == 3||$data['checkStatus'] == 4){

			//拉取拒绝或作废原因
			$R = $db->get_one(PRFIX.'mailapply_check','where mailApplyId='.$mailApplyId.' order by mailCheckId desc limit 1','remark');
			if($R){
				$reason = $R['remark'];
			}

		}

		$data['checkStatus'] = static_checkStatus($data['checkStatus']);

	}

	//拉取审批进度轴 begin

	//获取审批信息 begin
	if($data['checkCategory']!=0){

		//业务发起信息传参
		$apply[0] = $data['applyUsrRole'];		//申请用户角色
		$apply[1] = $staffInfo[0];				//申请人姓名
		$apply[2] = $data['applyTime'];			//申请时间
		$apply[3] = $mailApplyId;				//申请id

		$line = getCheckLine($apply,$data['checkCategory'],$data['checkProcessId']);
		$checkLevel = $line[0];
		$processs = $line[1];

	}

	//获取审批信息 over

	//拉取审批进度轴 over

	//拉取审批记录表格
	$check = getCheckTable($mailApplyId,9);

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_group',$s_group);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('i',$data);
	$smarty->assign('process',$processs);	//进度轴
	$smarty->assign('check',$check);		//表格
	$smarty->assign('id',$mailApplyId);
	$smarty->assign('page',$page);
	$smarty->assign('action',$action);
	$smarty->assign('reason',$reason);

?>