<?php
/* Smarty version 3.1.29, created on 2018-11-28 06:40:34
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/mail-apply-info.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bfdc7e2a6afc4_36035987',
  'file_dependency' => 
  array (
    '97ed9fd79a9f60e4b0e2b2a967d87a98a3b90409' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/mail-apply-info.html',
      1 => 1543358433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfdc7e2a6afc4_36035987 ($_smarty_tpl) {
?>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

申请详情：<br />
<img src="<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
" />&nbsp;申请人：<?php echo $_smarty_tpl->tpl_vars['i']->value['applyName'];?>
<br />
所属部门：<?php echo $_smarty_tpl->tpl_vars['i']->value['office'];?>
&nbsp;所属工作组：<?php echo $_smarty_tpl->tpl_vars['i']->value['group'];?>
<br />
邮箱帐号：<?php echo $_smarty_tpl->tpl_vars['i']->value['mailName'];?>
&nbsp;申请事由：<?php echo $_smarty_tpl->tpl_vars['i']->value['reason'];?>
<br />
审批状态：<?php echo $_smarty_tpl->tpl_vars['i']->value['checkStatus'];?>
<br /><br />

审批详情：<br />
审批进度轴：<br />
<table border="1">
	<tr>
		<td>角色</td>
		<td>人员</td>
		<td>状态</td>
		<td>时间</td>
	</tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['process']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_process_0_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_process_0_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['p']->value['role'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['p']->value['staff'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['p']->value['result'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['p']->value['time'];?>
</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_process_0_saved_local_item;
}
if ($__foreach_process_0_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_process_0_saved_item;
}
?>
</table>
<?php if ($_smarty_tpl->tpl_vars['isCheck']->value == 1) {?>
审批记录表格：<br />
<table>
	<tr>
		<td>审批级别</td>
		<td>审批角色</td>
		<td>审批状态</td>
		<td>审批意见</td>
		<td>审批人</td>
		<td>审批时间</td>
	</tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['check']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_check_1_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_check_1_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['c']->value['level'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['c']->value['role'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['c']->value['status'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['c']->value['remark'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['c']->value['checkUsr'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['c']->value['time'];?>
</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_check_1_saved_local_item;
}
if ($__foreach_check_1_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_check_1_saved_item;
}
?>
</table>
<?php }
}
}
