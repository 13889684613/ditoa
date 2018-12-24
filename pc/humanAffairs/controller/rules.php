<?php

	//# Mr.Z
	//# 2018-12-2
	//# 企业规章制度

	//权限验证
	if($menuGeneralAffairs[0] == 0){
		RefreshResturn('index.php?_f=login');
	}

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '企业规章制度';
	$router = '?_f=rules';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'rules';
	$where = '';
	
	//检索
	$s_name = getVal('s_name',2,'');

	if($s_name!=''&&$s_name!='请填写制度名称'){
		$where .= ' and title like "%'.$s_name.'%"';
		$track .= '&s_name='.$s_name.'';
	}

	$where = 'where 1=1'.$where;

	//页面分页配置
	$total = $db->Count($table,$where);
	$length = 5;
	$page = new page_link();
	$page->page_linkTo($total,$length,'page');
	if(empty($curPage)){$curPage = 1;}
	$sn = $curPage * $length - $length;	//序号

	//拉取邮箱申请数据
	$field = 'title,attach,createTime';
	$data = $db->get_some($table,$page->firstcount,$length,'order by rank desc,createTime desc',$where,$field);
	foreach ($data as $key => $value) {
		++ $sn;
		$data[$key]['sn'] = $sn;
	}
	
	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('data',$data);
	$smarty->assign('page',$page->show_link(1));
	$smarty->assign('curPage',$curPage);
	$smarty->assign('track',$track);

?>