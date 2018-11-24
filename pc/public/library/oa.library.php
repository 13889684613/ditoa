<?php
	
	//# Mr.Z
	//# 2018-11-18
	//# 常用DB操作函数库

	//验证是否存在审批流
	//checkCategory:审批业务类型
	//applyId:业务申请
	function isExistsCheckProcess($checkCategory,$applyId){

		//获取table&fileds
		$D = static_checkTable($checkCategory);

		//验证
		global $db;
		$validate = $db->get_one($D[0],'where '.$D[1].'='.$applyId.'',$D[1]);
		return $validate;

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