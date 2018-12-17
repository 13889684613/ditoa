<?php

	//# Mr.Z
	//# 2018-11-04
	//# 部门信息设置

	//当前页面公共配置
	$pageTitle = '部门信息设置';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'office';
	$where = '';
	$rank = 0;

	//获取值
	$officeName = getVal('officeName',2,'');
	$phone = getVal('phone',2,'');
	$officeCode = getVal('officeCode',2,'');
	$fax = getVal('fax',2,'');
	$address = getVal('address',2,'');
	$function = getVal('function',2,'');
	$rank = getVal('rank',1,'');

	$week = getVal('week',2,'');
	$workBeginTime = getVal('workBeginTime',2,'');
	$workOverTime = getVal('workOverTime',2,'');
	$workCoordinate = getVal('workCoordinate',2,'');
	$workRange = getVal('workRange',1,'');
	$workAddress = getVal('workAddress',2,'');

	$title = getVal('title',2,'');
	$content = getVal('content',2,'');

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($officeName == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写部门名称';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($officeName)>50){
			$data['status'] = 'fail';
			$data['message'] = '部门名称长度不能超过50个字符';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($officeCode == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写部门编号';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($officeCode)>50){
			$data['status'] = 'fail';
			$data['message'] = '部门编长度不能超过50个字符';
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
		if($fax == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写传真';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($fax)>50){
			$data['status'] = 'fail';
			$data['message'] = '传真长度不能超过50个字符';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($address == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写办公地址';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($address)>60){
			$data['status'] = 'fail';
			$data['message'] = '办公地址长度不能超过60个字符';
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
		if($workRange == 0){
			$data['status'] = 'fail';
			$data['message'] = '请选择打卡有效范围';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($workAddress == ''){
			$data['status'] = 'fail';
			$data['message'] = '请选择打卡地址';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
	}

	//创建初始化数据
	if($act == 'add'){
		$action = 'addSave';
		$workBeginTime = '08:00';
		$workOverTime = '17:00';
	}

	//创建保存
	if($act == 'addSave'){

		//验证部门是否已存在
		$validate = $db->get_one($table,'where officeCode="'.$officeCode.'" or officeName="'.$cnName.'"','officeId');
		if($validate){
			$data['status'] = 'fail';
			$data['message'] = '办事处已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}

		$val['officeName'] = $officeName;
		$val['officeCode'] = $officeCode;
		$val['phone'] = $phone;
		$val['fax'] = $fax;
		$val['address'] = $address;
		$val['function'] = $function;
		$val['workWeek'] = $week;
		$val['workBeginTime'] = $workBeginTime;
		$val['workOverTime'] = $workOverTime;
		$val['workCoordinate'] = $workCoordinate;
		$val['workRange'] = $workRange;
		$val['workAddress'] = $workAddress;
		$val['rank'] = $rank;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){

			$officeId = $db->get_lastId();

			$count = count(array_filter($title));
			for($e=0;$e<$count;$e++){
				$other = array();
				$other['officeId'] = $officeId;
				$other['otherName'] = $title[$e];
				$other['otherContent'] = $content[$e];
				$other['createTime'] = date('Y-m-d H:i:s');

				$db->insert(PRFIX.'office_other',$other);
			}
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'org.php?_f=office';
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
		$s_name = getVal('s_name',2,'');

		$data = $db->get_one($table,'where officeId='.$id.'');
		if($data){
			$data['workWeek'] = explode(',',$data['workWeek']);
			$rank = $data['rank'];
			$workBeginTime = $data['workBeginTime'];
			$workOverTime = $data['workOverTime'];
		}

		$others = $db->get_all(PRFIX.'office_other','where officeId='.$id.' order by otherId asc','otherName,otherContent');

	}

	//编辑保存
	if($act == 'editSave'){

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_name = getVal('s_name',2,'');

		//验证名称是否已存在
		$validate = $db->get_one($table,'where (officeCode="'.$officeCode.'" or officeName="'.$officeName.'") and officeId<>'.$id.'','officeId');
		if($validate){
			$data['status'] = 'fail';
			$data['message'] = '办事处已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}

		$val['officeName'] = $officeName;
		$val['officeCode'] = $officeCode;
		$val['phone'] = $phone;
		$val['fax'] = $fax;
		$val['address'] = $address;
		$val['function'] = $function;
		$val['workWeek'] = $week;
		$val['workBeginTime'] = $workBeginTime;
		$val['workOverTime'] = $workOverTime;
		$val['workCoordinate'] = $workCoordinate;
		$val['workRange'] = $workRange;
		$val['workAddress'] = $workAddress;
		$val['rank'] = $rank;
		$val['updateTime'] = date('Y-m-d H:i:s');

		$result = $db->update($table,$val,'where officeId='.$id.'');
		if($result){

			$count = count(array_filter($title));

			//重建其它信息
			$db->delete(PRFIX.'office_other','where officeId='.$id.'');
			for($e=0;$e<$count;$e++){
				$other = array();
				$other['officeId'] = $id;
				$other['otherName'] = $title[$e];
				$other['otherContent'] = $content[$e];
				$other['createTime'] = date('Y-m-d H:i:s');

				$db->insert(PRFIX.'office_other',$other);
			}
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'org.php?_f=office&page='.$page.'&s_name='.$s_name.'';
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;	

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('i',$data);
	$smarty->assign('others',$others);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);
	$smarty->assign('workBeginTime',$workBeginTime);
	$smarty->assign('workOverTime',$workOverTime);

	
?>