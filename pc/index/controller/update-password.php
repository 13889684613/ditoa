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
			$data['status'] = 'fail';
			$data['message'] = '请填写原密码';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($newPwd == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写新密码';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($enterPwd == ''){
			$data['status'] = 'fail';
			$data['message'] = '请再次填写新密码';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($newPwd!=$enterPwd){
			$data['status'] = 'fail';
			$data['message'] = '两次密码填写不一致，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		//验证原密码正确性begin
		$oldPwd = md5('dit'.$oldPwd.'2018');
		$right = $db->get_one($table,'where staffId='.$common_staffId.' and loginPwd="'.$oldPwd.'"','staffId');
		if(!$right){
			$data['status'] = 'fail';
			$data['message'] = '请填写正确的当前密码';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		//验证原密码正确性over

		//变更登录密码
		$newPwd = md5('dit'.$newPwd.'2018');
		$val['loginPwd'] = $newPwd;
		$result = $db->update($table,$val,'where staffId='.$common_staffId.'');
		if($result){
			$data['status'] = 'success';
			$data['message'] = '新密码设置成功，请重新登录';
			$data['url'] = 'index.php?_f=login';

		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;
	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);

?>