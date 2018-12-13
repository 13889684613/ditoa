<?php

	//# Mr.Z
	//# 2018-11-28
	//# 邮箱申请审批

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '邮箱申请审批';
	$router = '?_f=mail-apply-check';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'mailapply';
	$where = '';

	//所属部门
	$office = $db->get_all(PRFIX.'office','order by rank desc,createTime desc','officeId,officeName');

	//系统角色
	$group = $db->get_all(PRFIX.'group','order by rank desc,createTime desc','groupId,groupName');

	//状态
	$status = static_checkStatus();
	
	//检索
	$s_office = getVal('s_office',1,'');
	$s_group = getVal('s_group',1,'');
	$s_name = getVal('s_name',2,'');
	$s_status = getVal('s_status',1,'');
	$s_time = getVal('s_time',2,'');

	if($s_office!=0){
		$where .= ' and applyUsrOffice='.$s_office.'';
		$track .= '&s_office='.$s_office.'';
	}
	if($s_group!=0){
		$where .= ' and applyUsrGroup='.$s_group.'';
		$track .= '&s_group='.$s_group.'';
	}
	if($s_name!=''){
		$where .= ' and applyUsrId in(select staffId from '.PRFIX.'staff where staffName like "%'.$s_name.'%")';
		$track .= '&s_name='.$s_name.'';
	}
	if($s_status!=0){
		$where .= ' and checkStatus='.$s_status.'';
		$track .= '&s_status='.$s_status.'';
	}
	if($s_time!=''){
		$where .= ' and applyTime like "%'.$s_time.'%"';
		$track .= '&s_time='.$s_time.'';
	}

	//默认显示待审批与审批中的数据
	if($s_status == 0){
		$where .= ' and (checkStatus=0 or checkStatus=1)';
	}

	//普通员工,curCheckOffice/curCheckGroup为0时为总经办与总经理
	if($common_category == 0){
		$where .= ' and (curCheckOffice='.$common_office.' or curCheckOffice=0) and (curCheckGroup='.$common_group.' or curCheckGroup=0) and curCheckRole='.$common_checkRole.'';
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
	$field = 'mailApplyId,applyUsrId,mailName,initialPassword,applyTime,checkStatus,curCheckLevel,applyUsrOffice,applyUsrGroup';
	$data = $db->get_some($table,$page->firstcount,$length,'order by applyTime desc',$where,$field);
	foreach ($data as $key => $value) {
		++ $sn;
		$data[$key]['sn'] = $sn;
		//申请人
		$data[$key]['applyUsr'] = getStaffName($data[$key]['applyUsrId']);
		//部门
		$data[$key]['office'] = getOfficeName($data[$key]['applyUsrOffice']);
		//工作组
		$data[$key]['group'] = getGroupName($data[$key]['applyUsrGroup']);
		//初始密码
		if($data[$key]['initialPassword']==''){
			$data[$key]['initialPassword'] = '待设置';
		}
		//审批状态
		$checkStatus = $data[$key]['checkStatus'];
		$data[$key]['checkStatus'] = static_checkStatus($checkStatus);
		//审批意见
		$checkInfo = '暂无'; $checkUsr = '待审批';
		if($checkStatus == 2||$checkStatus == 3||$checkStatus == 4){
			$check = $db->get_one(PRFIX.'mailapply_check','where mailApplyId='.$data[$key]['mailApplyId'].' and checkLevel='.$data[$key]['curCheckLevel'].'','remark,checkUsr');
			if($check['remark']!=''){
				$checkInfo = $check['remark'];
				$checkUsr = getStaffName($check['checkUsr']);
			}
		}

		$data[$key]['checkInfo'] = $checkInfo;
		$data[$key]['checkUsr'] = $checkUsr;
		if($checkStatus == 0||$checkStatus == 1){
			$data[$key]['isCheck'] = 0;
		}else{
			$data[$key]['isCheck'] = 1;
		}
	}
	
	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('group',$group);
	$smarty->assign('office',$office);
	$smarty->assign('status',$status);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_group',$s_group);
	$smarty->assign('s_status',$s_status);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('s_time',$s_time);
	$smarty->assign('data',$data);
	$smarty->assign('page',$page->show_link(1));
	$smarty->assign('curPage',$curPage);
	$smarty->assign('track',$track);

?>