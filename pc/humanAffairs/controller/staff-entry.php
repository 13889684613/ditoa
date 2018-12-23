<?php

	//# Mr.Z
	//# 2018-11-10
	//# 入职信息

	//权限验证
	if($menuHumanAffairs[1] == 0){
		RefreshResturn('index.php?_f=login');
	}

	//当前页面公共配置
	$pageTitle = '入职信息';
	$act = $_REQUEST['act'];
	$page = $_REQUEST['page'];
	$table = PRFIX.'staff';	
	$where = '';

	//员工id
	$id = getVal('id',1,'');
	if($id == 0){
		exit;
	}

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
	$track = '&page='.$page.'&id='.$id.'&s_company='.$s_company.'&s_office='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'&s_status='.$s_status.'';
	$track .= '&s_name='.$s_name.'&s_idno='.$s_idno.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'';
	//记录列表页检索条件over

	//获取值 begin
	$joinDate = getVal('joinDate',2,'');
	$tryBeginDate = getVal('tryBeginDate',2,'');
	$tryOverDate = getVal('tryOverDate',2,'');
	$interviewer = getVal('interviewer',2,'');
	$expectedSalary = getVal('expectedSalary',1,'');
	$trySalary = getVal('trySalary',1,'');
	//获取值 over

	//验证
	if($act == 'editSave'){
		if($joinDate == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写入职日期';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if(!isdate($joinDate)){
			$data['status'] = 'fail';
			$data['message'] = '请填写正确的入职日期';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($tryBeginDate == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写试用期开始日期';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if(!isdate($tryBeginDate)){
			$data['status'] = 'fail';
			$data['message'] = '请填写正确的试用期开始日期';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($tryOverDate == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写试用期截止日期';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if(!isdate($tryOverDate)){
			$data['status'] = 'fail';
			$data['message'] = '请填写正确的试用期截止日期';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
	}

	$isSet = 0;
	$fileds = 'officeId,joinDate,tryBeginDate,tryOverDate,interviewer,expectedSalary,trySalary';
	$data = $db->get_one($table,'where staffId='.$id.'',$fileds);

	//非系统管理员操作权限验证，验证是否为同部门人员操作
	if($common_category == 0){
		if($common_office != $data['officeId']){
			RefreshResturn('index.php?_f=login');
		}
	}
	
	if($data['joinDate']!=''){
		$isSet = 1;
	}
	
	//创建保存
	if($act == 'editSave'){

		if($isSet == 1){
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
		}

		$val['joinDate'] = $joinDate;
		$val['tryBeginDate'] = $tryBeginDate;
		$val['tryOverDate'] = $tryOverDate;
		$val['interviewer'] = $interviewer;
		$val['expectedSalary'] = $expectedSalary;
		$val['trySalary'] = $trySalary;

		$result = $db->update($table,$val,'where staffId='.$id.'');
		if($result){

			//记录修改内容 
			// $_COOKIE['usrId'] = 1;	//测试

			$record['staffId'] = $id;
			$record['editUsr'] = $common_staffId;
			$record['logContent'] = $updateRemark;
			$record['logTime'] = date('Y-m-d H:i:s');

			$db->insert(PRFIX.'staff_editlog',$record);

			$url = '?_f=staff-entry&page='.$page.'&id='.$id.'&s_company='.$s_company.'&s_office='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'';
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
	$smarty->assign('isSet',$isSet);
	$smarty->assign('track',$track);

?>