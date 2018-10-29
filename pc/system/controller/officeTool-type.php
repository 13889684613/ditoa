<?php

	//# Mr.Z
	//# 2018-10-25
	//# 备品类型管理

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '备品类别管理';
	$router = '?_f=officeTool-type';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'officetool_category';
	$where = '';

	//检索
	if($act == 'searchPost'){
		$s_code = getVal('s_code',2,'');
		$s_name = getVal('s_name',2,'');
		if($s_code!=''){
			$where .= 'where categoryCode like "%'.$s_code.'%"';
			$track .= '&s_code='.$s_code.'';
		}
		if($s_name!=''){
			$where .= 'where categoryName like "%'.$s_name.'%"';
			$track .= '&s_name='.$s_name.'';
		}
	}

	//页面分页配置
	$total = $db->Count($table,$where);
	$length = 5;
	$page = new page_link();
	$page->page_linkTo($total,$length,'page');
	if(empty($curPage)){$curPage = 1;}
	$sn = $curPage * $length - $length;	//序号

	//拉取数据
	$data = $db->get_some($table,$page->firstcount,$length,'order by rank desc,createTime desc',$where,'categoryId,categoryCode,categoryName,rank');
	foreach ($data as $key => $value) {
		++ $sn;
		$data[$key]['sn'] = $sn;
	}
	
	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('data',$data);
	$smarty->assign('page',$page->show_link(1));
	$smarty->assign('curPage',$curPage);

	//操作返回地址
	$url = $router.$track;

	//删除
	if($act == 'remove'){
		$id = getVal('id',1,'get');
		$result = $db->delete($table,'where categoryId='.$id.'');
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
		$result = $db->update($table,$val,'where categoryId='.$id.'');
		if($result){
			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}
	}

?>