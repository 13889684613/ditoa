<?php

	//# Mr.Z
	//# 2018-10-25
	//# 职务添加/编辑

	//当前页面公共配置
	$pageTitle = '职务设置';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'post';
	$where = '';

	//获取值
	$postName = getVal('postName',2,'');
	$rank = getVal('rank',1,'');

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($postName == ''){
			ErrorResturn('请设置职务名称');
		}
		if(stringLen($postName)>50){
			ErrorResturn('职务名称长度不能超过50个字符');
		}
	}

	//创建初始化数据
	if($act == 'add'){
		$action = 'addSave';
	}

	//创建保存
	if($act == 'addSave'){

		//验证名称是否已存在
		$validate = $db->get_one($table,'where postName="'.$roleName.'"','postId');
		if($validate){
			ErrorResturn('职务名称已存在，请重新填写');
		}

		$val['postName'] = $postName;
		$val['rank'] = $rank;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){
			TipsRefreshResturn('操作成功','system.php?_f=post');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//编辑初始化数据
	if($act == 'edit'){

		$action = 'editSave';

		$postId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_postName = getVal('s_postName',2,'');

		$data = $db->get_one($table,'where postId='.$postId.'','postName,rank');
		if($data){
			$rank = $data['rank'];
		}

	}

	//编辑保存
	if($act == 'editSave'){

		$postId = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_postName = getVal('s_postName',2,'');

		//验证名称是否已存在
		$validate = $db->get_one($table,'where postName="'.$postName.'" and postId<>'.$postId.'','postId');
		if($validate){
			ErrorResturn('职务名称已存在，请重新填写');
		}

		$val['postName'] = $postName;
		$val['rank'] = $rank;
		$val['updateTime'] = date('Y-m-d H:i:s');

		$result = $db->update($table,$val,'where postId='.$postId.'');
		if($result){
			TipsRefreshResturn('操作成功','system.php?_f=post&page='.$page.'&s_postName='.$s_postName.'');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('i',$data);
	$smarty->assign('id',$postId);
	$smarty->assign('page',$page);
	$smarty->assign('s_postName',$s_postName);
	$smarty->assign('action',$action);
	$smarty->assign('rank',$rank);

	
?>