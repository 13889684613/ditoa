<?php
/* Smarty version 3.1.29, created on 2018-10-25 14:49:57
  from "F:\website\ditoa\pc\system\view\check-role-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bd167959a89e1_34095194',
  'file_dependency' => 
  array (
    '8bf4cd9785e69d99ab45a493eaa604779d2165a1' => 
    array (
      0 => 'F:\\website\\ditoa\\pc\\system\\view\\check-role-set.html',
      1 => 1540450195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd167959a89e1_34095194 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post">
<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
<input type="hidden" name="s_roleName" value="<?php echo $_smarty_tpl->tpl_vars['s_roleName']->value;?>
" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
<input type="text" name="roleName" placeholder="审批角色名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['checkRoleName'];?>
" /><br />
<input type="text" name="rank" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" placeholder="排序" /><br />

<input type="submit" name="保存" />
</form><?php }
}
