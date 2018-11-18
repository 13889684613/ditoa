<?php
	
	//# Mr.Z
	//# 2018-11-18
	//# 常用DB操作函数库

	//验证是否存在审批流
	//checkCategory:审批业务类型
	//applyId:业务申请
	function isExistsCheckProcess($checkCategory,$applyId){

		//获取table&fileds
		$D = static_checkTable($checkCategory);

		//验证
		global $db;
		$validate = $db->get_one($D[0],'where '.$D[1].'='.$applyId.'',$D[1]);
		return $validate;

	}


?>