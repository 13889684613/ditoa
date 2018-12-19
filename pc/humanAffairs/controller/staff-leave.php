<?php

	//# Mr.Z
	//# 2018-11-13
	//# 假期设置

	//当前页面公共配置
	$pageTitle = '假期设置';
	$act = $_REQUEST['act'];
	$page = $_REQUEST['page'];
	$table = PRFIX.'staff_vacation';		//假期设置
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
	$leaveTypeId = getVal('leaveTypeId',2,'');
	$dayNumber = getVal('dayNumber',2,'');
	$vacationId = getVal('vacationId',2,'');
	//获取值 over

	//拉取需要设定的请假类型 begin
	$isSet = false;
	$data = $db->get_all(PRFIX.'leavetype','where isSameSetting=0 order by rank desc,createTime desc','leaveTypeId,typeName,dayNumber');
	$dataCount = count($data);
	for($e=0;$e<$dataCount;$e++){
		$data[$e]['vacationId'] = 0;
		$D = $db->get_one($table,'where staffId='.$id.' and leaveTypeId='.$data[$e]['leaveTypeId'].'','vacationId,dayNumber');
		if($D){
			$data[$e]['vacationId'] = $D['vacationId'];
			$data[$e]['dayNumber'] = $D['dayNumber'];
			$isSet = true;
		}
	}
	//拉取需要设定的请假类型 over
	
	//创建保存
	if($act == 'editSave'){

		if($isSet){
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

		for($e=0;$e<count($leaveTypeId);$e++){

			$val = array();
	
			$val['staffId'] = $id;
			$val['leaveTypeId'] = $leaveTypeId[$e];
			$val['dayNumber'] = $dayNumber[$e];
			$val['createTime'] = date('Y-m-d H:i:s');

			if($vacationId[$e] == 0){
				$result = $db->insert($table,$val);
			}else{
				$result = $db->update($table,$val,'where vacationId='.$vacationId[$e].'');
			}
			
			if(!$result){
				$data['status'] = 'fail';
				$data['message'] = ERRORTIPS;
				$returnJson = json_encode($data);
				echo $returnJson; exit;
			}

		}

		//记录修改内容 
		$_COOKIE['usrId'] = 1;	//测试

		$record['staffId'] = $id;
		$record['editUsr'] = $_COOKIE['usrId'];
		$record['logContent'] = $updateRemark;
		$record['logTime'] = date('Y-m-d H:i:s');

		$db->insert(PRFIX.'staff_editlog',$record);

		$url = 'human-affairs.php?_f=staff-leave&page='.$page.'&id='.$id.'&s_company='.$s_company.'&s_office='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'';
		$url .= '&s_status='.$s_status.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'&s_name='.$s_name.'&s_idno='.$s_idno.'';

		$data['status'] = 'success';
		$data['message'] = '操作成功';
		$data['url'] = $url;
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
	$smarty->assign('data',$data);
	$smarty->assign('dataCount',$dataCount);
	$smarty->assign('isSet',$isSet);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('track',$track);

?>