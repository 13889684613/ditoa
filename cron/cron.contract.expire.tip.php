<?php header("Content-type:text/html;charset=utf-8");?>
<?php session_start();?>
<?php ob_start();?>
<?php

	//# Mr.Z
	//# 2018-12-20
	//# 员工到达离职日期自动变更员工状态为离职状态
	//# 任务执行时间 00:00

	// ** 全局配置文件
	date_default_timezone_set('Asia/Shanghai');

	include("common/oa.common.php");

	$beginTime = time();
	$remark = '';

	//找到1个月内合同到期的员工
	$S = $db->get_all(PRFIX.'staff','where (status=0 or status=1) and trueQuitDate="'.date('Y-m-d').'"','staffId,staffName');

	for($e=0;$e<count($S);$e++){

		//变更为离职状态
		$val['status'] = 2;
		$result = $db->update(PRFIX.'staff',$val,'where staffId='.$S[$e]['staffId'].'');
		if($result){
			$staff .= ',' . $S[$e]['staffName'];
		}

	}

	if($staff!=''){
		$remark = '离职人员'.$staff;
	}

	$overTime = time();

	//执行时长
	$duration = $overTime - $beginTime;

	//写入计划任务执行监测日志 begin
	$log['category'] = 1;
	$log['cronTime'] = date('Y-m-d H:i:s');
	$log['duration'] = $duration;
	$log['remark'] = $remark;

	$db->insert(PRFIX.'cron',$log);
	//写入计划任务执行监测日志 over

?>