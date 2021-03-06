<?php

	//# Mr.Z
	//# 2018-12-02
	//# 员工档案-社保与公积金

	//当前页面公共配置
	$pageTitle = '社保与公积金';
	$act = $_REQUEST['act'];
	$page = $_REQUEST['page'];
	$table = PRFIX.'staff';	
	$where = '';

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

	$fileds = 'insuranceNo,insuranceStatus,insuranceOverDate,fundNo,fundStatus,fundOverDate';
	$data = $db->get_one($table,'where staffId='.$id.'',$fileds);
	if($data){

		if($data['insuranceNo'] == ''){
			$data['insuranceNo'] = '未填写';
		}

		if($data['fundNo'] == ''){
			$data['fundNo'] = '未填写';
		}

		if($data['insuranceStatus'] == 0){
			$data['insuranceStatus'] = '未填写';
		}else{
			$data['insuranceStatus'] = static_Trusteeship($data['insuranceStatus']);
		}

		if($data['fundStatus'] == 0){
			$data['fundStatus'] = '未填写';
		}else{
			$data['fundStatus'] = static_Trusteeship($data['fundStatus']);
		}

		if($data['fundOverDate'] == ''){
			$data['fundOverDate'] = '未填写';
		}else{
			$data['fundOverDate'] = date('Y年m月d日',strtotime($data['fundOverDate']));
		}

		if($data['insuranceOverDate'] == ''){
			$data['insuranceOverDate'] = '未填写';
		}else{
			$data['insuranceOverDate'] = date('Y年m月d日',strtotime($data['insuranceOverDate']));
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
	$smarty->assign('a',$archivesData);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('s_category',$s_category);
	$smarty->assign('track',$track);
	$smarty->assign('nav',$nav);
	$smarty->assign('l',$l);

?>