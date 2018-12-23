<?php

	//# Mr.Z
	//# 2018-11-12
	//# 合同信息

	//权限验证
	if($menuHumanAffairs[1] == 0||$otherPower[0] == 0){
		RefreshResturn('index.php?_f=login');
	}

	//当前页面公共配置
	$pageTitle = '合同信息';
	$act = $_REQUEST['act'];
	$page = $_REQUEST['page'];
	$table = PRFIX.'staff_contract';
	$where = '';

	//员工id
	$id = getVal('id',1,'');
	if($id == 0){
		exit;
	}

	//非系统管理员操作权限验证，验证是否为同部门人员操作
	$O = $db->get_one(PRFIX.'staff','where staffId='.$id.'','officeId');
	if($common_category == 0){
		if($common_office != $O['officeId']){
			RefreshResturn('index.php?_f=login');
		}
	}

	//所属企业
	$companys = $db->get_all(PRFIX.'company','order by rank desc,createTime desc','companyId,cnName');

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
	$contractId = getVal('contractId',2,'');
	$company = getVal('company',2,'');
	$contractNo = getVal('contractNo',2,'');
	$beginDate = getVal('beginDate',2,'');
	$overDate = getVal('overDate',2,'');
	//获取值 over

	//验证
	if($act == 'editSave'){
		if(in_array('',$company)||in_array('',$beginDate)||in_array('',$overDate)){
			$data['status'] = 'fail';
			$data['message'] = '请完善合同信息';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
	}

	$fileds = 'contractId,companyId,contractNo,beginDate,overDate';
	$data = $db->get_all($table,'where staffId='.$id.'',$fileds);
	$dataCount = count($data);

	//创建保存
	if($act == 'editSave'){

		if($dataCount>0){
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

		//清除历史无用数据
		$delId = implode(',',$contractId);
		$db->delete($table,'where staffId='.$id.' and contractId not in('.$delId.')');

		for($e=0;$e<count($company);$e++){

			$val = array();

			if($company[$e]!=''){
				
				$val['staffId'] = $id;
				$val['companyId'] = $company[$e];
				$val['contractNo'] = $contractNo[$e];
				if($beginDate[$e]!=''){
					$val['beginDate'] = $beginDate[$e];
				}
				if($overDate[$e]!=''){
					$val['overDate'] = $overDate[$e];
				}
				$val['createTime'] = date('Y-m-d H:i:s');

				if($contractId[$e] == 0){
					$result = $db->insert($table,$val);
				}else{
					$result = $db->update($table,$val,'where contractId='.$contractId[$e].'');
				}
				
				if(!$result){
					$data['status'] = 'fail';
					$data['message'] = ERRORTIPS;
					$returnJson = json_encode($data);
					echo $returnJson; exit;	
				}
			}

			//更新员工表合同时间
			if($e == 0){
				$staff['contractBeginDate'] = $beginDate[$e];
			}

			if($e == count($company)-1){
				$staff['contractOverDate'] = $overDate[$e];
			}

		}

		//更新员工表合同时间
		if(count($staff)>0){
			$db->update(PRFIX.'staff',$staff,'where staffId='.$id.'');
		}

		//记录修改内容 
		// $_COOKIE['usrId'] = 1;	//测试

		$record['staffId'] = $id;
		$record['editUsr'] = $common_staffId;
		$record['logContent'] = $updateRemark;
		$record['logTime'] = date('Y-m-d H:i:s');

		$db->insert(PRFIX.'staff_editlog',$record);

		$url = 'human-affairs.php?_f=staff-contract&page='.$page.'&id='.$id.'&s_company='.$s_company.'&s_office='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'';
		$url .= '&s_status='.$s_status.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'&s_name='.$s_name.'&s_idno='.$s_idno.'';

		$data['status'] = 'success';
		$data['message'] = '操作成功';
		$data['url'] = $url;
		$returnJson = json_encode($data);	
		echo $returnJson; exit;	

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('companys',$companys);
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
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('track',$track);

?>