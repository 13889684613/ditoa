<?php
/* Smarty version 3.1.29, created on 2018-12-02 15:30:50
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/archives-education.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c038a2a951d25_59417101',
  'file_dependency' => 
  array (
    '7dee5a2c37a4cffca3c184d392249081389b034b' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/archives-education.html',
      1 => 1543735841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c038a2a951d25_59417101 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post">

	<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
	<input type="hidden" name="s_company" value="<?php echo $_smarty_tpl->tpl_vars['s_company']->value;?>
" />
	<input type="hidden" name="s_office" value="<?php echo $_smarty_tpl->tpl_vars['s_office']->value;?>
" />
	<input type="hidden" name="s_post" value="<?php echo $_smarty_tpl->tpl_vars['s_post']->value;?>
" />
	<input type="hidden" name="s_status" value="<?php echo $_smarty_tpl->tpl_vars['s_status']->value;?>
" />
	<input type="hidden" name="s_begintime" value="<?php echo $_smarty_tpl->tpl_vars['s_begintime']->value;?>
" />
	<input type="hidden" name="s_overtime" value="<?php echo $_smarty_tpl->tpl_vars['s_overtime']->value;?>
" />
	<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />

	<table border="1">
		<tr>
			<td>#</td>
			<td>时间</td>
			<td>所在单位</td>
			<td>职务</td>
			<td>备注</td>
		</tr>
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_data']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_data'] : false;
$__foreach_data_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_data'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration']++;
$__foreach_data_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
		<tr>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_data']->value['iteration'] : null);?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['i']->value['workTime'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['i']->value['workUnit'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['i']->value['postName'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['i']->value['remark'];?>
</td>
		</tr>
		<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_local_item;
}
if ($__foreach_data_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_data'] = $__foreach_data_0_saved;
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_item;
}
?>
	</table>

</form><?php }
}
