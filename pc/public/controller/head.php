<?php
	
	//# Mr.Z
	//# 2018-12-14
	//# 头部公共文件

	//当前页面公共配置
	$pageTitle = '页面头部';
	$act = getVal('act',2,'');

	//url para
	$QUERY_STRING = $_SERVER['QUERY_STRING'];

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

?>