<?php

	//# Mr.Z
	//# 2018-11-03
	//# 默认审批流程设置

	//当前页面公共配置
	$pageTitle = '通用审批流程设置';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'default_checkprocess';				//审批流程主表
	$detailTable = PRFIX.'default_checkprocess_detail';	//审批流程明细表
	$where = '';

	//审批流程类型
	$categorys = static_checkType();

	//审批用户角色
	$roles = $db->get_all(PRFIX.'checkrole','order by rank desc,createTime desc','checkRoleId,checkRoleName');

	//获取值
	$category = getVal('category',1,'');
	$beginRole = getVal('beginRole',1,'');
	$role = getVal('role',2,'');

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($category == 0){
			ErrorResturn('审批流程类别');
		}
		if($beginRole == 0){
			ErrorResturn('请选择发起审批角色');
		}	
		if(count(array_filter($role)) == 0){
			ErrorResturn('请制定审批流程');
		}
	}

	//创建初始化数据
	if($act == 'add'){
		$action = 'addSave';
	}

	//创建保存
	if($act == 'addSave'){

		//验证是否已存在同类型的发起者审批流程
		$validate = $db->get_one($table,'where beginRole='.$beginRole.' and checkCategory='.$category.'','defaultCheckProcessId');
		if($validate){
			ErrorResturn('该发起者审批流程已制定，请重新选择发起者');
		}

		//审批级别
		$checkLevel = count(array_filter($role));

		$val['checkCategory'] = $category;
		$val['beginRole'] = $beginRole;
		$val['checkLevel'] = $checkLevel;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){

			$checkProcessId = $db->get_lastId();
			
			//写入审批流程
			for($e=0;$e<$checkLevel;$e++){

				$process = array();
				$level = $e+1;

				$process['checkProcessId'] = $checkProcessId;
				$process['checkLevel'] = $level;
				$process['roleId'] = $role[$e];
				$process['createTime'] = date('Y-m-d H:i:s');

				$res = $db->insert($detailTable,$process);
				if(!$res){
					//删除当前审批流所有数据
					$db->delete($detailTable,'where checkProcessId='.$checkProcessId.''); //清除流程明细表
					$db->delete($table,'where defaultCheckProcessId='.$checkProcessId.'');//清除主表
					ErrorResturn(ERRORTIPS);
				}

			}

			TipsRefreshResturn('操作成功','system.php?_f=checkProcess-default');

		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//编辑初始化数据
	if($act == 'edit'){

		$action = 'editSave';

		$defaultCheckProcessId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_type = getVal('s_type',2,'');
		$s_role = getVal('s_role',2,'');

		$data = $db->get_one($table,'where defaultCheckProcessId='.$defaultCheckProcessId.'','checkCategory,beginRole');
		if($data){
			$data['process'] = $db->get_all($detailTable,'where checkProcessId='.$defaultCheckProcessId.' order by checkLevel asc','roleId');
		}

	}

	//编辑保存
	if($act == 'editSave'){

		$defaultCheckProcessId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_type = getVal('s_type',2,'');
		$s_role = getVal('s_role',2,'');

		//验证是否已存在同类型的发起者审批流程
		$validate = $db->get_one($table,'where beginRole='.$beginRole.' and checkCategory='.$category.' and defaultCheckProcessId<>'.$defaultCheckProcessId.'','defaultCheckProcessId');
		if($validate){
			ErrorResturn('该发起者审批流程已制定，请重新选择发起者');
		}

		//审批级别
		$checkLevel = count(array_filter($role));

		$val['checkCategory'] = $category;
		$val['beginRole'] = $beginRole;
		$val['checkLevel'] = $checkLevel;

		$result = $db->update($table,$val,'where defaultCheckProcessId='.$defaultCheckProcessId.'');
		if($result){

			//重建审批流程
			$db->delete($detailTable,'where checkProcessId='.$defaultCheckProcessId.'');
			for($e=0;$e<$checkLevel;$e++){

				$process = array();
				$level = $e+1;

				$process['checkProcessId'] = $defaultCheckProcessId;
				$process['checkLevel'] = $level;
				$process['roleId'] = $role[$e];
				$process['createTime'] = date('Y-m-d H:i:s');

				$res = $db->insert($detailTable,$process);
				if(!$res){
					$db->delete($detailTable,'where checkProcessId='.$checkProcessId.''); //清除流程明细表
					ErrorResturn(ERRORTIPS);
				}

			}

			TipsRefreshResturn('操作成功','system.php?_f=checkProcess-default&page='.$page.'&s_type='.$s_type.'&s_role='.$s_role.'');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('categorys',$categorys);
	$smarty->assign('roles',$roles);
	$smarty->assign('i',$data);
	$smarty->assign('id',$defaultCheckProcessId);
	$smarty->assign('page',$page);
	$smarty->assign('s_type',$s_type);
	$smarty->assign('s_role',$s_role);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);

	
?>