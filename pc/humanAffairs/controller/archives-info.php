<?php

	//# Mr.Z
	//# 2018-12-02
	//# 员工档案-员工基本资料

	//当前页面公共配置
	$pageTitle = '员工基本资料';
	$act = $_REQUEST['act'];
	$table = PRFIX.'staff';	
	$where = '';
	$page = getVal('page',2,'');

	//员工id
	$l = getVal('l',2,'');
	if($l == 'm'){
		$id = $common_staffId;		//我的档案栏目
	}else{
		$id = getVal('id',1,'');	//员工档案栏目
	}

	if($id == 0){
		QuickReturn('index.php?_f=index');
	}

	//记录列表页检索条件begin
	$s_company = getVal('s_company',1,'');
	$s_office = getVal('s_office',1,'');
	$s_post = getVal('s_post',1,'');
	$s_status = getVal('s_status',2,'');
	$s_name = getVal('s_name',2,'');
	$s_begintime = getVal('s_begintime',2,'');
	$s_overtime = getVal('s_overtime',2,'');
	$s_category = getVal('s_category',1,'');	//离职类型，离职人员页面传参
	$nav = getVal('nav',2,'');					//nav == quit时显示离职信息

	if($l == 'm'){
		//入口我的档案
		$track = '&l=m';
	}elseif($nav == 'quit'){
		//入口离职员工
		$track = '&page='.$page.'&id='.$id.'&s_company='.$s_company.'&s_office='.$s_office.'&s_category='.$s_category.'&s_name='.$s_name.'&nav=quit';
	}else{
		//入口员工档案
		$track = '&page='.$page.'&id='.$id.'&s_company='.$s_company.'&s_office='.$s_office.'&s_post='.$s_post.'&s_status='.$s_status.'';
		$track .= '&s_name='.$s_name.'&s_category='.$s_category.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'';
	}

	//记录列表页检索条件over

	//员工档案进度轴
	$archivesData = getArchivesCommon($id);

	$fileds = 'companyId,officeId,groupId,staffName,sex,idNumber,birthDate,lunarDate,height,weight,blood,politicalType,photo,';
	$fileds .= 'nation,maritalStatus,school,education,major,registerAddress,registerNature,tel,phone,extensionNumber,address,';
	$fileds .= 'email,postId,firstWorkDate,quitDate,cnBankAccount,busFee,background,remark,createTime,wechatActivate,activateTime';
	$data = $db->get_one($table,'where staffId='.$id.'',$fileds);
	if($data){

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
		if($lunarDate[0]!=''){
			$data['lunar'] = static_lunarMonth($lunarDate[0]).static_lunarDay($lunarDate[1]).$lunarDate[2].$luanDate[3];
		}

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
		}else{
			$data['firstWorkDate'] = '未设置';
		}

		//原单位解除合同日
		if($data['quitDate']!=''){
			$data['quitDate'] = date('Y年m月d日',strtotime($data['quitDate']));
		}else{
			$data['quitDate'] = '未设置';
		}

		if($data['cnBankAccount']==''){
			$data['cnBankAccount'] = '未设置';
		}

		if($data['busFee']==0){
			$data['busFee'] = '未设置';
		}else{
			$data['busFee'] = $data['busFee'].'元';
		}

		if($data['background']==''){
			$data['background'] = '未设置';
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
	$smarty->assign('s_category',$s_category);
	$smarty->assign('track',$track);
	$smarty->assign('a',$archivesData);
	$smarty->assign('nav',$nav);
	$smarty->assign('l',$l);


?>