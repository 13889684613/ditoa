<?php

	//# Mr.Z
	//# 2018-12-10
	//# 转正考核

	//权限验证
	if($menuHumanAffairs[4] == 0){
		RefreshResturn('index.php?_f=login');
	}

	//微信Api
	include_once(PUBLICPATH.'oa.wechat.php');

	//当前页面公共配置
	$pageTitle = '转正考核';
	$act = $_REQUEST['act'];
	$page = $_REQUEST['page'];
	$where = '';

	//记录列表页检索条件begin
	$s_company = getVal('s_company',1,'');
	$s_office = getVal('s_office',1,'');
	$s_name = getVal('s_name',2,'');
	$track = '&page='.$page.'&s_company='.$s_company.'&s_office='.$s_office.'&s_name='.$s_name.'';
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
	//个人品德 over

	//勤务态度 begin
	$xiaolv = getVal('xiaolv',1,'');			//严格遵守工作制度，有效利用工作时间
	$taidu = getVal('taidu',1,'');				//对新工作持积极态度
	$zyzs = getVal('zyzs',1,'');				//忠于职守，坚守岗位
	//勤务态度 over

	//业务能力 begin
	$zrg = getVal('zrg',1,'');					//以主人公精神与同事同心协力努力工作
	$mudi = getVal('mudi',1,'');				//正确认识工作目的，正确处理业务
	$shunxu = getVal('shunxu',1,'');			//不打乱工作秩序，不妨碍他人工作
	//业务能力 over

	//工作效率 begin
	$speed = getVal('speed',1,'');				//工作速度快，不误工期
	$chengji = getVal('chengji',1,'');			//业务处置得当，经常保持良好成绩
	$heli = getVal('heli',1,'');				//工作方法合理，时间和经费的使用十分有效
	$btef = getVal('btef',1,'');				//工作中没有半途而废，不了了之和造成后遗症的现象
	//工作效率 over

	//业绩 begin
	$yaoqiu = getVal('yaoqiu',1,'');			//工作成果达到预期目的或计划要求
	$zongjie = getVal('zongjie',1,'');			//工作总结和汇报准确真实
	$shulian = getVal('shulian',1,'');			//工作中熟练程度和技能提高较快
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

		//非系统管理员仅能查看自己办事处的员工
		if($common_category == 0){
			if($common_office != $U['officeId']){
				RefreshResturn('index.php?_f=login');
			}
		}

		$data['staffName'] = $U['staffName'];
		$officeId = $U['officeId'];
		$groupId = $U['groupId'];
		$checkRoleId = $U['checkRoleId'];
		$data['office'] = getOfficeName($officeId);
		$data['group'] = getGroupName($groupId);
		$data['photo'] = 'upload/images/staff/head/'.$U['photo'];
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
			$data['status'] = 'fail';
			$data['message'] = '请完善个人品德得分';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($xiaolv == 0||$taidu == 0||$zyzs == 0){
			$data['status'] = 'fail';
			$data['message'] = '请完善勤务态度得分';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($zrg == 0||$mudi == 0||$shunxu == 0){
			$data['status'] = 'fail';
			$data['message'] = '请完善业务能力得分';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($speed == 0||$chengji == 0||$heli == 0||$btef == 0){
			$data['status'] = 'fail';
			$data['message'] = '请完善工作效率得分';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($yaoqiu == 0||$zongjie == 0||$shulian == 0){
			$data['status'] = 'fail';
			$data['message'] = '请完善业绩得分';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		$morality = $rjgx.','.$xzx.','.$grxy;					//个人品德
		$attitude = $xiaolv.','.$taidu.','.$zyzs;				//勤务态度
		$business = $zrg.','.$mudi.','.$shunxu;					//业务能力
		$efficiency = $speed.','.$chengji.','.$heli.','.$btef;	//工作效率
		$achievement = $yaoqiu.','.$zongjie.','.$shulian;		//业绩

		$moralityScore = $rjgx+$xzx+$grxy;
		$attitudeScore = $xiaolv+$taidu+$zyzs;
		$businessScore = $zrg+$mudi+$shunxu;
		$efficiencyScore = $speed+$chengji+$heli+$btef;
		$achievementScore = $yaoqiu+$zongjie+$shulian;

		$val['appraiseUsr'] = $common_staffId;					//考核者
		$val['appraiseUsrRole'] = $common_checkRole;			//考核者角色
		$val['morality'] = $morality;
		$val['moralityScore'] = $moralityScore;
		$val['attitude'] = $attitude;
		$val['attitudeScore'] = $attitudeScore;
		$val['business'] = $business;
		$val['businessScore'] = $businessScore;
		$val['efficiency'] = $efficiency;
		$val['efficiencyScore'] = $efficiencyScore;
		$val['achievement'] = $achievement;
		$val['achievementScore'] = $achievementScore;
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
			$checkNumber = date('YmdHis').rand(10,99);
			$val['checkNumber'] = $checkNumber;			//审批单号,20181223 add，推送消息会用到
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
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}else{
			if($appraiseId == 0){
				$dataId = $db->get_lastId();
			}else{
				$dataId = $appraiseId;
			}

			$data['status'] = 'success';
			$data['message'] = '考核成功';
			$data['url'] = '?_f=employ-check-info&id='.$dataId.'';

			//发起审批申请时推送消息，修改时不推送
			if($appraiseId == 0){

				//同时推送系统消息、邮件与微信审批消息提醒 begin

				//获取审批人员
				$S = $db->get_all(PRFIX.'staff','where officeId='.$checkOffice.' and groupId='.$checkGroup.' and checkRoleId='.$checkRole.'','staffId,wxOpenId,email,staffName');
				for($e=0;$e<count($S);$e++){

					//推送系统消息 begin
					sendSystemSms(7,'您有1条员工转正审批申请需要处理',$S[$e]['staffId']);
					//推送系统消息 over

					//推送微信模板消息 begin
					if($S[$e]['wxOpenId']!=''){

						$template = array();

						$template['wxOpenId'] = $S[$e]['wxOpenId'];					//用户openId
						$template['staffName'] = $S[$e]['staffName'];				//用户姓名
						$template['url'] = '';										//跳转业务页面url
						$template['title'] = '审批提醒';								//消息标题
						$template['checkNumber'] = $checkNumber;					//审批编号
						$template['beginUsr'] = getStaffName($common_staffId);		//发起人，部门主任，考核人员
						$template['beginTime'] = date('Y-m-d H:i');					//发起时间
						$template['category'] = '员工转正考核审批';						//流程类别
						$template['remark'] = '您有1条员工转正审批申请需要处理';			//备注

						sendWechatSms($template);	//发送微信模板消息
						
					}
					//推送微信模板消息 over

					//推送邮件 begin
					if($S[$e]['email']!=''){

						$content = '亲爱的'.$S[$e]['staffName'].'，<br />';
						$content .= '您有1条员工转正审批申请需要处理<br /><br />';
						$content .= '发起人：'.getStaffName($common_staffId).'<br />';
						$content .= '发起时间：'.date('Y-m-d H:i').'<br /><br />';
						$content .= '请尽快登录OA处理！';

						// sendMail($S[$e]['email'],'【DIT】亲爱的'.$S[$e]['staffName'].'，您有1条员工转正审批申请需要处理',$content)；

					}
					//推送邮件 over

				}

				//同时推送系统消息、邮件与微信审批消息提醒 over
			}

		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;

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
	$smarty->assign('track',$track);

?>