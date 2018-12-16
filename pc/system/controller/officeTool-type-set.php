<?php

	//# Mr.Z
	//# 2018-10-25
	//# 备品类型添加/编辑

	//当前页面公共配置
	$pageTitle = '备品类别设置';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'officetool_category';
	$where = '';

	//获取值
	$categoryName = getVal('categoryName',2,'');
	$categoryCode = getVal('categoryCode',2,'');
	$rank = getVal('rank',1,'');

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($categoryName == ''){
			$data['status'] = 'fail';
			$data['message'] = '请设置备品类型名称';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($categoryName)>50){
			$data['status'] = 'fail';
			$data['message'] = '备品类型名称长度不能超过50个字符';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($categoryCode == ''){
			$data['status'] = 'fail';
			$data['message'] = '请设置备品类型编号';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($categoryCode)>50){
			$data['status'] = 'fail';
			$data['message'] = '备品类型编号长度不能超过50个字符';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
	}

	//创建初始化数据
	if($act == 'add'){
		$action = 'addSave';
	}

	//创建保存
	if($act == 'addSave'){

		//验证名称与编号是否已存在
		$validate = $db->get_one($table,'where categoryName="'.$categoryName.'"','categoryId');
		if($validate){
			$data['status'] = 'fail';
			$data['message'] = '备品类型名称已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		$validate = $db->get_one($table,'where categoryCode="'.$categoryCode.'"','categoryId');
		if($validate){
			$data['status'] = 'fail';
			$data['message'] = '备品类型编号已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		$val['categoryCode'] = $categoryCode;
		$val['categoryName'] = $categoryName;
		$val['rank'] = $rank;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'system.php?_f=officeTool-type';
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

		$categoryId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_name = getVal('s_name',2,'');
		$s_code = getVal('s_code',2,'');

		$data = $db->get_one($table,'where categoryId='.$categoryId.'','categoryCode,categoryName,rank');
		if($data){
			$rank = $data['rank'];
		}

	}

	//编辑保存
	if($act == 'editSave'){

		$categoryId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_name = getVal('s_name',2,'');
		$s_code = getVal('s_code',2,'');

		//验证名称与编号是否已存在
		$validate = $db->get_one($table,'where categoryName="'.$categoryName.'" and categoryId<>'.$categoryId.'','categoryId');
		if($validate){
			$data['status'] = 'fail';
			$data['message'] = '备品类型名称已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		$validate = $db->get_one($table,'where categoryCode="'.$categoryCode.'" and categoryId<>'.$categoryId.'','categoryId');
		if($validate){
			$data['status'] = 'fail';
			$data['message'] = '备品类型编号已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		$val['categoryCode'] = $categoryCode;
		$val['categoryName'] = $categoryName;
		$val['rank'] = $rank;
		$val['updateTime'] = date('Y-m-d H:i:s');

		$result = $db->update($table,$val,'where categoryId='.$categoryId.'');
		if($result){
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'system.php?_f=officeTool-type&page='.$page.'&s_name='.$s_name.'&s_code='.$s_code.'';
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
	$smarty->assign('id',$categoryId);
	$smarty->assign('page',$page);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('s_code',$s_code);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);

	
?>