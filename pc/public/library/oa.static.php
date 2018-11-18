<?php

	//# Mr.Z
	//# 2018-11-06
	//# 静态数据

	//审批流程类型
	function static_checkType($key=''){

		$typeArray = array(
			'1' => '请假',
			'2' => '出差',
			'3' => '加班',
			'4' => '补卡',
			'5' => '车辆维修',
			'6' => '办公备品',
			'7' => '办公备品调转部门',
			'8' => '离职',
			'9' => '邮箱申请',
			'10' => '转正'
		);

		if($key == ''){
			return $typeArray;
		}else{
			return $typeArray[$key];
		}

	}

	//审批各业务类型DB数据表与字段
	function static_checkTable($key){

		$table = array(
			'1' => array(PRFIX.'leaveapply_check','leaveApplyId'),
			'2' => array(PRFIX.'businesstravelapply_check','btApplyId'),
			'3' => array(PRFIX.'overtimeapply_check','overtimeApplyId'),
			'4' => array(PRFIX.'appendsignapply_check','appendSignApplyId'),
			'5' => array(PRFIX.'carrepairapply_check','carRepairApplyId'),
			'6' => array(PRFIX.'officetoolapply_check','otApplyId'),
			'7' => array(PRFIX.'officetool_transfer_check','transferId'),
			'8' => array(PRFIX.'quitapply_check','quitApplyId'),
			'9' => array(PRFIX.'mailapply_check','mailApplyId'),
			'10' => array(PRFIX.'staff_appraise_check','appraiseId')
		);

		if($key == ''){
			return $table;
		}else{
			return $table[$key];
		}

	}

	//性别
	function static_sex($key=''){
		$sexArray = array(
			'1' => '男',
			'2' => '女'
		);

		if($key == ''){
			return $sexArray;
		}else{
			return $sexArray[$key];
		}
	}

	//血型
	function static_blood($key=''){
		$bloodArray = array(
			'1' => 'A型',
			'2' => 'B型',
			'3' => 'AB型',
			'4' => 'O型'
		);

		if($key == ''){
			return $bloodArray;
		}else{
			return $bloodArray[$key];
		}
	}

	//政治面貌
	function static_political($key=''){
		$politicalArray = array(
			'1' => '中共党员',
			'2' => '共青团员',
			'3' => '群众'
		);

		if($key == ''){
			return $politicalArray;
		}else{
			return $politicalArray[$key];
		}
	}

	//婚姻状况
	function static_marital($key=''){
		$maritalArray = array(
			'1' => '未婚',
			'2' => '已婚',
			'3' => '离婚',
			'4' => '丧偶'
		);

		if($key == ''){
			return $maritalArray;
		}else{
			return $maritalArray[$key];
		}
	}

	//学历
	function static_education($key=''){
		$education = array(
			'1' => '小学',
			'2' => '初中',
			'3' => '高中',
			'4' => '中专',
			'5' => '职高',
			'6' => '大专',
			'7' => '本科',
			'8' => '博士',
			'9' => '硕士',
			'10' => '留学'
		);

		if($key == ''){
			return $education;
		}else{
			return $education[$key];
		}
	}

	//农历月
	function static_lunarMonth($key=''){
		$month = array(
			'1' => '正月',
			'2' => '二月',
			'3' => '三月',
			'4' => '四月',
			'5' => '五月',
			'6' => '六月',
			'7' => '七月',
			'8' => '八月',
			'9' => '九月',
			'10' => '十月',
			'11' => '十一月',
			'12' => '十二月'
		);

		if($key == ''){
			return $month;
		}else{
			return $month[$key];
		}
	}

	//农历日
	function static_lunarDay($key=''){
		$day = array(
			'1' => '初一',
			'2' => '初二',
			'3' => '初三',
			'4' => '初四',
			'5' => '初五',
			'6' => '初六',
			'7' => '初七',
			'8' => '初八',
			'9' => '初九',
			'10' => '初十',
			'11' => '十一',
			'12' => '十二',
			'13' => '十三',
			'14' => '十四',
			'15' => '十五',
			'16' => '十六',
			'17' => '十七',
			'18' => '十八',
			'19' => '十九',
			'20' => '二十',
			'21' => '廿一',
			'22' => '廿二',
			'23' => '廿三',
			'24' => '廿四',
			'25' => '廿五',
			'26' => '廿六',
			'27' => '廿七',
			'28' => '廿八',
			'29' => '廿九',
			'30' => '三十'
		);

		if($key == ''){
			return $day;
		}else{
			return $day[$key];
		}
	}

	//户籍
	function static_register($key=''){
		$register = array(
			'1' => '农业户口',
			'2' => '非农业户口'
		);

		if($key == ''){
			return $register;
		}else{
			return $register[$key];
		}
	}

	//保险公积金托管状态
	function static_Trusteeship($key=''){
		$status = array(
			'1' => '托管',
			'0' => '非托管'
		);

		if($key == ''){
			return $status;
		}else{
			return $status[$key];
		}
	}

	//员工帐号状态
	function static_staffStatus($key=''){

		$statusArray = array(
			'0' => '试用',
			'1' => '已转正',
			'2' => '离职'
		);

		if($key == ''){
			return $statusArray;
		}else{
			return $statusArray[$key];
		}

	}

	//审批状态
	function static_checkStatus($key=''){

		$status = array(
			'0' => '待审批',
			'1' => '审批中',
			'2' => '已批准',
			'3' => '已拒绝',
			'4' => '作废'
		);

		if($key == ''){
			return $status;
		}else{
			return $status[$key];
		}

	}

?>