<?php

	//# Mr.Z
	//# 2018-11-16
	//# 邮箱申请

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '邮箱申请';
	$router = '?_f=mail-apply';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'mailapply';
	$where = '';

	//所属部门
	$office = $db->get_all(PRFIX.'office','order by rank desc,createTime desc','officeId,officeName');

	//系统角色
	$group = $db->get_all(PRFIX.'group','order by rank desc,createTime desc','groupId,groupName');
	
	//检索
	$s_office = getVal('s_office',1,'');
	$s_group = getVal('s_group',1,'');
	$s_name = getVal('s_name',2,'');

	if($s_office!=0){
		$where .= ' and applyUsrId in(select staffId from '.PRFIX.'staff where officeId='.$s_office.')';
		$track .= '&s_office='.$s_office.'';
	}
	if($s_group!=0){
		$where .= ' and applyUsrId in(select staffId from '.PRFIX.'staff where s_group='.$s_group.')';
		$track .= '&s_group='.$s_group.'';
	}
	if($s_name!=''){
		$where .= ' and applyUsrId in(select staffId from '.PRFIX.'staff where staffName like "%'.$s_name.'%")';
		$track .= '&s_name='.$s_name.'';
	}

	//页面分页配置
	$total = $db->Count($table,$where);
	$length = 5;
	$page = new page_link();
	$page->page_linkTo($total,$length,'page');
	if(empty($curPage)){$curPage = 1;}
	$sn = $curPage * $length - $length;	//序号

	//拉取邮箱申请数据
	$field = 'mailApplyId,applyUsrId,mailName,initialPassword,applyTime,checkStatus';
	$data = $db->get_some($table,$page->firstcount,$length,'order by applyTime desc',$where,$field);
	foreach ($data as $key => $value) {
		++ $sn;
		$data[$key]['sn'] = $sn;
		//申请人
		$S = $db->get_one(PRFIX.'staff','where staffId='.$data[$key]['mailApplyId'].'','staffName,officeId,groupId');
		$data[$key]['applyUsr'] = $S['staffName'];
		//部门
		$O = $db->get_one(PRFIX.'office','where officeId='.$S['officeId'].'','officeName');
		$data[$key]['office'] = $S['officeName'];
		//工作组
		$G = $db->get_one(PRFIX.'group','where groupId='.$S['groupId'].'','groupName');
		$data[$key]['group'] = $S['groupName'];
		//初始密码
		if($data[$key]['initialPassword']==''){
			$data[$key]['initialPassword'] = '待设置';
		}
	}
	
	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('company',$company);
	$smarty->assign('office',$office);
	$smarty->assign('role',$role);
	$smarty->assign('post',$post);
	$smarty->assign('status',$status);
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
	$smarty->assign('curPage',$curPage);
	$smarty->assign('track',$track);

	//操作返回地址
	$url = $router.$track;

	//删除
	if($act == 'remove'){
		echo $url;exit;
		$id = getVal('id',1,'get');
		$result = $db->delete($table,'where staffId='.$id.'');
		if($result){
			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}
	}

?>