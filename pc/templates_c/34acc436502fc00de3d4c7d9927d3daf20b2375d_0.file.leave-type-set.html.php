<?php
/* Smarty version 3.1.29, created on 2018-10-25 19:11:29
  from "F:\website\ditoa\pc\system\view\leave-type-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bd1a4e1389a51_22003692',
  'file_dependency' => 
  array (
    '34acc436502fc00de3d4c7d9927d3daf20b2375d' => 
    array (
      0 => 'F:\\website\\ditoa\\pc\\system\\view\\leave-type-set.html',
      1 => 1540465886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd1a4e1389a51_22003692 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post">

	<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
	<input type="hidden" name="s_typeName" value="<?php echo $_smarty_tpl->tpl_vars['s_typeName']->value;?>
" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
	<input type="text" name="typeName" placeholder="假期类型名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['typeName'];?>
" /><br />
	<input type="text" name="day" placeholder="假期天数" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['dayNumber'];?>
" /><br />
	是否为年假：
	<input type="radio" name="annualLeave" value="1""<?php if ($_smarty_tpl->tpl_vars['i']->value['annualLeave'] == 1) {?> checked<?php }?>>是
	<input type="radio" name="annualLeave" value="0"<?php if ($_smarty_tpl->tpl_vars['i']->value['annualLeave'] == 0) {?> checked<?php }?>>否<br />
	是否需要上传附件：
	<input type="radio" name="isAttach" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['isAttach'] == 1) {?> checked<?php }?>>是
	<input type="radio" name="isAttach" value="0"<?php if ($_smarty_tpl->tpl_vars['i']->value['isAttach'] == 0) {?> checked<?php }?>>否<br />
	是否为固定天数假期：
	<input type="radio" name="isSameSetting" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['isSameSetting'] == 1) {?> checked<?php }?>>是
	<input type="radio" name="isSameSetting" value="0"<?php if ($_smarty_tpl->tpl_vars['i']->value['isSameSetting'] == 0) {?> checked<?php }?>>否<br />

	<input type="text" name="rank" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" placeholder="排序" /><br />
	<textarea name="remark" placeholder="假期说明"><?php echo $_smarty_tpl->tpl_vars['i']->value['remark'];?>
</textarea>
	<input type="submit" value="保存" />

</form><?php }
}
