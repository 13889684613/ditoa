<?php

	//# Mr.Z
	//# 2018-12-2
	//# 企业资质证件管理

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '企业资质证件管理';
	$router = '?_f=certificate';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'certificate';
	$where = '';

	//所属企业
	$company = $db->get_all(PRFIX.'company','order by rank desc,createTime desc','companyId,cnName');
	
	//检索
	$s_company = getVal('s_company',1,'');
	$s_name = getVal('s_name',2,'');

	if($s_company!=0){
		$where .= ' and companyId='.$s_company.'';
		$track .= '&s_company='.$s_company.'';
	}
	if($s_name!=''){
		$where .= ' and (cerName like "%'.$s_name.'%" or remark like "%'.$s_name.'%")';
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
	$field = 'cerId,companyId,cerName,cerImg,createTime,overDate,rank';
	$data = $db->get_some($table,$page->firstcount,$length,'order by rank desc,createTime desc',$where,$field);
	foreach ($data as $key => $value) {
		++ $sn;
		$data[$key]['sn'] = $sn;
		//所属公司
		$data[$key]['company'] = getCompanyName($data[$key]['companyId']);
	}
	
	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('company',$company);
	$smarty->assign('s_company',$s_company);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('data',$data);
	$smarty->assign('page',$page->show_link(1));
	$smarty->assign('curPage',$curPage);

	//操作返回地址
	$url = $router.$track;

	//删除
	if($act == 'remove'){
		$id = getVal('id',1,'get');

		//找到制度文件
		$F = $db->get_one($table,'where cerId='.$id.'','cerImg');
		if($F){
			$attach = 'upload/file/cer/'.$F['cerImg'];
		}

		$result = $db->delete($table,'where cerId='.$id.'');
		if($result){
			unlink($attach);	//删除物理文件
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
		$result = $db->update($table,$val,'where cerId='.$id.'');
		if($result){
			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}
	}

?>