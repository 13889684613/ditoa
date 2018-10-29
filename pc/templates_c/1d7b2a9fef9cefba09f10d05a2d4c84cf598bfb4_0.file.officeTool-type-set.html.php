<?php
/* Smarty version 3.1.29, created on 2018-10-28 08:55:29
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/officeTool-type-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bd509013de561_84643936',
  'file_dependency' => 
  array (
    '1d7b2a9fef9cefba09f10d05a2d4c84cf598bfb4' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/officeTool-type-set.html',
      1 => 1540467526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd509013de561_84643936 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post">

	<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
	<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
	<input type="text" name="categoryName" placeholder="备品类别名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['categoryName'];?>
" /><br />
	<input type="text" name="categoryCode" placeholder="备品类别编号" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['categoryCode'];?>
" /><br />
	<input type="text" name="rank" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" placeholder="排序" /><br />
	<input type="submit" value="保存" />

</form><?php }
}
