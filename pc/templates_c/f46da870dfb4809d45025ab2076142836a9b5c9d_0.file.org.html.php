<?php
/* Smarty version 3.1.29, created on 2018-11-06 22:13:23
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/org/view/org.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be1a183d43298_09823932',
  'file_dependency' => 
  array (
    'f46da870dfb4809d45025ab2076142836a9b5c9d' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/org/view/org.html',
      1 => 1541512963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be1a183d43298_09823932 ($_smarty_tpl) {
?>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<?php
$_from = $_smarty_tpl->tpl_vars['offices']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_offices_0_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_offices_0_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
	++ <?php echo $_smarty_tpl->tpl_vars['o']->value['officeName'];?>
（<?php echo $_smarty_tpl->tpl_vars['o']->value['number'];?>
）<br />
	<?php
$_from = $_smarty_tpl->tpl_vars['o']->value['groups'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groups_1_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$__foreach_groups_1_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?>
	&nbsp;&nbsp;<a href="?_f=org&g=<?php echo $_smarty_tpl->tpl_vars['g']->value['groupId'];?>
">-- <?php echo $_smarty_tpl->tpl_vars['g']->value['groupName'];?>
（<?php echo $_smarty_tpl->tpl_vars['g']->value['number'];?>
）</a><br />
	<?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_groups_1_saved_local_item;
}
if ($__foreach_groups_1_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_groups_1_saved_item;
}
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_0_saved_local_item;
}
if ($__foreach_offices_0_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_0_saved_item;
}
?>

<form method="get">
	<input type="text" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" placeholder="员工姓名...">
	<input type="hidden" name="act" value="searchPost">
	<input type="hidden" name="_f" value="org">
	<input type="hidden" name="g" value="<?php echo $_smarty_tpl->tpl_vars['groupId']->value;?>
">
	<input type="submit" value="检索">
</form>

<table border="1">
	<tr>
		<td>#</td>
		<td>员工姓名</td>
		<td>隶属公司</td>
		<td>职务</td>
		<td>座机</td>
		<td>手机号码</td>
		<td>电子邮箱</td>
		<td>状态</td>
	</tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_2_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_data_2_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['company'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['post'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['tel'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_2_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?>
	<tr>
		<td colspan="8"><?php echo $_smarty_tpl->tpl_vars['TIP']->value;?>
</td>
	</tr>
	<?php
}
if ($__foreach_data_2_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_2_saved_item;
}
?>
	
</table>
<div class="pagebox">
	<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

</div><?php }
}
