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
	$default = getVal('default',1,'');

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($roleName == ''){
			$data['status'] = 'fail';
			$data['message'] = '请设置角色名称';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($roleName)>50){
			$data['status'] = 'fail';
			$data['message'] = '角色名称长度不能超过50个字符';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
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
			$data['status'] = 'fail';
			$data['message'] = '角色名称已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		$val['checkRoleName'] = $roleName;
		$val['rank'] = $rank;
		$val['isDefault'] = $default;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'system.php?_f=check-role';
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;

	}

	//编辑初始化数据
	if($act == 'edit'){

		$action = 'editSave';

		$checkRoleId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_name = getVal('s_name',2,'');

		$data = $db->get_one($table,'where checkRoleId='.$checkRoleId.'','checkRoleName,rank,isDefault');
		if($data){
			$rank = $data['rank'];
		}

	}

	//编辑保存
	if($act == 'editSave'){

		$checkRoleId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_name = getVal('s_name',2,'');

		//验证名称是否已存在
		$validate = $db->get_one($table,'where checkRoleName="'.$roleName.'" and checkRoleId<>'.$checkRoleId.'','checkRoleId');
		if($validate){
			$data['status'] = 'fail';
			$data['message'] = '角色名称已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		$val['checkRoleName'] = $roleName;
		$val['rank'] = $rank;
		$val['isDefault'] = $default;
		$val['updateTime'] = date('Y-m-d H:i:s');

		$result = $db->update($table,$val,'where checkRoleId='.$checkRoleId.'');
		if($result){
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'system.php?_f=check-role&page='.$page.'&s_name='.$s_name.'';
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('i',$data);
	$smarty->assign('id',$checkRoleId);
	$smarty->assign('page',$page);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);

	
?>