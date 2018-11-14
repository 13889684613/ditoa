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
			ErrorResturn('请设置密码');
		}
		if($enterPwd == ''){
			ErrorResturn('请再次填写密码');
		}
		if($pwd!=$enterPwd){
			ErrorResturn('两次密码填写不一致，请重新填写');
		}

		//变更登录密码
		$newPwd = 'dit'.$pwd.'2018';
		$val['loginPwd'] = $newPwd;
		$result = $db->update($table,$val,'where staffId='.$common_staffId.'');
		if($result){
			RefreshResturn('index.php?_f=index');
		}else{
			ErrorResturn(ERRORTIPS);
		}
	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);

?>