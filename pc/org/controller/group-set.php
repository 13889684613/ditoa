<?php

	//# Mr.Z
	//# 2018-11-05
	//# 工作组信息设置

	//当前页面公共配置
	$pageTitle = '工作组信息设置';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'group';
	$where = '';
	$rank = 0;

	//获取值
	$office = getVal('office',1,'');
	$groupName = getVal('groupName',2,'');
	$phone = getVal('phone',2,'');
	$rank = getVal('rank',1,'');

	$week = getVal('week',2,'');
	$workBeginTime = getVal('workBeginTime',2,'');
	$workOverTime = getVal('workOverTime',2,'');
	$workCoordinate = getVal('workCoordinate',2,'');
	$workRange = getVal('workRange',1,'');

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($office == 0){
			ErrorResturn('请选择所属部门');
		}
		if($groupName == ''){
			ErrorResturn('请填写工作组名称');
		}
		if(stringLen($groupName)>50){
			ErrorResturn('工作组名称长度不能超过50个字符');
		}
		if($phone == ''){
			ErrorResturn('请填写联系电话');
		}
		if(stringLen($phone)>50){
			ErrorResturn('联系电话长度不能超过50个字符');
		}
		if(count($week) == 0){
			ErrorResturn('请选择工作日');
		}
		if($workBeginTime == ''){
			ErrorResturn('请填写上班时间');
		}
		if(!preg_match("/^([0-1]\d|2[0-4]):([0-5]\d)$/",$workBeginTime)){
			ErrorResturn('请填写正确的上班时间格式');
		}
		if($workOverTime == ''){
			ErrorResturn('请填写下班时间');
		}
		if(!preg_match("/^([0-1]\d|2[0-4]):([0-5]\d)$/",$workOverTime)){
			ErrorResturn('请填写正确的下班时间格式');
		}
		if(stringLen($workOverTime)>10){
			ErrorResturn('下班时间长度不能超过10个字符');
		}
		if($workRange == 0){
			ErrorResturn('请选择打卡有效范围');
		}
	}

	//所属部门
	$offices = $db->get_all(PRFIX.'office','order by rank desc,createTime desc','officeId,officeName');

	//创建初始化数据
	if($act == 'add'){
		$action = 'addSave';
	}

	//创建保存
	if($act == 'addSave'){

		//验证工作组是否已存在
		$validate = $db->get_one($table,'where officeId='.$office.' and groupName="'.$groupName.'"','groupId');
		if($validate){
			ErrorResturn('工作组已存在，请重新填写');
		}

		$val['officeId'] = $office;
		$val['groupName'] = $groupName;
		$val['phone'] = $phone;
		$val['workWeek'] = implode(",", $week);
		$val['workBeginTime'] = $workBeginTime;
		$val['workOverTime'] = $workOverTime;
		$val['workCoordinate'] = $workCoordinate;
		$val['workRange'] = $workRange;
		$val['rank'] = $rank;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){
			TipsRefreshResturn('操作成功','org.php?_f=group');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//编辑初始化数据
	if($act == 'edit'){

		$action = 'editSave';

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_office = getVal('s_office',1,'');
		$s_name = getVal('s_name',2,'');

		$data = $db->get_one($table,'where groupId='.$id.'');
		if($data){
			$data['workWeek'] = explode(',',$data['workWeek']);
			$rank = $data['rank'];
		}

	}

	//编辑保存
	if($act == 'editSave'){

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_office = getVal('s_office',1,'');
		$s_name = getVal('s_name',2,'');

		//验证工作组是否已存在
		$validate = $db->get_one($table,'where officeId='.$office.' and groupName="'.$groupName.'" and groupId<>'.$id.'','groupId');
		if($validate){
			ErrorResturn('工作组已存在，请重新填写');
		}

		$val['officeId'] = $office;
		$val['groupName'] = $groupName;
		$val['phone'] = $phone;
		$val['workWeek'] = implode(",", $week);
		$val['workBeginTime'] = $workBeginTime;
		$val['workOverTime'] = $workOverTime;
		$val['workCoordinate'] = $workCoordinate;
		$val['workRange'] = $workRange;
		$val['rank'] = $rank;
		$val['updateTime'] = date('Y-m-d H:i:s');

		$result = $db->update($table,$val,'where groupId='.$id.'');
		if($result){
			TipsRefreshResturn('操作成功','org.php?_f=group&page='.$page.'&s_name='.$s_name.'&s_office='.$s_office.'');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('offices',$offices);
	$smarty->assign('i',$data);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);

	//根据所属部门给考勤设置赋值 ajax begin

	if($act == 'getSign'){

		$officeId = getVal('officeId',1,'');
		if($officeId == 0){
			$data['status'] = 'fail';
			$data['message'] = '缺少办事处数据凭证！';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		$office = $db->get_one(PRFIX.'office','where officeId='.$officeId.'','workWeek,workBeginTime,workOverTime,workCoordinate,workRange');
		if($office){
			$data['status'] = 'success';
			$data['message'] = '';
			$data['data'] = $office;
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;

	}

	//根据所属部门给考勤设置赋值 ajax over


	
?>