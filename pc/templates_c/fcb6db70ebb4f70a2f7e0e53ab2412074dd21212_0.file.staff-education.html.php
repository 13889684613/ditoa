<?php
/* Smarty version 3.1.29, created on 2018-11-12 22:01:32
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-education.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be987bc06da61_41685510',
  'file_dependency' => 
  array (
    'fcb6db70ebb4f70a2f7e0e53ab2412074dd21212' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-education.html',
      1 => 1542031193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be987bc06da61_41685510 ($_smarty_tpl) {
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
	<input type="hidden" name="resumeId[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['resumeId'];?>
">
	<input type="text" name="beginDate[]" placeholder="开始日期" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['beginDate'];?>
" /><br />
	<input type="text" name="overDate[]" placeholder="结束日期" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['overDate'];?>
" /><br />
	<input type="text" name="workUnit[]" placeholder="单位名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['workUnit'];?>
" /><br />
	<input type="text" name="postName[]" placeholder="职务" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['postName'];?>
" /><br />
	<input type="text" name="remark[]" placeholder="备注" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['remark'];?>
" /><br /><br />
	<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?>
	<input type="hidden" name="resumeId[]" value="0">
	<input type="text" name="beginDate[]" placeholder="开始日期" value="" /><br />
	<input type="text" name="overDate[]" placeholder="结束日期" value="" /><br />
	<input type="text" name="workUnit[]" placeholder="单位名称" value="" /><br />
	<input type="text" name="postName[]" placeholder="职务" value="" /><br />
	<input type="text" name="remark[]" placeholder="备注" value="" /><br /><br />
	
	<input type="hidden" name="resumeId[]" value="0">
	<input type="text" name="beginDate[]" placeholder="开始日期" value="" /><br />
	<input type="text" name="overDate[]" placeholder="结束日期" value="" /><br />
	<input type="text" name="workUnit[]" placeholder="单位名称" value="" /><br />
	<input type="text" name="postName[]" placeholder="职务" value="" /><br />
	<input type="text" name="remark[]" placeholder="备注" value="" /><br /><br />
	<?php
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_item;
}
?>

	<?php if ($_smarty_tpl->tpl_vars['dataCount']->value > 0) {?>
	修改资料备注：<textarea name="updateRemark" placeholder="请标明调整内容及原因"></textarea>
	<?php }?>

	<input type="submit" value="保存" />

</form><?php }
}
