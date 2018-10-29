<?php
/* Smarty version 3.1.29, created on 2018-10-25 15:00:58
  from "F:\website\ditoa\pc\system\view\post-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bd16a2a8732e6_99975199',
  'file_dependency' => 
  array (
    'cb27abeb69ed5631b916afeed264652d0c2c7bba' => 
    array (
      0 => 'F:\\website\\ditoa\\pc\\system\\view\\post-set.html',
      1 => 1540450857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd16a2a8732e6_99975199 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post">
<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
<input type="hidden" name="s_postName" value="<?php echo $_smarty_tpl->tpl_vars['s_postName']->value;?>
" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
<input type="text" name="postName" placeholder="职务名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['postName'];?>
" /><br />
<input type="text" name="rank" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" placeholder="排序" /><br />

<input type="submit" name="保存" />
</form><?php }
}
