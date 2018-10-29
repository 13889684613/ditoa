<?php

	//# Mr.Z
	//# 2018-10-28
	//# 备品名称管理

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '备品名称管理';
	$router = '?_f=officeTool-name';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'officetool_name';
	$where = '';

	//检索
	if($act == 'searchPost'){
		$s_category = getVal('s_category',1,'');
		$s_name = getVal('s_name',2,'');
		if($s_category!=0){
			$where .= 'where categoryId='.$s_category.'';
			$track .= '&s_category='.$s_category.'';
		}
		if($s_name!=''){
			$where .= 'where toolName like "%'.$s_name.'%"';
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
	$data = $db->get_some($table,$page->firstcount,$length,'order by rank desc,createTime desc',$where,'nameId,categoryId,toolCode,toolName,isFixedAssets,rank');
	foreach ($data as $key => $value) {
		++ $sn;
		$data[$key]['sn'] = $sn;
		//备品所属类别
		$C = $db->get_one(PRFIX.'officetool_category','where categoryId='.$data[$key]['categoryId'].'','categoryCode,categoryName');
		if($C){
			$data[$key]['toolCategory'] = $C['categoryCode'].$C['categoryName'];
		}
		//备品是否需要生成编号
		if($data[$key]['isFixedAssets'] == 1){
			$data[$key]['isFixedAssets'] = '是';
		}else{
			$data[$key]['isFixedAssets'] = '否';
		}
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
		$result = $db->delete($table,'where nameId='.$id.'');
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
		$result = $db->update($table,$val,'where nameId='.$id.'');
		if($result){
			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}
	}

?>