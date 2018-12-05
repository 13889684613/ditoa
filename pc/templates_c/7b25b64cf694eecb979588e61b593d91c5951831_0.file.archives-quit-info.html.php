<?php
/* Smarty version 3.1.29, created on 2018-12-05 22:25:56
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/archives-quit-info.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c07dff4ab4163_17626115',
  'file_dependency' => 
  array (
    '7b25b64cf694eecb979588e61b593d91c5951831' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/archives-quit-info.html',
      1 => 1544019945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c07dff4ab4163_17626115 ($_smarty_tpl) {
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
	<input type="hidden" name="nav" value="<?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
" />
	<input type="hidden" name="s_category" value="<?php echo $_smarty_tpl->tpl_vars['s_category']->value;?>
" />

	实际离职日期：<?php echo $_smarty_tpl->tpl_vars['i']->value['trueQuitDate'];?>
<br />

	离职申请表：<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['quitTable'];?>
">已上传：离职申请-<?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
.pdf</a>


</form><?php }
}
