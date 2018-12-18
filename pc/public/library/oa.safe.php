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
			$common_head = 'upload/images/staff/head/'.$commons['photo'];

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
					$common_power = '1,1,1,1|1,1,1,1,1,1,1,1,1,1,1|1,1,1,1|1,1|1,1,1,1,1,1|1,1,1,1,1,1,1,1,1,1|1,1,1|1,1,1,1,1,1,1,1|1,1,1,1,1|1,1,1,1,1';
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
				$otherPower = explode(',',$menuPower[9]);					//其它权限 员工信息 0:背景调查查看 1:合同信息 2:假期设置 3:账号设置 4:编辑记录
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

	//DIT组织架构menu begin
	$orgMenus = false;
	//企业信息管理
	if($_file == 'company' || $_file == 'company-set'){
		$companyMenu = 1; $orgMenus = true;
	}
	//办事处管理
	if($_file == 'office' || $_file == 'office-set'){
		$officeMenu = 1; $orgMenus = true;
	}
	//工作组管理
	if($_file == 'group' || $_file == 'group-set'){
		$groupMenu = 1; $orgMenus = true;
	}
	//工作组管理
	if($_file == 'org'){
		$orgsMenu = 1; $orgMenus = true;
	}
	if($_prfix == $orgPrfix && $orgMenus){
		$orgMenu = ' on';
	}
	//DIT组织架构menu over

	//人事管理menu
	$humanMenus = false;
	//企业资质证件
	if($_file == 'certificate'){
		$cerMenu = 1; $humanMenus = true;
	}
	//员工管理
	if($_file == 'staff' || $_file == 'staff-information' || $_file == 'staff-family' || $_file == 'staff-education' || $_file == 'staff-welfare'){
		$staffMenu = 1; $humanMenus = true;
	}
	//企业规章制度
	if($_file == 'rules'){
		$ruleMenu = 1; $humanMenus = true;
	}

	if($_prfix == $humanPrfix && $humanMenus ){
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

	$generalMenus = false;
	//企业规章制度管理
	if($_file == 'rules' || $_file == 'rules-set'){
		$rulesMenu = 1; $generalMenus = true;
	}
	//企业资质证件管理
	if($_file == 'certificate' || $_file == 'certificate-set'){
		$certificateMenu = 1; $generalMenus = true;
	}

	if($_prfix == $generalPrfix && $generalMenus ){
		$generalMenu = ' on';
	}

	//系统运维管理menu begin
	$systemMenus = false;
	//系统角色
	if($_file == 'system-role' || $_file == 'system-role-set'){
		$roleMenu = 1; $systemMenus = true;
	}
	//审批角色
	if($_file == 'check-role' || $_file == 'check-role-set'){
		$checkRoleMenu = 1; $systemMenus = true;
	}
	//自定义审批流程设置
	if($_file == 'checkProcess-custom' || $_file == 'checkProcess-custom-set'){
		$checkProcessMenu = 1; $systemMenus = true;
	}
	//默认审批流程设置
	if($_file == 'checkProcess-default' || $_file == 'checkProcess-default-set'){
		$checkProcessDefaultMenu = 1; $systemMenus = true;
	}
	//职务管理
	if($_file == 'post' || $_file == 'post-set'){
		$postMenu = 1; $systemMenus = true;
	}
	//请假类型管理
	if($_file == 'leave-type' || $_file == 'leave-type-set'){
		$leaveTypeMenu = 1; $systemMenus = true;
	}
	//备品类别管理
	if($_file == 'officeTool-type' || $_file == 'officeTool-type-set'){
		$officeToolTypeMenu = 1; $systemMenus = true;
	}
	//备品名称管理
	if($_file == 'officeTool-name' || $_file == 'officeTool-name-set'){
		$officeToolNameMenu = 1; $systemMenus = true;
	}

	if($_prfix == $systemPrfix && $systemMenus ){
		$systemMenu = ' on';
	}
	//系统运维管理menu over

	//考勤管理menu
	if($_prfix == $signPrfix ){
		$signMenu = ' on';
	}

	//系统消息menu
	if($_prfix == $messagePrfix ){
		$messageMenu = ' on';
	}

	//左侧菜单数据绑定 begin
	$smarty->assign('indexMenu',$indexMenu);

	//DIT组织架构
	$smarty->assign('orgMenu',$orgMenu);
	$smarty->assign('companyMenu',$companyMenu);
	$smarty->assign('officeMenu',$officeMenu);
	$smarty->assign('groupMenu',$groupMenu);
	$smarty->assign('orgsMenu',$orgsMenu);

	//人事管理
	$smarty->assign('humanMenu',$humanMenu);
	$smarty->assign('cerMenu',$cerMenu);
	$smarty->assign('ruleMenu',$ruleMenu);
	$smarty->assign('staffMenu',$staffMenu);

	$smarty->assign('leaveMenu',$leaveMenu);
	$smarty->assign('businessMenu',$businessMenu);
	$smarty->assign('carMenu',$carMenu);
	$smarty->assign('officeMenu',$officeMenu);

	//综合事务管理
	$smarty->assign('generalMenu',$generalMenu);
	$smarty->assign('rulesMenu',$rulesMenu);
	$smarty->assign('certificateMenu',$certificateMenu);

	//系统运维管理
	$smarty->assign('systemMenu',$systemMenu);
	$smarty->assign('roleMenu',$roleMenu);
	$smarty->assign('checkRoleMenu',$checkRoleMenu);
	$smarty->assign('checkProcessMenu',$checkProcessMenu);
	$smarty->assign('checkProcessDefaultMenu',$checkProcessDefaultMenu);
	$smarty->assign('postMenu',$postMenu);
	$smarty->assign('leaveTypeMenu',$leaveTypeMenu);
	$smarty->assign('officeToolTypeMenu',$officeToolTypeMenu);
	$smarty->assign('officeToolNameMenu',$officeToolNameMenu);

	$smarty->assign('signMenu',$signMenu);
	$smarty->assign('messageMenu',$messageMenu);
	//左侧菜单数据绑定 over

	//左侧菜单展开与折叠 over

?>