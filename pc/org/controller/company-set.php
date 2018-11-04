<?php

	//# Mr.Z
	//# 2018-11-04
	//# 企业信息设置

	//当前页面公共配置
	$pageTitle = '企业信息设置';
	$curPage = $_REQUEST['page'];
	$act = $_REQUEST['act'];
	$table = PRFIX.'company';
	$where = '';

	//获取值
	$cnName = getVal('cnName',2,'');
	$enName = getVal('enName',2,'');
	$cnAddress = getVal('cnAddress',2,'');
	$enAddress = getVal('enAddress',2,'');
	$cnOfficeAddress = getVal('cnOfficeAddress',2,'');
	$enOfficeAddress = getVal('enOfficeAddress',2,'');
	$zipCode = getVal('zipCode',2,'');
	$phone = getVal('phone',2,'');
	$fax = getVal('fax',2,'');

	$cnBank = getVal('cnBank',2,'');
	$enBank = getVal('enBank',2,'');
	$cnBankAddress = getVal('cnBankAddress',2,'');
	$enBankAddress = getVal('enBankAddress',2,'');
	$bankAccount = getVal('bankAccount',2,'');

	$yenBank = getVal('yenBank',2,'');
	$yenEnBank = getVal('yenEnBank',2,'');
	$yenBankAddress = getVal('yenBankAddress',2,'');
	$yenEnBankAddress = getVal('yenEnBankAddress',2,'');
	$yenBankAccount = getVal('yenBankAccount',2,'');
	$yenSwiftNo = getVal('yenSwiftNo',2,'');

	$dollarBank = getVal('dollarBank',2,'');
	$dollarEnBank = getVal('dollarEnBank',2,'');
	$dollarBankAddress = getVal('dollarBankAddress',2,'');
	$dollarEnBankAddress = getVal('dollarEnBankAddress',2,'');
	$dollarBankAccount = getVal('dollarBankAccount',2,'');
	$dollarSwiftNo = getVal('dollarSwiftNo',2,'');

	$createDate = getVal('createDate',2,'');
	$business = getVal('business',2,'');

	$title = getVal('title',2,'');
	$content = getVal('content',2,'');

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($cnName == ''){
			ErrorResturn('请填写企业中文名称');
		}
		if(stringLen($cnName)>60){
			ErrorResturn('企业中文名称长度不能超过60个字符');
		}
		if($enName == ''){
			ErrorResturn('请填写企业英文名称');
		}
		if(stringLen($enName)>100){
			ErrorResturn('企业英文名称长度不能超过100个字符');
		}
		if($cnAddress == ''){
			ErrorResturn('请填写企业注册地址');
		}
		if(stringLen($cnAddress)>60){
			ErrorResturn('企业注册地址长度不能超过60个字符');
		}
		if($enAddress == ''){
			ErrorResturn('请填写企业英文注册地址');
		}
		if(stringLen($enAddress)>100){
			ErrorResturn('企业英文注册地址长度不能超过100个字符');
		}
		if($cnOfficeAddress == ''){
			ErrorResturn('请填写办公地址');
		}
		if(stringLen($cnOfficeAddress)>60){
			ErrorResturn('办公地址长度不能超过60个字符');
		}
		if($enOfficeAddress == ''){
			ErrorResturn('请填写英文办公地址');
		}
		if(stringLen($enOfficeAddress)>100){
			ErrorResturn('英文办公地址长度不能超过100个字符');
		}
		if($zipCode == ''){
			ErrorResturn('请填写邮编');
		}
		if(stringLen($zipCode)>50){
			ErrorResturn('邮编长度不能超过50个字符');
		}
		if($phone == ''){
			ErrorResturn('请填写联系电话');
		}
		if(stringLen($phone)>50){
			ErrorResturn('联系电话长度不能超过50个字符');
		}
		if($fax == ''){
			ErrorResturn('请填写传真');
		}
		if(stringLen($fax)>50){
			ErrorResturn('传真长度不能超过50个字符');
		}
		if($cnBank == ''){
			ErrorResturn('请填写企业开户行');
		}
		if(stringLen($cnBank)>50){
			ErrorResturn('企业开户行长度不能超过50个字符');
		}
		if($enBank == ''){
			ErrorResturn('请填写企业开户行英文名称');
		}
		if(stringLen($enBank)>100){
			ErrorResturn('企业开户行英文名称长度不能超过100个字符');
		}
		if($cnBankAddress == ''){
			ErrorResturn('请填写企业开户行地址');
		}
		if(stringLen($cnBankAddress)>60){
			ErrorResturn('企业开户行地址长度不能超过60个字符');
		}
		if($enBankAddress == ''){
			ErrorResturn('请填写企业开户行英文地址');
		}
		if(stringLen($enBankAddress)>100){
			ErrorResturn('企业开户行英文地址长度不能超过100个字符');
		}
		if($bankAccount == ''){
			ErrorResturn('请填写企业开户行银行帐号');
		}
		if(stringLen($bankAccount)>50){
			ErrorResturn('企业开户行银行帐号长度不能超过50个字符');
		}
		if($createDate == ''){
			ErrorResturn('请填写企业成立日期');
		}
		if(!isdate($createDate)){
			ErrorResturn('请填写正确的企业成立日期');
		}
	}

	//创建初始化数据
	if($act == 'add'){
		$action = 'addSave';
	}

	//创建保存
	if($act == 'addSave'){

		//验证企业是否已存在
		$validate = $db->get_one($table,'where cnName="'.$cnName.'" or enName="'.$enName.'"','companyId');
		if($validate){
			ErrorResturn('企业已存在，请重新填写');
		}

		$val['cnName'] = $cnName;
		$val['enName'] = $enName;
		$val['cnAddress'] = $cnAddress;
		$val['enAddress'] = $enAddress;
		$val['cnOfficeAddress'] = $cnOfficeAddress;
		$val['enOfficeAddress'] = $enOfficeAddress;
		$val['phone'] = $phone;
		$val['fax'] = $fax;
		$val['zipCode'] = $zipCode;
		$val['cnBank'] = $cnBank;
		$val['enBank'] = $enBank;
		$val['cnBankAddress'] = $cnBankAddress;
		$val['enBankAddress'] = $enBankAddress;
		$val['bankAccount'] = $bankAccount;
		$val['yenBank'] = $yenBank;
		$val['yenEnBank'] = $yenEnBank;
		$val['yenBankAddress'] = $yenBankAddress;
		$val['yenEnBankAddress'] = $yenEnBankAddress;
		$val['yenBankAccount'] = $yenBankAccount;
		$val['yenSwiftNo'] = $yenSwiftNo;
		$val['dollarBank'] = $dollarBank;
		$val['dollarEnBank'] = $dollarEnBank;
		$val['dollarBankAddress'] = $dollarBankAddress;
		$val['dollarEnBankAddress'] = $dollarEnBankAddress;
		$val['dollarBankAccount'] = $dollarBankAccount;
		$val['dollarSwiftNo'] = $dollarSwiftNo;
		$val['business'] = $business;
		$val['createDate'] = $createDate;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){

			$companyId = $db->get_lastId();

			$count = count(array_filter($title));
			for($e=0;$e<$count;$e++){
				$other = array();
				$other['companyId'] = $companyId;
				$other['otherName'] = $title[$e];
				$other['otherContent'] = $content[$e];
				$other['createTime'] = date('Y-m-d H:i:s');

				$db->insert(PRFIX.'company_other',$other);
			}

			TipsRefreshResturn('操作成功','org.php?_f=company');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//编辑初始化数据
	if($act == 'edit'){

		$action = 'editSave';

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_name = getVal('s_name',2,'');

		$data = $db->get_one($table,'where companyId='.$id.'');
		$others = $db->get_all(PRFIX.'company_other','where companyId='.$id.' order by otherId asc','otherName,otherContent');

	}

	//编辑保存
	if($act == 'editSave'){

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');
		$s_name = getVal('s_name',2,'');

		//验证名称是否已存在
		$validate = $db->get_one($table,'where (cnName="'.$cnName.'" or enName="'.$enName.'") and companyId<>'.$id.'','companyId');
		if($validate){
			ErrorResturn('企业已存在，请重新填写');
		}

		$val['cnName'] = $cnName;
		$val['enName'] = $enName;
		$val['cnAddress'] = $cnAddress;
		$val['enAddress'] = $enAddress;
		$val['cnOfficeAddress'] = $cnOfficeAddress;
		$val['enOfficeAddress'] = $enOfficeAddress;
		$val['phone'] = $phone;
		$val['fax'] = $fax;
		$val['zipCode'] = $zipCode;
		$val['cnBank'] = $cnBank;
		$val['enBank'] = $enBank;
		$val['cnBankAddress'] = $cnBankAddress;
		$val['enBankAddress'] = $enBankAddress;
		$val['bankAccount'] = $bankAccount;
		$val['yenBank'] = $yenBank;
		$val['yenEnBank'] = $yenEnBank;
		$val['yenBankAddress'] = $yenBankAddress;
		$val['yenEnBankAddress'] = $yenEnBankAddress;
		$val['yenBankAccount'] = $yenBankAccount;
		$val['yenSwiftNo'] = $yenSwiftNo;
		$val['dollarBank'] = $dollarBank;
		$val['dollarEnBank'] = $dollarEnBank;
		$val['dollarBankAddress'] = $dollarBankAddress;
		$val['dollarEnBankAddress'] = $dollarEnBankAddress;
		$val['dollarBankAccount'] = $dollarBankAccount;
		$val['dollarSwiftNo'] = $dollarSwiftNo;
		$val['business'] = $business;
		$val['createDate'] = $createDate;
		$val['updateTime'] = date('Y-m-d H:i:s');

		$result = $db->update($table,$val,'where companyId='.$id.'');
		if($result){

			$count = count(array_filter($title));

			//重建其它信息
			$db->delete(PRFIX.'company_other','where companyId='.$id.'');
			for($e=0;$e<$count;$e++){
				$other = array();
				$other['companyId'] = $id;
				$other['otherName'] = $title[$e];
				$other['otherContent'] = $content[$e];
				$other['createTime'] = date('Y-m-d H:i:s');

				$db->insert(PRFIX.'company_other',$other);
			}

			TipsRefreshResturn('操作成功','org.php?_f=company&page='.$page.'&s_name='.$s_name.'');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('i',$data);
	$smarty->assign('others',$others);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('action',$action);

	
?>