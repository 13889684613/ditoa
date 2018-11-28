<?php

	//# Mr.Z
	//# 2018-11-28
	//# 邮箱审批详情

	//当前页面公共配置
	$pageTitle = '邮箱审批详情';
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
	$s_status = getVal('s_status',1,'');
	$s_name = getVal('s_name',2,'');
	$s_time = getVal('s_time',2,'');
	//记录列表页检索条件over

	//拉取申请详情信息
	$data = $db->get_one($table,'where mailApplyId='.$mailApplyId.'','applyUsrId,applyUsrRole,applyUsrOffice,applyUsrGroup,mailName,reason,applyTime,checkCategory,checkProcessId,checkStatus,curCheckLevel');
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

	}

	//拉取审批进度轴 begin

	//获取发起信息 begin
	$beginRole = getCheckRoleName($data['applyUsrRole']);
	$beginStaff = $staffInfo[0];
	$beginTime = $data['applyTime'];
	$processs[0]['role'] = $beginRole;
	$processs[0]['staff'] = $beginStaff;
	$processs[0]['result'] = '发起';
	$processs[0]['time'] = $beginTime;
	//获取发起信息 over

	//审批级别,设置为0时不需要审批
	$checkLevel = 0;

	//获取审批信息 begin
	if($data['checkCategory']!=0){

		//自定义审批流
		if($data['checkCategory'] == 2){
			$where = 'where checkProcessId='.$data['checkProcessId'].'';
			$process = $db->get_one(PRFIX.'checkprocess',$where,'checkProcessId,checkLevel');
			if($process){
				$checkLevel = $process['checkLevel'];
				//自定义审批流
				$custom = $db->get_all(PRFIX.'checkprocess_detail','where checkProcessId='.$process['checkProcessId'].' order by checkLevel asc','checkLevel,roleId,officeId,groupId');
				for($c=0;$c<count($custom);$c++){
					$p = $c+1;
					//审批角色
					$processs[$p]['role'] = getCheckRoleName($custom[$c]['roleId']);
					//审批人员、结果、时间 
					$ci = $db->get_one(PRFIX.'mailapply_check','where mailApplyId='.$mailApplyId.' and checkLevel='.$custom[$c]['checkLevel'].'','checkUsr,checkResult,checkTime');
					if($ci){
						//审批人员
						$processs[$p]['staff'] = getStaffName($ci['checkUsr']);
						//审批结果
						$processs[$p]['result'] = static_checkResult($ci['checkResult']);
						//审批时间 
						$processs[$p]['time'] = $ci['checkTime'];
					}else{
						//审批人员
						$swhere = 'where checkRoleId='.$custom[$c]['roleId'].'';
						if($custom[$c]['officeId']!=0&&$custom[$c]['groupId']!=0){
							$swhere .= ' and officeId='.$custom[$c]['officeId'].' and groupId='.$custom[$c]['groupId'].'';
						}
						$staff = $db->get_one(PRFIX.'staff',$swhere,'staffName');
						if($staff){
							$processs[$p]['staff'] = $staff['staffName'];
							$processs[$p]['result'] = '';
							$processs[$p]['time'] = '';
						}
						
					}
				}
			}


		}elseif($data['checkCategory'] == 1){
			$where = 'where defaultCheckProcessId='.$data['checkCategory'].'';
			$process = $db->get_one(PRFIX.'default_checkprocess',$where,'defaultCheckProcessId,checkLevel');
			if($process){

				$checkLevel = $process['checkLevel'];

				//默认审批流
				$default = $db->get_all(PRFIX.'default_checkprocess_detail','where checkProcessId='.$process['defaultCheckProcessId'].' order by checkLevel asc','checkLevel,roleId');
				for($c=0;$c<count($default);$c++){
					$p = $c+1;
					//审批角色
					$processs[$p]['role'] = getCheckRoleName($custom[$c]['roleId']);
					//审批人员、结果、时间 
					$ci = $db->get_one(PRFIX.'mailapply_check','where mailApplyId='.$mailApplyId.' and checkLevel='.$custom[$c]['checkLevel'].'','checkUsr,checkResult,checkTime');
					if($ci){
						//审批人员
						$processs[$p]['staff'] = getStaffName($ci['checkUsr']);
						//审批结果
						$processs[$p]['result'] = static_checkResult($ci['checkResult']);
						//审批时间 
						$processs[$p]['time'] = $ci['checkTime'];
					}else{
						//审批人员
						$swhere = 'where checkRoleId='.$custom[$c]['roleId'].'';
						$staff = $db->get_one(PRFIX.'staff',$swhere,'staffName');
						if($staff){
							$processs[$p]['staff'] = $staff['staffName'];
							$processs[$p]['result'] = '';
							$processs[$p]['time'] = '';
						}
					}
				}

			}
		}

	}

	//获取审批信息 over

	//拉取审批进度轴 over

	//拉取审批记录表格
	$check = $db->get_all(PRFIX.'mailapply_check','where mailApplyId='.$mailApplyId.'','checkUsr,checkRole,checkResult,remark,checkTime');
	for($e=0;$e<count($check);$e++){
		$check[$e]['role'] = getCheckRoleName($check[$e]['checkRole']);
		$check[$e]['result'] = static_checkResult($check[$e]['checkResult']);
	}

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
	$smarty->assign('action',$action);

	$url = 'human-affairs.php?_f=mail-apply-check-info&id='.$mailApplyId.'';

	//审批结果 - 通过
	if($act == 'agree'){

		$pwd = $getVal('pwd',2,'');

		$val['mailApplyId'] = $mailApplyId;
		$val['checkLevel'] = $nextCheckLevel;
		$val['checkUsr'] = $common_staffId;
		$val['checkRole'] = $common_checkRole;
		$val['checkResult'] = 1;
		$val['checkTime'] = date('Y-m-d H:i:s');

		$result = $db->insert(PRFIX.'mailapply_check',$val);
		if($result){

			$apply['curCheckLevel'] = $nextCheckLevel;
			$apply['curCheckOffice'] = $common_office;
			$apply['curCheckGroup'] = $common_group;
			$apply['curCheckRole'] = $common_checkRole;

			if($checkLevel == 0||$checkLevel == $nextCheckLevel){
				//更新邮箱申请表初始密码
				$initialPassword = getVal('pwd',2,'');
				$pwd['initialPassword'] = $initialPassword;
				$apply['checkStatus'] = 2;	//已批准
			}else{
				$apply['checkStatus'] = 1;	//审批中
			}
			$db->update(PRFIX.'mailapply',$pwd,'wehre mailApplyId='.$mailApplyId.'');

			RefreshResturn($url);

		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//审批结果 - 拒绝
	if($act == 'refuse'){

		$reason = getVal('reason',2,'');

		$val['mailApplyId'] = $mailApplyId;
		$val['checkLevel'] = $nextCheckLevel;
		$val['checkUsr'] = $common_staffId;
		$val['checkRole'] = $common_checkRole;
		$val['checkResult'] = 2;
		$val['remark'] = $reason;
		$val['checkTime'] = date('Y-m-d H:i:s');

		$result = $db->insert(PRFIX.'mailapply_check',$val);
		if($result){

			//更新申请表状态
			$apply['checkStatus'] = 3;		//已拒绝
			$apply['curCheckLevel'] = $nextCheckLevel;
			$apply['curCheckOffice'] = $common_office;
			$apply['curCheckGroup'] = $common_group;
			$apply['curCheckRole'] = $common_checkRole;

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
		$val['checkLevel'] = $nextCheckLevel;
		$val['checkUsr'] = $common_staffId;
		$val['checkRole'] = $common_checkRole;
		$val['checkResult'] = 3;
		$val['remark'] = $reason;
		$val['checkTime'] = date('Y-m-d H:i:s');

		$result = $db->insert(PRFIX.'mailapply_check',$val);
		if($result){

			//更新申请表状态
			$apply['checkStatus'] = 4;		//已作废
			$apply['curCheckLevel'] = $nextCheckLevel;
			$apply['curCheckOffice'] = $common_office;
			$apply['curCheckGroup'] = $common_group;
			$apply['curCheckRole'] = $common_checkRole;

			$db->update($table,$apply,'where mailApplyId='.$mailApplyId.'');

			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

?>