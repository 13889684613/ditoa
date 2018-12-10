<?php

	//# Mr.Z
	//# 2018-12-02
	//# 员工档案-合同信息

	//当前页面公共配置
	$pageTitle = '合同信息';
	$act = $_REQUEST['act'];
	$page = $_REQUEST['page'];
	$table = PRFIX.'staff_contract';	
	$where = '';

	//员工id
	$id = getVal('id',1,'');
	if($id == 0){
		exit;
	}

	//记录列表页检索条件begin
	$s_company = getVal('s_company',1,'');
	$s_office = getVal('s_office',1,'');
	$s_post = getVal('s_post',1,'');
	$s_status = getVal('s_status',2,'');
	$s_name = getVal('s_name',2,'');
	$s_begintime = getVal('s_begintime',2,'');
	$s_overtime = getVal('s_overtime',2,'');
	$s_category = getVal('s_category',1,'');	//离职类型，离职人员页面传参
	$nav = getVal('nav',2,'');					//nav == quit时显示离职信息
	//记录列表页检索条件over

	$data = $db->get_all($table,'where staffId='.$id.'','companyId,contractNo,beginDate,overDate');
	for($e=0;$e<count($data);$e++){
		$data[$e]['company'] = getCompanyName($data[$e]['companyId']);
		$data[$e]['time'] = date('Y年m月d日',strtotime($data[$e]['beginDate'])).'-'.date('Y年m月d日',strtotime($data[$e]['overDate']));
	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('s_company',$s_company);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_post',$s_post);
	$smarty->assign('s_status',$s_status);
	$smarty->assign('s_begintime',$s_begintime);
	$smarty->assign('s_overtime',$s_overtime);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('data',$data);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('s_category',$s_category);
	$smarty->assign('nav',$nav);

?>