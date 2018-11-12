<?php

	//# Mr.Z
	//# 2018-11-12
	//# 离职信息

	//当前页面公共配置
	$pageTitle = '离职信息';
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
	//记录列表页检索条件over

	//获取值 begin
	$trueQuitDate = getVal('trueQuitDate',2,'');
	//获取值 over

	//验证是否设置过离职信息
	$is = $db->get_one($table,'where staffId='.$id.' and trueQuitDate is null','staffId');
	if($is){
		$isSet = false;
	}else{
		$isSet = true;
	}

	//验证
	if($act == 'editSave'){
		if($trueQuitDate == ''){
			ErrorResturn('请填写离职日期');
		}
		if(!isdate($trueQuitDate)){
			ErrorResturn('请填写正确的离职日期');
		}
	}

	//离职信息
	$data = $db->get_one($table,'where staffId='.$id.'','trueQuitDate,quitTable');
	
	//创建保存
	if($act == 'editSave'){

		$formname = 'quitTable';
		$picname = rand(0,10000).time();
		$picpath = 'upload/file/staff/'.date('Ymd').'/';
		$sizelimit = 20480000;
		$uploadnum = 1;
		$typelimit = array('application/pdf');
		$picArr = picUpload($formname,$picname,$picpath,$sizelimit,$typelimit,$uploadnum);

		if(count($picArr)>0){

			foreach($picArr as $key => $value){

				if($value!='NO'){

					$val['quitTable'] = date('Ymd').'/'.$value;

					$A = $db->get_one($table,'where staffId='.$id.'','quitTable');
					if($A){
						$historyFile = 'upload/file/staff/'.$A['quitTable'];
						unlink($historyFile);
					}

				}

			}

			if(!$isSet && count($val) == 0){
				ErrorResturn('请上传离职申请表');
			}

		}

		//更新员工离职信息
		$val['trueQuitDate'] = $trueQuitDate;
		$val['updateTime'] = date('Y-m-d H:i:s');
		$result = $db->update($table,$val,'where staffId='.$id.'');
		if(!$result){
			ErrorResturn(ERRORTIPS);
		}

		$url = 'human-affairs.php?_f=staff-quit&page='.$page.'&id='.$id.'&s_company='.$s_company.'&='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'';
		$url .= '&s_status='.$s_status.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'&s_name='.$s_name.'&s_idno='.$s_idno.'';

		TipsRefreshResturn('操作成功',$url);

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
	$smarty->assign('action',$action);

?>