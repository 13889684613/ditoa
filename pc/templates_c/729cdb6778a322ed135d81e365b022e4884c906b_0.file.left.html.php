<?php
/* Smarty version 3.1.29, created on 2018-12-13 21:43:01
  from "F:\website\ditoaCoder\ditoa\pc\index\view\left.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c1261e541f1f3_35740142',
  'file_dependency' => 
  array (
    '729cdb6778a322ed135d81e365b022e4884c906b' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\index\\view\\left.html',
      1 => 1544708578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1261e541f1f3_35740142 ($_smarty_tpl) {
?>

	管理菜单：<br />
	<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuOrg']->value)) {?>
	--- DIT组织架构：
	<?php if ($_smarty_tpl->tpl_vars['menuOrg']->value[0] == 1) {?>企业信息管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuOrg']->value[1] == 1) {?>办事处、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuOrg']->value[2] == 1) {?>工作组管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuOrg']->value[3] == 1) {?>企业组织架构<?php }?>
	<br />
	<?php }?>
	<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuHumanAffairs']->value)) {?>
	--- 人事管理：
	<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[0] == 1) {?>企业资质证件、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[1] == 1) {?>员工管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[2] == 1) {?>员工档案管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[3] == 1) {?>离职员工、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[4] == 1) {?>转正考核、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[5] == 1) {?>转正考核审批、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[6] == 1) {?>离职申请、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[7] == 1) {?>离职申请审批、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[8] == 1) {?>企业规章制度、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[9] == 1) {?>邮箱申请、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuHumanAffairs']->value[10] == 1) {?>邮箱审批<?php }?>
	<br />
	<?php }?>
	<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuLeave']->value)) {?>
	--- 请假管理：
	<?php if ($_smarty_tpl->tpl_vars['menuLeave']->value[0] == 1) {?>申请假期、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuLeave']->value[1] == 1) {?>请假管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuLeave']->value[2] == 1) {?>假期审批、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuLeave']->value[3] == 1) {?>假期统计<?php }?>
	<br />
	<?php }?>
	<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuBusinessTravel']->value)) {?>
	--- 出差管理：
	<?php if ($_smarty_tpl->tpl_vars['menuBusinessTravel']->value[0] == 1) {?>出差申请、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuBusinessTravel']->value[1] == 1) {?>出差审批<?php }?>
	<br />
	<?php }?>
	<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuCar']->value)) {?>
	--- 车辆管理：
	<?php if ($_smarty_tpl->tpl_vars['menuCar']->value[0] == 1) {?>车辆信息管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuCar']->value[1] == 1) {?>车辆行驶记录、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuCar']->value[2] == 1) {?>车辆行驶统计、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuCar']->value[3] == 1) {?>车辆维修管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuCar']->value[4] == 1) {?>车辆维修审批、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuCar']->value[5] == 1) {?>车辆维修费用管理<br /><?php }?>
	<?php }?>
	<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuOfficeTool']->value)) {?>
	--- 办公备品管理：
	<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[0] == 1) {?>办公备品管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[1] == 1) {?>办公备品审批、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[2] == 1) {?>办公备品入库管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[3] == 1) {?>办公备品分配记录、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[4] == 1) {?>办公备品出库管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[5] == 1) {?>办公备品使用统计、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[6] == 1) {?>办公备品盘点、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[7] == 1) {?>办公备品调转部门、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[8] == 1) {?>调转部门审批、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuOfficeTool']->value[9] == 1) {?>办公备品统计<?php }?>
	<br />
	<?php }?>
	<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuGeneralAffairs']->value)) {?>
	--- 综合事务管理：
	<?php if ($_smarty_tpl->tpl_vars['menuGeneralAffairs']->value[0] == 1) {?>企业规章制度管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuGeneralAffairs']->value[1] == 1) {?>企业动态管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuGeneralAffairs']->value[2] == 1) {?>企业资质证件管理<?php }?>
	<br />
	<?php }?>
	<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuSystem']->value)) {?>
	--- 系统运维管理：
	<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[0] == 1) {?>系统角色权限设置、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[0] == 1) {?>审批角色权限设置、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[0] == 1) {?>自定义审批流程设置、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[0] == 1) {?>默认审批流程设置、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[0] == 1) {?>职务管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[0] == 1) {?>请假类型管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[0] == 1) {?>备品类别管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuSystem']->value[0] == 1) {?>备品名称管理<?php }?>
	<br />
	<?php }?>
	<?php if (in_array('1',$_smarty_tpl->tpl_vars['menuSignPower']->value)) {?>
	--- 考勤管理：
	<?php if ($_smarty_tpl->tpl_vars['menuSignPower']->value[0] == 1) {?>考勤时间管理、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuSignPower']->value[0] == 1) {?>打卡记录、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuSignPower']->value[0] == 1) {?>打卡统计、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuSignPower']->value[0] == 1) {?>每日打卡记录、<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['menuSignPower']->value[0] == 1) {?>打卡时间<?php }?>
	<br />
	<?php }?>
	--- 系统消息：
	系统消息
	<?php }
}
