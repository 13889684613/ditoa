<?php

	//# Mr.Z
	//# 2018-12-05
	//# 员工档案-离职信息

	//当前页面公共配置
	$pageTitle = '离职信息';
	$act = $_REQUEST['act'];
	$page = $_REQUEST['page'];
	$table = PRFIX.'staff';	
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
	$track = '&page='.$page.'&id='.$id.'&s_company='.$s_company.'&s_office='.$s_office.'&s_post='.$s_post.'&s_status='.$s_status.'';
	$track .= '&s_name='.$s_name.'&s_category='.$s_category.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'&nav='.$nav.'';
	//记录列表页检索条件over

	//员工档案进度轴
	$archivesData = getArchivesCommon($id);

	$fileds = 'trueQuitDate,quitTable,staffName';
	$data = $db->get_one($table,'where staffId='.$id.'',$fileds);
	if($data){
		$data['quitTable'] = 'upload/file/staff/'.$data['quitTable'];
		$data['trueQuitDate'] = date('Y年m月d日',strtotime($data['trueQuitDate']));
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
	$smarty->assign('i',$data);
	$smarty->assign('a',$archivesData);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('s_category',$s_category);
	$smarty->assign('nav',$nav);
	$smarty->assign('track',$track);

?>