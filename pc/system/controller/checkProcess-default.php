<?php

	//# Mr.Z
	//# 2018-11-03
	//# 通用审批流管理

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '通用审批流管理';
	$router = '?_f=checkProcess-default';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'default_checkprocess';				//审批流程主表
	$detailTable = PRFIX.'default_checkprocess_detail';	//审批流程明细表
	$roleTable = PRFIX.'checkrole';						//审批角色表
	$where = '';

	//检索
	if($act == 'searchPost'){
		$s_type = getVal('s_type',1,'');
		$s_role = getVal('s_role',1,'');
		if($s_type!=0){
			$where .= ' and checkCategory='.$s_type.'';
			$track .= '&s_type='.$s_type.'';
		}
		if($s_role!=0){
			$where .= ' and (beginRole='.$s_role.' or defaultCheckProcessId in(select checkProcessId from '.$detailTable.' where roleId='.$s_role.'))';
			$track .= '&s_role='.$s_role.'';
		}
		$where = 'where 1=1'.$where;
	}

	//页面分页配置
	$total = $db->Count($table,$where);
	$length = 5;
	$page = new page_link();
	$page->page_linkTo($total,$length,'page');
	if(empty($curPage)){$curPage = 1;}
	$sn = $curPage * $length - $length;	//序号

	//拉取数据
	$data = $db->get_some($table,$page->firstcount,$length,'order by createTime desc',$where,'defaultCheckProcessId,checkCategory,beginRole,checkLevel');
	foreach ($data as $key => $value) {
		$checkProcess = '';
		++ $sn;
		//是否可删除或修改 begin
		$table = static_checkTable($data[$key]['checkCategory']);
		$tableName = $table[2];
		$check = $db->get_one($tableName,'where checkCategory=2 and checkProcessId='.$data[$key]['checkProcessId'].'');
		if($check){
			$data[$key]['isOpt'] = false;
		}else{
			$data[$key]['isOpt'] = true;
		}
		//是否可删除或修改 over
		$data[$key]['sn'] = $sn;
		$data[$key]['checkCategory'] = static_checkType($data[$key]['checkCategory']);
		//审批流明细
		$process = $db->get_all($detailTable,'where checkProcessId='.$data[$key]['defaultCheckProcessId'].'','roleId');
		for($e=0;$e<count($process);$e++){
			$R = $db->get_one($roleTable,'where checkRoleId='.$process[$e]['roleId'].'','checkRoleName');
			$checkProcess .= '->'.$R['checkRoleName'];
		}
		$R = $db->get_one($roleTable,'where checkRoleId='.$data[$key]['beginRole'].'','checkRoleName');
		$checkProcess = $R['checkRoleName'].$checkProcess;
		$data[$key]['checkProcess'] = $checkProcess;
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
		//删除审批流主表
		$result = $db->delete(PRFIX.'default_checkprocess','where defaultCheckProcessId='.$id.'');
		if($result){
			//删除审批流明细表
			$db->delete(PRFIX.'default_checkprocess_detail','where checkProcessId='.$id.'');
			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}
	}


?>