<?php
/* Smarty version 3.1.29, created on 2018-11-05 22:10:39
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/org/view/group-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be04f5fb9e871_40330370',
  'file_dependency' => 
  array (
    '8caba0bd29d63e9b5d5ccf368c344a3385c35e8e' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/org/view/group-set.html',
      1 => 1541426190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be04f5fb9e871_40330370 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post">

	<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
	<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_office']->value;?>
" />
	<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />

	工作组信息：<br />
	<select name="office">
		<option value="0" <?php if ($_smarty_tpl->tpl_vars['i']->value['officeId'] == 0) {?> selected="true"<?php }?>>所属部门</option>
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
		<option value="<?php echo $_smarty_tpl->tpl_vars['o']->value['officeId'];?>
"<?php if ($_smarty_tpl->tpl_vars['o']->value['officeId'] == $_smarty_tpl->tpl_vars['i']->value['officeId']) {?> selected="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['officeName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_0_saved_local_item;
}
if ($__foreach_offices_0_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_offices_0_saved_item;
}
?>
	</select>
	<input type="text" name="groupName" placeholder="小组名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['groupName'];?>
" /><br />
	<input type="text" name="phone" placeholder="部门联系电话" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
" /><br />
	<input type="text" name="rank" placeholder="显示排序" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" /><br />

	考勤设置：<br />
	<input type="checkbox" name="week[]" value="1" <?php if (in_array('1',$_smarty_tpl->tpl_vars['i']->value['workWeek']) || $_smarty_tpl->tpl_vars['i']->value['workWeek'] == '') {?> checked="true"<?php }?> />周一
	<input type="checkbox" name="week[]" value="2" <?php if (in_array('2',$_smarty_tpl->tpl_vars['i']->value['workWeek']) || $_smarty_tpl->tpl_vars['i']->value['workWeek'] == '') {?> checked="true"<?php }?>/>周二
	<input type="checkbox" name="week[]" value="3" <?php if (in_array('3',$_smarty_tpl->tpl_vars['i']->value['workWeek']) || $_smarty_tpl->tpl_vars['i']->value['workWeek'] == '') {?> checked="true"<?php }?>/>周三
	<input type="checkbox" name="week[]" value="4" <?php if (in_array('4',$_smarty_tpl->tpl_vars['i']->value['workWeek']) || $_smarty_tpl->tpl_vars['i']->value['workWeek'] == '') {?> checked="true"<?php }?>/>周四
	<input type="checkbox" name="week[]" value="5" <?php if (in_array('5',$_smarty_tpl->tpl_vars['i']->value['workWeek']) || $_smarty_tpl->tpl_vars['i']->value['workWeek'] == '') {?> checked="true"<?php }?>/>周五
	<input type="checkbox" name="week[]" value="6" <?php if (in_array('6',$_smarty_tpl->tpl_vars['i']->value['workWeek'])) {?> checked="true"<?php }?>/>周六
	<input type="checkbox" name="week[]" value="7" <?php if (in_array('7',$_smarty_tpl->tpl_vars['i']->value['workWeek'])) {?> checked="true"<?php }?>/>周日
	<br />
	<input type="text" name="workBeginTime" placeholder="上班时间" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['workBeginTime'];?>
" /><br />
	<input type="text" name="workOverTime" placeholder="下班时间" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['workOverTime'];?>
" /><br />
	<input type="hidden" name="workCoordinate" placeholder="打卡坐标" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['workCoordinate'];?>
" /><br />
	<select name="workRange">
		<option value=""<?php if ($_smarty_tpl->tpl_vars['i']->value['workRange'] == 0) {?> selected="true"<?php }?>>打卡范围</option>
		<option value="100"<?php if ($_smarty_tpl->tpl_vars['i']->value['workRange'] == 100) {?> selected="true"<?php }?>>100米</option>
		<option value="300"<?php if ($_smarty_tpl->tpl_vars['i']->value['workRange'] == 300) {?> selected="true"<?php }?>>300米</option>
		<option value="500"<?php if ($_smarty_tpl->tpl_vars['i']->value['workRange'] == 5000) {?> selected="true"<?php }?>>500米</option>
		<option value="800"<?php if ($_smarty_tpl->tpl_vars['i']->value['workRange'] == 8000) {?> selected="true"<?php }?>>800米</option>
		<option value="1000"<?php if ($_smarty_tpl->tpl_vars['i']->value['workRange'] == 1000) {?> selected="true"<?php }?>>1000米</option>
	</select>

	<input type="submit" value="保存" />

</form><?php }
}
