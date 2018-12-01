<?php

	//# Mr.Z
	//# 2018-12-1
	//# 离职申请详情

	//当前页面公共配置
	$pageTitle = '离职申请详情';
	$page = $_REQUEST['page'];
	$table = PRFIX.'quitapply';	
	$act = $_REQUEST['act'];
	$where = '';

	$quitApplyId = getVal('id',1,'');
	if($quitApplyId == 0){
		exit;
	}

	//记录列表页检索条件begin
	$s_office = getVal('s_office',1,'');
	$s_group = getVal('s_group',1,'');
	$s_name = getVal('s_name',2,'');
	//记录列表页检索条件over

	//拉取申请详情信息
	$data = $db->get_one($table,'where quitApplyId='.$quitApplyId.'','applyUsrId,applyUsrRole,applyUsrOffice,applyUsrGroup,quitDate,reason,applyTime,checkCategory,checkProcessId,checkStatus,curCheckLevel,curCheckOffice,curCheckGroup,curCheckRole');
	if($data){

		$staffInfo = getStaffInfo($data['applyUsrId']);
		$data['applyName'] = $staffInfo[0];
		$data['photo'] = '/upload/images/staff/head/'.$staffInfo[4];

		$officeId = $data['applyUsrOffice'];
		$groupId = $data['applyUsrGroup'];

		$data['office'] = getOfficeName($officeId);
		$data['group'] = getGroupName($groupId);
		$data['checkStatusText'] = static_checkStatus($data['checkStatus']);

		$nextCheckLevel = $data['curCheckLevel'] + 1;

		if($data['checkStatus'] == 2||$data['checkStatus'] == 3||$data['checkStatus'] == 4){

			//拉取拒绝或作废原因
			$R = $db->get_one(PRFIX.'quitapply_check','where quitApplyId='.$quitApplyId.' order by qaCheckId desc limit 1','remark');
			if($R){
				$remark = $R['remark'];
			}

		}

	}

	//拉取审批进度轴 begin

	//审批总级别,设置为0时不需要审批
	$checkLevel = 0;

	//获取审批信息 begin
	if($data['checkCategory']!=0){

		//业务发起信息传参
		$apply[0] = $data['applyUsrRole'];		//申请用户角色
		$apply[1] = $staffInfo[0];				//申请人姓名
		$apply[2] = $data['applyTime'];			//申请时间
		$apply[3] = $quitApplyId;				//申请id

		$line = getCheckLine($apply,$data['checkCategory'],$data['checkProcessId'],8);
		$checkLevel = $line[0];
		$processs = $line[1];
	}

	//获取审批信息 over

	//拉取审批进度轴 over

	//拉取审批记录表格
	$check = getCheckTable($quitApplyId,8);

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_group',$s_group);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('i',$data);
	$smarty->assign('process',$processs);	//进度轴
	$smarty->assign('check',$check);		//表格
	$smarty->assign('id',$quitApplyId);
	$smarty->assign('page',$page);
	$smarty->assign('check',$check);
	$smarty->assign('remark',$remark);
	$smarty->assign('checkLevel',$checkLevel);

?>