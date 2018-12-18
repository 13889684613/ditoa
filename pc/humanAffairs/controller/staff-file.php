<?php

	//# Mr.Z
	//# 2018-11-10
	//# 资料上传

	//当前页面公共配置
	$pageTitle = '资料上传';
	$act = $_REQUEST['act'];
	$page = $_REQUEST['page'];
	$table = PRFIX.'staff_attach';	
	$where = '';

	//员工id
	$id = getVal('id',1,'');
	if($id == 0){
		exit;
	}

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
	$otherId = getVal('otherId',2,'');
	$otherName = getVal('otherName',2,'');
	//获取值 over

	//验证
	$isSet = 0;

	//身份证证文件
	$idFile = '';
	$if = $db->get_one($table,'where staffId='.$id.' and category=1','attachFile');
	if($if){
		$idFile = $if['attachFile'];
		$isSet = 1;
	}
	
	//学历证书
	$eduFile = '';
	$ef = $db->get_one($table,'where staffId='.$id.' and category=2','attachFile');
	if($ef){
		$eduFile = $ef['attachFile'];
	}
	
	//户口本
	$registerFile = '';
	$rf = $db->get_one($table,'where staffId='.$id.' and category=3','attachFile');
	if($rf){
		$registerFile = $rf['attachFile'];
	}

	//体检报告
	$reportFile = '';
	$ref = $db->get_one($table,'where staffId='.$id.' and category=4','attachFile');
	if($ref){
		$reportFile = $ref['attachFile'];
	}
	
	//其它文件
	$others = $db->get_all($table,'where staffId='.$id.' and category=5','attachId,attachName,attachFile');
	
	//创建保存
	if($act == 'editSave'){

		if($isSet == 1){
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

		$formname = 'staffFile';
		$picname = rand(0,10000).time();
		$picpath = 'upload/file/staff/'.date('Ymd').'/';
		$sizelimit = 20480000;
		$uploadnum = 20;
		$typelimit = array('application/pdf');
		$picArr = picUpload($formname,$picname,$picpath,$sizelimit,$typelimit,$uploadnum);
		if(count($picArr)>0){

			$otherCursor = 0;

			foreach($picArr as $key => $value){

				$val = array();

				if($value!='NO'){

					if($key == '0'){
						$id_file = date('Ymd').'/'.$value;
					}elseif($key == '1'){
						$edu_file = date('Ymd').'/'.$value;
					}elseif($key == '2'){
						$register_file = date('Ymd').'/'.$value;
					}elseif($key == '3'){
						$report_file = date('Ymd').'/'.$value;
					}elseif($key > 3){
						$other_file[$otherCursor]['attachFile'] = date('Ymd').'/'.$value;
					}

				}

				if($key == 0 && $idFile == '' && $id_file == ''){
					$data['status'] = 'fail';
					$data['message'] = '请上传身份证正反面文件';
					$returnJson = json_encode($data);
					echo $returnJson; exit;
				}

				if($key == 1 && $eduFile == '' && $edu_file == ''){
					$data['status'] = 'fail';
					$data['message'] = '请上传学历证书文件';
					$returnJson = json_encode($data);
					echo $returnJson; exit;
				}

				if($key == 2 && $registerFile == '' && $register_file == ''){
					$data['status'] = 'fail';
					$data['message'] = '请上传户口本文件';
					$returnJson = json_encode($data);
					echo $returnJson; exit;
				}

				if($key == 3 && $reportFile == '' && $report_file == ''){
					$data['status'] = 'fail';
					$data['message'] = '请上传体检报告';
					$returnJson = json_encode($data);
					echo $returnJson; exit;
				}

				if($key > 3){
					$other_file[$otherCursor]['attachId'] = $otherId[$otherCursor];
					$other_file[$otherCursor]['attachName'] = $otherName[$otherCursor];
					if($value == 'NO'){
						$other_file[$otherCursor]['attachFile'] = '';
					}
					++ $otherCursor;
				}

			}

			//更新资料文件数据 begin
			// -- 身份证
			if($id_file!=''){

				$idArr['staffId'] = $id;
				$idArr['category'] = 1;
				$idArr['attachFile'] = $id_file;
				$idArr['updateTime'] = date('Y-m-d H:i:s');

				if($idFile!=''){
					unlink('upload/file/staff/'.$idFile);
					$db->update($table,$idArr,'where staffId='.$id.' and category=1');
				}else{
					$db->insert($table,$idArr);
				}

			}
			// -- 学历证
			if($edu_file!=''){

				$eduArr['staffId'] = $id;
				$eduArr['category'] = 2;
				$eduArr['attachFile'] = $edu_file;
				$eduArr['updateTime'] = date('Y-m-d H:i:s');

				if($eduFile!=''){
					unlink('upload/file/staff/'.$eduFile);
					$db->update($table,$eduArr,'where staffId='.$id.' and category=2');
				}else{
					$db->insert($table,$eduArr);
				}

			}
			// -- 户口本
			if($register_file!=''){

				$registerArr['staffId'] = $id;
				$registerArr['category'] = 3;
				$registerArr['attachFile'] = $register_file;
				$registerArr['updateTime'] = date('Y-m-d H:i:s');

				if($registerFile!=''){
					unlink('upload/file/staff/'.$registerFile);
					$db->update($table,$registerArr,'where staffId='.$id.' and category=3');
				}else{
					$db->insert($table,$registerArr);
				}

			}
			// -- 体验报告
			if($report_file!=''){

				$reportArr['staffId'] = $id;
				$reportArr['category'] = 4;
				$reportArr['attachFile'] = $report_file;
				$reportArr['updateTime'] = date('Y-m-d H:i:s');

				if($reportFile!=''){
					unlink('upload/file/staff/'.$reportFile);
					$db->update($table,$reportArr,'where staffId='.$id.' and category=4');
				}else{
					$db->insert($table,$reportArr);
				}

			}
			// -- 其它文件
			if(count($other_file)>0){

				//清除历史无用数据
				$delId = implode(',',$otherId);
				$db->delete($table,'where staffId='.$id.' and category=5 and attachId not in('.$delId.')');

				for($e=0;$e<count($other_file);$e++){

					$val = array();

					if($other_file[$e]['attachName']!=''){

						$val['staffId'] = $id;
						$val['category'] = 5;
						$val['updateTime'] = date('Y-m-d H:i:s');
						$val['attachName'] = $other_file[$e]['attachName'];
						if($other_file[$e]['attachFile']!=''){
							$val['attachFile'] = $other_file[$e]['attachFile'];
						}

						if($other_file[$e]['attachId'] == 0){
							$db->insert($table,$val);
						}else{
							$db->update($table,$val,'where attachId='.$other_file[$e]['attachId'].'');
						}

					}

				}

			}

			//更新资料文件数据 over

			//记录修改内容 
			// $_COOKIE['usrId'] = 1;	//测试

			$record['staffId'] = $id;
			$record['editUsr'] = $common_staffId;
			$record['logContent'] = $updateRemark;
			$record['logTime'] = date('Y-m-d H:i:s');

			$db->insert(PRFIX.'staff_editlog',$record);

			$url = 'human-affairs.php?_f=staff-file&page='.$page.'&id='.$id.'&s_company='.$s_company.'&s_office='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'';
			$url .= '&s_status='.$s_status.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'&s_name='.$s_name.'&s_idno='.$s_idno.'';

			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = $url;
			$returnJson = json_encode($data);
			echo $returnJson; exit;	

		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('idFile',$idFile);
	$smarty->assign('eduFile',$eduFile);
	$smarty->assign('registerFile',$registerFile);
	$smarty->assign('reportFile',$reportFile);
	$smarty->assign('others',$others);
	$smarty->assign('s_company',$s_company);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_role',$s_role);
	$smarty->assign('s_post',$s_post);
	$smarty->assign('s_status',$s_status);
	$smarty->assign('s_begintime',$s_begintime);
	$smarty->assign('s_overtime',$s_overtime);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('s_idno',$s_idno);
	$smarty->assign('i',$data);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('isSet',$isSet);
	$smarty->assign('track',$track);

?>