<?php

	//# Mr.Z
	//# 2018-12-1
	//# 离职审批详情

	//当前页面公共配置
	$pageTitle = '离职审批详情';
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
	$s_status = getVal('s_status',1,'');
	$s_name = getVal('s_name',2,'');
	$s_time = getVal('s_time',2,'');
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

	//显示审批操作表单 begin

	//系统管理员
	$formList = false;
	if($common_category==1&&($data['checkStatus']==0||$data['checkStatus']==1)){
		$formList = ture;
	}elseif($common_category==0&&($data['checkStatus']==0||$data['checkStatus']==1)&&($data['curCheckOffice']==$common_office||$data['curCheckOffice']==0)&&($data['curCheckGroup']==$common_group||$data['curCheckGroup']==0)&&$data['curCheckRole']==$common_checkRole){
		$formList = ture;
	}

	//显示审批操作表单 over

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
	$smarty->assign('s_status',$s_status);
	$smarty->assign('s_time',$s_time);
	$smarty->assign('i',$data);
	$smarty->assign('process',$processs);	//进度轴
	$smarty->assign('check',$check);		//表格
	$smarty->assign('id',$quitApplyId);
	$smarty->assign('page',$page);
	$smarty->assign('check',$check);
	$smarty->assign('remark',$remark);
	$smarty->assign('checkLevel',$checkLevel);
	$smarty->assign('formList',$formList);

	$url = 'human-affairs.php?_f=quit-apply-check-info&id='.$quitApplyId.'';

	//审批结果 - 通过
	if($act == 'agree'){

		//通过祝贺语，可填项
		$remark = getVal('remark',2,'');
		if($remark!=''){
			if(stringLen($remark)>100){
				ErrorResturn('祝贺语长度不能超过100个字符');
			}
		}else{
			$remark = '';
		}
		
		$val['quitApplyId'] = $quitApplyId;
		$val['checkLevel'] = $data['curCheckLevel'];
		$val['checkUsr'] = $common_staffId;
		$val['checkRole'] = $common_checkRole;
		$val['checkResult'] = 1;
		$val['remark'] = $remark;
		$val['checkTime'] = date('Y-m-d H:i:s');

		$result = $db->insert(PRFIX.'quitapply_check',$val);
		if($result){

			$apply = array();

			//checkLevel为0时不需要审批，=curCheckLevel时为最后一个人审批
			//满足以上两个条件时视为审批完成
			if($checkLevel == 0||$checkLevel == $data['curCheckLevel']){
				$apply['checkStatus'] = 2;	//已批准
			}else{
				$apply['checkStatus'] = 1;	//审批中
				$apply['curCheckLevel'] = $nextCheckLevel;

				//找出下一个审批人员的部门、工作组、角色
				$nextCheckInfo = getNextCheckInfo($data['checkCategory'],$data['checkProcessId'],$nextCheckLevel);
				$apply['curCheckOffice'] = $nextCheckInfo[0];
				$apply['curCheckGroup'] = $nextCheckInfo[1];
				$apply['curCheckRole'] = $nextCheckInfo[2];
			}
			$db->update(PRFIX.'quitapply',$apply,'where quitApplyId='.$quitApplyId.'');

			RefreshResturn($url);

		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//审批结果 - 拒绝
	if($act == 'refuse'){

		$reason = getVal('reason',2,'');

		$val['quitApplyId'] = $quitApplyId;
		$val['checkLevel'] = $data['curCheckLevel'];
		$val['checkUsr'] = $common_staffId;
		$val['checkRole'] = $common_checkRole;
		$val['checkResult'] = 2;
		$val['remark'] = $reason;
		$val['checkTime'] = date('Y-m-d H:i:s');

		$result = $db->insert(PRFIX.'quitapply_check',$val);
		if($result){

			$apply = array();

			//更新申请表状态
			$apply['checkStatus'] = 3;		//已拒绝

			$db->update($table,$apply,'where quitApplyId='.$quitApplyId.'');

			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//审批结果 - 作废
	if($act == 'cancel'){

		$reason = getVal('reason',2,'');

		$val['quitApplyId'] = $quitApplyId;
		$val['checkLevel'] = $data['curCheckLevel'];
		$val['checkUsr'] = $common_staffId;
		$val['checkRole'] = $common_checkRole;
		$val['checkResult'] = 3;
		$val['remark'] = $reason;
		$val['checkTime'] = date('Y-m-d H:i:s');

		$result = $db->insert(PRFIX.'quitapply_check',$val);
		if($result){

			$apply = array();

			//更新申请表状态
			$apply['checkStatus'] = 4;		//已作废

			$db->update($table,$apply,'where quitApplyId='.$quitApplyId.'');

			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

?>