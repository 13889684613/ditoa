<?php

	//# Mr.Z
	//# 2018-12-16
	//# 公共ajax文件

	include_once 'public/library/oa.common.php';

	$act = getVal('act',2,'');

	//选择办事处工作组数据联动 ajax begin
	if($act == 'getGroup'){

		$officeId = getVal('officeId',1,'');
		if($officeId == 0){
			$data['status'] = 'fail';
			$data['message'] = '缺少办事处数据凭证！';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		$group = $db->get_all(PRFIX.'group','where officeId='.$officeId.' order by rank desc,createTime desc','groupId,groupName');
		if($group){
			$data['status'] = 'success';
			$data['message'] = '';
			$data['data'] = $group;
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}

		$returnJson = json_encode($data);
		echo $returnJson; exit;

	}
	//选择办事处工作组数据联动 ajax over

	//根据所属部门给考勤设置赋值 ajax begin

	if($act == 'getSign'){

		$officeId = getVal('officeId',1,'');
		if($officeId == 0){
			$data['status'] = 'fail';
			$data['message'] = '缺少办事处数据凭证！';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		$office = $db->get_one(PRFIX.'office','where officeId='.$officeId.'','workWeek,workBeginTime,workOverTime,workCoordinate,workRange,workAddress');
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