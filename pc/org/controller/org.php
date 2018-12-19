<?php

	//# Mr.Z
	//# 2018-11-06
	//# 企业组织架构

	//分页类
	include_once(PUBLICPATH.'oa.page.php');

	//当前页面公共配置
	$pageTitle = '企业组织架构';
	$router = '?_f=org';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$groupId = getVal('g',1,'');
	$officeId = getVal('o',1,'');
	$where = '';

	//左侧菜单 begin

	$offices = $db->get_all(PRFIX.'office','order by rank desc,createTime desc','officeId,officeName');
	for($e=0;$e<count($offices);$e++){
		//工作组数量
		$offices[$e]['number'] = $db->Count(PRFIX.'group','where officeId='.$offices[$e]['officeId'].'');
		//工作组数据
		$groups = $db->get_all(PRFIX.'group','where officeId='.$offices[$e]['officeId'].'','groupId,groupName');
		for($g=0;$g<count($groups);$g++){
			//员工数量
			$groups[$g]['number'] = $db->Count(PRFIX.'staff','where groupId='.$groups[$g]['groupId'].'');
		}
		$offices[$e]['groups'] = $groups;
	}

	//左侧菜单 over

	//检索
	$s_name = getVal('s_name',2,'');
	if($s_name!=''){
		$where .= ' and staffName like "%'.$s_name.'%"';
		$track .= '&s_name='.$s_name.'';
	}
	$where = 'where status<>2 and groupId='.$groupId.''.$where;

	//页面分页配置
	$total = $db->Count($table,$where);
	$length = 5;
	$page = new page_link();
	$page->page_linkTo($total,$length,'page');
	if(empty($curPage)){$curPage = 1;}
	$sn = $curPage * $length - $length;	//序号

	//拉取员工数据
	$field = 'staffName,companyId,postId,phone,extensionNumber,tel,email,status';
	$data = $db->get_some(PRFIX.'staff',$page->firstcount,$length,'order by createTime desc',$where,$field);
	foreach ($data as $key => $value) {
		//隶属公司 begin
		if($data[$key]['companyId'] == 0){
			$data[$key]['company'] = '待指定';
		}else{
			$c = $db->get_one(PRFIX.'company','where companyId='.$data[$key]['companyId'].'','cnName');
			$data[$key]['company'] = $c['cnName'];
		}
		//隶属公司 over
		//职务
		$P = $db->get_one(PRFIX.'post','where postId='.$data[$key]['postId'].'','postName');
		$data[$key]['post'] = $P['postName'];
		//状态 begin
		$status = static_staffStatus($data[$key]['status']);
		if($data[$key]['status'] == 0||$data[$key]['status'] == 1){
			//查询请假状态 begin
			$leaveWhere = 'where leaveId in(select leaveApplyId from '.PRFIX.'leaveapply_time where beginDate<="'.date().'" and overDate>="'.date().'") and checkStatus=2 limit 1';
			$leave = $db->get_one(PRFIX.'leaveapply',$leaveWhere,'typeId,receiverUsr');
			if($leave){
				$tips = '';
				//假期类型
				$T = $db->get_one(PRFIX.'leavetype','where leaveTypeId='.$leave['typeId'].'','typeName');
				$tips .= '<span class="compassionateLeave center-block">'.$T['typeName'].'</span>';
				//请假时间
				$time = $db->get_one(PRFIX.'leaveapply_time','where leaveApplyId='.$leave['typeId'].'','min(CONCAT(beginDate," ",beginTime)) as beginDateTime,max(CONCAT(overDate," ",overTime)) as overDateTime');
				if($time){
					$tips .= '（<span class="compassionateLeaveTime">'.$time['beginDateTime'].'至'.$time['overDateTime'].'</span>';
				}

				//工作接管人
				$S = $db->get_one(PRFIX.'staff','where staffId='.$leave['receiverUsr'].'','staffName');
				$tips .= '<span class="compassionateLeaveSup">工作接管人：'.$S['staffName'].'</span>';
				$status = $tips;
			}else{
				if($data[$key]['status'] == 1){
					$status = '<span class="normal center-block">正常</span>';
				}
				if($data[$key]['status'] == 0){
					$status = '<span class="quit center-block">试用</span>';
				}
			}
			//查询请假状态 over
		}
		//座机
		$data[$key]['phone'] = $data[$key]['phone'].'-'.$data[$key]['extensionNumber'];
		//状态 over
		$data[$key]['status'] = $status;
	}

	if(count($data) == 0){
		//暂无员工
		$TIP = 1;
	}

	if($groupId == 0){
		//请选择工作组
		$TIP = 2;
	}
	
	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('offices',$offices);
	$smarty->assign('groupId',$groupId);
	$smarty->assign('officeId',$officeId);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('data',$data);
	$smarty->assign('TIP',$TIP);
	$smarty->assign('page',$page->show_link(1));
	$smarty->assign('curPage',$curPage);

?>