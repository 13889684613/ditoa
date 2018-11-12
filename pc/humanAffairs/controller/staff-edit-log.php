<?php

	//# Mr.Z
	//# 2018-11-12
	//# 员工资料编辑记录

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '员工资料编辑记录';
	$router = '?_f=staff-edit-log';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'staff_editlog';
	$where = '';

	//员工id
	$id = getVal('id',1,'');
	if($id == 0){
		exit;
	}
	
	//记录列表页检索条件begin
	$s_company = getVal('s_company',1,'');
	$s_office = getVal('s_office',1,'');
	$s_role = getVal('s_role',1,'');
	$s_post = getVal('s_post',1,'');
	$s_status = getVal('s_status',2,'');
	$s_name = getVal('s_name',2,'');
	$s_idno = getVal('s_idno',2,'');
	$s_begintime = getVal('s_begintime',2,'');
	$s_overtime = getVal('s_overtime',2,'');
	//记录列表页检索条件over

	//页面分页配置
	$total = $db->Count($table,'where staffId='.$id.'');
	$length = 5;
	$page = new page_link();
	$page->page_linkTo($total,$length,'page');
	if(empty($curPage)){$curPage = 1;}
	$sn = $curPage * $length - $length;	//序号

	//编辑记录
	$field = 'editUsr,logContent,logTime';
	$data = $db->get_some($table,$page->firstcount,$length,'order by logTime desc','where staffId='.$id.'',$field);
	foreach ($data as $key => $value) {
		++ $sn;
		$data[$key]['sn'] = $sn;
		//编辑人
		$e = $db->get_one(PRFIX.'staff','where staffId='.$data[$key]['editUsr'].'','staffName,officeId,postId');
		$data[$key]['editor'] = $e['staffName'];

		//所属部门
		$o = $db->get_one(PRFIX.'office','where officeId='.$e['officeId'].'','officeName');
		$data[$key]['office'] = $o['officeName'];

		//职务
		$p = $db->get_one(PRFIX.'post','where postId='.$e['postId'].'','postName');
		$data[$key]['post'] = $p['postName'];
	}
	
	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('s_company',$s_company);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_role',$s_role);
	$smarty->assign('s_post',$s_post);
	$smarty->assign('s_status',$s_status);
	$smarty->assign('s_begintime',$s_begintime);
	$smarty->assign('s_overtime',$s_overtime);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('s_idno',$s_idno);
	$smarty->assign('data',$data);
	$smarty->assign('page',$page->show_link(1));

?>