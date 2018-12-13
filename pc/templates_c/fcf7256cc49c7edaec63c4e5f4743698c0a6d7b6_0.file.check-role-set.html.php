<?php
/* Smarty version 3.1.29, created on 2018-12-13 14:32:15
  from "F:\website\ditoaCoder\ditoa\pc\system\view\check-role-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c11fcefef6832_56669547',
  'file_dependency' => 
  array (
    'fcf7256cc49c7edaec63c4e5f4743698c0a6d7b6' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\system\\view\\check-role-set.html',
      1 => 1542002129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c11fcefef6832_56669547 ($_smarty_tpl) {
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

系统用户默认角色：
<input type="radio" name="default" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['isDefault'] == 1) {?> checked="true"<?php }?>>是
<input type="radio" name="default" value="0"<?php if ($_smarty_tpl->tpl_vars['i']->value['isDefault'] == 0) {?> checked="true"<?php }?>>否

<input type="submit" value="保存" />
</form><?php }
}
