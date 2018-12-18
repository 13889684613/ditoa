<?php

	//# Mr.Z
	//# 2018-11-10
	//# 家庭主要成员

	//当前页面公共配置
	$pageTitle = '家庭主要成员';
	$act = $_REQUEST['act'];
	$page = $_REQUEST['page'];
	$table = PRFIX.'staff_family';	
	$where = '';

	//员工id
	$id = getVal('id',1,'');
	if($id == 0){
		exit;
	}

	//表单元素赋能 begin
	$sexs = static_sex();				//性别 
	//表单元素赋能 over

	//记录列表页检索条件begin
	$s_company = getVal('s_company',1,'');
	$s_office = getVal('s_office',1,'');
	$s_role = getVal('s_role',1,'');
	$s_post = getVal('s_post',1,'');
	$s_status = getVal('s_status',2,'');
	$s_name = getVal('s_name',2,'');
	$s_idno = getVal('s_idno',2,'');
	$s_begintime = getVal('s_begintime',2,'');
	$s_overtime = getVal('s_overtime',2,'');
	$track = '&page='.$page.'&id='.$id.'&s_company='.$s_company.'&s_office='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'&s_status='.$s_status.'';
	$track .= '&s_name='.$s_name.'&s_idno='.$s_idno.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'';
	//记录列表页检索条件over

	//获取值 begin
	$familyId = getVal('familyId',2,'');
	$familyName = getVal('familyName',2,'');
	$sex = getVal('sex',2,'');
	$birthDate = getVal('birthDate',2,'');
	$relation = getVal('relation',2,'');
	$telphone = getVal('telphone',2,'');
	$workUnit = getVal('workUnit',2,'');
	//获取值 over

	//验证
	if($act == 'editSave'){
		if(count(array_filter($familyName))==0||count(array_filter($sex))==0||count(array_filter($birthDate))==0||count(array_filter($relation))==0||count(array_filter($telphone))==0||count(array_filter($workUnit))==0){
			$data['status'] = 'fail';
			$data['message'] = '请完善家庭成员信息';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
	}

	$fileds = 'familyId,familyName,sex,birthDate,relation,telphone,workUnit';
	$data = $db->get_all($table,'where staffId='.$id.'',$fileds);
	$dataCount = count($data);

	//创建保存
	if($act == 'editSave'){

		if($dataCount>0){
			$updateRemark = getVal('updateRemark',2,'');
			if($updateRemark == ''){
				$data['status'] = 'fail';
				$data['message'] = '修改员工资料需标明修改内容';
				$returnJson = json_encode($data);
				echo $returnJson; exit;	
			}
			if(stringLen($updateRemark)>100){
				$data['status'] = 'fail';
				$data['message'] = '修改备注内容长度不能超过100个字';
				$returnJson = json_encode($data);
				echo $returnJson; exit;	
			}
		}

		//清除历史无用数据
		$delId = implode(',',$familyId);
		$db->delete($table,'where staffId='.$id.' and familyId not in('.$delId.')');

		for($e=0;$e<count($familyName);$e++){

			$val = array();

			if($familyName[$e]!=''){

				$val['staffId'] = $id;
				$val['familyName'] = $familyName[$e];
				$val['sex'] = $sex[$e];
				if($birthDate[$e]!=''){
					$val['birthDate'] = $birthDate[$e];
				}
				$val['relation'] = $relation[$e];
				$val['telphone'] = $telphone[$e];
				$val['workUnit'] = $workUnit[$e];
				$val['createTime'] = date('Y-m-d H:i:s');

				if($familyId[$e] == 0){
					$result = $db->insert($table,$val);
				}else{
					$result = $db->update($table,$val,'where familyId='.$familyId[$e].'');
				}

				if(!$result){
					$data['status'] = 'fail';
					$data['message'] = ERRORTIPS;
					$returnJson = json_encode($data);
					echo $returnJson; exit;	
				}

			}

		}

		//记录修改内容 
		// $_COOKIE['usrId'] = 1;	//测试

		$record['staffId'] = $id;
		$record['editUsr'] = $common_staffId;
		$record['logContent'] = $updateRemark;
		$record['logTime'] = date('Y-m-d H:i:s');

		$db->insert(PRFIX.'staff_editlog',$record);

		$url = 'human-affairs.php?_f=staff-family&page='.$page.'&id='.$id.'&s_company='.$s_company.'&s_office='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'';
		$url .= '&s_status='.$s_status.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'&s_name='.$s_name.'&s_idno='.$s_idno.'';

		$data['status'] = 'success';
		$data['message'] = '操作成功';
		$data['url'] = $url;
		$returnJson = json_encode($data);
		echo $returnJson; exit;	

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('sexs',$sexs);
	$smarty->assign('s_company',$s_company);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_role',$s_role);
	$smarty->assign('s_post',$s_post);
	$smarty->assign('s_status',$s_status);
	$smarty->assign('s_begintime',$s_begintime);
	$smarty->assign('s_overtime',$s_overtime);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('s_idno',$s_idno);
	$smarty->assign('data',$data);
	$smarty->assign('dataCount',$dataCount);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('track',$track);

?>