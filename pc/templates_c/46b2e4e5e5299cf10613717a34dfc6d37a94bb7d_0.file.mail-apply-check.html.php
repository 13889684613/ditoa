<?php
/* Smarty version 3.1.29, created on 2018-12-13 13:48:20
  from "F:\website\ditoaCoder\ditoa\pc\humanAffairs\view\mail-apply-check.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c11f2a4193399_23135591',
  'file_dependency' => 
  array (
    '46b2e4e5e5299cf10613717a34dfc6d37a94bb7d' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\humanAffairs\\view\\mail-apply-check.html',
      1 => 1544169236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c11f2a4193399_23135591 ($_smarty_tpl) {
?>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="get">
	<input type="hidden" name="_f" value="mail-apply-check">
	<select name="s_office">
		<option value=""<?php if ($_smarty_tpl->tpl_vars['s_office']->value == 0) {?> selected=true<?php }?>>所属部门</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['office']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_office_0_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_office_0_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['o']->value['officeId'];?>
"<?php if ($_smarty_tpl->tpl_vars['s_office']->value == $_smarty_tpl->tpl_vars['o']->value['officeId']) {?> selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['officeName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_office_0_saved_local_item;
}
if ($__foreach_office_0_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_office_0_saved_item;
}
?>
	</select>
	<select name="s_group">
		<option value=""<?php if ($_smarty_tpl->tpl_vars['s_group']->value == 0) {?> selected=true<?php }?>>所属工作组</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['group']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_group_1_saved_item = isset($_smarty_tpl->tpl_vars['g']) ? $_smarty_tpl->tpl_vars['g'] : false;
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$__foreach_group_1_saved_local_item = $_smarty_tpl->tpl_vars['g'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['groupId'];?>
"<?php if ($_smarty_tpl->tpl_vars['s_group']->value == $_smarty_tpl->tpl_vars['g']->value['groupId']) {?> selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['g']->value['groupName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['g'] = $__foreach_group_1_saved_local_item;
}
if ($__foreach_group_1_saved_item) {
$_smarty_tpl->tpl_vars['g'] = $__foreach_group_1_saved_item;
}
?>
	</select>
	<select name="s_status">
		<option value=""<?php if ($_smarty_tpl->tpl_vars['s_status']->value == 0) {?> selected=true<?php }?>>审批状态</option>
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
		<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['s_status']->value == $_smarty_tpl->tpl_vars['key']->value) {?> selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved_local_item;
}
if ($__foreach_value_2_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved_item;
}
if ($__foreach_value_2_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_2_saved_key;
}
?>
	</select>
	<input type="text" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" placeholder="申请人">
	<input type="text" name="s_time" value="<?php echo $_smarty_tpl->tpl_vars['s_time']->value;?>
" placeholder="申请时间">
	<input type="submit" value="检索">
</form>

<table border="1">
	<tr>
		<td>#</td>
		<td>申请人</td>
		<td>部门</td>
		<td>工作组</td>
		<td>邮箱账户</td>
		<td>初始密码</td>
		<td>申请时间</td>
		<td>审批状态</td>
		<td>审批意见</td>
		<td>审批人</td>
		<td>操作</td>
	</tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_3_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_data_3_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['sn'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['applyUsr'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['office'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['group'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['mailName'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['initialPassword'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['applyTime'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['checkStatus'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['checkInfo'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['checkUsr'];?>
</td>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['i']->value['isCheck'] == 0) {?>
			<a href="?_f=mail-apply-check-info&act=check&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['mailApplyId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">审批</a>
			<?php } else { ?>
			<a href="?_f=mail-apply-check-info&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['mailApplyId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">查看</a>
			<?php }?>
		</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_3_saved_local_item;
}
if ($__foreach_data_3_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_3_saved_item;
}
?>
	
</table>
<div class="pagebox">
	<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

</div><?php }
}
