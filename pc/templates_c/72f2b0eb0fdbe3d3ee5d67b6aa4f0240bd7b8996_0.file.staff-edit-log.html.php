<?php
/* Smarty version 3.1.29, created on 2018-11-12 22:41:44
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-edit-log.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be99128a9e397_99916065',
  'file_dependency' => 
  array (
    '72f2b0eb0fdbe3d3ee5d67b6aa4f0240bd7b8996' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-edit-log.html',
      1 => 1542033067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be99128a9e397_99916065 ($_smarty_tpl) {
?>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<table border="1">
	<tr>
		<td>#</td>
		<td>编辑人</td>
		<td>所属部门</td>
		<td>职务</td>
		<td>编辑时间</td>
		<td>编辑备注</td>
	</tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_data_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['sn'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['editor'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['office'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['post'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['logTime'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['logContent'];?>
</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_local_item;
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_item;
}
?>
	
</table>
<div class="pagebox">
	<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

</div><?php }
}
