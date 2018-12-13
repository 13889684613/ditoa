<?php

	//# Mr.Z
	//# 2018-12-10
	//# 转正考核

	//当前页面公共配置
	$pageTitle = '转正考核';
	$act = $_REQUEST['act'];
	$page = $_REQUEST['page'];
	$where = '';

	//记录列表页检索条件begin
	$s_company = getVal('s_company',1,'');
	$s_office = getVal('s_office',1,'');
	$s_name = getVal('s_name',2,'');
	//记录列表页检索条件over

	//获取值 begin
	$staffId = getVal('s',1,'');			//被考核员工id
	if($staffId == 0){
		ErrorResturn('参数缺失！');
	}

	$appraiseId = getVal('id',1,'');		//考核记录id

	//个人品德 begin
	$rjgx = getVal('rjgx',1,'');			//人际关系
	$xzx = getVal('xzx',1,'');				//协作性
	$grxy = getVal('grxy',1,'');			//个人修养
	$score_pd = getVal('score_pd',1,'');	//得分
	//个人品德 over

	//勤务态度 begin
	$xiaolv = getVal('xiaolv',1,'');			//严格遵守工作制度，有效利用工作时间
	$taidu = getVal('taidu',1,'');				//对新工作持积极态度
	$zyzs = getVal('zyzs',1,'');				//忠于职守，坚守岗位
	$score_td = getVal('score_td',1,'');		//得分
	//勤务态度 over

	//业务能力 begin
	$zrg = getVal('zrg',1,'');					//以主人公精神与同事同心协力努力工作
	$mudi = getVal('mudi',1,'');				//正确认识工作目的，正确处理业务
	$shunxu = getVal('shunxu',1,'');			//不打乱工作秩序，不妨碍他人工作
	$score_nl = getVal('score_nl',1,'');		//得分
	//业务能力 over

	//工作效率 begin
	$speed = getVal('speed',1,'');				//工作速度快，不误工期
	$chengji = getVal('chengji',1,'');			//业务处置得当，经常保持良好成绩
	$heli = getVal('heli',1,'');				//工作方法合理，时间和经费的使用十分有效
	$btef = getVal('btef',1,'');				//工作中没有半途而废，不了了之和造成后遗症的现象
	$score_xl = getVal('score_xl',1,'');		//得分
	//工作效率 over

	//业绩 begin
	$yaoqiu = getVal('yaoqiu',1,'');			//工作成果达到预期目的或计划要求
	$zongjie = getVal('zongjie',1,'');			//工作总结和汇报准确真实
	$shulian = getVal('shulian',1,'');			//工作中熟练程度和技能提高较快
	$score_yj = getVal('score_yj',1,'');		//得分
	//业绩 over

	//考勤情况 begin
	$cidao = getVal('cidao',1,'');				//迟到
	$zaotui = getVal('zaotui',1,'');			//早退
	$bingjia = getVal('bingjia',1,'');			//病假
	$shijia = getVal('shijia',1,'');			//事假
	$kuanggong = getVal('kuanggong',1,'');		//旷工
	$zdf = getVal('zdf',1,'');					//总得分
	//考勤情况 over

	//获取值 over

	//获取用户数据 begin

	$U = $db->get_one(PRFIX.'staff','where staffId='.$staffId.'','staffName,officeId,groupId,photo,tryBeginDate,tryOverDate,checkRoleId');
	if($U){
		$data['staffName'] = $U['staffName'];
		$officeId = $U['officeId'];
		$groupId = $U['groupId'];
		$checkRoleId = $U['checkRoleId'];
		$data['office'] = getOfficeName($officeId);
		$data['group'] = getGroupName($groupId);
		$data['photo'] = 'upload/images/straff/head/'.$U['photo'];
		$data['try'] = $U['tryBeginDate'].'至'.$U['tryOverDate'];
	}

	if($appraiseId != 0){
		$fields = 'staffRole,staffOffice,staffGroup,morality,moralityScore,attitude,attitudeScore,business,businessScore,efficiency,efficiencyScore,achievement,achievementScore,late,earlyRetreat,sickLeave,eventLeave,absenteeism,score';
		$A = $db->get_one(PRFIX.'staff_appraise','where appraiseId='.$appraiseId.'',$fields);
		if($A){
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
		}
	}

	//获取用户数据 over

	//验证
	if($act == 'save'){

		if($rjgx == 0||$xzx == 0||$grxy == 0){
			ErrorResturn('请完善个人品德得分');
		}
		if($xiaolv == 0||$taidu == 0||$zyzs == 0){
			ErrorResturn('请完善勤务态度得分');
		}
		if($zrg == 0||$mudi == 0||$shunxu == 0){
			ErrorResturn('请完善业务能力得分');
		}
		if($speed == 0||$chengji == 0||$heli == 0||$btef == 0){
			ErrorResturn('请完善工作效率得分');
		}
		if($yaoqiu == 0||$zongjie == 0||$shulian == 0){
			ErrorResturn('请完善业绩得分');
		}

		$morality = $rjgx.','.$xzx.','.$grxy;					//个人品德
		$attitude = $xiaolv.','.$taidu.','.$zyzs;				//勤务态度
		$business = $zrg.','.$mudi.','.$shunxu;					//业务能力
		$efficiency = $speed.','.$chengji.','.$heli.','.$btef;	//工作效率
		$achievement = $yaoqiu.','.$zongjie.','.$shulian;		//业绩

		$val['appraiseUsr'] = $common_staffId;					//考核者
		$val['appraiseUsrRole'] = $common_checkRole;			//考核者角色
		$val['morality'] = $morality;
		$val['moralityScore'] = $score_pd;
		$val['attitude'] = $attitude;
		$val['attitudeScore'] = $score_td;
		$val['business'] = $business;
		$val['businessScore'] = $score_nl;
		$val['efficiency'] = $efficiency;
		$val['efficiencyScore'] = $score_xl;
		$val['achievement'] = $achievement;
		$val['achievementScore'] = $score_yj;
		$val['late'] = $cidao;
		$val['earlyRetreat'] = $zaotui;
		$val['sickLeave'] = $bingjia;
		$val['eventLeave'] = $shijia;
		$val['absenteeism'] = $kuanggong;
		$val['score'] = $zdf;
		$val['appraiseTime'] = date('Y-m-d H:i:s');

		if($appraiseId == 0){

			$val['staffId'] = $staffId;
			$val['staffRole'] = $checkRoleId;
			$val['staffOffice'] = $officeId;
			$val['staffGroup'] = $groupId;

			//初始化审批流信息 begin
			$checkInfo = originCheckProcess(10);
			$checkStatus = $checkInfo[0];
			$checkOffice = $checkInfo[1];
			$checkGroup = $checkInfo[2];
			$checkRole = $checkInfo[3];
			$checkCategory = $checkInfo[4];
			$checkProcessId = $checkInfo[5];
			//初始化审批流信息 over

			//审批数据 begin
			$val['checkStatus'] = $checkStatus;
			$val['curCheckLevel'] = 1;
			$val['curCheckOffice'] = $checkOffice;
			$val['curCheckGroup'] = $checkGroup;
			$val['curCheckRole'] = $checkRole;
			$val['checkCategory'] = $checkCategory;
			$val['checkProcessId'] = $checkProcessId;
			//审批数据 over

			$result = $db->insert(PRFIX.'staff_appraise',$val);

		}else{
			$result = $db->update(PRFIX.'staff_appraise',$val,'where appraiseId='.$appraiseId.'');
		}

		if(!$result){
			ErrorResturn(ERRORTIPS);
		}else{
			if($appraiseId == 0){
				$dataId = $db->get_lastId();
			}else{
				$dataId = $appraiseId;
			}
			
			TipsRefreshResturn('考核成功','?_f=employ-check-info&id='.$dataId.'');
		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_group',$s_group);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('i',$data);
	$smarty->assign('id',$appraiseId);
	$smarty->assign('page',$page);
	$smarty->assign('s',$staffId);

?>