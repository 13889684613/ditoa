<?php

	//# Mr.Z
	//# 2018-11-18
	//# 提交邮箱申请

	//当前页面公共配置
	$pageTitle = '提交邮箱申请';
	$act = $_REQUEST['act'];
	$table = PRFIX.'mailapply';	
	$where = '';

	//记录列表页检索条件begin
	$s_office = getVal('s_office',1,'');
	$s_group = getVal('s_group',1,'');
	$s_name = getVal('s_name',2,'');
	//记录列表页检索条件over

	//获取值 begin
	$mailName = getVal('mailName',2,'');
	$reason = getVal('reason',2,'');
	//获取值 over

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($mailName == ''){
			ErrorResturn('请填写邮箱帐号');
		}
		if(stringLen($mailName)>50){
			ErrorResturn('邮箱帐号长度不能超过50个字符');
		}
		if($reason == ''){
			ErrorResturn('请填写申请原因');
		}
		if(stringLen($reason)>100){
			ErrorResturn('申请原因长度不能超过100个字符');
		}
	}

	//创建初始化数据
	if($act == 'add'){
		$action = 'addSave';
	}

	//创建保存
	if($act == 'addSave'){

		//验证邮箱帐号名是否存在
		$validate = $db->get_one($table,'where mailName="'.$mailName.'"','mailApplyId');
		if($validate){
			ErrorResturn('邮箱帐号已存在，请重新填写邮箱帐号');
		}

		$val['applyUsrId'] = $common_staffId;
		$val['applyUsrRole'] = $common_checkRole;
		$val['applyUsrOffice'] = $common_office;
		$val['applyUsrGroup'] = $common_group;
		$val['mailName'] = $mailName;
		$val['reason'] = $reason;
		$val['applyTime'] = date('Y-m-d H:i:s');

		//初始化审批流信息 begin
		$checkInfo = originCheckProcess(9);
		$checkStatus = $checkInfo[0];
		$checkOffice = $checkInfo[1];
		$checkGroup = $checkInfo[2];
		$checkRole = $checkInfo[3];
		$checkCategory = $checkInfo[4];
		$checkProcessId = $checkInfo[5];
		//初始化审批流信息 over

		$val['checkStatus'] = $checkStatus;
		$val['curCheckLevel'] = 1;
		$val['curCheckOffice'] = $checkOffice;
		$val['curCheckGroup'] = $checkGroup;
		$val['curCheckRole'] = $checkRole;
		$val['checkCategory'] = $checkCategory;
		$val['checkProcessId'] = $checkProcessId;

		$result = $db->insert($table,$val);
		if($result){
			TipsRefreshResturn('提交成功','human-affairs.php?_f=mail-apply');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//编辑初始化数据
	if($act == 'edit'){

		$action = 'editSave';

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');

		//验证是否已审批
		$validate = isExistsCheckProcess(9,$id);
		if($validate){
			ErrorResturn('此条申请已经过审批，不能再修改');
		}

		$data = $db->get_one($table,'where mailApplyId='.$id.'','mailName,reason');

	}

	//编辑保存
	if($act == 'editSave'){

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');

		$val['mailName'] = $mailName;
		$val['reason'] = $reason;

		$result = $db->update($table,$val,'where mailApplyId='.$id.'');
		if($result){
			TipsRefreshResturn('操作成功','human-affairs.php?_f=mail-apply&page='.$page.'&s_office='.$s_office.'&s_group='.$s_group.'&s_name='.$s_name.'');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_group',$s_group);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('i',$data);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('action',$action);

?>