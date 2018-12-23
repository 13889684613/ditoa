<?php

	//# Mr.Z
	//# 2018-11-07
	//# 员工管理

	//权限验证
	if($menuHumanAffairs[1] == 0){
		RefreshResturn('index.php?_f=login');
	}

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '员工管理';
	$router = '?_f=staff';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'staff';
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

	//系统角色
	$role = $db->get_all(PRFIX.'sysrole','order by rank desc,createTime desc','sysRoleId,sysRoleName');

	//职务
	$post = $db->get_all(PRFIX.'post','order by rank desc,createTime desc','postId,postName');

	//状态
	$status = static_staffStatus();
	
	//检索
	$s_company = getVal('s_company',1,'');
	$s_office = getVal('s_office',1,'');
	$s_role = getVal('s_role',1,'');
	$s_post = getVal('s_post',1,'');
	$s_status = getVal('s_status',2,'');
	$s_name = getVal('s_name',2,'');
	$s_idno = getVal('s_idno',2,'');
	$s_begintime = getVal('s_begintime',2,'');
	$s_overtime = getVal('s_overtime',2,'');

	if($s_company!=0){
		$where .= ' and companyId='.$s_company.'';
		$track .= '&s_company='.$s_company.'';
	}
	if($s_office!=0){
		$where .= ' and officeId='.$s_office.'';
		$track .= '&s_office='.$s_office.'';
	}
	if($s_role!=0){
		$where .= ' and sysRoleId='.$s_role.'';
		$track .= '&s_role='.$s_role.'';
	}
	if($s_post!=0){
		$where .= ' and postId='.$s_post.'';
		$track .= '&s_post='.$s_post.'';
	}
	if($s_status!=''&&is_numeric($s_status)){
		$where .= ' and status='.$s_status.'';
		$track .= '&s_status='.$s_status.'';
	}
	if($s_name!=''){
		$where .= ' and staffName like "%'.$s_name.'%"';
		$track .= '&s_name='.$s_name.'';
	}
	if($s_idno!=''){
		$where .= ' and idNumber like "%'.$s_idno.'%"';
		$track .= '&s_idno='.$s_idno.'';
	}
	if($s_begintime!=''){
		$where .= ' and contractOverDate>="'.$s_begintime.'"';
		$track .= '&s_begintime='.$s_begintime.'';
	}
	if($s_overtime!=''){
		$where .= ' and contractOverDate<="'.$s_overtime.'"';
		$track .= '&s_overtime='.$s_overtime.'';
	}

	//非系统管理员仅能查看自己办事处的员工
	if($common_category == 0){
		$where .= ' and officeId='.$common_office.'';
	}

	//category=0为普通员工，1为系统管理员
	$where = 'where category=0'.$where;

	//页面分页配置
	$total = $db->Count($table,$where);
	$length = 5;
	$page = new page_link();
	$page->page_linkTo($total,$length,'page');
	if(empty($curPage)){$curPage = 1;}
	$sn = $curPage * $length - $length;	//序号

	//拉取员工数据
	$field = 'staffId,companyId,officeId,sysRoleId,staffName,sex,idNumber,postId,phone,extensionNumber,tel,createTime,status,contractBeginDate,contractOverDate';
	$data = $db->get_some(PRFIX.'staff',$page->firstcount,$length,'order by createTime desc',$where,$field);
	foreach ($data as $key => $value) {
		++ $sn;
		$data[$key]['sn'] = $sn;
		$data[$key]['isFill'] = 1;	//是否需要补充更多资料

		//系统角色
		$r = $db->get_one(PRFIX.'sysrole','where sysRoleId='.$data[$key]['sysRoleId'].'','sysRoleName');
		if($r){
			$data[$key]['role'] = $r['sysRoleName'];
		}else{
			$data[$key]['isFill'] = 0;
			$data[$key]['role'] ='待分配';
		}

		//家庭主要成员
		$family = $db->get_one(PRFIX.'staff_family','where staffId='.$data[$key]['staffId'].'','familyId');
		if(!$family){
			$data[$key]['isFill'] = 0;
		}

		//教育与工作经历
		$work = $db->get_one(PRFIX.'staff_resume','where staffId='.$data[$key]['staffId'].'','resumeId');
		if(!$work){
			$data[$key]['isFill'] = 0;
		}

		//资料上传
		$attach = $db->get_one(PRFIX.'staff_attach','where staffId='.$data[$key]['staffId'].'','attachId');
		if(!$attach){
			$data[$key]['isFill'] = 0;
		}
		
		//隶属公司 begin
		if($data[$key]['companyId'] == 0){
			$data[$key]['company'] = '待指定';
		}else{
			$c = $db->get_one(PRFIX.'company','where companyId='.$data[$key]['companyId'].'','cnName');
			$data[$key]['company'] = $c['cnName'];
		}
		//隶属公司 over
		//所属部门 begin
		if($data[$key]['officeId'] == 0){
			$data[$key]['office'] = '待指定';
		}else{
			$o = $db->get_one(PRFIX.'office','where officeId='.$data[$key]['officeId'].'','officeName');
			$data[$key]['office'] = $o['officeName'];
		}
		//所属部门 over
		//职务
		$P = $db->get_one(PRFIX.'post','where postId='.$data[$key]['postId'].'','postName');
		$data[$key]['post'] = $P['postName'];
		//座机
		$data[$key]['phone'] = $data[$key]['phone'].'-'.$data[$key]['extensionNumber'];
		//合同
		$data[$key]['expire'] = 0;
		if($data[$key]['contractBeginDate'] == ''){
			$data[$key]['contract'] = '待签订';
			$data[$key]['isFill'] = 0;
		}else{
			$data[$key]['contract'] = $data[$key]['contractBeginDate'].'至'.$data[$key]['contractOverDate'];
			$dayNum = (strtotime($data[$key]['contractOverDate']) - strtotime(date('Y-m-d')))/86400;
			//合同到期前30天提醒
			if($dayNum<=30){
				$data[$key]['expire'] = 1;
			}
		}
		//状态
		$data[$key]['status'] = static_staffStatus($data[$key]['status']);
		//性别
		$data[$key]['sex'] = static_sex($data[$key]['sex']);
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
	$url = $router.'&page='.$curPage.''.$track;

	//删除
	if($act == 'remove'){
		$id = getVal('id',1,'get');
		$result = $db->delete($table,'where staffId='.$id.'');
		if($result){
			RefreshResturn($url);
		}else{
			ErrorResturn(ERRORTIPS);
		}
	}

?>