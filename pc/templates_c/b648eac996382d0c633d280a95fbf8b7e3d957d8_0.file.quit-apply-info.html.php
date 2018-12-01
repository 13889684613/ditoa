<?php
/* Smarty version 3.1.29, created on 2018-12-01 22:14:29
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/quit-apply-info.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c029745177a12_60763854',
  'file_dependency' => 
  array (
    'b648eac996382d0c633d280a95fbf8b7e3d957d8' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/quit-apply-info.html',
      1 => 1543673666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c029745177a12_60763854 ($_smarty_tpl) {
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
离职日期：<?php echo $_smarty_tpl->tpl_vars['i']->value['quitDate'];?>
&nbsp;离职原因：<?php echo $_smarty_tpl->tpl_vars['i']->value['reason'];?>
<br />
审批状态：<?php echo $_smarty_tpl->tpl_vars['i']->value['checkStatusText'];?>

<?php if ($_smarty_tpl->tpl_vars['remark']->value != '') {?>
<br />原因：<?php echo $_smarty_tpl->tpl_vars['remark']->value;?>

<?php }?>
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
<?php if (count($_smarty_tpl->tpl_vars['check']->value) > 0) {?>
审批记录表格：<br />
<table border="1">
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
		<td><?php echo $_smarty_tpl->tpl_vars['c']->value['checkLevel'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['c']->value['role'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['c']->value['result'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['c']->value['remark'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['c']->value['checkUsr'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['c']->value['checkTime'];?>
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
