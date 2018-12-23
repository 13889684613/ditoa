<?php

	//# Mr.Z
	//# 2018-11-05
	//# 工作组管理

	//权限验证
	if($menuOrg[2] == 0){
		RefreshResturn('index.php?_f=login');
	}

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '工作组管理';
	$router = '?_f=group';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'group';
	$where = '';

	//检索
	//所属部门
	$offices = $db->get_all(PRFIX.'office','order by rank desc,createTime desc','officeId,officeName');

	$s_office = getVal('s_office',1,'');
	$s_name = getVal('s_name',2,'');
	if($s_office!=0){
		$where .= ' and officeId='.$s_office.'';
		$track .= '&s_office='.$s_office.'';
	}
	if($s_name!=''){
		$where .= ' and groupName like "%'.$s_name.'%"';
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

	//拉取数据
	$field = 'groupId,officeId,groupName,phone,rank';
	$data = $db->get_some($table,$page->firstcount,$length,'order by rank desc,createTime desc',$where,$field);
	foreach ($data as $key => $value) {
		++ $sn;
		$data[$key]['sn'] = $sn;
		$O = $db->get_one(PRFIX.'office','where officeId='.$data[$key]['officeId'].'','officeName');
		$data[$key]['office'] = $O['officeName'];
	}
	
	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('offices',$offices);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('data',$data);
	$smarty->assign('page',$page->show_link(1));
	$smarty->assign('curPage',$curPage);

	//操作返回地址
	$url = $router.'&page='.$curPage.''.$track;

	//删除
	if($act == 'remove'){
		$id = getVal('id',1,'get');
		$result = $db->delete($table,'where groupId='.$id.'');
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
		$result = $db->update($table,$val,'where groupId='.$id.'');
		if($result){
			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}
	}

?>