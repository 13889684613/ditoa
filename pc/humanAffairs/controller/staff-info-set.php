<?php

	//# Mr.Z
	//# 2018-11-09
	//# 员工基本资料设置

	//当前页面公共配置
	$pageTitle = '员工基本资料设置';
	$act = $_REQUEST['act'];
	$table = PRFIX.'staff';	
	$where = '';

	//表单元素赋能 begin

	//所属企业
	$companys = $db->get_all(PRFIX.'company','order by rank desc,createTime desc','companyId,cnName');

	//所属部门
	$offices = $db->get_all(PRFIX.'office','order by rank desc,createTime desc','officeId,officeName');

	//所属工作组
	$groups  = $db->get_all(PRFIX.'group','order by rank desc,createTime desc','groupId,groupName');

	//职务 
	$posts = $db->get_all(PRFIX.'post','order by rank desc,createTime desc','postId,postName');

	$sex = static_sex();				//性别 
	$bloods = static_blood();			//血型
	$politicals = static_political();	//政治面貌
	$maritals = static_marital();		//婚姻状况
	$educations = static_education();	//学历
	$lunarMonths = static_lunarMonth();	//农历月
	$lunarDays = static_lunarDay();		//农历日
	$registers = static_register();		//户籍
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
	//记录列表页检索条件over

	//获取值 begin
	$company = getVal('company',1,'');
	$office = getVal('office',1,'');
	$group = getVal('group',1,'');
	$post = getVal('post',1,'');
	$staffName = getVal('staffName',2,'');
	$staffSex = getVal('sex',1,'');
	$idNumber = getVal('idNumber',2,'');
	$birthDate = getVal('birthDate',2,'');
	$lunarMonth = getVal('lunarMonth',2,'');
	$lunarDay = getVal('lunarDay',2,'');
	$lunarHour = getVal('lunarHour',1,'');
	$lunarMinute = getVal('lunarMinute',1,'');
	$lunarDate = $lunarMonth.','.$lunarDay.','.$lunarHour.','.$lunarMinute;	//农历日期
	$tel = getVal('tel',1,'');
	$phone = getVal('phone',2,'');
	$extensionNumber = getVal('extensionNumber',2,'');
	$email = getVal('email',2,'');
	$address = getVal('address',2,'');
	$school = getVal('school',2,'');
	$education = getVal('education',1,'');
	$major = getVal('major',2,'');
	$registerAddress = getVal('registerAddress',2,'');
	$registerNature = getVal('registerNature',1,'');
	$politicalType = getVal('politicalType',1,'');
	$nation = getVal('nation',2,'');
	$height = getVal('height',1,'');
	$weight = getVal('weight',1,'');
	$blood = getVal('blood',1,'');
	$marital = getVal('marital',1,'');
	$firstWorkDate = getVal('firstWorkDate',2,'');
	$quitDate = getVal('quitDate',2,'');
	$cnBankAccount = getVal('cnBankAccount',2,'');
	$busFee = getVal('busFee',1,'');
	$background = getVal('background',2,'');
	$remark = getVal('remark',2,'');
	$photo = getVal('photo',2,'');
	//获取值 over

	//验证
	if($act == 'addSave'||$act == 'editSave'){
		if($company == 0){
			ErrorResturn('请选择所属企业');
		}
		if($office == 0){
			ErrorResturn('请选择所属部门');
		}
		if($group == 0){
			ErrorResturn('请选择所属工作组');
		}
		if($staffName == ''){
			ErrorResturn('请填写姓名');
		}
		if(stringLen($staffName)>20){
			ErrorResturn('姓名长度需在20字以内');
		}
		if($post == 0){
			ErrorResturn('请选择职务');
		}
		if($staffSex == 0){
			ErrorResturn('请选择性别');
		}
		if($idNumber == ''){
			ErrorResturn('请填写身份证号');
		}
		if(stringLen($idNumber)!=15&&stringLen($idNumber)!=18){
			ErrorResturn('请填写正确的身份证号');
		}
		if($birthDate == ''){
			ErrorResturn('请填写出生日期');
		}
		if(!isdate($birthDate )){
			ErrorResturn('请填写正确的出生日期');
		}
		if($tel == ''){
			ErrorResturn('请填写手机号');
		}
		if(stringLen($tel)>11){
			ErrorResturn('手机号长度需在11个字符以内');
		}
		if($phone == ''){
			ErrorResturn('请填写座机号');
		}
		if(stringLen($phone)>50){
			ErrorResturn('座机号长度需在50个字符以内');
		}
		if($extensionNumber == ''){
			ErrorResturn('请填写座机分机号');
		}
		if(stringLen($extensionNumber)>20){
			ErrorResturn('座机分机号长度需在20个字符以内');
		}
		if($email == ''){
			ErrorResturn('请填写email地址');
		}
		if(stringLen($email)>50){
			ErrorResturn('email地址长度需在50个字符以内');
		}
		if($address == ''){
			ErrorResturn('请填写联系地址');
		}
		if(stringLen($address)>50){
			ErrorResturn('联系地址长度需在50个字符以内');
		}
		if($school == ''){
			ErrorResturn('请填写毕业院校');
		}
		if(stringLen($school)>50){
			ErrorResturn('毕业院校长度需在50个字符以内');
		}
		if($education == 0){
			ErrorResturn('请选择学历');
		}
		if($major == ''){
			ErrorResturn('请填写专业');
		}
		if(stringLen($major)>50){
			ErrorResturn('专业长度需在50个字符以内');
		}
		if($registerAddress == ''){
			ErrorResturn('请填写户口所在地');
		}
		if(stringLen($registerAddress)>50){
			ErrorResturn('户口所在地长度需在50个字符以内');
		}
		if($registerNature == 0){
			ErrorResturn('请选择户口性质');
		}
		if($firstWorkDate!=''){
			if(!isdate($firstWorkDate)){
				ErrorResturn('首次参加工作时间请填写正确的日期格式');
			}
		}
		if($quitDate!=''){
			if(!isdate($quitDate)){
				ErrorResturn('原单位解除合同请填写正确的日期格式');
			}
		}
	}

	//创建初始化数据
	if($act == 'add'){
		$action = 'addSave';
	}

	//创建保存
	if($act == 'addSave'){

		//验证手机号是否存在
		$validate = $db->get_one($table,'where tel="'.$tel.'"','staffId');
		if($validate){
			ErrorResturn('手机号系统已存在，请重新填写手机号');
		}	

		//存头像图
		if($photo!=''){
			$path = '/upload/images/staff/head/';
			$fileName = date("YmdHis");
			$photo = saveImg($path,$fileName,$photo);
		}

		//设置初始密码123456
		$loginPwd = md5('dit1234562018');

		//系统默认角色
		$R = $db->get_one(PRFIX.'sysrole','where isDefault=1','sysRoleId');
		if(!$R){
			ErrorResturn('请先设置系统默认角色');
		}else{
			$sysRoleId = $R['sysRoleId'];
		}

		//审批默认角色
		$C = $db->get_one(PRFIX.'checkrole','where isDefault=1','checkRoleId');
		if(!$C){
			ErrorResturn('请先设置审批默认角色');
		}else{
			$checkRoleId = $C['checkRoleId'];
		}

		$val['companyId'] = $company;
		$val['officeId'] = $office;
		$val['groupId'] = $group;
		$val['sysRoleId'] = $sysRoleId;
		$val['checkRoleId'] = $checkRoleId;
		$val['postId'] = $post;
		$val['staffName'] = $staffName;
		$val['loginPwd'] = $loginPwd;
		$val['sex'] = $staffSex;
		$val['idNumber'] = $idNumber;
		$val['birthDate'] = $birthDate;
		$val['tel'] = $tel;
		$val['phone'] = $phone; 
		$val['extensionNumber'] = $extensionNumber;
		$val['email'] = $email;
		$val['address'] = $address;
		$val['school'] = $school;
		$val['photo'] = $photo;
		$val['education'] = $education;
		$val['major'] = $major;
		$val['lunarDate'] = $lunarDate;
		$val['registerAddress'] = $registerAddress;
		$val['registerNature'] = $registerNature;
		$val['politicalType'] = $politicalType;
		$val['nation'] = $nation;
		$val['height'] = $height;
		$val['weight'] = $weight;
		$val['blood'] = $blood;
		$val['maritalStatus'] = $marital;
		if($firstWorkDate!=''){
			$val['firstWorkDate'] = $firstWorkDate;
		}
		if($quitDate!=''){
			$val['quitDate'] = $quitDate;
		}
		$val['cnBankAccount'] = $cnBankAccount;
		$val['busFee'] = $busFee;
		$val['background'] = $background;
		$val['remark'] = $remark;
		$val['createTime'] = date('Y-m-d H:i:s');

		$result = $db->insert($table,$val);
		if($result){
			$staffId = $db->get_lastId();
			TipsRefreshResturn('操作成功','human-affairs.php?_f=staff-entry&id='.$staffId.'');
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//编辑初始化数据
	if($act == 'edit'){

		$action = 'editSave';

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');

		$fileds = 'companyId,officeId,groupId,staffName,sex,idNumber,birthDate,lunarDate,height,weight,blood,politicalType,photo,';
		$fileds .= 'nation,maritalStatus,school,education,major,registerAddress,registerNature,tel,phone,extensionNumber,address,email,postId,';
		$fileds .= 'firstWorkDate,quitDate,cnBankAccount,busFee,background,remark';
		$data = $db->get_one($table,'where staffId='.$id.'',$fileds);
		if($data){
			$lunarDate = explode(',', $data['lunarDate']);
			$data['lunarMonth'] = $lunarDate[0];	//公历月
			$data['lunarDay'] = $lunarDate[1];		//公历日
			$data['lunarHour'] = $lunarDate[2];		//公历时
			$data['lunarMinute'] = $lunarDate[3];	//公历分
			if($data['busFee'] == 0){
				$data['busFee'] = '';
			}
		}

	}

	//编辑保存
	if($act == 'editSave'){

		$id = getVal('id',1,'');
		$page = getVal('page',2,'');
		$oldHead = getVal('oldHead',2,'');
		$updateRemark = getVal('updateRemark',2,'');

		if($updateRemark == ''){
			ErrorResturn('修改员工资料需标明修改内容');
		}

		//验证手机号是否存在
		$validate = $db->get_one($table,'where tel="'.$tel.'" and staffId<>'.$id.'','staffId');
		if($validate){
			ErrorResturn('手机号系统已存在，请重新填写手机号');
		}

		if($photo!=''){
			$path = '/upload/images/staff/head/';
			$fileName = date("YmdHis");
			$photo = saveImg($path,$fileName,$photo);

			//移除老头像文件
			if($oldHead!=''){
				unlink($oldHead);
			}

			$val['photo'] = $photo;
		}

		$val['companyId'] = $company;
		$val['officeId'] = $office;
		$val['groupId'] = $group;
		$val['postId'] = $post;
		$val['staffName'] = $staffName;
		$val['sex'] = $staffSex;
		$val['idNumber'] = $idNumber;
		$val['birthDate'] = $birthDate;
		$val['tel'] = $tel;
		$val['phone'] = $phone; 
		$val['extensionNumber'] = $extensionNumber;
		$val['email'] = $email;
		$val['address'] = $address;
		$val['school'] = $school;
		$val['education'] = $education;
		$val['major'] = $major;
		$val['lunarDate'] = $lunarDate;
		$val['registerAddress'] = $registerAddress;
		$val['registerNature'] = $registerNature;
		$val['politicalType'] = $politicalType;
		$val['nation'] = $nation;
		$val['height'] = $height;
		$val['weight'] = $weight;
		$val['blood'] = $blood;
		$val['maritalStatus'] = $marital;
		if($firstWorkDate!=''){
			$val['firstWorkDate'] = $firstWorkDate;
		}
		if($quitDate!=''){
			$val['quitDate'] = $quitDate;
		}
		$val['cnBankAccount'] = $cnBankAccount;
		$val['busFee'] = $busFee;
		$val['background'] = $background;
		$val['remark'] = $remark;
		$val['updateTime'] = date('Y-m-d H:i:s');

		$result = $db->update($table,$val,'where staffId='.$id.'');
		if($result){

			//记录修改内容 
			$_COOKIE['usrId'] = 1;	//测试

			$record['staffId'] = $id;
			$record['editUsr'] = $_COOKIE['usrId'];
			$record['logContent'] = $updateRemark;
			$record['logTime'] = date('Y-m-d H:i:s');

			$db->insert(PRFIX.'staff_editlog',$record);

			$url = 'human-affairs.php?_f=staff&page='.$page.'&s_company='.$s_company.'&s_office='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'';
			$url .= '&s_status='.$s_status.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'&s_name='.$s_name.'&s_idno='.$s_idno.'';
			TipsRefreshResturn('操作成功',$url);
		}else{
			ErrorResturn(ERRORTIPS);
		}

	}

	//数据绑定
	$smarty->assign('pageTitle',$pageTitle);
	$smarty->assign('sex',$sex);
	$smarty->assign('bloods',$bloods);
	$smarty->assign('politicals',$politicals);
	$smarty->assign('maritals',$maritals);
	$smarty->assign('educations',$educations);
	$smarty->assign('registers',$registers);
	$smarty->assign('lunarMonths',$lunarMonths);
	$smarty->assign('lunarDays',$lunarDays);
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
	$smarty->assign('companys',$companys);
	$smarty->assign('offices',$offices);
	$smarty->assign('groups',$groups);
	$smarty->assign('posts',$posts);

	//根据所属部门拉取工作组信息 ajax begin

	if($act == 'getGroup'){

		$officeId = getVal('officeId',1,'');
		if($officeId == 0){
			$data['status'] = 'fail';
			$data['message'] = '缺少办事处数据凭证！';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		$group = $db->get_all(PRFIX.'group','where officeId='.$officeId.'','groupId,groupName');
		if($group){
			$data['status'] = 'success';
			$data['message'] = '';
			$data['data'] = $group;
		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;

	}

	//根据所属部门拉取工作组信息 ajax over

?>