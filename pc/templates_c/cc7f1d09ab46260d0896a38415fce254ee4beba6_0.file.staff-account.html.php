<?php
/* Smarty version 3.1.29, created on 2018-11-12 22:24:30
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-account.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be98d1ecdeab4_54277661',
  'file_dependency' => 
  array (
    'cc7f1d09ab46260d0896a38415fce254ee4beba6' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-account.html',
      1 => 1542032614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be98d1ecdeab4_54277661 ($_smarty_tpl) {
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
	<input type="hidden" name="s_role" value="<?php echo $_smarty_tpl->tpl_vars['s_role']->value;?>
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
	<input type="hidden" name="s_idno" value="<?php echo $_smarty_tpl->tpl_vars['s_idno']->value;?>
" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<input type="hidden" name="act" value="editSave" />
	
	<select name="sysRole">
		<option value="0"<?php if ($_smarty_tpl->tpl_vars['s']->value['sysRoleId'] == 0) {?> selected="true"<?php }?>>系统角色</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['sysRoles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_sysRoles_0_saved_item = isset($_smarty_tpl->tpl_vars['s']) ? $_smarty_tpl->tpl_vars['s'] : false;
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$__foreach_sysRoles_0_saved_local_item = $_smarty_tpl->tpl_vars['s'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['sysRoleId'];?>
"<?php if ($_smarty_tpl->tpl_vars['s']->value['sysRoleId'] == $_smarty_tpl->tpl_vars['i']->value['sysRoleId']) {?> selected="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['s']->value['sysRoleName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['s'] = $__foreach_sysRoles_0_saved_local_item;
}
if ($__foreach_sysRoles_0_saved_item) {
$_smarty_tpl->tpl_vars['s'] = $__foreach_sysRoles_0_saved_item;
}
?>
	</select><br />

	<select name="checkRole">
		<option value="0">审批角色</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['checkRoles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_checkRoles_1_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_checkRoles_1_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['checkRoleId'];?>
"<?php if ($_smarty_tpl->tpl_vars['c']->value['checkRoleId'] == $_smarty_tpl->tpl_vars['i']->value['checkRoleId']) {?> selected="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['checkRoleName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_checkRoles_1_saved_local_item;
}
if ($__foreach_checkRoles_1_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_checkRoles_1_saved_item;
}
?>
	</select><br />

	<input type="password" name="pwd" placeholder="登录密码" value="" /><br />
	<input type="password" name="enterPwd" placeholder="再次填写登录密码" value="" /><br />
	
	帐号状态：
	<?php
$_from = $_smarty_tpl->tpl_vars['status']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_2_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_2_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_2_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
	<input type="radio" name="status" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['i']->value['status']) {?> checked="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>

	<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved_local_item;
}
if ($__foreach_value_2_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved_item;
}
if ($__foreach_value_2_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_2_saved_key;
}
?><br />

	修改备注：<textarea name="updateRemark" placeholder="请标明调整内容及原因"></textarea>
	
	<input type="submit" value="保存" />

</form><?php }
}
