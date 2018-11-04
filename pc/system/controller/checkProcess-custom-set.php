<?php

	//# Mr.Z
	//# 2018-11-04
	//# 自定义审批流程设置

	//当前页面公共配置
	$pageTitle = '自定义审批流程设置';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'checkprocess';				//审批流程主表
	$detailTable = PRFIX.'checkprocess_detail';	//审批流程明细表
	$where = '';

	//工作组-测试！
	$groups = $db->get_all(PRFIX.'group','order by rank desc,createTime desc','groupId,groupName');

	//审批流程类型
	$categorys = static_checkType();

	//所属企业
	$offices = $db->get_all(PRFIX.'office','order by rank desc,createTime desc','officeId,officeName');

	//审批用户角色
	$roles = $db->get_all(PRFIX.'checkrole','order by rank desc,createTime desc','checkRoleId,checkRoleName');

	//获取值
	$category = getVal('category',1,'');
	$beginOffice = getVal('beginOffice',1,'');
	$beginGroup = getVal('beginGroup',1,'');
	$beginRole = getVal('beginRole',1,'');

	$office = getVal('office',2,'');
	$group = getVal('group',2,'');
	$role = getVal('role',2,'');

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($category == 0){
			ErrorResturn('请选择审批流程类别');
		}
		if($beginOffice == 0){
			ErrorResturn('请选择发起办事处');
		}
		if($beginGroup == 0){
			ErrorResturn('请选择发起工作组');
		}
		if($beginRole == 0){
			ErrorResturn('请选择发起审批角色');
		}	
		if(count(array_filter($office))==0||count(array_filter($group))==0||count(array_filter($role))==0){
			ErrorResturn('请完善审批流程');
		}
	}

	//创建初始化数据
	if($act == 'add'){
		$action = 'addSave';
	}

	//创建保存
	if($act == 'addSave'){

		//验证是否已存在同类型的发起者审批流程
		$validate = $db->get_one($table,'where officeId='.$beginOffice.' and groupId='.$beginGroup.' and beginRole='.$beginRole.' and checkCategory='.$category.'','checkProcessId');
		if($validate){
			ErrorResturn('该发起者审批流程已制定，请重新选择发起者');
		}

		//审批级别
		$checkLevel = count(array_filter($role));

		$val['checkCategory'] = $category;
		$val['officeId'] = $beginOffice;
		$val['groupId'] = $beginGroup;
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
				$process['officeId'] = $office[$e];
				$process['groupId'] = $group[$e];
				$process['checkLevel'] = $level;
				$process['roleId'] = $role[$e];
				$process['createTime'] = date('Y-m-d H:i:s');

				$res = $db->insert($detailTable,$process);
				if(!$res){
					//删除当前审批流所有数据
					$db->delete($detailTable,'where checkProcessId='.$checkProcessId.''); //清除流程明细表
					$db->delete($table,'where checkProcessId='.$checkProcessId.'');//清除主表
					ErrorResturn(ERRORTIPS);
				}

			}

			TipsRefreshResturn('操作成功','system.php?_f=checkProcess-custom');

		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//编辑初始化数据
	if($act == 'edit'){

		$action = 'editSave';

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_type = getVal('s_type',1,'');
		$s_role = getVal('s_role',1,'');
		$s_office = getVal('s_office',1,'');

		$data = $db->get_one($table,'where checkProcessId='.$id.'','checkCategory,officeId,groupId,beginRole');
		if($data){
			//工作组
			$groups = $db->get_all(PRFIX.'group','where officeId='.$data['officeId'].' order by rank desc,createTime desc','groupId,groupName');
			//审批流明细
			$process = $db->get_all($detailTable,'where checkProcessId='.$id.' order by checkLevel asc','officeId,groupId,roleId');
			for($e=0;$e<count($process);$e++){
				$process[$e]['group'] = $db->get_all(PRFIX.'group','where officeId='.$process[$e]['officeId'].'','groupId,groupName');
			}
			$data['process'] = $process;
		}

	}

	//编辑保存
	if($act == 'editSave'){

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_type = getVal('s_type',1,'');
		$s_role = getVal('s_role',1,'');
		$s_office = getVal('s_office',1,'');

		//验证是否已存在同类型的发起者审批流程
		$validate = $db->get_one($table,'where officeId='.$beginOffice.' and groupId='.$beginGroup.' and beginRole='.$beginRole.' and checkCategory='.$category.' and checkProcessId<>'.$id.'','checkProcessId');
		if($validate){
			ErrorResturn('该发起者审批流程已制定，请重新选择发起者');
		}

		//审批级别
		$checkLevel = count(array_filter($role));

		$val['checkCategory'] = $category;
		$val['officeId'] = $beginOffice;
		$val['groupId'] = $beginGroup;
		$val['beginRole'] = $beginRole;
		$val['checkLevel'] = $checkLevel;

		$result = $db->update($table,$val,'where checkProcessId='.$id.'');
		if($result){

			//重建审批流程
			$db->delete($detailTable,'where checkProcessId='.$id.'');
			for($e=0;$e<$checkLevel;$e++){

				$process = array();
				$level = $e+1;

				$process['checkProcessId'] = $id;
				$process['officeId'] = $office[$e];
				$process['groupId'] = $group[$e];
				$process['checkLevel'] = $level;
				$process['roleId'] = $role[$e];
				$process['createTime'] = date('Y-m-d H:i:s');

				$res = $db->insert($detailTable,$process);
				if(!$res){
					$db->delete($detailTable,'where checkProcessId='.$id.''); //清除流程明细表
					ErrorResturn(ERRORTIPS);
				}

			}

			TipsRefreshResturn('操作成功','system.php?_f=checkProcess-custom&page='.$page.'&s_type='.$s_type.'&s_role='.$s_role.'&s_office='.$s_office.'');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('categorys',$categorys);
	$smarty->assign('offices',$offices);
	$smarty->assign('groups',$groups);
	$smarty->assign('roles',$roles);
	$smarty->assign('i',$data);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('s_type',$s_type);
	$smarty->assign('s_role',$s_role);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);

	//选择办事处工作组数据联动 ajax begin
	if($act == 'getGroup'){

		$officeId = getVal('officeId',1,'');
		if($officeId == 0){
			$data['status'] = 'fail';
			$data['message'] = '缺少办事处数据凭证！';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		$group = $db->get_all(PRFIX.'group','where officeId='.$officeId.' order by rank desc,createTime desc','groupId,groupName');
		if($group){
			$data['status'] = 'success';
			$data['message'] = '';
			$data['data'] = $group;
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}

		$returnJson = json_encode($data);
		echo $returnJson; exit;

	}
	//选择办事处工作组数据联动 ajax over
?>