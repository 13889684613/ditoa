<?php

	//# Mr.Z
	//# 2018-12-2
	//# 企业资质证件设置

	//权限验证
	if($menuGeneralAffairs[2] == 0){
		RefreshResturn('index.php?_f=login');
	}

	//当前页面公共配置
	$pageTitle = '企业资质证件设置';
	$act = $_REQUEST['act'];
	$table = PRFIX.'certificate';	
	$where = '';

	//所属企业
	$companys = $db->get_all(PRFIX.'company','order by rank desc,createTime desc','companyId,cnName');

	//记录列表页检索条件begin
	$s_company = getVal('s_company',2,'');
	$s_name = getVal('s_name',2,'');
	//记录列表页检s索条件over

	//获取值 begin
	$company = getVal('company',1,'');
	$cerName = getVal('cerName',2,'');
	$overDate = getVal('overDate',2,'');
	$remark = getVal('remark',2,'');
	$rank = getVal('rank',1,'');
	//获取值 over

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($company == 0){
			$data['status'] = 'fail';
			$data['message'] = '请选择所属企业';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($cerName == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写证件名称';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($cerName)>50){
			$data['status'] = 'fail';
			$data['message'] = '证件名称长度需在50字以内';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($overDate == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写证件到期日';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(!isdate($overDate)){
			$data['status'] = 'fail';
			$data['message'] = '请填写正确的证件到期日';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
	}

	//创建初始化数据
	if($act == 'add'){
		$rank = 0;
		$action = 'addSave';
	}

	//创建保存
	if($act == 'addSave'){

		$formname = 'photo';
		$picname = rand(0,10000).time();
		$picpath = 'upload/file/cer/'.date('Ymd').'/';
		$sizelimit = 10240000;
		$uploadnum = 1;
		$typelimit = array('application/pdf');
		$picArr = picUpload($formname,$picname,$picpath,$sizelimit,$typelimit,$uploadnum);

		if(count($picArr)>0){

			foreach($picArr as $key => $value){

				if($value!="NO"){

					switch ($key) {
						case "0":
							$cerImg = date('Ymd').'/'.$value;
							break;
						default:
							$cerImg = ''; 
							break;
					}

				}
			}

		}

		if($cerImg == ''){
			$data['status'] = 'fail';
			$data['message'] = '请上传证件文件！';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		$val['companyId'] = $company;
		$val['cerName'] = $cerName;
		$val['cerImg'] = $cerImg;
		$val['overDate'] = $overDate;
		$val['remark'] = $remark;
		$val['rank'] = $rank;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'general-affairs.php?_f=certificate';
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

		$fileds = 'companyId,cerName,cerImg,overDate,remark,rank';
		$data = $db->get_one($table,'where cerId='.$id.'',$fileds);
		if($data){
			$rank = $data['rank'];
		}

	}

	//编辑保存
	if($act == 'editSave'){

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');
		$old = getVal('old',2,'');

		$formname = 'photo';
		$picname = rand(0,10000).time();
		$picpath = 'upload/file/cer/'.date('Ymd').'/';
		$sizelimit = 10240000;
		$uploadnum = 1;
		$typelimit = array('application/pdf');
		$picArr = picUpload($formname,$picname,$picpath,$sizelimit,$typelimit,$uploadnum);

		if(count($picArr)>0){

			foreach($picArr as $key => $value){

				if($value!="NO"){

					switch ($key) {
						case "0":
							$attach = date('Ymd').'/'.$value;
							break;
						default:
							$attach = ''; 
							break;
					}

				}
			}

			if($old!=''&&$attach!=''){
				unlink($old);
				$val['cerImg'] = $attach;
			}

		}
		$val['companyId'] = $company;
		$val['cerName'] = $cerName;
		$val['overDate'] = $overDate;
		$val['remark'] = $remark;
		$val['rank'] = $rank;
		$val['updateTime'] = date('Y-m-d H:i:s');

		$result = $db->update($table,$val,'where cerId='.$id.'');
		if($result){
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'general-affairs.php?_f=certificate&page='.$page.'&s_company='.$s_company.'&s_name='.$s_name.'';
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('company',$companys);
	$smarty->assign('s_company',$s_company);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('i',$data);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);

?>