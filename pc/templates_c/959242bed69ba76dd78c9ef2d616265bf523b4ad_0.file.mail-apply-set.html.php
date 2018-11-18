<?php
/* Smarty version 3.1.29, created on 2018-11-18 10:42:46
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/mail-apply-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bf0d1a6727933_57645793',
  'file_dependency' => 
  array (
    '959242bed69ba76dd78c9ef2d616265bf523b4ad' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/mail-apply-set.html',
      1 => 1542434416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf0d1a6727933_57645793 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post">

	<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
	<input type="hidden" name="s_office" value="<?php echo $_smarty_tpl->tpl_vars['s_office']->value;?>
" />
	<input type="hidden" name="s_group" value="<?php echo $_smarty_tpl->tpl_vars['s_group']->value;?>
" />
	<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />

	<input type="text" name="mailName" placeholder="邮箱帐号" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['mailName'];?>
" /><br />

	<textarea name="reason" placeholder="申请原因"><?php echo $_smarty_tpl->tpl_vars['i']->value['reason'];?>
</textarea>

	<input type="submit" value="保存" />

</form><?php }
}
