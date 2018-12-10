<?php
/* Smarty version 3.1.29, created on 2018-12-01 20:47:38
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/quit-apply-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c0282eaae4289_22437018',
  'file_dependency' => 
  array (
    '71d6ca0478aa578c0fdf8e8fb0316b15e1bcf884' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/quit-apply-set.html',
      1 => 1543667420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0282eaae4289_22437018 ($_smarty_tpl) {
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

	<input type="text" name="quitdate" placeholder="预计离职日期" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['quitDate'];?>
" /><br />

	<textarea name="reason" placeholder="离职原因"><?php echo $_smarty_tpl->tpl_vars['i']->value['reason'];?>
</textarea>

	<input type="submit" value="保存" />

</form><?php }
}
