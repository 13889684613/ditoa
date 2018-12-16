<?php

	//# Mr.Z
	//# 2018-11-15
	//# 用户身份鉴权/公共信息拉取/公共头部/左侧菜单

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

		$commons = $db->get_one(PRFIX.'staff','where staffId='.$common_staffId.'','staffName,officeId,groupId,category,sysRoleId,checkRoleId,trueQuitDate,status,photo');
		if($commons){
			//员工离职
			if($commons['trueQuitDate']!=''){
				$quitDate = strtotime($commons['trueQuitDate']);
				if(time()>=$quitDate||$commons['status']==2){
					TipsRefreshResturn('您已离职，登录帐号已关闭','index.php?_f=login');
				}
			}
			$common_staffName = $commons['staffName'];		//员工姓名
			$common_office = $commons['officeId'];			//员工所属部门
			$common_group = $commons['groupId'];			//员工所属工作组
			$common_category = $commons['category'];		//系统级角色 1系统管理员 0普通员工
			$common_checkRole = $commons['checkRoleId'];	//审批角色id
			$common_head = 'upload/images/straff/head/'.$commons['photo'];

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

			//获取权限信息 begin
			$getPower = $db->get_one(PRFIX.'sysrole','where sysRoleId='.$commons['sysRoleId'].'','power');
			if(!$getPower){
				TipsRefreshResturn('帐号权限异常，请重新登录','index.php?_f=login');
			}else{
				if($common_category == 1){
					//系统管理员拥有所有权限
					$common_power = '1,1,1,1|1,1,1,1,1,1,1,1,1,1,1|1,1,1,1|1,1|1,1,1,1,1,1|1,1,1,1,1,1,1,1,1,1|1,1,1|1,1,1,1,1,1,1,1|1,1,1,1,1';
					$menuPower = explode('|', $common_power);
				}else{
					$menuPower = explode('|',$getPower['power']);				//完整权限
				}
				
				$menuOrg = explode(',',$menuPower[0]);						//DIT组织架构
				$menuHumanAffairs = explode(',',$menuPower[1]);				//人事管理
				$menuLeave = explode(',',$menuPower[2]);					//请假管理
				$menuBusinessTravel = explode(',',$menuPower[3]);			//出差管理
				$menuCar = explode(',',$menuPower[4]);						//车辆管理
				$menuOfficeTool = explode(',',$menuPower[5]);				//办公备品管理
				$menuGeneralAffairs =explode(',',$menuPower[6]);			//综合事务管理
				$menuSystem =explode(',',$menuPower[7]);					//系统运维管理	
				$menuSignPower = explode(',',$menuPower[8]);				//考勤管理
				$otherPower = explode(',',$menuPower[9]);					//其它权限，0:背景调查
			}
			//获取权限信息 over

			//工作接管权限合并 begin
			// 待完善
			//工作接管权限合并 over

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
			$smarty->assign('common_head',$common_head);

			//左侧菜单绑定
			$smarty->assign('menuOrg',$menuOrg);
			$smarty->assign('menuHumanAffairs',$menuHumanAffairs);
			$smarty->assign('menuLeave',$menuLeave);
			$smarty->assign('menuBusinessTravel',$menuBusinessTravel);
			$smarty->assign('menuCar',$menuCar);
			$smarty->assign('menuOfficeTool',$menuOfficeTool);
			$smarty->assign('menuGeneralAffairs',$menuGeneralAffairs);
			$smarty->assign('menuSystem',$menuSystem);
			$smarty->assign('menuSignPower',$menuSignPower);
			$smarty->assign('otherPower',$otherPower);

		}else{
			TipsRefreshResturn('帐号异常，请重新登录','index.php?_f=login');
		}
	}

	//公共头部 begin

	$act = getVal('act',2,'');
	$QUERY_STRING = $_SERVER['QUERY_STRING'];		//url para

	//退出登录
	if($act == 'quitPost'){
		//清除session
		$_SESSION['cache_staffId'] = '';
		unset($_SESSION['cache_staffId']);
		session_destroy();

		//清除cookies
		$_COOKIE['cache_staffId'] = '';
		setcookie('cache_staffId','');
		RefreshResturn('index.php?_f=login');
	}

	//数据绑定
	$smarty->assign('QUERY_STRING',$QUERY_STRING);

	//公共头部 over

	//左侧菜单展开与折叠 begin

	$_prfix = basename($_SERVER['PHP_SELF']);
	$_file = getVal('_f',2,'');

	$indexPrfix = 'index.php';
	$orgPrfix = 'org.php';
	$humanPrfix = 'human-affairs.php';
	$leavePrfix = 'leave.php';
	$businessPrfix = 'business-travel.php';
	$carPrfix = 'car.php';
	$officePrfix = 'office-tool.php';
	$generalPrfix = 'general-affairs.php';
	$systemPrfix = 'system.php';
	$signPrfix = 'sign.php';
	$messagePrfix = 'message.php';

	//首页menu
	if($_prfix == $indexPrfix && $_file == 'index' ){
		$indexMenu = ' on';
	}

	//DIT组织架构menu
	if($_prfix == $orgPrfix ){
		$orgMenu = ' on';
	}

	//人事管理menu
	if($_prfix == $humanPrfix ){
		$humanMenu = ' on';
	}

	//请假管理menu
	if($_prfix == $leavePrfix ){
		$leaveMenu = ' on';
	}

	//出差管理menu
	if($_prfix == $businessPrfix ){
		$businessMenu = ' on';
	}

	//车辆管理menu
	if($_prfix == $carPrfix ){
		$carMenu = ' on';
	}

	//办公备品管理menu
	if($_prfix == $officePrfix ){
		$officeMenu = ' on';
	}

	//综合事务管理menu
	if($_prfix == $generalPrfix ){
		$generalMenu = ' on';
	}

	//系统运维管理menu
	$systemMenus = false;
	//系统角色
	if($_file == 'system-role' || $_file == 'system-role-set'){
		$roleMenu = 1; $systemMenus = true;
	}
	//审批角色
	if($_file == 'check-role' || $_file == 'check-role-set'){
		$checkRoleMenu = 1; $systemMenus = true;
	}

	if($_prfix == $systemPrfix && $systemMenus ){
		$systemMenu = ' on';
	}

	//考勤管理menu
	if($_prfix == $signPrfix ){
		$signMenu = ' on';
	}

	//系统消息menu
	if($_prfix == $messagePrfix ){
		$messageMenu = ' on';
	}

	//数据绑定
	$smarty->assign('indexMenu',$indexMenu);
	$smarty->assign('orgMenu',$orgMenu);
	$smarty->assign('humanMenu',$humanMenu);
	$smarty->assign('leaveMenu',$leaveMenu);
	$smarty->assign('businessMenu',$businessMenu);
	$smarty->assign('carMenu',$carMenu);
	$smarty->assign('officeMenu',$officeMenu);
	$smarty->assign('generalMenu',$generalMenu);

	$smarty->assign('systemMenu',$systemMenu);
	$smarty->assign('roleMenu',$roleMenu);
	$smarty->assign('checkRoleMenu',$checkRoleMenu);

	$smarty->assign('signMenu',$signMenu);
	$smarty->assign('messageMenu',$messageMenu);

	//左侧菜单展开与折叠 over

?>