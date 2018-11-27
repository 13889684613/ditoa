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
		$data['checkStatus'] = static_checkStatus($data['checkStatus']);

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

	//获取审批信息 begin
	if($data['checkCategory']!=0){

		//自定义审批流
		if($data['checkCategory'] == 2){
			$where = 'where checkProcessId='.$data['checkProcessId'].'';
			$process = $db->get_one(PRFIX.'checkprocess',$where,'checkProcessId');
			if($process){
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
			$process = $db->get_one(PRFIX.'default_checkprocess',$where,'defaultCheckProcessId');
			if($process){

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
	$smarty->assign('i',$data);
	$smarty->assign('process',$processs);	//进度轴
	$smarty->assign('check',$check);		//表格
	$smarty->assign('id',$mailApplyId);
	$smarty->assign('page',$page);
	$smarty->assign('action',$action);

?>