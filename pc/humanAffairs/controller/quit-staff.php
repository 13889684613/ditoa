<?php

	//# Mr.Z
	//# 2018-12-05
	//# 离职人员

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '离职人员';
	$router = '?_f=staff';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'staff';
	$where = '';

	//所属企业
	$company = $db->get_all(PRFIX.'company','order by rank desc,createTime desc','companyId,cnName');

	//所属部门
	$office = $db->get_all(PRFIX.'office','order by rank desc,createTime desc','officeId,officeName');

	//状态
	$quitCategory = static_quit();
	
	//检索
	$s_company = getVal('s_company',1,'');
	$s_office = getVal('s_office',1,'');
	$s_category = getVal('s_category',1,'');
	$s_name = getVal('s_name',2,'');

	if($s_company!=0){
		$where .= ' and companyId='.$s_company.'';
		$track .= '&s_company='.$s_company.'';
	}
	if($s_office!=0){
		$where .= ' and officeId='.$s_office.'';
		$track .= '&s_office='.$s_office.'';
	}
	if($s_category!=''&&is_numeric($s_category)){
		$where .= ' and quitCategory='.$s_category.'';
		$track .= '&s_category='.$s_category.'';
	}
	if($s_name!=''){
		$where .= ' and staffName like "%'.$s_name.'%"';
		$track .= '&s_name='.$s_name.'';
	}

	//category=0为普通员工，1为系统管理员
	$where = 'where category=0 and status=2'.$where;

	//页面分页配置
	$total = $db->Count($table,$where);
	$length = 5;
	$page = new page_link();
	$page->page_linkTo($total,$length,'page');
	if(empty($curPage)){$curPage = 1;}
	$sn = $curPage * $length - $length;	//序号

	//拉取员工数据
	$field = 'staffId,companyId,officeId,staffName,postId,tel,trueQuitDate,quitCategory';
	$data = $db->get_some(PRFIX.'staff',$page->firstcount,$length,'order by trueQuitDate desc',$where,$field);
	foreach ($data as $key => $value) {
		++ $sn;
		$data[$key]['sn'] = $sn;
		$data[$key]['company'] = getCompanyName($data[$key]['companyId']);
		$data[$key]['office'] = getOfficeName($data[$key]['officeId']);
		//职务
		$P = $db->get_one(PRFIX.'post','where postId='.$data[$key]['postId'].'','postName');
		$data[$key]['post'] = $P['postName'];
		$data[$key]['quitCategory'] = static_quit($data[$key]['quitCategory']);
	}
	
	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('company',$company);
	$smarty->assign('office',$office);
	$smarty->assign('s_company',$s_company);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_category',$s_category);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('data',$data);
	$smarty->assign('page',$page->show_link(1));
	$smarty->assign('curPage',$curPage);
	$smarty->assign('track',$track);
	$smarty->assign('quitCategory',$quitCategory);

?>