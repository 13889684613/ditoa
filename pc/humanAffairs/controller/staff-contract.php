<?php

	//# Mr.Z
	//# 2018-11-12
	//# 合同信息

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
	//记录列表页检索条件over

	//获取值 begin
	$company = getVal('company',2,'');
	$contractNo = getVal('contractNo',2,'');
	$beginDate = getVal('beginDate',2,'');
	$overDate = getVal('overDate',2,'');
	//获取值 over

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if(in_array('',$company)||in_array('',$beginDate)||in_array('',$overDate)){
			ErrorResturn('请完善合同信息');
		}
	}

	$fileds = 'companyId,contractNo,beginDate,overDate';
	$data = $db->get_all($table,'where staffId='.$id.'',$fileds);
	if(count($data) == 0){
		$action = 'addSave';
	}else{
		$action = 'editSave';
	}

	//创建保存
	if($act == 'addSave' || $act == 'editSave'){

		if($act == 'editSave'){
			//删除原有设置
			$db->delete($table,'where staffId='.$id.'');
		}

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

				$result = $db->insert($table,$val);
				if(!$result){
					ErrorResturn(ERRORTIPS);
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

		$url = 'human-affairs.php?_f=staff-contract&page='.$page.'&id='.$id.'&s_company='.$s_company.'&s_office='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'';
		$url .= '&s_status='.$s_status.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'&s_name='.$s_name.'&s_idno='.$s_idno.'';

		TipsRefreshResturn('操作成功',$url);

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
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('action',$action);

?>