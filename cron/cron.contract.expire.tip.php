<?php header("Content-type:text/html;charset=utf-8");?>
<?php session_start();?>
<?php ob_start();?>
<?php

	//# Mr.Z
<<<<<<< HEAD
	//# 2018-12-22
	//# 员工合同到期提醒 提醒周期 30天/15天/7天/3天内
	//# 任务执行时间 09:00
=======
	//# 2018-12-20
	//# 员工到达离职日期自动变更员工状态为离职状态
	//# 任务执行时间 00:00
>>>>>>> 63e315206b29bb078b817a3565d169b3d907439f

	// ** 全局配置文件
	date_default_timezone_set('Asia/Shanghai');

	include("common/oa.common.php");
<<<<<<< HEAD
	include("common/oa.wechat.php");

	$beginTime = time();
	$staff = ''; $remark = ''; $count = 0;

	//找到还有30天/15天/7天/3天内到期的员工合同
	$S = $db->get_all(PRFIX.'staff','where TO_DAYS(contractOverDate)-TO_DAYS(NOW())>=0 and (TO_DAYS(contractOverDate)-TO_DAYS(NOW())<=3 or TO_DAYS(contractOverDate)-TO_DAYS(NOW())=7 or TO_DAYS(contractOverDate)-TO_DAYS(NOW())=15 or TO_DAYS(contractOverDate)-TO_DAYS(NOW())=30)','staffName');

	for($e=0;$e<count($S);$e++){
		$staff .= '/' . $S[$e]['staffName'];
		++$count;
	}

	if($staff!=''){

		$tip = substr($staff,1).'合同快到期了，请尽快处理！';

		//找到拥有合同处理人员
		$P = $db->get_all(PRFIX.'staff','where status<>2 and sysRoleId in(select sysRoleId from '.PRFIX.'sysrole where substring(power,111,1)=1)','staffId,wxOpenId,staffName');
		for($e=0;$e<count($P);$e++){

			//推送系统短消息
			$sms['category'] = 13;			//合同到期提醒
			$sms['content'] = $tip;
			$sms['receiverRole'] = 3;		//推送给个人
			$sms['receiverUsr'] = $P[$e]['staffId'];
			$sms['messageTime'] = date('Y-m-d H:i:s');

			$db->insert(PRFIX.'message',$sms);

			//推送微信模板消息
			if($P[$e]['wxOpenId']!=''){

				// ** 模板消息推送begin
				$des = $count.'个合同需要处理';

				//推送消息
				$templateContent = array(
					'touser'=>$P[$e]['wxOpenId'],
					'template_id'=>'-qd5_BizPWgzYeZsJptPxiSOnPNt-tXakX_eqD1zZNo',					//模板id
					'url' => '',
					'topcolor'=>"#FF0000",
					'data'=>array(
						'first'=>array('value'=>urlencode('员工合同到期提醒'),'color'=>"#173177"),		//标题
						'keyword1'=>array('value'=>urlencode('合同续签'),'color'=>'#173177'),			//任务类型
						'keyword2'=>array('value'=>urlencode($des),'color'=>'#173177'),				//任务描述
						'remark'=>array('value'=>urlencode($tip),'color'=>'#173177'),				//介绍
					)
				);
				 
				//获取推送状态
				$result = messageSendStatus($templateContent);
				//返回失败写入日志
				if($result['errcode'] != 0){
					//写入日志表
					$val = array();

					$val['logTime'] = date('Y-m-d H:i:s');
					$val['errCode'] = $result['errcode'];
					$val['errMsg'] = $result['errmsg'];
					$val['msgId'] = $result['msgid'];
					$val['category'] = '员工合同到期提醒';
					$val['toStaff'] = $P[$e]['staffName'];

					$db->insert(PRFIX.'template_sms',$val);

				}

				// ** 模板消息推送over

			}

=======

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
>>>>>>> 63e315206b29bb078b817a3565d169b3d907439f
	}

	$overTime = time();

	//执行时长
	$duration = $overTime - $beginTime;

	//写入计划任务执行监测日志 begin
<<<<<<< HEAD
	$log['category'] = 2;
=======
	$log['category'] = 1;
>>>>>>> 63e315206b29bb078b817a3565d169b3d907439f
	$log['cronTime'] = date('Y-m-d H:i:s');
	$log['duration'] = $duration;
	$log['remark'] = $remark;

	$db->insert(PRFIX.'cron',$log);
	//写入计划任务执行监测日志 over

?>