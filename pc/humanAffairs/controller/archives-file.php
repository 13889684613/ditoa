<?php

	//# Mr.Z
	//# 2018-12-02
	//# 员工档案-员工资料

	//当前页面公共配置
	$pageTitle = '资料上传';
	$act = $_REQUEST['act'];
	$page = $_REQUEST['page'];
	$table = PRFIX.'staff_attach';	
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

	//身份证证文件
	$if = $db->get_one($table,'where staffId='.$id.' and category=1','attachFile');
	if($if){
		$data['idFile'] = 'upload/file/staff/'.$if['attachFile'];
	}
	
	//学历证书
	$ef = $db->get_one($table,'where staffId='.$id.' and category=2','attachFile');
	if($ef){
		$data['eduFile'] = 'upload/file/staff/'.$ef['attachFile'];
	}
	
	//户口本
	$rf = $db->get_one($table,'where staffId='.$id.' and category=3','attachFile');
	if($rf){
		$data['registerFile'] = 'upload/file/staff/'.$rf['attachFile'];
	}

	//体检报告
	$ref = $db->get_one($table,'where staffId='.$id.' and category=4','attachFile');
	if($ref){
		$data['reportFile'] = 'upload/file/staff/'.$ref['attachFile'];
	}
	
	//其它文件
	$others = $db->get_all($table,'where staffId='.$id.' and category=5','attachName,attachFile');
	for($e=0;$e<count($others);$e++){
		$others[$e]['attachFile'] = 'upload/file/staff/'.$others[$e]['attachFile'];
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
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('i',$data);
	$smarty->assign('others',$others);
	$smarty->assign('s_category',$s_category);
	$smarty->assign('nav',$nav);

?>