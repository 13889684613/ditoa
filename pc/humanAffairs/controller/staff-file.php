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
	//记录列表页检索条件over

	//获取值 begin
	$otherName = getVal('otherName',2,'');
	$staffFile = $_FILES['staffFile'];
	//获取值 over

	//验证
	if($act == 'editSave'){
		if($insuranceOverDate!=''){
			if(!isdate($insuranceOverDate)){
				ErrorResturn('请填写正确的保险缴纳日期');
			}
		}
		if($fundOverDate!=''){
			if(!isdate($fundOverDate)){
				ErrorResturn('请填写正确的公积金缴纳日期');
			}
		}
	}

	//身份证证文件
	$idFile = '';
	$if = $db->get_one($table,'where staffId='.$id.' and category=1','attachFile');
	if($if){
		$idFile = $if['attachFile'];
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
	$others = $db->get_all($table,'where staffId='.$id.' and category=5','attachName,attachFile');
	
	//创建保存
	if($act == 'editSave'){

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

					$val['staffId'] = $id;
					$val['attachFile'] = date('Ymd').'/'.$value;
					$val['updateTime'] = date('Y-m-d H:i:s');

					if($key == '0'){
						$val['category'] = 1;
					}elseif($key == '1'){
						$val['category'] = 2;
					}elseif($key == '2'){
						$val['category'] = 3;
					}elseif($key == '3'){
						$val['category'] = 4;
					}elseif($key > 3){
						$val['category'] = 5;
						$val['attachName'] = $otherName[$otherCursor];
					}

					//清除物理文件
					$where = 'where staffId='.$id.' and category='.$val['category'].'';
					if($val['category'] == 5){
						$where .= ' and attachName="'.$val['attachName'].'"';
					}
					$A = $db->get_one($table,$where,'attachFile');
					if($A){
						$historyFile = 'upload/file/staff/'.$A['attachFile'];
						unlink($historyFile);
					}
					
					//清除DB记录
					$db->delete($table,$where);

					//新增文件
					$db->insert($table,$val);

				}

				if($key > 3){
					++ $otherCursor;
				}
				
			}

			$url = 'human-affairs.php?_f=staff-file&page='.$page.'&id='.$id.'&s_company='.$s_company.'&='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'';
			$url .= '&s_status='.$s_status.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'&s_name='.$s_name.'&s_idno='.$s_idno.'';

			TipsRefreshResturn('操作成功',$url);

		}else{
			ErrorResturn('请上传资料文件');
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
	$smarty->assign('action',$action);

?>