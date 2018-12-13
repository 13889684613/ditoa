<?php
/* Smarty version 3.1.29, created on 2018-12-13 19:39:56
  from "F:\website\ditoaCoder\ditoa\pc\index\view\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c12450c4c6a51_90751727',
  'file_dependency' => 
  array (
    'd4b9b3ff6ddc6dc96ab3c4af64b80c09e6e169f5' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\index\\view\\index.html',
      1 => 1544701184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c12450c4c6a51_90751727 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
</head>
<body>
	管理菜单：<br />
	--- DIT组织架构：
	企业信息管理、
	办事处、
	工作组管理、
	企业组织架构
	<br />
	--- 人事管理：
	企业资质证件、
	员工管理、
	员工档案管理、
	离职员工、
	转正考核、
	转正考核审批、
	离职申请、
	离职申请审批、
	企业规章制度、
	邮箱申请、
	邮箱审批
	<br />
	--- 请假管理：
	申请假期、
	请假管理、
	假期审批、
	假期统计
	<br />
	--- 出差管理：
	出差申请、
	出差审批
	<br />
	--- 车辆管理：
	车辆信息管理、
	车辆行驶记录、
	车辆行驶统计、
	车辆维修管理、
	车辆维修审批、
	车辆维修费用管理<br />
	--- 办公备品管理：
	办公备品管理、
	办公备品审批、
	办公备品入库管理、
	办公备品分配记录、
	办公备品出库管理、
	办公备品使用统计、
	办公备品盘点、
	办公备品调转部门、
	调转部门审批、
	办公备品统计
	<br />
	--- 综合事务管理：
	企业规章制度管理、
	企业动态管理、
	企业资质证件管理
	<br />
	--- 系统运维管理：
	系统角色权限设置、
	审批角色权限设置、
	自定义审批流程设置、
	默认审批流程设置、
	职务管理、
	请假类型管理、
	备品类别管理、
	备品名称管理
	<br />
	--- 考勤管理：
	考勤时间管理、
	打卡记录、
	打卡统计、
	每日打卡记录、
	打卡时间
	<br />

	<br /><br />
	<?php if ($_smarty_tpl->tpl_vars['messageContent']->value != '') {?>
	系统消息：<?php echo $_smarty_tpl->tpl_vars['messageContent']->value;?>

	<?php }?>
	友情提示：<?php echo $_smarty_tpl->tpl_vars['common_staffName']->value;?>
 ，欢迎您回来，祝你开心每一天！
	快捷方式：<a href="">请假申请</a>&nbsp;<a href="">我的档案</a>&nbsp;<a href="">企业规章制度</a><a href="">组织架构</a>&nbsp;<a href="">系统消息<?php if ($_smarty_tpl->tpl_vars['common_noRead']->value > 0) {?>（<?php echo $_smarty_tpl->tpl_vars['common_noRead']->value;?>
）<?php }?></a><br />
	企业动态：更多
	<table>
		<?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_news_0_saved_item = isset($_smarty_tpl->tpl_vars['n']) ? $_smarty_tpl->tpl_vars['n'] : false;
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
$__foreach_news_0_saved_local_item = $_smarty_tpl->tpl_vars['n'];
?>
		<tr>
			<td><a href="general-affairs.php?_f=news-info&i=<?php echo $_smarty_tpl->tpl_vars['n']->value['newsId'];?>
"><?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['n']->value['newsTime'];?>
</td>
		</tr>
		<?php
$_smarty_tpl->tpl_vars['n'] = $__foreach_news_0_saved_local_item;
}
if ($__foreach_news_0_saved_item) {
$_smarty_tpl->tpl_vars['n'] = $__foreach_news_0_saved_item;
}
?>
	</table><br />
	企业活动：更多
	<table>
		<?php
$_from = $_smarty_tpl->tpl_vars['actives']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_actives_1_saved_item = isset($_smarty_tpl->tpl_vars['a']) ? $_smarty_tpl->tpl_vars['a'] : false;
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$__foreach_actives_1_saved_local_item = $_smarty_tpl->tpl_vars['a'];
?>
		<tr>
			<td><a href="general-affairs.php?_f=actives-info&i=<?php echo $_smarty_tpl->tpl_vars['a']->value['newsId'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['title'];?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['a']->value['newsTime'];?>
</td>
		</tr>
		<?php
$_smarty_tpl->tpl_vars['a'] = $__foreach_actives_1_saved_local_item;
}
if ($__foreach_actives_1_saved_item) {
$_smarty_tpl->tpl_vars['a'] = $__foreach_actives_1_saved_item;
}
?>
	</table>
</body>
</html><?php }
}
