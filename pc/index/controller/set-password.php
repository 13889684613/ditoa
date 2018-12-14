<?php

	//# Mr.Z
	//# 2018-11-14
	//# 设置密码

	//当前页面公共配置
	$pageTitle = '设置密码';
	$act = $_REQUEST['act'];
	$table = PRFIX.'staff';	
	$where = '';

	//获取值 begin
	$pwd = getVal('pwd',2,'');
	$enterPwd = getVal('enterPwd',2,'');
	//获取值 over

	//验证
	if($act == 'setPost'){
		if($pwd == ''){
			$data['status'] = 'fail';
			$data['message'] = '请设置密码';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($enterPwd == ''){
			$data['status'] = 'fail';
			$data['message'] = '请再次填写密码';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($pwd!=$enterPwd){
			$data['status'] = 'fail';
			$data['message'] = '两次密码填写不一致，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		//变更登录密码
		$newPwd = md5('dit'.$pwd.'2018');
		$val['loginPwd'] = $newPwd;
		$val['isUpdatePwd'] = 1;
		$result = $db->update($table,$val,'where staffId='.$common_staffId.'');
		if($result){
			$data['status'] = 'success';
			$data['message'] = '';
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