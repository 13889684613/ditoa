<?php

	//# Mr.Z
	//# 2018-10-25
	//# 审批角色添加/编辑

	//当前页面公共配置
	$pageTitle = '审批角色权限设置';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'checkrole';
	$where = '';

	//获取值
	$roleName = getVal('roleName',2,'');
	$rank = getVal('rank',1,'');

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($roleName == ''){
			ErrorResturn('请设置角色名称');
		}
		if(stringLen($roleName)>50){
			ErrorResturn('角色名称长度不能超过50个字符');
		}
	}

	//创建初始化数据
	if($act == 'add'){
		$action = 'addSave';
	}

	//创建保存
	if($act == 'addSave'){

		//验证名称是否已存在
		$validate = $db->get_one($table,'where checkRoleName="'.$roleName.'"','checkRoleId');
		if($validate){
			ErrorResturn('角色名称已存在，请重新填写');
		}

		$val['checkRoleName'] = $roleName;
		$val['rank'] = $rank;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){
			TipsRefreshResturn('操作成功','system.php?_f=check-role');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//编辑初始化数据
	if($act == 'edit'){

		$action = 'editSave';

		$checkRoleId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_roleName = getVal('s_roleName',2,'');

		$data = $db->get_one($table,'where checkRoleId='.$checkRoleId.'','checkRoleName,rank');
		if($data){
			$rank = $data['rank'];
		}

	}

	//编辑保存
	if($act == 'editSave'){

		$checkRoleId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_roleName = getVal('s_roleName',2,'');

		//验证名称是否已存在
		$validate = $db->get_one($table,'where checkRoleName="'.$roleName.'" and checkRoleId<>'.$checkRoleId.'','checkRoleId');
		if($validate){
			ErrorResturn('角色名称已存在，请重新填写');
		}

		$val['checkRoleName'] = $roleName;
		$val['rank'] = $rank;
		$val['updateTime'] = date('Y-m-d H:i:s');

		$result = $db->update($table,$val,'where checkRoleId='.$checkRoleId.'');
		if($result){
			TipsRefreshResturn('操作成功','system.php?_f=check-role&page='.$page.'&s_roleName='.$s_roleName.'');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('i',$data);
	$smarty->assign('id',$checkRoleId);
	$smarty->assign('page',$page);
	$smarty->assign('s_roleName',$s_roleName);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);

	
?>