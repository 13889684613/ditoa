<?php

	//# Mr.Z
	//# 2018-10-25
	//# 审核角色管理

	//权限验证
	if($menuSystem[1] == 0){
		RefreshResturn('index.php?_f=login');
	}

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '审批角色管理';
	$router = '?_f=check-role';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'checkrole';
	$where = '';

	//检索
	$s_name = getVal('s_name',2,'');
	if($s_name!=''){
		$where .= 'where checkRoleName like "%'.$s_name.'%"';
		$track .= '&s_name='.$s_name.'';
	}
	
	//页面分页配置
	$total = $db->Count($table,$where);
	$length = 5;
	$page = new page_link();
	$page->page_linkTo($total,$length,'page');
	if(empty($curPage)){$curPage = 1;}
	$sn = $curPage * $length - $length;	//序号

	//拉取数据
	$data = $db->get_some($table,$page->firstcount,$length,'order by rank desc,createTime desc',$where,'checkRoleId,checkRoleName,createTime,rank');
	foreach ($data as $key => $value) {
		++ $sn;
		$data[$key]['sn'] = $sn;
	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('data',$data);
	$smarty->assign('page',$page->show_link(1));
	$smarty->assign('curPage',$curPage);
	$smarty->assign('track',$track);
	$smarty->assign('s_name',$s_name);

	//操作返回地址
	$url = $router.'&page='.$curPage.''.$track;

	//删除
	if($act == 'remove'){
		$id = getVal('id',1,'get');
		$result = $db->delete($table,'where checkRoleId='.$id.'');
		if($result){
			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}
	}

	//调整排序
	if($act == 'updateRank'){
		$id = getVal('id',1,'get');
		$rank = getVal('rank',1,'get');

		$val['rank'] = $rank;
		$result = $db->update($table,$val,'where checkRoleId='.$id.'');
		if($result){
			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}
	}

?>