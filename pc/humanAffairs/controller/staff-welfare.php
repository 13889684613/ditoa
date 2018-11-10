<?php

	//# Mr.Z
	//# 2018-11-10
	//# 社保与公积金

	//当前页面公共配置
	$pageTitle = '社保与公积金';
	$act = $_REQUEST['act'];
	$page = $_REQUEST['page'];
	$table = PRFIX.'staff';	
	$where = '';

	//员工id
	$id = getVal('id',1,'');
	if($id == 0){
		exit;
	}

	//表单赋能 begin
	$trusteeship = static_Trusteeship();
	//表单赋能 over

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
	$insuranceNo = getVal('insuranceNo',2,'');
	$insuranceStatus = getVal('insuranceStatus',1,'');
	$insuranceOverDate = getVal('insuranceOverDate',2,'');
	$fundNo = getVal('fundNo',2,'');
	$fundStatus = getVal('fundStatus',1,'');
	$fundOverDate = getVal('fundOverDate',2,'');
	//获取值 over

	//验证
	if($act == 'editSave'){
		if($insuranceOverDate!=''){
			if(!isdate($insuranceOverDate)){
				ErrorResturn('请填写正确的保险缴纳日期');
			}
		}
		if($fundOverDate!=''){
			if(!isdate($fundOverDate)){
				ErrorResturn('请填写正确的公积金缴纳日期');
			}
		}
	}

	$fileds = 'insuranceNo,insuranceStatus,insuranceOverDate,fundNo,fundStatus,fundOverDate';
	$data = $db->get_one($table,'where staffId='.$id.'',$fileds);
	
	//创建保存
	if($act == 'editSave'){

		$val['insuranceNo'] = $insuranceNo;
		$val['insuranceStatus'] = $insuranceStatus;
		$val['insuranceOverDate'] = $insuranceOverDate;
		$val['fundNo'] = $fundNo;
		$val['fundStatus'] = $fundStatus;
		$val['fundOverDate'] = $fundOverDate;

		$result = $db->update($table,$val,'where staffId='.$id.'');
		if($result){

			$url = 'human-affairs.php?_f=staff-welfare&page='.$page.'&id='.$id.'&s_company='.$s_company.'&s_office='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'';
			$url .= '&s_status='.$s_status.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'&s_name='.$s_name.'&s_idno='.$s_idno.'';

			TipsRefreshResturn('操作成功',$url);

		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('trusteeship',$trusteeship);
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
	$smarty->assign('action',$action);

?>