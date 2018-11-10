<?php

	//# Mr.Z
	//# 2018-10-25
	//# 系统角色权限-添加/编辑

	//当前页面公共配置
	$pageTitle = '系统角色权限设置';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'sysrole';
	$where = '';

	//获取值 begin

	$roleName = getVal('roleName',2,'');
	$rank = getVal('rank',1,'');
	$default = getVal('default',1,'');

	//权限
	$m1 = getVal('m1',1,'');
	$m2 = getVal('m2',1,'');
	$m3 = getVal('m3',1,'');
	$m4 = getVal('m4',1,'');
	$orgPower = $m1.','.$m2.','.$m3.','.$m4;		//DIT组织架构

	$m5 = getVal('m5',1,'');
	$m6 = getVal('m6',1,'');
	$m7 = getVal('m7',1,'');
	$m8 = getVal('m8',1,'');
	$m9 = getVal('m9',1,'');
	$m10 = getVal('m10',1,'');
	$m11 = getVal('m11',1,'');
	$m12 = getVal('m12',1,'');
	$m13 = getVal('m13',1,'');
	$m14 = getVal('m14',1,'');
	$m15 = getVal('m15',1,'');
	$humanAffairsPower = $m5.','.$m6.','.$m7.','.$m8.','.$m9.','.$m10.','.$m11.','.$m12.','.$m13.','.$m14.','.$m15;		//人事管理

	$m16 = getVal('m16',1,'');
	$m17 = getVal('m17',1,'');
	$m18 = getVal('m18',1,'');
	$m19 = getVal('m19',1,'');
	$leavePower = $m16.','.$m17.','.$m18.','.$m19;		//请假管理

	$m20 = getVal('m20',1,'');
	$m21 = getVal('m21',1,'');
	$businessTravelPower = $m20.','.$m21;		//出差管理

	$m22 = getVal('m22',1,'');
	$m23 = getVal('m23',1,'');
	$m24 = getVal('m24',1,'');
	$m25 = getVal('m25',1,'');
	$m26 = getVal('m26',1,'');
	$m27 = getVal('m27',1,'');
	$carPower = $m22.','.$m23.','.$m24.','.$m25.','.$m26.','.$m27;		//车辆管理

	$m28 = getVal('m28',1,'');
	$m29 = getVal('m29',1,'');
	$m30 = getVal('m30',1,'');
	$m31 = getVal('m31',1,'');
	$m32 = getVal('m32',1,'');
	$m33 = getVal('m33',1,'');
	$m34 = getVal('m34',1,'');
	$m35 = getVal('m35',1,'');
	$m36 = getVal('m36',1,'');
	$m37 = getVal('m37',1,'');
	$officeToolPower = $m28.','.$m29.','.$m30.','.$m31.','.$m32.','.$m33.','.$m34.','.$m35.','.$m36.','.$m37;		//办公备品管理

	$m38 = getVal('m38',1,'');
	$m39 = getVal('m39',1,'');
	$m40 = getVal('m40',1,'');
	$generalAffairsPower = $m38.','.$m39.','.$m40;	//综合事务管理

	$m41 = getVal('m41',1,'');
	$m42 = getVal('m42',1,'');
	$m43 = getVal('m43',1,'');
	$m44 = getVal('m44',1,'');
	$m45 = getVal('m45',1,'');
	$m46 = getVal('m46',1,'');
	$m47 = getVal('m47',1,'');
	$m48 = getVal('m48',1,'');
	$systemPower = $m41.','.$m42.','.$m43.','.$m44.','.$m45.','.$m46.','.$m47.','.$m48;		//系统运维管理

	$m49 = getVal('m49',1,'');
	$m50 = getVal('m50',1,'');
	$m51 = getVal('m51',1,'');
	$m52 = getVal('m52',1,'');
	$m53 = getVal('m53',1,'');
	$signPower = $m49.','.$m50.','.$m51.','.$m52.','.$m53;	//考勤管理

	//完整权限配置
	$power = $orgPower.'|'.$humanAffairsPower.'|'.$leavePower.'|'.$businessTravelPower.'|'.$carPower.'|'.$officeToolPower.'|'.$generalAffairsPower.'|';
	$power .= $systemPower.'|'.$signPower;

	//获取值 over

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($roleName == ''){
			ErrorResturn('请设置角色名称');
		}
		if(stringLen($roleName)>50){
			ErrorResturn('角色名称长度不能超过50个字符');
		}
		if(!strstr($power,'1')){
			ErrorResturn('请为角色分配权限');
		}
	}

	//创新初始化数据
	if($act == 'add'){
		$action = 'addSave';
		$rank = 0;
	}

	//创建保存
	if($act == 'addSave'){

		//验证名称是否已存在
		$validate = $db->get_one($table,'where sysRoleName="'.$roleName.'"','sysRoleId');
		if($validate){
			ErrorResturn('角色名称已存在，请重新填写');
		}

		$val['sysRoleName'] = $roleName;
		$val['power'] = $power;
		$val['rank'] = $rank;
		$val['isDefault'] = $default;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){
			TipsRefreshResturn('操作成功','system.php?_f=system-role');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//编辑初始化数据
	if($act == 'edit'){

		$action = 'editSave';

		$sysRoleId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_roleName = getVal('s_roleName',2,'');

		$data = $db->get_one($table,'where sysRoleId='.$sysRoleId.'','sysRoleName,power,rank,isDefault');
		if($data){
			$power = explode('|',$data['power']);					//完整权限
			$data['orgPower'] = explode(',',$power[0]);				//DIT组织架构
			$data['humanAffairsPower'] = explode(',',$power[1]);	//人事管理
			$data['leavePower'] = explode(',',$power[2]);			//请假管理
			$data['businessTravelPower'] = explode(',',$power[3]);	//出差管理
			$data['carPower'] = explode(',',$power[4]);				//车辆管理
			$data['officeToolPower'] = explode(',',$power[5]);		//办公备品管理
			$data['generalAffairsPower'] =explode(',',$power[6]);	//综合事务管理
			$data['systemPower'] =explode(',',$power[7]);			//系统运维管理	
			$data['signPower'] = explode(',',$power[8]);			//考勤管理
			$rank = $data['rank'];
		}

	}

	//编辑保存
	if($act == 'editSave'){

		$sysRoleId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_roleName = getVal('s_roleName',2,'');

		//验证名称是否已存在
		$validate = $db->get_one($table,'where sysRoleName="'.$roleName.'" and sysRoleId<>'.$sysRoleId.'','sysRoleId');
		if($validate){
			ErrorResturn('角色名称已存在，请重新填写');
		}

		$val['sysRoleName'] = $roleName;
		$val['power'] = $power;
		$val['rank'] = $rank;
		$val['isDefault'] = $default;
		$val['updateTime'] = date('Y-m-d H:i:s');

		$result = $db->update($table,$val,'where sysRoleId='.$sysRoleId.'');
		if($result){
			TipsRefreshResturn('操作成功','system.php?_f=system-role&page='.$page.'&s_roleName='.$s_roleName.'');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('i',$data);
	$smarty->assign('id',$sysRoleId);
	$smarty->assign('page',$page);
	$smarty->assign('s_roleName',$s_roleName);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);

	
?>