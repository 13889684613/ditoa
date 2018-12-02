<?php

	//# Mr.Z
	//# 2018-12-02
	//# 员工档案-员工基本资料

	//当前页面公共配置
	$pageTitle = '员工基本资料';
	$act = $_REQUEST['act'];
	$table = PRFIX.'staff';	
	$where = '';

	//记录列表页检索条件begin
	$s_company = getVal('s_company',1,'');
	$s_office = getVal('s_office',1,'');
	$s_post = getVal('s_post',1,'');
	$s_status = getVal('s_status',2,'');
	$s_name = getVal('s_name',2,'');
	$s_begintime = getVal('s_begintime',2,'');
	$s_overtime = getVal('s_overtime',2,'');
	//记录列表页检索条件over

	$id = getVal('id',1,'');
	$page = getVal('page',2,'');

	$fileds = 'companyId,officeId,groupId,staffName,sex,idNumber,birthDate,lunarDate,height,weight,blood,politicalType,photo,';
	$fileds .= 'nation,maritalStatus,school,education,major,registerAddress,registerNature,tel,phone,extensionNumber,address,';
	$fileds .= 'email,postId,firstWorkDate,quitDate,cnBankAccount,busFee,background,remark,createTime,wechatActivate,activateTime,';
	$fileds .= 'tryBeginDate,tryOverDate,contractBeginDate,contractOverDate,trueQuitDate';
	$data = $db->get_one($table,'where staffId='.$id.'',$fileds);
	if($data){

		//试用期
		if($data['tryBeginDate']!=''){
			$data['try'] = $data['tryBeginDate'].'至'.$data['tryOverDate'];
		}

		//转正begin
		$where = 'where result>0 and appraiseId=(select appraiseId from '.PRFIX.'staff_appraise where staffId='.$id.')';
		$T = $db->get_one(PRFIX.'staff_appraise_check',$where.' order by checkTime desc limit 1','result,checkTime,checkUsr');
		if($T){
			$turn[0] = static_staffCheck($T['result']);
			$turn[1] = $T['checkTime'];
			$turn[2] = getStaffName($T['checkUsr']);
			$data['turn'] = $turn;
		}
		//转正over

		//合同签订
		if($data['contractBeginDate']!=''){
			$data['contract'] = $data['contractBeginDate'].'至'.$data['contractOverDate'];
		}

		//离职日期
		if($data['trueQuitDate']!=''){
			$data['quit'] = $data['trueQuitDate'];
		}

		$data['company'] = getCompanyName($data['companyId']);	//所属公司
		$data['office'] = getOfficeName($data['officeId']);		//所属部门
		$data['group'] = getGroupName($data['groupId']);		//所属工作组

		//职务
		$P = $db->get_one(PRFIX.'post','where postId='.$data['postId'].'','postName');
		if($P){
			$data['post'] = $P['postName'];
		}

		//农历
		$lunarDate = explode(',', $data['lunarDate']);
		$data['lunar'] = $lunarDate[0].$lunarDate[1].$lunarDate[2].$luanDate[3];

		//座机号
		if($data['extensionNumber']!=''){
			$data['phone'] = $data['phone'].'-'.$data['extensionNumber'];
		}

		$data['sex'] = static_sex($data['sex']);								//性别
		$data['education'] = static_education($data['education']);				//学历
		$data['registerNature'] = static_register($data['registerNature']);		//户口性质
		$data['politicalType'] = static_political($data['politicalType']);		//政治面貌
		$data['bloods'] = static_blood($data['blood']);							//血型
		$data['marital'] = static_marital($data['maritalStatus']);				//婚姻状况

		if($data['busFee'] == 0){
			$data['busFee'] = '';
		}else{
			$data['busFee'] = $data['busFee'].'元';
		}

		if($data['wechatActivate'] == 1){
			$data['wechat'] = '已激活';
		}else{
			$data['wechat'] = '未激活';
		}

		//首次参加工作时间
		if($data['firstWorkDate']!=''){
			$data['firstWorkDate'] = date('Y年m月d日',strtotime($data['firstWorkDate']));
		}

		//原单位解除合同日
		if($data['quitDate']!=''){
			$data['quitDate'] = date('Y年m月d日',strtotime($data['quitDate']));
		}
	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('s_company',$s_company);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_post',$s_post);
	$smarty->assign('s_status',$s_status);
	$smarty->assign('s_begintime',$s_begintime);
	$smarty->assign('s_overtime',$s_overtime);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('i',$data);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);


?>