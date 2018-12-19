<?php

	//# Mr.Z
	//# 2018-11-12
	//# 帐号设置

	//当前页面公共配置
	$pageTitle = '帐号设置';
	$act = $_REQUEST['act'];
	$table = PRFIX.'staff';	
	$where = '';

	//表单元素赋能 begin

	//系统角色 
	$sysRoles = $db->get_all(PRFIX.'sysrole','order by rank desc,createTime desc','sysRoleId,sysRoleName');

	//审批角色
	$checkRoles = $db->get_all(PRFIX.'checkrole','order by rank desc,createTime desc','checkRoleId,checkRoleName');

	//帐号状态
	$status = static_staffStatus();

	//表单元素赋能 over

	//记录列表页检索条件begin
	$s_company = getVal('s_company',1,'');
	$s_office = getVal('s_office',1,'');
	$s_role = getVal('s_role',1,'');
	$s_post = getVal('s_post',1,'');
	$s_status = getVal('s_status',2,'');
	$s_name = getVal('s_name',2,'');
	$s_idno = getVal('s_idno',2,'');
	$s_begintime = getVal('s_begintime',2,'');
	$s_overtime = getVal('s_overtime',2,'');
	$id = getVal('id',1,'');
	$page = getVal('page',2,'');
	$track = '&page='.$page.'&id='.$id.'&s_company='.$s_company.'&s_office='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'&s_status='.$s_status.'';
	$track .= '&s_name='.$s_name.'&s_idno='.$s_idno.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'';
	//记录列表页检索条件over

	//获取值 begin
	$sysRole = getVal('sysRole',1,'');
	$checkRole = getVal('checkRole',1,'');
	$pwd = getVal('pwd',2,'');
	$enterPwd = getVal('enterPwd',2,'');
	$accountStatus = getVal('status',1,'');
	//获取值 over

	//验证
	if($act == 'editSave'){
		if($sysRole == 0){
			$data['status'] = 'fail';
			$data['message'] = '请选择系统角色';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($checkRole == 0){
			$data['status'] = 'fail';
			$data['message'] = '请选择审批角色';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($pwd!=''||$enterPwd!=''){
			if($pwd!=$enterPwd){
				$data['status'] = 'fail';
				$data['message'] = '两次密码填写不一致，请重新填写';
				$returnJson = json_encode($data);
				echo $returnJson; exit;	
			}
		}
	}

	//初始化数据
	$data = $db->get_one($table,'where staffId='.$id.'','sysRoleId,checkRoleId,status');
	if($data['sysRoleId'] == 0){
		$isSet = 0;
		$data['sysRoleName'] = '请选择系统角色';
		$data['checkRoleName'] = '请选择审批角色';
	}else{
		$isSet = 1;
		$data['sysRoleName'] = getSysRoleName($data['sysRoleId']);
		$data['checkRoleName'] = getCheckRoleName($data['checkRoleId']);
	}

	//编辑保存
	if($act == 'editSave'){

		$updateRemark = getVal('updateRemark',2,'');
		if($updateRemark == ''){
			$data['status'] = 'fail';
			$data['message'] = '修改员工资料需标明修改内容';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if(stringLen($updateRemark)>100){
			$data['status'] = 'fail';
			$data['message'] = '修改备注内容长度不能超过100个字';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}

		if($pwd!=''){
			$loginPwd = 'dit'.$pwd.'2018';
			$val['loginPwd'] = md5($loginPwd);
		}

		$val['sysRoleId'] = $sysRole;
		$val['checkRoleId'] = $checkRole;
		$val['status'] = $accountStatus;
		$val['updateTime'] = date('Y-m-d H:i:s');

		$result = $db->update($table,$val,'where staffId='.$id.'');
		if($result){

			//记录修改内容 
			// $_COOKIE['usrId'] = 1;	//测试

			$record['staffId'] = $id;
			$record['editUsr'] = $common_staffId;
			$record['logContent'] = $updateRemark;
			$record['logTime'] = date('Y-m-d H:i:s');

			$db->insert(PRFIX.'staff_editlog',$record);

			$url = 'human-affairs.php?_f=staff-account&id='.$id.'&page='.$page.'&s_company='.$s_company.'&s_office='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'';
			$url .= '&s_status='.$s_status.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'&s_name='.$s_name.'&s_idno='.$s_idno.'';
			
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = $url;
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('sysRoles',$sysRoles);
	$smarty->assign('checkRoles',$checkRoles);
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
	$smarty->assign('i',$data);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('track',$track);
	$smarty->assign('isSet',$isSet);

?>