<?php

	//# Mr.Z
	//# 2018-11-28
	//# 邮箱审批详情

	//当前页面公共配置
	$pageTitle = '邮箱审批详情';
	$page = $_REQUEST['page'];
	$table = PRFIX.'mailapply';	
	$act = $_REQUEST['act'];
	$where = '';

	$mailApplyId = getVal('id',1,'');
	if($mailApplyId == 0){
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
	$data = $db->get_one($table,'where mailApplyId='.$mailApplyId.'','applyUsrId,applyUsrRole,applyUsrOffice,applyUsrGroup,mailName,reason,applyTime,checkCategory,checkProcessId,checkStatus,curCheckLevel,curCheckOffice,curCheckGroup,curCheckRole');
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

		if($data['checkStatus'] == 3||$data['checkStatus'] == 4){

			//拉取拒绝或作废原因
			$R = $db->get_one(PRFIX.'mailapply_check','where mailApplyId='.$mailApplyId.' order by mailCheckId desc limit 1','remark');
			if($R){
				$reason = $R['remark'];
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
	$smarty->assign('s_status',$s_status);
	$smarty->assign('s_time',$s_time);
	$smarty->assign('i',$data);
	$smarty->assign('process',$processs);	//进度轴
	$smarty->assign('check',$check);		//表格
	$smarty->assign('id',$mailApplyId);
	$smarty->assign('page',$page);
	$smarty->assign('check',$check);
	$smarty->assign('reason',$reason);
	$smarty->assign('checkLevel',$checkLevel);
	$smarty->assign('formList',$formList);

	$url = 'human-affairs.php?_f=mail-apply-check-info&id='.$mailApplyId.'';

	//审批结果 - 通过
	if($act == 'agree'){
		
		$val['mailApplyId'] = $mailApplyId;
		$val['checkLevel'] = $data['curCheckLevel'];
		$val['checkUsr'] = $common_staffId;
		$val['checkRole'] = $common_checkRole;
		$val['checkResult'] = 1;
		$val['checkTime'] = date('Y-m-d H:i:s');

		$result = $db->insert(PRFIX.'mailapply_check',$val);
		if($result){

			$apply = array();

			$apply['curCheckLevel'] = $nextCheckLevel;

			//找出下一个审批人员的部门、工作组、角色
			$nextCheckInfo = getNextCheckInfo($data['checkCategory'],$data['checkProcessId'],$nextCheckLevel);

			$apply['curCheckOffice'] = $nextCheckInfo[0];
			$apply['curCheckGroup'] = $nextCheckInfo[1];
			$apply['curCheckRole'] = $nextCheckInfo[2];

			//checkLevel为0时不需要审批，=curCheckLevel时为最后一个人审批
			//满足以上两个条件时视为审批完成
			if($checkLevel == 0||$checkLevel == $data['curCheckLevel']){
				//更新邮箱申请表初始密码
				$initialPassword = getVal('pwd',2,'');

				if($initialPassword == ''){
					ErrorResturn('请设置初始登录密码');
				}
				if(stringLen($initialPassword)>50){
					ErrorResturn('初始登录密码长度不能超过50个字符');
				}

				$apply['initialPassword'] = $initialPassword;
				$apply['checkStatus'] = 2;	//已批准

			}else{
				$apply['checkStatus'] = 1;	//审批中
			}
			$db->update(PRFIX.'mailapply',$apply,'where mailApplyId='.$mailApplyId.'');

			RefreshResturn($url);

		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//审批结果 - 拒绝
	if($act == 'refuse'){

		$reason = getVal('reason',2,'');

		$val['mailApplyId'] = $mailApplyId;
		$val['checkLevel'] = $data['curCheckLevel'];
		$val['checkUsr'] = $common_staffId;
		$val['checkRole'] = $common_checkRole;
		$val['checkResult'] = 2;
		$val['remark'] = $reason;
		$val['checkTime'] = date('Y-m-d H:i:s');

		$result = $db->insert(PRFIX.'mailapply_check',$val);
		if($result){

			$apply = array();

			//更新申请表状态
			$apply['checkStatus'] = 3;		//已拒绝

			$db->update($table,$apply,'where mailApplyId='.$mailApplyId.'');

			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//审批结果 - 作废
	if($act == 'cancel'){

		$reason = getVal('reason',2,'');

		$val['mailApplyId'] = $mailApplyId;
		$val['checkLevel'] = $data['curCheckLevel'];
		$val['checkUsr'] = $common_staffId;
		$val['checkRole'] = $common_checkRole;
		$val['checkResult'] = 3;
		$val['remark'] = $reason;
		$val['checkTime'] = date('Y-m-d H:i:s');

		$result = $db->insert(PRFIX.'mailapply_check',$val);
		if($result){

			$apply = array();

			//更新申请表状态
			$apply['checkStatus'] = 4;		//已作废

			$db->update($table,$apply,'where mailApplyId='.$mailApplyId.'');

			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

?>