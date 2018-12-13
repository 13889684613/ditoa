<?php
/* Smarty version 3.1.29, created on 2018-12-13 13:48:31
  from "F:\website\ditoaCoder\ditoa\pc\humanAffairs\view\mail-apply-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c11f2af62f9e3_09718672',
  'file_dependency' => 
  array (
    '857155dc9fe5d52efdc88266674438b23eb7bd5b' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\humanAffairs\\view\\mail-apply-set.html',
      1 => 1542615913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c11f2af62f9e3_09718672 ($_smarty_tpl) {
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
