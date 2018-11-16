<?php

	//# Mr.Z
	//# 2018-11-16
	//# 更新密码

	//当前页面公共配置
	$pageTitle = '更新密码';
	$act = $_REQUEST['act'];
	$table = PRFIX.'staff';	
	$where = '';

	//获取值 begin
	$oldPwd = getVal('oldPwd',2,'');
	$newPwd = getVal('newPwd',2,'');
	$enterPwd = getVal('enterPwd',2,'');
	//获取值 over

	//验证
	if($act == 'updatePost'){
		if($oldPwd == ''){
			ErrorResturn('请填写原密码');
		}
		if($newPwd == ''){
			ErrorResturn('请填写新密码');
		}
		if($enterPwd == ''){
			ErrorResturn('请再次填写新密码');
		}
		if($newPwd!=$enterPwd){
			ErrorResturn('两次密码填写不一致，请重新填写');
		}

		//验证原密码正确性begin
		$oldPwd = md5('dit'.$oldPwd.'2018');
		$right = $db->get_one($table,'where staffId='.$common_staffId.' and loginPwd="'.$oldPwd.'"','staffId');
		if(!$right){
			ErrorResturn('请填写正确的当前密码');
		}
		//验证原密码正确性over

		//变更登录密码
		$newPwd = md5('dit'.$newPwd.'2018');
		$val['loginPwd'] = $newPwd;
		$result = $db->update($table,$val,'where staffId='.$common_staffId.'');
		if($result){
			TipsRefreshResturn('新密码设置成功，请重新登录','index.php?_f=login');
		}else{
			ErrorResturn(ERRORTIPS);
		}
	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);

?>