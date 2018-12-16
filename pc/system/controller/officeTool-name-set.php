<?php

	//# Mr.Z
	//# 2018-10-28
	//# 备品名称添加/编辑

	//当前页面公共配置
	$pageTitle = '备品名称设置';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'officetool_name';
	$where = '';

	//备品分类信息
	$categorys = $db->get_all(PRFIX.'officetool_category','order by rank desc,createTime desc','categoryId,categoryCode,categoryName');

	//获取值
	$category = getVal('category',1,'');
	$toolName = getVal('toolName',2,'');
	$toolCode = getVal('toolCode',2,'');
	$createNumber = getVal('createNumber',1,'');
	$rank = getVal('rank',1,'');

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($category == 0){
			$data['status'] = 'fail';
			$data['message'] = '请选择备品类别';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($toolName == ''){
			$data['status'] = 'fail';
			$data['message'] = '请设置备品名称';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($toolName)>50){
			$data['status'] = 'fail';
			$data['message'] = '备品名称长度不能超过50个字符';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if($toolCode == ''){
			$data['status'] = 'fail';
			$data['message'] = '请设置备品编号';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		if(stringLen($toolCode)>50){
			$data['status'] = 'fail';
			$data['message'] = '备品编号长度不能超过50个字符';
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
		$validate = $db->get_one($table,'where categoryId='.$category.' and toolName="'.$toolName.'"','nameId');
		if($validate){
			$data['status'] = 'fail';
			$data['message'] = '备品名称已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		$validate = $db->get_one($table,'where categoryId='.$category.' and toolCode="'.$toolCode.'"','categoryId');
		if($validate){
			$data['status'] = 'fail';
			$data['message'] = '备品编号已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		$val['categoryId'] = $category;
		$val['toolName'] = $toolName;
		$val['toolCode'] = $toolCode;
		$val['isFixedAssets'] = $createNumber;
		$val['rank'] = $rank;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'system.php?_f=officeTool-name';
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

		$nameId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_name = getVal('s_name',2,'');
		$s_category = getVal('s_category',1,'');

		$data = $db->get_one($table,'where nameId='.$nameId.'','categoryId,toolName,toolCode,isFixedAssets,rank');
		if($data){
			$rank = $data['rank'];
		}

	}

	//编辑保存
	if($act == 'editSave'){

		$nameId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_name = getVal('s_name',2,'');
		$s_category = getVal('s_category',1,'');

		//验证名称与编号是否已存在
		$validate = $db->get_one($table,'where categoryId='.$category.' and toolName="'.$toolName.'" and nameId<>'.$categoryId.'','nameId');
		if($validate){
			$data['status'] = 'fail';
			$data['message'] = '备品名称已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}
		$validate = $db->get_one($table,'where categoryId='.$category.' and toolCode="'.$toolCode.'" and nameId<>'.$categoryId.'','nameId');
		if($validate){
			$data['status'] = 'fail';
			$data['message'] = '备品编号已存在，请重新填写';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		$val['categoryId'] = $category;
		$val['toolCode'] = $toolCode;
		$val['toolName'] = $toolName;
		$val['isFixedAssets'] = $createNumber;
		$val['rank'] = $rank;
		$val['updateTime'] = date('Y-m-d H:i:s');

		$result = $db->update($table,$val,'where nameId='.$nameId.'');
		if($result){
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'system.php?_f=officeTool-name&page='.$page.'&s_name='.$s_name.'&s_category='.$s_category.'';
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('categorys',$categorys);
	$smarty->assign('i',$data);
	$smarty->assign('id',$nameId);
	$smarty->assign('page',$page);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('s_category',$s_category);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);

	
?>