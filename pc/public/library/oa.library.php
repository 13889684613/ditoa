<?php
	
	//# Mr.Z
	//# 2018-12-01
	//# 常用DB操作函数库

	//审批业务提交申请时初始化审批流
	//checkCategory:1,请假 2,出差 3,加班 4,补卡 5,车辆维修 6,办公备品  7,办公备品调转部门 8,离职 9,邮箱申请 10,转正
	//返回值 -- array -- 0:审批状态 1:审批部门 2:审批工作组 3:审批角色 4:审批类型（1:默认审批流 2:自定义审批流） 5:审批流id
	//此方法在带有审批流业务模块中提交申请时使用
	function originCheckProcess($checkCategory){

		global $db;
		global $common_office;
		global $common_group;
		global $common_checkRole;

		$checkStatus = 2;	//默认不需要审批，不审批情况下，视为直接审批通过
		$checkOffice = 0;
		$checkGroup = 0;
		$checkRole = 0;
		$checkCategory = 0;
		$checkProcessId = 0;

		//如定义了自定义审批流遵循自定义审批流
		$custom = $db->get_one(PRFIX.'checkprocess','where checkCategory='.$checkCategory.' and officeId='.$common_office.' and groupId='.$common_group.' and beginRole='.$common_checkRole.' order by createTime desc limit 1','checkProcessId');
		if($custom){

			//查询审批流程
			$check = $db->get_one(PRFIX.'checkprocess_detail','where checkProcessId='.$custom['checkProcessId'].' order by checkLevel asc limit 1','officeId,groupId,roleId');
			if($check){
				$checkStatus = 0;	//待审批
				$checkOffice = $check['officeId'];
				$checkGroup = $check['groupId'];
				$checkRole = $check['roleId'];
				$checkCategory = 2;
				$checkProcessId = $custom['checkProcessId'];
			}

		}else{
			//默认审批流
			$default = $db->get_one(PRFIX.'default_checkprocess','where checkCategory=9 and beginRole='.$common_checkRole.' order by createTime desc limit 1','defaultCheckProcessId');
			if($default){

				//查询审批流程
				$check = $db->get_one(PRFIX.'default_checkprocess_detail','where checkProcessId='.$default['defaultCheckProcessId'].' order by checkLevel asc limit 1','roleId');
				if($check){
					$checkStatus = 0;	//待审批
					$checkOffice = $common_office;
					$checkGroup = $common_group;
					$checkRole = $check['roleId'];
					$checkCategory = 1;
					$checkProcessId = $default['defaultCheckProcessId'];
				}
			}
		}

		$val[0] = $checkStatus;
		$val[1] = $checkOffice;
		$val[2] = $checkGroup;
		$val[3] = $checkRole;
		$val[4] = $checkCategory;
		$val[5] = $checkProcessId;

		return $val;

	}

	//验证是否存在审批流
	//checkCategory:审批业务类型id
	//checkCategory:1,请假 2,出差 3,加班 4,补卡 5,车辆维修 6,办公备品 7,办公备品调转部门 8,离职 9,邮箱申请 10,转正
	//applyId:业务申请id
	//此方法在执行删除或编辑审批业务申请时调用
	function isExistsCheckProcess($checkCategory,$applyId){

		//获取table&fileds
		$D = static_checkTable($checkCategory);

		//验证
		global $db;
		$validate = $db->get_one($D[0],'where '.$D[1].'='.$applyId.'',$D[1]);
		return $validate;

	}

	//通过审批流类型、ID、审批级别拉取下一个审批人部门/工作组以及角色信息
	//checkCategory:审批流类型 1,默认审批流 2,自定义审批流
	//checkProcessId:审批流id
	//checkLevel:审批级别
	//此方法在执行审批通过动作时调用
	function getNextCheckInfo($checkCategory,$checkProcessId,$checklevel){

		global $db;
		global $common_office;
		global $common_group;

		$val = array();

		$nextCheckOffice = 0; $nextCheckGroup = 0; $nextCheckRole = 0;

		if($checkCategory == 2){
			//自定义审批流
			$check = $db->get_one(PRFIX.'checkprocess_detail','where checkProcessId='.$checkProcessId.' and checkLevel='.$checklevel.'','roleId,officeId,groupId');
			if($check){
				$nextCheckOffice = $check['officeId'];
				$nextCheckGroup = $check['groupId'];
				$nextCheckRole = $check['roleId'];
			}
		}else{
			//默认审批流
			$check = $db->get_one(PRFIX.'default_checkprocess_detail','where checkProcessId='.$checkProcessId.' and checkLevel='.$checklevel.'','roleId');
			if($check){
				$nextCheckRole = $check['roleId'];
				$nextCheckOffice = $common_office;
				$nextCheckGroup = $common_group;
			}
		}

		$val[0] = $nextCheckOffice;
		$val[1] = $nextCheckGroup;
		$val[2] = $nextCheckRole;

		return $val;

	}

	//拉取审批进度轴，详细页面调用
	//applyInfo -- array,0:申请用户角色 1:申请人姓名 2:提交时间
	//checkCategory -- 审批流类型 1:默认审批流 2:自定义审批流
	//checkProcessId -- 审批流id
	//businessType -- 审批流业务类型 1,请假 2,出差 3,加班 4,补卡 5,车辆维修 6,办公备品 7,办公备品调转部门 8,离职 9,邮箱申请 10,转正
	//checkLevel -- 审批总级别，固定返回值，重要，执行后续业务用
	//processs -- 返回时间轴信息
	function getCheckLine($applyInfo,$checkCategory,$checkProcessId,$bussinessType){

		global $db;
		$checkLevel = 0;	

		//获取发起信息 begin
		$beginRole = getCheckRoleName($applyInfo[0]);
		$beginStaff = $applyInfo[1];
		$beginTime = $applyInfo[2];
		$processs[0]['role'] = $beginRole;
		$processs[0]['staff'] = $beginStaff;
		$processs[0]['result'] = '发起';
		$processs[0]['time'] = $beginTime;
		//获取发起信息 over

		//自定义审批流
		if($checkCategory == 2){
			$process = $db->get_one(PRFIX.'checkprocess','where checkProcessId='.$checkProcessId.'','checkProcessId,checkLevel');
			if($process){
				$checkLevel = $process['checkLevel'];
				//自定义审批流
				$custom = $db->get_all(PRFIX.'checkprocess_detail','where checkProcessId='.$process['checkProcessId'].' order by checkLevel asc','checkLevel,roleId,officeId,groupId');
				for($c=0;$c<count($custom);$c++){
					$p = $c+1;
					$processs[$p]['role'] = getCheckRoleName($custom[$c]['roleId']);				//审批角色
					
					//获得审批人员、结果、时间
					$customs[0] = $custom[$c]['checkLevel'];
					$customs[1] = $custom[$c]['roleId'];
					$customs[2] = $custom[$c]['officeId'];
					$customs[3] = $custom[$c]['groupId'];
					$result = getCheckResult($applyInfo[3],$bussinessType,$customs);
					$processs[$p]['staff'] = $result[0];
					$processs[$p]['result'] = $result[1];
					$processs[$p]['time'] = $result[2];
					
				}
			}


		}elseif($checkCategory == 1){
			$process = $db->get_one(PRFIX.'default_checkprocess','where defaultCheckProcessId='.$checkProcessId.'','defaultCheckProcessId,checkLevel');
			if($process){

				$checkLevel = $process['checkLevel'];

				//默认审批流
				$default = $db->get_all(PRFIX.'default_checkprocess_detail','where checkProcessId='.$process['defaultCheckProcessId'].' order by checkLevel asc','checkLevel,roleId');
				for($c=0;$c<count($default);$c++){
					$p = $c+1;
					//审批角色
					$processs[$p]['role'] = getCheckRoleName($default[$c]['roleId']);

					//获得审批人员、结果、时间
					$defaults[0] = $default[$c]['checkLevel'];
					$defaults[1] = $default[$c]['roleId'];
					$defaults[2] = 0;
					$defaults[3] = 0;
					$result = getCheckResult($applyInfo[3],$bussinessType,$defaults);
					$processs[$p]['staff'] = $result[0];
					$processs[$p]['result'] = $result[1];
					$processs[$p]['time'] = $result[2];
				}

			}
		}

		$val[0] = $checkLevel;
		$val[1] = $processs;

		return $val;

	}

	//拉取审核结果信息，用于审批进度轴
	//applyId:业务申请id
	//category:1,请假 2,出差 3,加班 4,补卡 5,车辆维修 6,办公备品  7,办公备品调转部门 8,离职 9,邮箱申请 10,转正
	//check -- array:0:当前审批级别 1:审批用户角色 2:审批用户部门 3:审批用户工作组
	function getCheckResult($applyId,$category,$check){

		global $db;

		//获取table&fileds
		$D = static_checkTable($category);

		//获取审批相关信息
		$checkLevel = $check[0];
		$roleId = $check[1];
		$officeId = $check[2];
		$groupId = $check[3];

		$ci = $db->get_one($D[0],'where '.$D[1].'='.$applyId.' and checkLevel='.$checkLevel.'','checkUsr,checkResult,checkTime');
		if($ci){
			$staffName = getStaffName($ci['checkUsr']);			//审批人员
			$result = static_checkResult($ci['checkResult']);	//审批结果
			$time = $ci['checkTime'];							//审批时间 
		}else{
			//审批人员
			$swhere = 'where checkRoleId='.$roleId.'';
			if($officeId!=0&&$groupId!=0){
				$swhere .= ' and officeId='.$officeId.' and groupId='.$groupId.'';
			}
			$staff = $db->get_one(PRFIX.'staff',$swhere,'staffName');
			if($staff){
				$staffName = $staff['staffName'];
				$result = '';
				$time = '';
			}
		}

		$val[0] = $staffName;
		$val[1] = $result;
		$val[2] = $time;

		return $val;

	}

	//拉取审核记录表,详细页面调用
	//applyId:业务申请id
	//category:业务申请类型 1,请假 2,出差 3,加班 4,补卡 5,车辆维修 6,办公备品 7,办公备品调转部门 8,离职 9,邮箱申请 10,转正
	function getCheckTable($applyId,$category){

		global $db;

		$TF = static_checkTable($category);
		$tableName = $TF[0];
		$fieldName = $TF[1];

		$check = $db->get_all($tableName,'where '.$fieldName.'='.$applyId.'','checkLevel,checkUsr,checkRole,checkResult,remark,checkTime');
		for($e=0;$e<count($check);$e++){
			$check[$e]['role'] = getCheckRoleName($check[$e]['checkRole']);
			$check[$e]['result'] = static_checkResult($check[$e]['checkResult']);
			$check[$e]['checkUsr'] = getStaffName($check[$e]['checkUsr']);
		}

		return $check;

	}

	//通过员工ID拉取姓名/所属公司/所属部门/所属工作组信息
	//array('0'=>姓名,'1'=>所属公司,'2'=>所属部门,'3'=>所属工作组,'4'=>头像,'5'=>审批角色)
	function getStaffInfo($staffId){

		$staffInfo = array();

		if($staffId!=''&&$staffId!=0&&is_numeric($staffId)){

			//拉取员工核心数据
			global $db;
			$S = $db->get_one(PRFIX.'staff','where staffId='.$staffId.'','staffName,companyId,officeId,groupId,photo,checkRoleId');
			if($S){
				$staffInfo[0] = $S['staffName'];
				$staffInfo[1] = $S['companyId'];
				$staffInfo[2] = $S['officeId'];
				$staffInfo[3] = $S['groupId'];
				$staffInfo[4] = $S['photo'];
				$staffInfo[5] = $S['checkRoleId'];
			}

		}
		return $staffInfo;

	}

	//通过员工ID拉取员工姓名
	function getStaffName($staffId){

		$staffName = '';
		if($staffId!=''&&$staffId!=0&&is_numeric($staffId)){

			//拉取员工姓名
			global $db;
			$S = $db->get_one(PRFIX.'staff','where staffId='.$staffId.'','staffName');
			if($S){
				$staffName = $S['staffName'];
			}

		}
		return $staffName;

	}

	//通过公司ID拉取公司名称
	function getCompanyName($companyId){

		$companyName = '';
		if($companyId!=''&&$companyId!=0&&is_numeric($companyId)){

			//拉取企业名称
			global $db;
			$C = $db->get_one(PRFIX.'company','where companyId='.$companyId.'','cnName');
			if($C){
				$companyName = $C['cnName'];
			}

		}
		return $companyName;

	}

	//通过部门ID拉取部门名称
	function getOfficeName($officeId){

		$officeName = '';
		if($officeId!=''&&$officeId!=0&&is_numeric($officeId)){

			//拉取部门（办事处）名称
			global $db;
			$O = $db->get_one(PRFIX.'office','where officeId='.$officeId.'','officeName');
			if($O){
				$officeName = $O['officeName'];
			}

		}
		return $officeName;

	}

	//通过工作组ID拉取工作组名称
	function getGroupName($groupId){

		$groupName = '';
		if($groupId!=''&&$groupId!=0&&is_numeric($groupId)){

			//拉取部门（办事处）名称
			global $db;
			$G = $db->get_one(PRFIX.'group','where groupId='.$groupId.'','groupName');
			if($G){
				$groupName = $G['groupName'];
			}

		}
		return $groupName;

	}

	//通过审批角色id拉取角色名称
	function getCheckRoleName($roleId){

		$roleName = '';
		if($roleId!=''&&$roleId!=0&&is_numeric($roleId)){

			//拉取审批角色名称
			global $db;
			$G = $db->get_one(PRFIX.'checkrole','where checkRoleId='.$roleId.'','checkRoleName');
			if($G){
				$roleName = $G['checkRoleName'];
			}

		}
		return $roleName;

	}

	


?>