<?php

	//# Mr.Z
	//# 2018-10-25
	//# 请假类型管理

	//权限验证
	if($menuSystem[5] == 0){
		RefreshResturn('index.php?_f=login');
	}

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '请假类型管理';
	$router = '?_f=leave-type';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'leavetype';
	$where = '';

	//检索
	$s_name = getVal('s_name',2,'');
	if($s_name!=''&&$s_name!='请填写类型名称'){
		$where .= 'where typeName like "%'.$s_name.'%"';
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
	$field = 'leaveTypeId,typeName,dayNumber,annualLeave,isSameSetting,isAttach,rank,createTime';
	$data = $db->get_some($table,$page->firstcount,$length,'order by rank desc,createTime desc',$where,$field);
	foreach ($data as $key => $value) {
		++ $sn;
		$data[$key]['sn'] = $sn;
		//年假否
		if($data[$key]['annualLeave'] == 1){
			$data[$key]['annualLeave'] = '是';
		}else{
			$data[$key]['annualLeave'] = '否';
		}
		//固定天数假期
		if($data[$key]['isSameSetting'] == 1){
			$data[$key]['isSameSetting'] = '是';
		}else{
			$data[$key]['isSameSetting'] = '否';
		}
		//上传附件否
		if($data[$key]['isAttach'] == 1){
			$data[$key]['isAttach'] = '是';
		}else{
			$data[$key]['isAttach'] = '否';
		}
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
		$result = $db->delete($table,'where leaveTypeId='.$id.'');
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
		$result = $db->update($table,$val,'where leaveTypeId='.$id.'');
		if($result){
			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}
	}

?>