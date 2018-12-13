<?php

	//# Mr.Z
	//# 2018-12-09
	//# 转正考核

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '转正考核';
	$router = '?_f=employ-check';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'staff';
	$where = '';

	//所属企业
	$company = $db->get_all(PRFIX.'company','order by rank desc,createTime desc','companyId,cnName');

	//所属部门
	$office = $db->get_all(PRFIX.'office','order by rank desc,createTime desc','officeId,officeName');

	//检索
	$s_company = getVal('s_company',1,'');
	$s_office = getVal('s_office',1,'');
	$s_name = getVal('s_name',2,'');

	if($s_company!=0){
		$where .= ' and companyId='.$s_company.'';
		$track .= '&s_company='.$s_company.'';
	}
	if($s_office!=0){
		$where .= ' and officeId='.$s_office.'';
		$track .= '&s_office='.$s_office.'';
	}
	if($s_name!=''){
		$where .= ' and staffName like "%'.$s_name.'%"';
		$track .= '&s_name='.$s_name.'';
	}
	
	//category=0为普通员工，1为系统管理员
	$where = 'where 1=1'.$where;		//测试条件，切换正式需删除
	// $where = 'where category=0'.$where;

	//页面分页配置
	$total = $db->Count($table,$where);
	$length = 5;
	$page = new page_link();
	$page->page_linkTo($total,$length,'page');
	if(empty($curPage)){$curPage = 1;}
	$sn = $curPage * $length - $length;	//序号

	//拉取员工数据
	$field = 'staffId,companyId,officeId,staffName,tryBeginDate,tryOverDate';
	$data = $db->get_some(PRFIX.'staff',$page->firstcount,$length,'order by status asc,tryOverDate asc',$where,$field);
	foreach ($data as $key => $value) {
		++ $sn;
		$data[$key]['sn'] = $sn;
		//隶属公司 begin
		if($data[$key]['companyId'] == 0){
			$data[$key]['company'] = '待指定';
		}else{
			$data[$key]['company'] = getCompanyName($data[$key]['companyId']);
		}
		//隶属公司 over
		//所属部门 begin
		if($data[$key]['officeId'] == 0){
			$data[$key]['office'] = '待指定';
		}else{
			$data[$key]['office'] = getOfficeName($data[$key]['officeId']);
		}
		//所属部门 over
		//试用期
		if($data[$key]['tryBeginDate']!=''&&$data[$key]['tryBeginDate']!=''){
			$data[$key]['date'] = $data[$key]['tryBeginDate'].'至'.$data[$key]['tryBeginDate'];
		}else{
			$data[$key]['date'] = '-';
		}
		//考核结果与考核人员
		$data[$key]['isCheck'] = 0;
		$data[$key]['isSp'] = 0;
		$data[$key]['appraiseId'] = '';

		$check = $db->get_one(PRFIX.'staff_appraise','where staffId='.$data[$key]['staffId'].'','appraiseId,appraiseUsr,checkStatus');
		if($check){
			$data[$key]['isCheck'] = 1;
			$data[$key]['appraiseId'] = $check['appraiseId'];
			$data[$key]['checkUsr'] = getStaffName($data[$key]['staffId']);

			if($check['checkStatus'] == 0){
				$data[$key]['result'] = '待考核';
			}elseif($check['checkStatus'] == 1){
				$data[$key]['result'] = '审批中';
				$data[$key]['isSp'] = 1;
			}elseif($check['checkStatus'] == 2){
				$data[$key]['isSp'] = 1;
				//考核结果 
				$result = $db->get_one(PRFIX.'staff_appraise_check','where appraiseId='.$check['appraiseId'].' order by checkId desc limit 1','checkResult');
				if($result){
					$data[$key]['result'] = static_staffCheck($result['checkResult']);
				}
			}
		}else{
			$data[$key]['checkUsr'] = '-';
			$data[$key]['result'] = '-';
		}
	}

	// var_dump($data);exit;
	
	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('company',$company);
	$smarty->assign('office',$office);
	$smarty->assign('post',$post);
	$smarty->assign('status',$status);
	$smarty->assign('s_company',$s_company);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_post',$s_post);
	$smarty->assign('s_status',$s_status);
	$smarty->assign('s_begintime',$s_begintime);
	$smarty->assign('s_overtime',$s_overtime);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('data',$data);
	$smarty->assign('page',$page->show_link(1));
	$smarty->assign('curPage',$curPage);
	$smarty->assign('track',$track);

?>