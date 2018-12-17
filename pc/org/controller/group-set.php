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
	$workAddress = getVal('workAddress',2,'');

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($office == 0){
			$data['status'] = 'fail';
			$data['message'] = '请选择所属部门';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($groupName == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写工作组名称';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($groupName)>50){
			$data['status'] = 'fail';
			$data['message'] = '工作组名称长度不能超过50个字符';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($phone == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写联系电话';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($phone)>50){
			$data['status'] = 'fail';
			$data['message'] = '联系电话长度不能超过50个字符';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($week == ''){
			$data['status'] = 'fail';
			$data['message'] = '请选择工作日';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($workBeginTime == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写上班时间';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(!preg_match("/^([0-1]\d|2[0-4]):([0-5]\d)$/",$workBeginTime)){
			$data['status'] = 'fail';
			$data['message'] = '请填写正确的上班时间格式';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($workOverTime == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写下班时间';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(!preg_match("/^([0-1]\d|2[0-4]):([0-5]\d)$/",$workOverTime)){
			$data['status'] = 'fail';
			$data['message'] = '请填写正确的下班时间格式';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($workOverTime)>10){
			$data['status'] = 'fail';
			$data['message'] = '下班时间长度不能超过10个字符';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($workRange == 0){
			$data['status'] = 'fail';
			$data['message'] = '请选择打卡有效范围';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
	}

	//所属部门
	$offices = $db->get_all(PRFIX.'office','order by rank desc,createTime desc','officeId,officeName');

	//创建初始化数据
	if($act == 'add'){
		$action = 'addSave';
		$workBeginTime = '08:00';
		$workOverTime = '17:00';
	}

	//创建保存
	if($act == 'addSave'){

		//验证工作组是否已存在
		$validate = $db->get_one($table,'where officeId='.$office.' and groupName="'.$groupName.'"','groupId');
		if($validate){
			$data['status'] = 'fail';
			$data['message'] = '工作组已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
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
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'org.php?_f=group';
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;	

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
			$workBeginTime = $data['workBeginTime'];
			$workOverTime = $data['workOverTime'];
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
			$data['status'] = 'fail';
			$data['message'] = '工作组已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
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
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'org.php?_f=group&page='.$page.'&s_name='.$s_name.'&s_office='.$s_office.'';
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;	

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
	$smarty->assign('workBeginTime',$workBeginTime);
	$smarty->assign('workOverTime',$workOverTime);

?>