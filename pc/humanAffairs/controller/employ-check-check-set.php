<?php

	//# Mr.Z
	//# 2018-12-13
	//# 转正考核审批

	//当前页面公共配置
	$pageTitle = '转正考核审批';
	$act = $_REQUEST['act'];
	$page = $_REQUEST['page'];
	$where = '';

	//记录列表页检索条件begin
	$s_company = getVal('s_company',1,'');
	$s_office = getVal('s_office',1,'');
	$s_name = getVal('s_name',2,'');

	$track = '&page='.$page.'&s_company='.$s_company.'&s_office='.$s_office.'&s_name='.$s_name.'';

	$appraiseId = getVal('id',1,'');		//考核记录id
	if($appraiseId == 0){
		ErrorResturn('参数缺失！');
	}
	//记录列表页检索条件over

	//获取用户数据 begin

	$fields = 'staffId,staffRole,staffOffice,staffGroup,morality,moralityScore,attitude,attitudeScore,business,businessScore,efficiency,efficiencyScore,achievement,achievementScore,late,earlyRetreat,sickLeave,eventLeave,absenteeism,score,checkStatus,checkCategory,checkProcessId,curCheckLevel,appraiseTime';
	$A = $db->get_one(PRFIX.'staff_appraise','where appraiseId='.$appraiseId.'',$fields);
	if($A){

		$U = $db->get_one(PRFIX.'staff','where staffId='.$A['staffId'].'','staffName,photo,tryBeginDate,tryOverDate');
		if($U){
			$data['staffName'] = $U['staffName'];
			$data['photo'] = 'upload/images/staff/head/'.$U['photo'];
			$data['try'] = $U['tryBeginDate'].'至'.$U['tryOverDate'];
		}

		$officeId = $A['staffOffice'];
		$groupId = $A['staffGroup'];
		$checkRoleId = $A['staffRole'];
		$data['office'] = getOfficeName($officeId);
		$data['group'] = getGroupName($groupId);

		//各项评分
		//个人品德 begin
		$morality = explode(',',$A['morality']);		
		$data['rjgx'] = $morality[0];					//人际关系
		$data['xzx'] = $morality[1];					//协作性
		$data['grxy'] = $morality[2];					//个人修养
		$data['moralityScore'] = $A['moralityScore'];	//得分
		//个人品德 over

		//勤务态度 begin
		$attitude = explode(',',$A['attitude']);	
		$data['xiaolv'] = $attitude[0];					//严格遵守工作制度，有效利用工作时间
		$data['taidu'] = $attitude[1];					//对新工作持积极态度
		$data['zyzs'] = $attitude[2];					//忠于职守，坚守岗位
		$data['attitudeScore'] = $A['attitudeScore'];	//得分
		//勤务态度 over

		//业务能力 begin
		$business = explode(',',$A['business']);	
		$data['zrg'] = $business[0];					//以主人公精神与同事同心协力努力工作
		$data['mudi'] = $business[1];					//正确认识工作目的，正确处理业务
		$data['shunxu'] = $business[2];					//不打乱工作秩序，不妨碍他人工作
		$data['businessScore'] = $A['businessScore'];	//得分
		//业务能力 over

		//工作效率 begin
		$efficiency = explode(',',$A['efficiency']);
		$data['speed'] = $efficiency[0];					//工作速度快，不误工期
		$data['chengji'] = $efficiency[1];					//业务处置得当，经常保持良好成绩
		$data['heli'] = $efficiency[2];						//工作方法合理，时间和经费的使用十分有效
		$data['btef'] = $efficiency[3];						//工作中没有半途而废，不了了之和造成后遗症的现象	
		$data['efficiencyScore'] = $A['efficiencyScore'];	//得分
		//工作效率 over

		//业绩 begin
		$achievement = explode(',',$A['achievement']);
		$data['yaoqiu'] = $achievement[0];					//工作成果达到预期目的或计划要求
		$data['zongjie'] = $achievement[1];					//工作总结和汇报准确真实
		$data['shulian'] = $achievement[2];					//工作中熟练程度和技能提高较快
		$data['achievementScore'] = $A['achievementScore']; //得分
		//业绩 over

		$data['late'] = $A['late'];						//迟到次数
		$data['earlyRetreat'] = $A['earlyRetreat'];		//早退次数
		$data['sickLeave'] = $A['sickLeave'];			//病假天数
		$data['eventLeave'] = $A['eventLeave'];			//事假天数
		$data['absenteeism'] = $A['absenteeism'];		//旷工天数
		$data['score'] = $A['score'];					//总得分
		$data['checkStatus'] = $A['checkStatus'];		//审批状态

		//状态
		if($data['checkStatus'] == 0){
			$status = '待审批';
		}elseif($data['checkStatus'] == 1){
			$status = '审批中';
		}elseif($data['checkStatus'] == 2){	//审批完成
			//查询审批结果
			$R = $db->get_one(PRFIX.'staff_appraise_check','where appraiseId='.$appraiseId.' order by checkId desc limit 1','result');
			if($R){
				$status = static_staffCheck($R['result']);
			}
		}

		$data['status'] = $status;
		$data['scoreLevel'] = static_checkLevel($A['score']);
		$data['checkCategory'] = $A['checkCategory'];
		$data['checkProcessId'] = $A['checkProcessId'];
		$data['staffRole'] = $A['staffRole'];
		$data['appraiseTime'] = $A['appraiseTime'];
	}

	//获取用户数据 over

	//获取审批级别 begin
	$checkLevel = 0;

	//获取审批信息 begin
	if($data['checkCategory']!=0){

		//业务发起信息传参
		$apply[0] = $data['staffRole'];			//申请用户角色
		$apply[1] = $data['staffName'];			//申请人姓名
		$apply[2] = '';							//申请时间，转正考核无申请时间
		$apply[3] = $appraiseId;				//申请id

		$line = getCheckLine($apply,$data['checkCategory'],$data['checkProcessId']);
		$checkLevel = $line[0];

	}
	//获取审批级别 over

	//考核 begin
	if($act == 'checkPost'){

		$val = array();

		$result = getVal('result',1,'');
		if($result == 0){
			$data['status'] = 'fail';
			$data['message'] = '请选择考核结果';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($result == 1){
			$beginDate = getVal('beginDate',2,'');
			$overDate = getVal('overDate',2,'');
			if($beginDate == ''||$overDate == ''){
				$data['status'] = 'fail';
				$data['message'] = '请设置延长试用期有效期！';
				$returnJson = json_encode($data);
				echo $returnJson; exit;
			}
			if(!isdate($beginDate)||!isdate($overDate)){
				$data['status'] = 'fail';
				$data['message'] = '请正确设置延长试用期有效期的时间！';
				$returnJson = json_encode($data);
				echo $returnJson; exit;
			}
			$val['beginDate'] = $beginDate;
			$val['overDate'] = $overDate;
		}
		if($result == 2){
			$remark = getVal('remark',2,'');
			$val['remark'] = $remark;
		}
		if($result == 3){
			$quitDate = getVal('quitDate',2,'');
			if($quitDate == ''){
				$data['status'] = 'fail';
				$data['message'] = '请填写离职时间！';
				$returnJson = json_encode($data);
				echo $returnJson; exit;
			}
			$val['quitDate'] = $quitDate;
		}

		$val['appraiseId'] = $appraiseId;
		$val['checkLevel'] = $A['curCheckLevel'];
		$val['checkUsr'] = $common_staffId;
		$val['checkRole'] = $common_checkRole;
		$val['checkResult'] = $result;
		$val['checkTime'] = date('Y-m-d H:i:s');

		$R = $db->insert(PRFIX.'staff_appraise_check',$val);
		if($R){

			//更新员工考核表数据
			$apply = array();

			//checkLevel为0时不需要审批，=curCheckLevel时为最后一个人审批
			//满足以上两个条件时视为审批完成
			if($checkLevel == 0||$checkLevel == $A['curCheckLevel']||$result==1||$result==3){
				$apply['checkStatus'] = 2;	//审批完成
				$apply['curCheckLevel'] = $A['curCheckLevel'] + 1;	//20181220更新，为了进度轴最后一级蓝线显示，后期有问题再调整。

			}else{
				$apply['checkStatus'] = 1;	//审批中
				$nextCheckLevel = $A['curCheckLevel'] + 1;
				$apply['curCheckLevel'] = $nextCheckLevel;
				
				//找出下一个审批人员的部门、工作组、角色
				$nextCheckInfo = getNextCheckInfo($data['checkCategory'],$data['checkProcessId'],$nextCheckLevel);

				$apply['curCheckOffice'] = $nextCheckInfo[0];
				$apply['curCheckGroup'] = $nextCheckInfo[1];
				$apply['curCheckRole'] = $nextCheckInfo[2];
			}
			$db->update(PRFIX.'staff_appraise',$apply,'where appraiseId='.$appraiseId.'');

			$data['status'] = 'fail';
			$data['message'] = '操作成功';
			$data['url'] = '?_f=employ-check-check-info&id='.$appraiseId.'';
			$returnJson = json_encode($data);
			echo $returnJson; exit;

		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

	}
	//考核 over

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_group',$s_group);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('i',$data);
	$smarty->assign('id',$appraiseId);
	$smarty->assign('page',$page);
	$smarty->assign('track',$track);

?>