<?php

	//# Mr.Z
	//# 2018-11-15
	//# 用户身份鉴权/公共信息拉取

	//SESSION过期业务处理
	if(trim($_SESSION['cache_staffId'])==''){
	
		if(trim($_COOKIE["cache_staffId"])!=''){
			$_SESSION["cache_staffId"] = $_COOKIE["cache_staffId"];
		}
	}

	//拉取用户信息
	if(trim($_SESSION['cache_staffId']) == ''){
		TipsRefreshResturn('登录过期，请重新登录','index.php?_f=login');
	}else{
		$common_staffId = decrypt($_SESSION['cache_staffId'],'dit');	//用户id

		$commons = $db->get_one(PRFIX.'staff','where staffId='.$common_staffId.'','staffName,officeId,groupId,category,sysRoleId,checkRoleId,trueQuitDate,status');
		if($commons){
			//员工离职
			if($commons['trueQuitDate']!=''){
				$quitDate = strtotime($commons['trueQuitDate']);
				if(time()>=$quitDate||$commons['status']==2){
					TipsRefreshResturn('您已离职，登录帐号已关闭','index.php?_f=login');
				}
			}
			$common_staffName = $commons['staffName'];	//员工姓名
			$common_office = $commons['officeId'];		//员工所属部门
			$common_group = $commons['groupId'];		//员工所属工作组
			$common_category = $commons['category'];	//系统级角色 1系统管理员 0普通员工
			$common_checkRole = $commons['checkRoleId'];//审批角色id

			//获取办事处名称
			$getOffice = $db->get_one(PRFIX.'office','where officeId='.$commons['officeId'].'','officeName');
			if($getOffice){
				$common_officeName = $getOffice['officeName'];
			}else{
				TipsRefreshResturn('您所属的部门不存在，请重新登录','index.php?_f=login');
			}

			//获取工作组名称
			$getGroup = $db->get_one(PRFIX.'group','where groupId='.$commons['groupId'].'','groupName');
			if($getGroup){
				$common_groupName = $getGroup['groupName'];
			}else{
				TipsRefreshResturn('您所属的工作组不存在，请重新登录','index.php?_f=login');
			}

			//获取权限信息
			$getPower = $db->get_one(PRFIX.'sysrole','where sysRoleId='.$commons['sysRoleId'].'','power');
			if(!$getPower){
				TipsRefreshResturn('帐号权限异常，请重新登录','index.php?_f=login');
			}else{
				$menuPower = explode('|',$getPower['power']);				//完整权限
				$menuOrg = explode(',',$menuPower[0]);						//DIT组织架构
				$menuHumanAffairs = explode(',',$menuPower[1]);				//人事管理
				$menuLeave = explode(',',$menuPower[2]);					//请假管理
				$menuBusinessTravel = explode(',',$menuPower[3]);			//出差管理
				$menuCar = explode(',',$menuPower[4]);						//车辆管理
				$menuOfficeTool = explode(',',$menuPower[5]);				//办公备品管理
				$menuGeneralAffairs =explode(',',$menuPower[6]);			//综合事务管理
				$menuSystem =explode(',',$menuPower[7]);					//系统运维管理	
				$menuSignPower = explode(',',$menuPower[8]);				//考勤管理
			}

			//系统消息
			$msgWhere = 'where (receiverRole=0';
			$msgWhere .= ' or (receiverRole=1 and receiverOffice='.$common_office.')';
			$msgWhere .= ' or (receiverRole=2 and receiverGroup='.$common_group.')';
			$msgWhere .= ' or (receiverRole=3 and receiverUsr='.$common_staffId.')';
			$msgWhere .= ')';
			$msgWhere .= ' and messageId not in(select messageId from '.PRFIX.'message_read where readTime is not null and usrId='.$common_staffId.')';

			//未读消息数量
			$common_noRead = $db->count(PRFIX.'message',$msgWhere);

			//数据绑定
			$smarty->assign('common_staffName',$common_staffName);
			$smarty->assign('common_officeName',$common_officeName);
			$smarty->assign('common_groupName',$common_groupName);
			$smarty->assign('common_noRead',$common_noRead);

		}else{
			TipsRefreshResturn('帐号异常，请重新登录','index.php?_f=login');
		}
	}

?>