<?php

	//# Mr.Z
	//# 2018-12-11
	//# 转正考核详情

	//当前页面公共配置
	$pageTitle = '转正考核详情';
	$act = $_REQUEST['act'];
	$page = $_REQUEST['page'];
	$where = '';

	//记录列表页检索条件begin
	$s_company = getVal('s_company',1,'');
	$s_office = getVal('s_office',1,'');
	$s_name = getVal('s_name',2,'');
	$appraiseId = getVal('id',1,'');		//考核记录id
	if($appraiseId == 0){
		ErrorResturn('参数缺失！');
	}
	$track = '&page='.$page.'&s_company='.$s_company.'&s_office='.$s_office.'&s_name='.$s_name.'';
	//记录列表页检索条件over

	//获取用户数据 begin

	$fields = 'staffId,staffRole,staffOffice,staffGroup,morality,moralityScore,attitude,attitudeScore,business,businessScore,efficiency,efficiencyScore,achievement,achievementScore,late,earlyRetreat,sickLeave,eventLeave,absenteeism,score,checkStatus,checkCategory,checkProcessId,appraiseUsr,appraiseUsrRole,appraiseTime,curCheckLevel';
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
			$status = '待审批'; $class = ' contentRightNavRightTxtBlue oneRows';
		}elseif($data['checkStatus'] == 1){
			$status = '审批中'; $class = ' contentRightNavRightTxtYellow oneRows';
		}elseif($data['checkStatus'] == 2){	//审批完成
			//查询审批结果
			$R = $db->get_one(PRFIX.'staff_appraise_check','where appraiseId='.$appraiseId.' order by checkId desc limit 1','checkResult,remark,beginDate,overDate,quitDate');
			if($R){
				$data['checkResult'] = $R['checkResult'];
				$status = static_staffCheck($R['checkResult']);
				switch ($R['checkResult']) {
					case 1:
						$status = '延长<br />试用期';
						$class = '  contentRightNavRightTxtYellow twoRows';
						break;
					case 2:
						$class = ' contentRightNavRightTxtGreen oneRows';	//正式录用
						break;
					case 3:
						$class = ' contentRightNavRightTxtred oneRows';		//不再录用
						break;
				}
				$data['remark'] = $R['remark'];
				$data['quitDate'] = $R['quitDate'];
				$data['tryOverDate'] = $R['beginDate'].'至'.$R['overDate'];
			}
		}

		$data['statusText'] = $status;
		$data['statusClass'] = $class;
		$data['scoreLevel'] = static_checkLevel($A['score']);
		$data['checkCategory'] = $A['checkCategory'];
		$data['checkProcessId'] = $A['checkProcessId'];
		$data['staffRole'] = $A['staffRole'];
		$data['appraiseTime'] = $A['appraiseTime'];

		$curCheckLevel = $A['curCheckLevel'];
	}

	//获取用户数据 over

	//审批进度轴蓝色宽度设置 begin
	// if($curCheckLevel > 1){
	// 	$curCheckLevel = $curCheckLevel + 1;	//转正审批前两级是固定的,其它审批流+1即可
	// }
	$blueLineWidth = getBlueLineWidth($curCheckLevel);
	$data['blueLineWidth'] = $blueLineWidth;
	//审批进度轴蓝色宽度设置 over

	//拉取审批进度轴 begin
	$checkLevel = 0;

	//获取审批信息 begin
	if($data['checkCategory']!=0){

		//业务发起信息传参 begin
		$apply[0] = $data['staffRole'];			//申请用户角色
		$apply[1] = $data['staffName'];			//申请人姓名
		$apply[2] = '';							//申请时间，转正考核无申请时间
		$apply[3] = $appraiseId;				//申请id
		//业务发起信息传参 over

		//考核者信息传参 begin
		$apply[4] = getStaffName($A['appraiseUsr']);			//考核者姓名
		$apply[5] = getCheckRoleName($A['appraiseUsrRole']);	//考核者角色
		$apply[6] = $A['appraiseTime'];							//考核时间
		//考核者信息传参 over

		$line = getCheckLine($apply,$data['checkCategory'],$data['checkProcessId'],10);
		$checkLevel = $line[0];		//审批总级别
		$processs = $line[1];
		for ($e=0; $e < count($processs); $e++) { 
			if($processs[$e]['status']!=''){
				$processs[$e]['result'] = static_staffCheck($processs[$e]['status']);
			}
		}

	}

	//获取审批信息 over

	//拉取审批进度轴 over

	//拉取审批记录表格
	$check = getCheckTable($appraiseId,10);

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_group',$s_group);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('i',$data);
	$smarty->assign('id',$appraiseId);
	$smarty->assign('process',$processs);
	$smarty->assign('check',$check);
	$smarty->assign('page',$page);
	$smarty->assign('track',$track);

?>