<?php

	//# Mr.Z
	//# 2018-11-14
	//# 登录页面

	//当前页面公共配置
	$pageTitle = 'DIT OA办公管理系统';
	$act = $_REQUEST['act'];
	$table = PRFIX.'staff';	
	$where = '';

	//自动登录 begin
	if($_COOKIE['cache_staffId']!=''){

		$staffId = decrypt($_COOKIE['cache_staffId'],'dit');
		//跳转页面
		$S = $db->get_one($table,'wehre staffId='.$staffId.'','isUpdatePwd,trueQuitDate');
		if($S){
			//员工离职状态 
			if($S['trueQuitDate']!=''){
				$quitDate = strtotime($S['trueQuitDate']);
				if(time()>=$quitDate){
					TipsRefreshResturn('您已离职，登录帐号已关闭','index.php?_f=login');
				}
			}
			//合法用户
			if($S['isUpdatePwd'] == 1){
				RefreshResturn('index.php?_f=index');
			}else{
				RefreshResturn('index.php?_f=set-password');
			}
		}else{
			//非法用户

			//清除session
			unset($_SESSION['cache_staffId']);
			session_destroy();

			//清除cookies
			setcookie("cache_staffId",NULL);
			RefreshResturn('index.php?_f=login');
		}

	}
	//自动登录 over

	//验证
	if($act == 'loginPost'){

		//获取值 begin
		$usrName = getVal('usrName',2,'');
		$usrPwd = getVal('usrPwd',2,'');
		$autoLogin = getVal('autoLogin',1,'');
		//获取值 over

		//验证
		if($usrName == ''){
			ErrorResturn('请填写您的手机号');
		}
		if($usrPwd == ''){
			ErrorResturn('请填写登录密码');
		}

		//登录
		$pwd = md5('dit'.$usrPwd.'2018');
		$L = $db->get_one($table,'where tel="'.$usrName.'" and loginPwd="'.$pwd.'"','staffId,officeId,groupId,isUpdatePwd,loginTimes,trueQuitDate,status');
		if($L){

			//员工离职状态 
			if($L['trueQuitDate']!=''){
				$quitDate = strtotime($L['trueQuitDate']);
				if(time()>=$quitDate||$L['status']==2){
					TipsRefreshResturn('您已离职，登录帐号已关闭','index.php?_f=login');
				}
			}

			//登录成功 begin

			$staffId = encrypt($L['staffId'],'dit');	//加密用户id
			$_SESSION['cache_staffId'] = $staffId;

			//核实部门准确性
			$O = $db->get_one(PRFIX.'office','where officeId='.$L['officeId'].'','officeName');
			if(!$O){
				ErrorResturn('您的所属部门不存在，请联系管理员');
			}

			//核实工作组准确性
			$G = $db->get_one(PRFIX.'group','where groupId='.$L['groupId'].'','groupName');
			if(!$G){
				ErrorResturn('您的所属工作组不存在，请联系管理员');
			}

			if($autoLogin == 1){
				$cookieExpireTime = 315360000;	//10年过期
				setcookie("cache_staffId", $staffId,time()+$cookieExpireTime);
			}

			//更新登录时间与次数
			$val['lastLoginTime'] = date('Y-m-d H:i:s');
			$val['loginTimes'] = $L['loginTimes'] + 1;
			$db->update($table,$val,'where staffId='.$L['staffId'].'');

			//页面跳转
			if($L['isUpdatePwd'] == 0){
				RefreshResturn('index.php?_f=set-password');
			}else{
				RefreshResturn('index.php?_f=index');
			}

			//登录成功 over

		}else{
			//登录失败
			ErrorResturn('请填写正确的手机号与密码');
		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);

?>