<?php

	//# Mr.Z
	//# 2018-11-03
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

?>