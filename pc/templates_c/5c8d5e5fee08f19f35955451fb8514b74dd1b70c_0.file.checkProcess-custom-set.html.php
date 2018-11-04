<?php
/* Smarty version 3.1.29, created on 2018-11-04 12:52:00
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/checkProcess-custom-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bde7af0cb8587_34758412',
  'file_dependency' => 
  array (
    '5c8d5e5fee08f19f35955451fb8514b74dd1b70c' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/checkProcess-custom-set.html',
      1 => 1541307109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bde7af0cb8587_34758412 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post">

	<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
	<input type="hidden" name="s_type" value="<?php echo $_smarty_tpl->tpl_vars['s_type']->value;?>
" />
	<input type="hidden" name="s_role" value="<?php echo $_smarty_tpl->tpl_vars['s_role']->value;?>
" />
	<input type="hidden" name="s_role" value="<?php echo $_smarty_tpl->tpl_vars['s_s_office']->value;?>
" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />

	<select name="category">
		<option value="" <?php if ($_smarty_tpl->tpl_vars['i']->value['checkCategory'] == 0) {?> selected="true"<?php }?>>审批流程类别</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['categorys']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['i']->value['checkCategory']) {?> selected="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
if ($__foreach_value_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_0_saved_key;
}
?>
	</select><br />

	<select name="beginOffice">
		<option value="" <?php if ($_smarty_tpl->tpl_vars['i']->value['officeId'] == 0) {?> selected="true"<?php }?>>所属办事处</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['offices']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_offices_1_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_offices_1_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['o']->value['officeId'];?>
"<?php if ($_smarty_tpl->tpl_vars['o']->value['officeId'] == $_smarty_tpl->tpl_vars['i']->value['officeId']) {?> selected="<?php }?>"><?php echo $_smarty_tpl->tpl_vars['o']->value['officeName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_1_saved_local_item;
}
if ($__foreach_offices_1_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_1_saved_item;
}
?>
	</select><br />

	<select name="beginGroup">
		<option value="" <?php if ($_smarty_tpl->tpl_vars['i']->value['groupId'] == 0) {?> selected="true"<?php }?>>所属工作组</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groups_2_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$__foreach_groups_2_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['groupId'];?>
"<?php if ($_smarty_tpl->tpl_vars['g']->value['groupId'] == $_smarty_tpl->tpl_vars['i']->value['groupId']) {?> selected="<?php }?>"><?php echo $_smarty_tpl->tpl_vars['g']->value['groupName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_groups_2_saved_local_item;
}
if ($__foreach_groups_2_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_groups_2_saved_item;
}
?>
	</select><br />

	<select name="beginRole">
		<option value="" <?php if ($_smarty_tpl->tpl_vars['i']->value['beginRole'] == 0) {?> selected="true"<?php }?>>发起审批角色</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_roles_3_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_roles_3_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['checkRoleId'];?>
"<?php if ($_smarty_tpl->tpl_vars['r']->value['checkRoleId'] == $_smarty_tpl->tpl_vars['i']->value['beginRole']) {?> selected="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value['checkRoleName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_roles_3_saved_local_item;
}
if ($__foreach_roles_3_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_roles_3_saved_item;
}
?>
	</select><br />

	<!--创建 begin-->
	<?php if ($_smarty_tpl->tpl_vars['action']->value == 'addSave') {?>
	<?php
$_smarty_tpl->tpl_vars['sn'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['sn']->step = 1;$_smarty_tpl->tpl_vars['sn']->total = (int) ceil(($_smarty_tpl->tpl_vars['sn']->step > 0 ? 4+1 - (1) : 1-(4)+1)/abs($_smarty_tpl->tpl_vars['sn']->step));
if ($_smarty_tpl->tpl_vars['sn']->total > 0) {
for ($_smarty_tpl->tpl_vars['sn']->value = 1, $_smarty_tpl->tpl_vars['sn']->iteration = 1;$_smarty_tpl->tpl_vars['sn']->iteration <= $_smarty_tpl->tpl_vars['sn']->total;$_smarty_tpl->tpl_vars['sn']->value += $_smarty_tpl->tpl_vars['sn']->step, $_smarty_tpl->tpl_vars['sn']->iteration++) {
$_smarty_tpl->tpl_vars['sn']->first = $_smarty_tpl->tpl_vars['sn']->iteration == 1;$_smarty_tpl->tpl_vars['sn']->last = $_smarty_tpl->tpl_vars['sn']->iteration == $_smarty_tpl->tpl_vars['sn']->total;?>
	<?php echo $_smarty_tpl->tpl_vars['sn']->value;?>
级审批
	<select name="office[]">
		<option value="" <?php if ($_smarty_tpl->tpl_vars['i']->value['officeId'] == 0) {?> selected="true"<?php }?>>所属办事处</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['offices']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_offices_4_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_offices_4_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['o']->value['officeId'];?>
"<?php if ($_smarty_tpl->tpl_vars['o']->value['officeId'] == $_smarty_tpl->tpl_vars['i']->value['officeId']) {?> selected="<?php }?>"><?php echo $_smarty_tpl->tpl_vars['o']->value['officeName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_4_saved_local_item;
}
if ($__foreach_offices_4_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_4_saved_item;
}
?>
	</select>
	<select name="group[]">
		<option value="">所属工作组</option>
		<!-- 测试 beign -->
		<?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groups_5_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$__foreach_groups_5_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['groupId'];?>
"<?php if ($_smarty_tpl->tpl_vars['g']->value['groupId'] == $_smarty_tpl->tpl_vars['p']->value['groupId']) {?> selected="<?php }?>"><?php echo $_smarty_tpl->tpl_vars['g']->value['groupName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_groups_5_saved_local_item;
}
if ($__foreach_groups_5_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_groups_5_saved_item;
}
?>
		<!-- 测试 over -->
	</select>
	<select name="role[]">
		<option value="">审批角色</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_roles_6_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_roles_6_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['checkRoleId'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['checkRoleName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_roles_6_saved_local_item;
}
if ($__foreach_roles_6_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_roles_6_saved_item;
}
?>
	</select><br />
	<?php }
}
?>

	<?php }?>
	<!--创建 over-->

	<!--编辑 begin-->
	<?php
$_from = $_smarty_tpl->tpl_vars['i']->value['process'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_process_7_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_process']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_process'] : false;
$__foreach_process_7_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_process'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_process']->value['iteration']++;
$__foreach_process_7_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
	<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_process']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_process']->value['iteration'] : null);?>
级审批：
	<select name="office[]">
		<option value="" <?php if ($_smarty_tpl->tpl_vars['p']->value['officeId'] == 0) {?> selected="true"<?php }?>>所属办事处</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['offices']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_offices_8_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_offices_8_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['o']->value['officeId'];?>
"<?php if ($_smarty_tpl->tpl_vars['o']->value['officeId'] == $_smarty_tpl->tpl_vars['p']->value['officeId']) {?> selected="<?php }?>"><?php echo $_smarty_tpl->tpl_vars['o']->value['officeName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_8_saved_local_item;
}
if ($__foreach_offices_8_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_8_saved_item;
}
?>
	</select>
	<select name="group[]">
		<option value="" <?php if ($_smarty_tpl->tpl_vars['p']->value['groupId'] == 0) {?> selected="true"<?php }?>>所属工作组</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['p']->value['group'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_group_9_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$__foreach_group_9_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['groupId'];?>
"<?php if ($_smarty_tpl->tpl_vars['g']->value['groupId'] == $_smarty_tpl->tpl_vars['p']->value['groupId']) {?> selected="<?php }?>"><?php echo $_smarty_tpl->tpl_vars['g']->value['groupName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_group_9_saved_local_item;
}
if ($__foreach_group_9_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_group_9_saved_item;
}
?>
	</select>
	<select name="role[]">
		<option value="">审批角色</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_roles_10_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_roles_10_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['checkRoleId'];?>
"<?php if ($_smarty_tpl->tpl_vars['r']->value['checkRoleId'] == $_smarty_tpl->tpl_vars['p']->value['roleId']) {?> selected="<?php }?>"><?php echo $_smarty_tpl->tpl_vars['r']->value['checkRoleName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_roles_10_saved_local_item;
}
if ($__foreach_roles_10_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_roles_10_saved_item;
}
?>
	</select><br />
	<?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_process_7_saved_local_item;
}
if ($__foreach_process_7_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_process'] = $__foreach_process_7_saved;
}
if ($__foreach_process_7_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_process_7_saved_item;
}
?>
	<!--编辑 over-->

	<input type="submit" value="保存" />

</form><?php }
}
