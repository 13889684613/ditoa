<?php
/* Smarty version 3.1.29, created on 2018-10-25 19:45:56
  from "F:\website\ditoa\pc\system\view\officeTool-type-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bd1acf42a4602_61116014',
  'file_dependency' => 
  array (
    'e46a812bc7ac00f71f44b79ff5d918c9ed70c128' => 
    array (
      0 => 'F:\\website\\ditoa\\pc\\system\\view\\officeTool-type-set.html',
      1 => 1540467526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd1acf42a4602_61116014 ($_smarty_tpl) {
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
