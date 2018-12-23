<?php

	//# Mr.Z
	//# 2018-11-09
	//# 员工基本资料设置

	//权限验证
	if($menuHumanAffairs[1] == 0){
		RefreshResturn('index.php?_f=login');
	}

	//当前页面公共配置
	$pageTitle = '员工基本资料设置';
	$act = $_REQUEST['act'];
	$table = PRFIX.'staff';	
	$id = getVal('id',1,'');
	$page = getVal('page',2,'');
	$where = '';

	//表单元素赋能 begin

	$select['company'] = '请选择所属企业';
	$select['office'] = '请选择部门名称';
	$select['group'] = '请选择所属小组';
	$select['post'] = '请选择职务';
	$select['lunarMonth'] = '请选择月份';
	$select['lunarDay'] = '请选择日期';
	$select['education'] = '请选择学历';
	$select['political'] = '请选择政治面貌';

	//非系统管理员仅显示相同的企业、部门、工作组
	if($common_category == 0){
		$companyWhere = 'where companyId='.$common_company.' ';
		$officeWhere = 'where officeId='.$common_office.' ';
	}

	//所属企业
	$companys = $db->get_all(PRFIX.'company',''.$companyWhere.'order by rank desc,createTime desc','companyId,cnName');

	//所属部门
	$offices = $db->get_all(PRFIX.'office',''.$officeWhere.'order by rank desc,createTime desc','officeId,officeName');

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
	$track = '&page='.$page.'&id='.$id.'&s_company='.$s_company.'&s_office='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'&s_status='.$s_status.'';
	$track .= '&s_name='.$s_name.'&s_idno='.$s_idno.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'';
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
			$data['status'] = 'fail';
			$data['message'] = '请选择所属企业';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($office == 0){
			$data['status'] = 'fail';
			$data['message'] = '请选择所属部门';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($group == 0){
			$data['status'] = 'fail';
			$data['message'] = '请选择所属工作组';
			$returnJson = json_encode($data);
			echo $returnJson; exit;		
		}
		if($staffName == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写姓名';
			$returnJson = json_encode($data);
			echo $returnJson; exit;		
		}
		if(stringLen($staffName)>20){
			$data['status'] = 'fail';
			$data['message'] = '姓名长度需在20字以内';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($post == 0){
			$data['status'] = 'fail';
			$data['message'] = '请选择职务';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($staffSex == 0){
			$data['status'] = 'fail';
			$data['message'] = '请选择性别';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($idNumber == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写身份证号';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if(stringLen($idNumber)!=15&&stringLen($idNumber)!=18){
			$data['status'] = 'fail';
			$data['message'] = '请填写正确的身份证号';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($birthDate == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写出生日期';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if(!isdate($birthDate )){
			$data['status'] = 'fail';
			$data['message'] = '请填写正确的出生日期';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($tel == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写手机号';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if(stringLen($tel)>11){
			$data['status'] = 'fail';
			$data['message'] = '手机号长度需在11个字符以内';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		// if($phone == ''){
		// 	$data['status'] = 'fail';
		// 	$data['message'] = '请填写座机号';
		// 	$returnJson = json_encode($data);
		// 	echo $returnJson; exit;	
		// }
		if($phone!=''){
			if(stringLen($phone)>50){
				$data['status'] = 'fail';
				$data['message'] = '座机号长度需在50个字符以内';
				$returnJson = json_encode($data);
				echo $returnJson; exit;	
			}
		}
		if($extensionNumber!=''){
			if($extensionNumber == ''){
				$data['status'] = 'fail';
				$data['message'] = '请填写座机分机号';
				$returnJson = json_encode($data);
				echo $returnJson; exit;	
			}
			if(stringLen($extensionNumber)>20){
				$data['status'] = 'fail';
				$data['message'] = '座机分机号长度需在20个字符以内';
				$returnJson = json_encode($data);
				echo $returnJson; exit;	
			}
		}
		// if($email == ''){
		// 	$data['status'] = 'fail';
		// 	$data['message'] = '请填写email地址';
		// 	$returnJson = json_encode($data);
		// 	echo $returnJson; exit;	
		// }
		if($email!=''){
			if(stringLen($email)>50){
				$data['status'] = 'fail';
				$data['message'] = 'email地址长度需在50个字符以内';
				$returnJson = json_encode($data);
				echo $returnJson; exit;	
			}
		}
		if($address == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写联系地址';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if(stringLen($address)>50){
			$data['status'] = 'fail';
			$data['message'] = '联系地址长度需在50个字符以内';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($school == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写毕业院校';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if(stringLen($school)>50){
			$data['status'] = 'fail';
			$data['message'] = '毕业院校长度需在50个字符以内';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($education == 0){
			$data['status'] = 'fail';
			$data['message'] = '请选择学历';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($major == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写专业';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if(stringLen($major)>50){
			$data['status'] = 'fail';
			$data['message'] = '专业长度需在50个字符以内';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($registerAddress == ''){
			$data['status'] = 'fail';
			$data['message'] = '请填写户口所在地';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if(stringLen($registerAddress)>50){
			$data['status'] = 'fail';
			$data['message'] = '户口所在地长度需在50个字符以内';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($registerNature == 0){
			$data['status'] = 'fail';
			$data['message'] = '请选择户口性质';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}
		if($firstWorkDate!=''){
			if(!isdate($firstWorkDate)){
				$data['status'] = 'fail';
				$data['message'] = '首次参加工作时间请填写正确的日期格式';
				$returnJson = json_encode($data);
				echo $returnJson; exit;	
			}
		}
		if($quitDate!=''){
			if(!isdate($quitDate)){
				$data['status'] = 'fail';
				$data['message'] = '原单位解除合同请填写正确的日期格式';
				$returnJson = json_encode($data);
				echo $returnJson; exit;	
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
			$data['status'] = 'fail';
			$data['message'] = '手机号系统已存在，请重新填写手机号';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}	

		//存头像图
		if($photo!=''){
			$path = 'upload/images/staff/head/';
			$fileName = date("YmdHis");
			$photo = saveImg($path,$fileName,$photo);
		}else{
			$data['status'] = 'fail';
			$data['message'] = '请上传照片！';
			$returnJson = json_encode($data);
			echo $returnJson; exit;
		}

		//设置初始密码123456
		$loginPwd = md5('dit1234562018');

		//系统默认角色
		$R = $db->get_one(PRFIX.'sysrole','where isDefault=1','sysRoleId');
		if(!$R){
			$data['status'] = 'fail';
			$data['message'] = '请先设置系统默认角色';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}else{
			$sysRoleId = $R['sysRoleId'];
		}

		//审批默认角色
		$C = $db->get_one(PRFIX.'checkrole','where isDefault=1','checkRoleId');
		if(!$C){
			$data['status'] = 'fail';
			$data['message'] = '请先设置审批默认角色';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
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
			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = 'human-affairs.php?_f=staff-entry&id='.$staffId.'';
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

		$fileds = 'companyId,officeId,groupId,staffName,sex,idNumber,birthDate,lunarDate,height,weight,blood,politicalType,photo,';
		$fileds .= 'nation,maritalStatus,school,education,major,registerAddress,registerNature,tel,phone,extensionNumber,address,email,postId,';
		$fileds .= 'firstWorkDate,quitDate,cnBankAccount,busFee,background,remark';
		$data = $db->get_one($table,'where staffId='.$id.'',$fileds);
		if($data){

			//所属工作组
			$groups  = $db->get_all(PRFIX.'group','where officeId='.$data['officeId'].' order by rank desc,createTime desc','groupId,groupName');	

			//非系统管理员操作权限验证，验证是否为同部门人员操作
			if($common_category == 0){
				if($common_office != $data['officeId']){
					RefreshResturn('index.php?_f=login');
				}
			}

			$lunarDate = explode(',', $data['lunarDate']);
			$data['lunarMonth'] = $lunarDate[0];	//公历月
			$data['lunarDay'] = $lunarDate[1];		//公历日
			$data['lunarHour'] = $lunarDate[2];		//公历时
			$data['lunarMinute'] = $lunarDate[3];	//公历分
			if($data['busFee'] == 0){
				$data['busFee'] = '';
			}
			$select['company'] = getCompanyName($data['companyId']);
			$select['office'] = getOfficeName($data['officeId']);
			$select['group'] = getGroupName($data['groupId']);
			$select['post'] = getPostName($data['postId']);
			$select['lunarMonth'] = static_lunarMonth($data['lunarMonth']);
			$select['lunarDay'] = static_lunarDay($data['lunarDay']);
			$select['education'] = static_education($data['education']);
			$select['political'] = static_political($data['politicalType']);

		}

	}

	//编辑保存
	if($act == 'editSave'){

		$oldHead = getVal('oldHead',2,'');
		$updateRemark = getVal('updateRemark',2,'');

		if($updateRemark == ''){
			$data['status'] = 'fail';
			$data['message'] = '修改员工资料需标明修改内容';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}

		//验证手机号是否存在
		$validate = $db->get_one($table,'where tel="'.$tel.'" and staffId<>'.$id.'','staffId');
		if($validate){
			$data['status'] = 'fail';
			$data['message'] = '手机号系统已存在，请重新填写手机号';
			$returnJson = json_encode($data);
			echo $returnJson; exit;	
		}

		if($photo!=''){
			$path = 'upload/images/staff/head/';
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
			// $_COOKIE['usrId'] = 1;	//测试

			$record['staffId'] = $id;
			$record['editUsr'] = $common_staffId;
			$record['logContent'] = $updateRemark;
			$record['logTime'] = date('Y-m-d H:i:s');

			$db->insert(PRFIX.'staff_editlog',$record);

			$url = 'human-affairs.php?_f=staff&page='.$page.'&s_company='.$s_company.'&s_office='.$s_office.'&s_role='.$s_role.'&s_post='.$s_post.'';
			$url .= '&s_status='.$s_status.'&s_begintime='.$s_begintime.'&s_overtime='.$s_overtime.'&s_name='.$s_name.'&s_idno='.$s_idno.'';

			$data['status'] = 'success';
			$data['message'] = '操作成功';
			$data['url'] = $url;

		}else{
			$data['status'] = 'fail';
			$data['message'] = ERRORTIPS;
		}
		$returnJson = json_encode($data);
		echo $returnJson; exit;	

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
	$smarty->assign('i',$data);
	$smarty->assign('id',$id);
	$smarty->assign('page',$page);
	$smarty->assign('action',$action);
	$smarty->assign('companys',$companys);
	$smarty->assign('offices',$offices);
	$smarty->assign('groups',$groups);
	$smarty->assign('posts',$posts);
	$smarty->assign('track',$track);
	$smarty->assign('s_company',$s_company);
	$smarty->assign('s_office',$s_office);
	$smarty->assign('s_role',$s_role);
	$smarty->assign('s_post',$s_post);
	$smarty->assign('s_status',$s_status);
	$smarty->assign('s_begintime',$s_begintime);
	$smarty->assign('s_overtime',$s_overtime);
	$smarty->assign('s_name',$s_name);
	$smarty->assign('s_idno',$s_idno);
	$smarty->assign('select',$select);

?>