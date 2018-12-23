<?php

	//# Mr.Z
	//# 2018-12-11
	//# 转正考核审批

	//权限验证
	if($menuHumanAffairs[5] == 0){
		RefreshResturn('index.php?_f=login');
	}

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '转正考核审批';
	$router = '?_f=employ-check-check';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'staff_appraise';
	$where = '';

	//非系统管理员仅显示相同的企业、部门
	if($common_category == 0){
		$companyWhere = 'where companyId='.$common_company.' ';
		$officeWhere = 'where officeId='.$common_office.' ';
	}

	//所属企业
	$company = $db->get_all(PRFIX.'company',''.$companyWhere.'order by rank desc,createTime desc','companyId,cnName');

	//所属部门
	$office = $db->get_all(PRFIX.'office',''.$officeWhere.'order by rank desc,createTime desc','officeId,officeName');

	//检索
	$s_company = getVal('s_company',1,'');
	$s_office = getVal('s_office',1,'');
	$s_name = getVal('s_name',2,'');

	if($s_company!=0){
		$where .= ' and staffId in(select staffId from '.PRFIX.'staff where companyId='.$s_company.')';
		$track .= '&s_company='.$s_company.'';
	}
	if($s_office!=0){
		$where .= ' and staffOffice='.$s_office.'';
		$track .= '&s_office='.$s_office.'';
	}
	if($s_name!=''){
		$where .= ' and staffId in(select staffId from '.PRFIX.'staff where staffName like "%'.$s_name.'%")';
		$track .= '&s_name='.$s_name.'';
	}

	//仅显示待审批与审批中的数据
	$where .= ' and (checkStatus=0 or checkStatus=1)';

	//普通员工,curCheckOffice/curCheckGroup为0时为总经办与总经理,审批完成后不在此显示
	if($common_category == 0){
		//工作接管仅支持同办事处同工作组之间人员审批权限接管，curCheckRole可能会存在多种角色，故引用in的方式。
		$where .= ' and (curCheckOffice='.$common_office.' or curCheckOffice=0) and (curCheckGroup='.$common_group.' or curCheckGroup=0) and curCheckRole in('.$common_checkRole.')';
	}
	
	$where = 'where 1=1'.$where;

	//页面分页配置
	$total = $db->Count($table,$where);
	$length = 5;
	$page = new page_link();
	$page->page_linkTo($total,$length,'page');
	if(empty($curPage)){$curPage = 1;}
	$sn = $curPage * $length - $length;	//序号

	//拉取员工数据
	$field = 'appraiseId,staffId,staffOffice,staffGroup,checkStatus,appraiseUsr';
	$data = $db->get_some($table,$page->firstcount,$length,'order by appraiseTime desc',$where,$field);
	foreach ($data as $key => $value) {
		++ $sn;
		$data[$key]['sn'] = $sn;

		$S = $db->get_one(PRFIX.'staff','where staffId='.$data[$key]['staffId'].'','staffName,tryBeginDate,tryOverDate');

		$data[$key]['staffName'] = $S['staffName'];
		$data[$key]['office'] = getOfficeName($data[$key]['staffOffice']);
		$data[$key]['group'] = getGroupName($data[$key]['staffGroup']);
		$data[$key]['date'] = $S['tryBeginDate'].'至'.$S['tryOverDate'];
		$data[$key]['appraiseUsr'] = getStaffName($data[$key]['appraiseUsr']);

		//考核结果 begin
		if($data[$key]['checkStatus'] == 2){
			$data[$key]['isSp'] = 1;
			$result = $db->get_one(PRFIX.'staff_appraise_check','where appraiseId='.$data[$key]['appraiseId'].' order by checkId desc limit 1','checkResult');
			$data[$key]['appraiseResult'] = static_staffCheck($result['checkResult']);
		}else{
			$data[$key]['isSp'] = 0;
			$data[$key]['appraiseResult'] = '待考核';
		}
		//考核结果 over

		//审批状态 begin
		switch ($data[$key]['checkStatus']) {
			case 0:
				$data[$key]['checkStatus'] = '待审批';
				break;
			case 1:
				$data[$key]['checkStatus'] = '审批中';
				break;
			case 2:
				$data[$key]['checkStatus'] = '审批完成';
				break;
		}
		//审批状态 over

		//审批人/审批时间/审批意见 begin
		$check = $db->get_one(PRFIX.'staff_appraise_check','where appraiseId='.$data[$key]['appraiseId'].' order by checkId desc limit 1','checkUsr,checkResult,checkTime');
		if($check){
			$data[$key]['checkUsr'] = getStaffName($check['checkUsr']);
			$data[$key]['checkResult'] = static_staffCheck($check['checkResult']);
			$data[$key]['checkTime'] = $check['checkTime'];
		}else{
			$data[$key]['checkUsr'] = '-';
			$data[$key]['checkResult'] = '-';
			$data[$key]['checkTime'] = '-';
		}
		//审批人/审批时间/审批意见 over

	}
	
	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('company',$company);
	$smarty->assign('office',$office);
	$smarty->assign('s_company',$s_company);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('data',$data);
	$smarty->assign('page',$page->show_link(1));
	$smarty->assign('curPage',$curPage);
	$smarty->assign('track',$track);

?>