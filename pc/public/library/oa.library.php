<?php
	
	//# Mr.Z
	//# 2018-12-01
	//# 常用DB操作函数库

	//审批业务提交申请时初始化审批流
	//checkCategory:1,请假 2,出差 3,加班 4,补卡 5,车辆维修 6,办公备品  7,办公备品调转部门 8,离职 9,邮箱申请 10,转正
	//返回值 -- array -- 0:审批状态 1:审批部门 2:审批工作组 3:审批角色 4:审批类型（1:默认审批流 2:自定义审批流） 5:审批流id
	//此方法在带有审批流业务模块中提交申请时使用
	function originCheckProcess($categoryPara){

		global $db;
		global $common_office;
		global $common_group;
		global $begin_checkRole;

		$checkStatus = 2;	//默认不需要审批，不审批情况下，视为直接审批通过
		$checkOffice = 0;
		$checkGroup = 0;
		$checkRole = 0;
		$checkCategory = 0;
		$checkProcessId = 0;

		//如定义了自定义审批流遵循自定义审批流
		$custom = $db->get_one(PRFIX.'checkprocess','where checkCategory='.$categoryPara.' and officeId='.$common_office.' and groupId='.$common_group.' and beginRole='.$begin_checkRole.' order by createTime desc limit 1','checkProcessId');
		if($custom){

			//查询审批流程
			$check = $db->get_one(PRFIX.'checkprocess_detail','where checkProcessId='.$custom['checkProcessId'].' order by checkLevel asc limit 1','officeId,groupId,roleId');
			if($check){
				$checkStatus = 0;	//待审批
				$checkOffice = $check['officeId'];
				$checkGroup = $check['groupId'];
				$checkRole = $check['roleId'];
				$checkCategory = 2;
				$checkProcessId = $custom['checkProcessId'];
			}

		}else{
			//默认审批流
			$default = $db->get_one(PRFIX.'default_checkprocess','where checkCategory='.$categoryPara.' and beginRole='.$begin_checkRole.' order by createTime desc limit 1','defaultCheckProcessId');
			if($default){

				//查询审批流程
				$check = $db->get_one(PRFIX.'default_checkprocess_detail','where checkProcessId='.$default['defaultCheckProcessId'].' order by checkLevel asc limit 1','roleId');
				if($check){
					$checkStatus = 0;	//待审批
					$checkOffice = $common_office;
					$checkGroup = $common_group;
					$checkRole = $check['roleId'];
					$checkCategory = 1;
					$checkProcessId = $default['defaultCheckProcessId'];
				}
			}
		}

		$val[0] = $checkStatus;
		$val[1] = $checkOffice;
		$val[2] = $checkGroup;
		$val[3] = $checkRole;
		$val[4] = $checkCategory;
		$val[5] = $checkProcessId;

		return $val;

	}

	//验证是否存在审批流
	//checkCategory:审批业务类型id
	//checkCategory:1,请假 2,出差 3,加班 4,补卡 5,车辆维修 6,办公备品 7,办公备品调转部门 8,离职 9,邮箱申请 10,转正
	//applyId:业务申请id
	//此方法在执行删除或编辑审批业务申请时调用
	function isExistsCheckProcess($checkCategory,$applyId){

		//获取table&fileds
		$D = static_checkTable($checkCategory);

		//验证
		global $db;
		$validate = $db->get_one($D[0],'where '.$D[1].'='.$applyId.'',$D[1]);
		return $validate;

	}

	//通过审批流类型、ID、审批级别拉取下一个审批人部门/工作组以及角色信息
	//checkCategory:审批流类型 1,默认审批流 2,自定义审批流
	//checkProcessId:审批流id
	//checkLevel:审批级别
	//此方法在执行审批通过动作时调用
	function getNextCheckInfo($checkCategory,$checkProcessId,$checklevel){

		global $db;
		global $common_office;
		global $common_group;

		$val = array();

		$nextCheckOffice = 0; $nextCheckGroup = 0; $nextCheckRole = 0;

		if($checkCategory == 2){
			//自定义审批流
			$check = $db->get_one(PRFIX.'checkprocess_detail','where checkProcessId='.$checkProcessId.' and checkLevel='.$checklevel.'','roleId,officeId,groupId');
			if($check){
				$nextCheckOffice = $check['officeId'];
				$nextCheckGroup = $check['groupId'];
				$nextCheckRole = $check['roleId'];
			}
		}else{
			//默认审批流
			$check = $db->get_one(PRFIX.'default_checkprocess_detail','where checkProcessId='.$checkProcessId.' and checkLevel='.$checklevel.'','roleId');
			if($check){
				$nextCheckRole = $check['roleId'];
				$nextCheckOffice = $common_office;
				$nextCheckGroup = $common_group;
			}
		}

		$val[0] = $nextCheckOffice;
		$val[1] = $nextCheckGroup;
		$val[2] = $nextCheckRole;

		return $val;

	}

	//拉取审批进度轴，详细页面调用
	//applyInfo -- array,0:申请用户角色 1:申请人姓名 2:提交时间
	//checkCategory -- 审批流类型 1:默认审批流 2:自定义审批流
	//checkProcessId -- 审批流id
	//businessType -- 审批流业务类型 1,请假 2,出差 3,加班 4,补卡 5,车辆维修 6,办公备品 7,办公备品调转部门 8,离职 9,邮箱申请 10,转正
	//checkLevel -- 审批总级别，固定返回值，重要，执行后续业务用
	//processs -- 返回时间轴信息
	function getCheckLine($applyInfo,$checkCategory,$checkProcessId,$bussinessType){

		global $db;
		$checkLevel = 0; $cusor = 0;  //20181213 add

		//获取审批业务当前审批级别begin
		$applyId = $applyInfo[3];
		$T = static_checkTable($bussinessType);
		$cur = $db->get_one($T[2],'where '.$T[1].' = '.$applyId.'','curCheckLevel');
		$curCheckLevel = $cur['curCheckLevel'] - 1; //db中存储的为下一级审批级别,查询当前的需要减去1
		//获取审批业务当前审批级别over

		//获取发起信息 begin
		$beginRole = getCheckRoleName($applyInfo[0]);
		$beginStaff = $applyInfo[1];
		$beginTime = $applyInfo[2];
		$processs[$cusor]['role'] = $beginRole;
		$processs[$cusor]['staff'] = $beginStaff;
		$processs[$cusor]['result'] = '发起';
		$processs[$cusor]['time'] = $beginTime;
		$processs[$cusor]['circleClass'] = 'circleFinished ';
		// if($curCheckLevel == 0 && $bussinessType!=10){
		// 	$processs[$cusor]['circleClass'] = 'circleActive ';
		// }
		$processs[$cusor]['fontColor'] = ' color5783f1';
		//获取发起信息 over

		//转正考核者信息 begin
		if($bussinessType == 10){
			++ $cusor;
			$processs[$cusor]['role'] = $applyInfo[5];	//考核者角色
			$processs[$cusor]['staff'] = $applyInfo[4];	//考核者姓名
			$processs[$cusor]['result'] = '已考核';	
			$processs[$cusor]['time'] = $applyInfo[6];	//考核时间
			$processs[$cusor]['circleClass'] = 'circleFinished ';
			$processs[$cusor]['fontColor'] = ' color5783f1';
			// if($curCheckLevel == 0){
			// 	$processs[$cusor]['circleClass'] = 'circleActive ';
			// }
		}
		//转正考核者信息 over

		//自定义审批流
		if($checkCategory == 2){
			$process = $db->get_one(PRFIX.'checkprocess','where checkProcessId='.$checkProcessId.'','checkProcessId,checkLevel');
			if($process){
				$checkLevel = $process['checkLevel'];
				//自定义审批流
				$custom = $db->get_all(PRFIX.'checkprocess_detail','where checkProcessId='.$process['checkProcessId'].' order by checkLevel asc','checkLevel,roleId,officeId,groupId');
				for($c=0;$c<count($custom);$c++){
					$p = $cusor+1;	//20181213 update

					$processs[$p]['circleClass'] = 'circleNormal ';
					$processs[$p]['fontColor'] = '';

					$processs[$p]['role'] = getCheckRoleName($custom[$c]['roleId']);				//审批角色
					
					//获得审批人员、结果、时间
					$customs[0] = $custom[$c]['checkLevel'];
					$customs[1] = $custom[$c]['roleId'];
					$customs[2] = $custom[$c]['officeId'];
					$customs[3] = $custom[$c]['groupId'];
					$result = getCheckResult($applyInfo[3],$bussinessType,$customs);
					$processs[$p]['staff'] = $result[0];
					$processs[$p]['result'] = $result[1];
					$processs[$p]['time'] = $result[2];
					$processs[$p]['status'] = $result[3];	//转正审批流程用	20181213 add
					$processs[$p]['level'] = $custom[$c]['checkLevel'];
					if($result[1]!=''){
						$processs[$p]['circleClass'] = 'circleFinished ';
						$processs[$p]['fontColor'] = ' color5783f1';
					}

					//当前审批级别改变圆的样式
					// if($custom[$c]['checkLevel'] == $curCheckLevel){
					// 	$processs[$p]['circleClass'] = 'circleActive ';
					// }

					++ $cusor;	//20181213 add
				}
			}


		}elseif($checkCategory == 1){
			$process = $db->get_one(PRFIX.'default_checkprocess','where defaultCheckProcessId='.$checkProcessId.'','defaultCheckProcessId,checkLevel');
			if($process){

				$checkLevel = $process['checkLevel'];

				//默认审批流
				$default = $db->get_all(PRFIX.'default_checkprocess_detail','where checkProcessId='.$process['defaultCheckProcessId'].' order by checkLevel asc','checkLevel,roleId');
				for($c=0;$c<count($default);$c++){
					$p = $cusor+1;	//20181213 update
					$processs[$p]['circleClass'] = 'circleNormal ';
					$processs[$p]['fontColor'] = '';
					//审批角色
					$processs[$p]['role'] = getCheckRoleName($default[$c]['roleId']);

					//获得审批人员、结果、时间
					$defaults[0] = $default[$c]['checkLevel'];
					$defaults[1] = $default[$c]['roleId'];
					$defaults[2] = 0;
					$defaults[3] = 0;
					$result = getCheckResult($applyInfo[3],$bussinessType,$defaults);
					$processs[$p]['staff'] = $result[0];
					$processs[$p]['result'] = $result[1];
					$processs[$p]['time'] = $result[2];
					$processs[$p]['status'] = $result[3];	//转正审批流程用	20181213 add
					$processs[$p]['level'] = $default[$c]['checkLevel'];
					if($result[1]!=''){
						$processs[$p]['circleClass'] = 'circleFinished ';
						$processs[$p]['fontColor'] = ' color5783f1';
					}
					//当前审批级别改变圆的样式
					// if($default[$c]['checkLevel'] == $curCheckLevel){
					// 	$processs[$p]['circleClass'] = 'circleActive ';
					// }
					++ $cusor; //20181213 add
				}

			}
		}

		$val[0] = $checkLevel;		//审批总级别
		$val[1] = $processs;		//审批进度详情	

		return $val;

	}

	//拉取审核结果信息，用于审批进度轴
	//applyId:业务申请id
	//category:1,请假 2,出差 3,加班 4,补卡 5,车辆维修 6,办公备品  7,办公备品调转部门 8,离职 9,邮箱申请 10,转正
	//check -- array:0:当前审批级别 1:审批用户角色 2:审批用户部门 3:审批用户工作组
	function getCheckResult($applyId,$category,$check){

		global $db;

		//获取table&fileds
		$D = static_checkTable($category);

		//获取审批相关信息
		$checkLevel = $check[0];
		$roleId = $check[1];
		$officeId = $check[2];
		$groupId = $check[3];

		$ci = $db->get_one($D[0],'where '.$D[1].'='.$applyId.' and checkLevel='.$checkLevel.'','checkUsr,checkResult,checkTime');
		if($ci){
			$staffName = getStaffName($ci['checkUsr']);			//审批人员
			$status = $ci['checkResult'];						//审批结果状态，转正审批流程会用到	20181213 add
			$result = static_checkResult($ci['checkResult']);	//审批结果
			$time = $ci['checkTime'];							//审批时间
		}else{
			//审批人员
			$swhere = 'where checkRoleId='.$roleId.'';
			if($officeId!=0&&$groupId!=0){
				$swhere .= ' and officeId='.$officeId.' and groupId='.$groupId.'';
			}
			$staff = $db->get_one(PRFIX.'staff',$swhere,'staffName');
			if($staff){
				$staffName = $staff['staffName'];
				$result = '';
				$time = '';
				$status = '';
			}
		}

		$val[0] = $staffName;
		$val[1] = $result;
		$val[2] = $time;
		$val[3] = $status;	//转正流程会用到,20181213 add

		return $val;

	}

	//拉取审核记录表,详细页面调用
	//applyId:业务申请id
	//category:业务申请类型 1,请假 2,出差 3,加班 4,补卡 5,车辆维修 6,办公备品 7,办公备品调转部门 8,离职 9,邮箱申请 10,转正
	function getCheckTable($applyId,$category){

		global $db;

		$TF = static_checkTable($category);
		$tableName = $TF[0];
		$fieldName = $TF[1];

		$check = $db->get_all($tableName,'where '.$fieldName.'='.$applyId.'','checkId,checkLevel,checkUsr,checkRole,checkResult,remark,checkTime');
		for($e=0;$e<count($check);$e++){
			$check[$e]['role'] = getCheckRoleName($check[$e]['checkRole']);
			//20181213 udpate
			if($category == 10){
				//转正审批流程特殊处理

				$turn = $db->get_one(PRFIX.'staff_appraise_check','where checkId='.$check[$e]['checkId'].'','remark,beginDate,overDate,quitDate');

				$check[$e]['result'] = '已审批';
				switch ($check[$e]['checkResult']) {
					case 1:
						$checkResult = '<span class="nothing">延长试用期</span>';
						$checkResult .= '（'.$turn['beginDate'].'至'.$turn['overDate'].'）';
						break;
					case 2:
						$checkResult = '<span class="agree">正式录用</span>';
						if($turn['remark']!=''){
							$checkResult .= '（' . $turn['remark'] . '）';
						}
						break;
					case 3:
						$checkResult = '<span class="refuse">不再录用</span>';
						$checkResult .= '（离职日期：'.$turn['quitDate'].'）';
						break;
				}
				$check[$e]['remark'] = $checkResult;
			}else{
				//其它审批流程
				$check[$e]['result'] = static_checkResult($check[$e]['checkResult']);
				if($check[$e]['remark']!=''){
					$check[$e]['result'] = $check[$e]['result'].'('.$check[$e]['remark'].')';
				}
			}
			$check[$e]['checkUsr'] = getStaffName($check[$e]['checkUsr']);
		}

		return $check;

	}

	//通过员工ID拉取姓名/所属公司/所属部门/所属工作组信息
	//array('0'=>姓名,'1'=>所属公司,'2'=>所属部门,'3'=>所属工作组,'4'=>头像,'5'=>审批角色)
	function getStaffInfo($staffId){

		$staffInfo = array();

		if($staffId!=''&&$staffId!=0&&is_numeric($staffId)){

			//拉取员工核心数据
			global $db;
			$S = $db->get_one(PRFIX.'staff','where staffId='.$staffId.'','staffName,companyId,officeId,groupId,photo,checkRoleId');
			if($S){
				$staffInfo[0] = $S['staffName'];
				$staffInfo[1] = $S['companyId'];
				$staffInfo[2] = $S['officeId'];
				$staffInfo[3] = $S['groupId'];
				$staffInfo[4] = $S['photo'];
				$staffInfo[5] = $S['checkRoleId'];
			}

		}
		return $staffInfo;

	}

	//通过员工ID拉取员工姓名
	function getStaffName($staffId){

		$staffName = '';
		if($staffId!=''&&$staffId!=0&&is_numeric($staffId)){

			//拉取员工姓名
			global $db;
			$S = $db->get_one(PRFIX.'staff','where staffId='.$staffId.'','staffName');
			if($S){
				$staffName = $S['staffName'];
			}

		}
		return $staffName;

	}

	//通过公司ID拉取公司名称
	function getCompanyName($companyId){

		$companyName = '';
		if($companyId!=''&&$companyId!=0&&is_numeric($companyId)){

			//拉取企业名称
			global $db;
			$C = $db->get_one(PRFIX.'company','where companyId='.$companyId.'','cnName');
			if($C){
				$companyName = $C['cnName'];
			}

		}
		return $companyName;

	}

	//通过部门ID拉取部门名称
	function getOfficeName($officeId){

		$officeName = '';
		if($officeId!=''&&$officeId!=0&&is_numeric($officeId)){

			//拉取部门（办事处）名称
			global $db;
			$O = $db->get_one(PRFIX.'office','where officeId='.$officeId.'','officeName');
			if($O){
				$officeName = $O['officeName'];
			}

		}
		return $officeName;

	}

	//通过工作组ID拉取工作组名称
	function getGroupName($groupId){

		$groupName = '';
		if($groupId!=''&&$groupId!=0&&is_numeric($groupId)){

			//拉取部门（办事处）名称
			global $db;
			$G = $db->get_one(PRFIX.'group','where groupId='.$groupId.'','groupName');
			if($G){
				$groupName = $G['groupName'];
			}

		}
		return $groupName;

	}

	//通过审批角色id拉取角色名称
	function getCheckRoleName($roleId){

		$roleName = '';
		if($roleId!=''&&$roleId!=0&&is_numeric($roleId)){

			//拉取审批角色名称
			global $db;
			$G = $db->get_one(PRFIX.'checkrole','where checkRoleId='.$roleId.'','checkRoleName');
			if($G){
				$roleName = $G['checkRoleName'];
			}

		}
		return $roleName;

	}

	//通过系统角色id拉取系统角色名称
	function getSysRoleName($roleId){

		$sysRoleName = '';
		if($roleId!=''&&$roleId!=0&&is_numeric($roleId)){

			//拉取审批角色名称
			global $db;
			$G = $db->get_one(PRFIX.'sysrole','where sysRoleId='.$roleId.'','sysRoleName');
			if($G){
				$sysRoleName = $G['sysRoleName'];
			}

		}
		return $sysRoleName;

	}

	//通过职务id拉取职务名称
	function getPostName($postId){

		$postName = '';
		if($postId!=''&&$postId!=0&&is_numeric($postId)){

			//拉取审批角色名称
			global $db;
			$G = $db->get_one(PRFIX.'post','where postId='.$postId.'','postName');
			if($G){
				$postName = $G['postName'];
			}

		}
		return $postName;

	}

	//获取员工档案公共数据
	function getArchivesCommon($staffId){

		//蓝色线的长度---0 24.6% 49% 73.3% 100%

		global $db;

		$archivesFields = 'staffName,createTime,tryBeginDate,tryOverDate,contractBeginDate,contractOverDate,trueQuitDate';
		$archivesData = $db->get_one(PRFIX.'staff','where staffId='.$staffId.'',$archivesFields);
		if($archivesData){

			$node = 0; $lineWidth = 0;
			$tryClass = 'circleNormal ';		//试用期
			$turnClass = 'circleNormal ';		//转正
			$contractClass = 'circleNormal ';	//合同
			$quitClass = 'circleNormal ';		//离职 
			$finishClass = 'circleNormal ';		//完成

			//试用期
			if($archivesData['tryBeginDate']!=''){
				$archivesData['try'] = $archivesData['tryBeginDate'].'至'.$archivesData['tryOverDate'];
				$node = 1;
				$tryClass = 'circleFinished ';
			}

			//转正begin
			$where = 'where result>0 and appraiseId=(select appraiseId from '.PRFIX.'staff_appraise where staffId='.$staffId.')';
			$T = $db->get_one(PRFIX.'staff_appraise_check',$where.' order by checkTime desc limit 1','result,checkTime,checkUsr');
			if($T){
				$turn[0] = static_staffCheck($T['result']);
				$turn[1] = $T['checkTime'];
				$turn[2] = getStaffName($T['checkUsr']);
				$archivesData['turn'] = $turn;
				$node = 2;
				$turnClass = 'circleFinished ';
			}
			//转正over

			//合同签订
			if($archivesData['contractBeginDate']!=''){
				$archivesData['contract'] = $archivesData['contractBeginDate'].'至'.$archivesData['contractOverDate'];
				$node = 3;
				$contractClass = 'circleFinished ';
			}

			//离职日期
			if($archivesData['trueQuitDate']!=''){
				$archivesData['quit'] = $archivesData['trueQuitDate'];
				$node = 4;
				$quitClass = 'circleFinished ';
			}

			if($node == 4){
				$finishClass = 'circleFinished ';
				$lineWidth = '73.3%';
			}elseif($node == 3){
				$contractClass = 'circleActive ';
				$lineWidth = '49%';
			}elseif($node == 2){
				$turnClass = 'circleActive ';
				$lineWidth = '24.6%';
			}elseif($node == 1){
				$tryClass = 'circleActive ';
				$lineWidth = '0%';
			}

			$archivesData['node'] = $node;
			$archivesData['tryClass'] = $tryClass;
			$archivesData['turnClass'] = $turnClass;
			$archivesData['contractClass'] = $contractClass;
			$archivesData['quitClass'] = $quitClass;
			$archivesData['finishClass'] = $finishClass;
			$archivesData['lineWidth'] = $lineWidth;

		}

		return $archivesData;

	}

	//推送系统消息 - 单点推送，推送给个人
	//category：1请假 2加班 3出差 4车辆维修 5办公备品 6入职 7转正 8离职 9邮箱申请 10证件到期 11企业动态 12企业活动  13 员工合同到期提醒
	//content：推送内容
	//staffId：推送用户id
	function sendSystemSms($category,$content,$staffId){

		global $db;

		$sms['category'] = $category;					//转正
		$sms['content'] = $content;
		$sms['receiverRole'] = 3;						//推送给个人
		$sms['receiverUsr'] = $staffId;
		$sms['messageTime'] = date('Y-m-d H:i:s');

		$db->insert(PRFIX.'message',$sms);

	}

	//推送微信模板消息 - 审批业务
	//data：array - wxOpenId：微信openId，url：页面跳转url，checkNumber：审批业务编号，beginUsr：发起人，beginTime：发起时间
	//            - category：审批流程类别，remark：备注说明
	function sendWechatSms($data){

		global $db;

		//推送消息
		$templateContent = array(
			'touser'=>$data['wxOpenId'],
			'template_id'=>'8_NNb71TszEjxNkyEw_v6GvMh_bDvt0cZG-hiKErhs8',								//审批模板id
			'url' => $data['url'],
			'topcolor'=>"#FF0000",
			'data'=>array(
				'first'=>array('value'=>urlencode($data['title']),'color'=>"#173177"),					//标题
				'keyword1'=>array('value'=>urlencode($data['checkNumber']),'color'=>'#173177'),			//编号
				'keyword2'=>array('value'=>urlencode($data['beginUsr']),'color'=>'#173177'),			//发起人
				'keyword3'=>array('value'=>urlencode($data['beginTime']),'color'=>'#173177'),			//发起时间
				'keyword4'=>array('value'=>urlencode($data['category']),'color'=>'#173177'),			//流程类别
				'remark'=>array('value'=>urlencode($data['remark']),'color'=>'#173177'),				//备注
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
			$val['category'] = $data['category'];
			$val['toStaff'] = $data['staffName'];

			$db->insert(PRFIX.'template_sms',$val);

		}

	}



?>