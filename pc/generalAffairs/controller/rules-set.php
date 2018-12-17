<?php

	//# Mr.Z
	//# 2018-12-2
	//# 规章制度设置

	//当前页面公共配置
	$pageTitle = '规章制度设置';
	$act = $_REQUEST['act'];
	$table = PRFIX.'rules';	
	$where = '';

	//记录列表页检索条件begin
	$s_name = getVal('s_name',2,'');
	//记录列表页检索条件over

	//获取值 begin
	$title = getVal('title',2,'');
	$rank = getVal('rank',1,'');
	//获取值 over

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($title == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写规章制度名称';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($title)>100){
			$data['status'] = 'fail';
			$data['message'] = '规章制度名称长度需在100字以内';
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

		$formname = 'attach';
		$picname = rand(0,10000).time();
		$picpath = 'upload/file/rule/'.date('Ymd').'/';
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

		}

		if($attach == ''){
			$data['status'] = 'fail';
			$data['message'] = '请上传制度文件！';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		$val['title'] = $title;
		$val['attach'] = $attach;
		$val['rank'] = $rank;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'general-affairs.php?_f=rules';
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

		$fileds = 'title,attach,rank';
		$data = $db->get_one($table,'where rulesId='.$id.'',$fileds);
		if($data){
			$rank = $data['rank'];
		}

	}

	//编辑保存
	if($act == 'editSave'){

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');
		$oldRule = getVal('oldRule',2,'');

		$formname = 'attach';
		$picname = rand(0,10000).time();
		$picpath = 'upload/file/rule/'.date('Ymd').'/';
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

			if($oldRule!=''&&$attach!=''){
				unlink($oldRule);
				$val['attach'] = $attach;
			}

		}
		$val['title'] = $title;
		$val['rank'] = $rank;
		$val['updateTime'] = date('Y-m-d H:i:s');

		$result = $db->update($table,$val,'where rulesId='.$id.'');
		if($result){
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'general-affairs.php?_f=rules&page='.$page.'&s_name='.$s_name.'';
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('i',$data);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);

?>