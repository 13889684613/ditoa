<?php
/* Smarty version 3.1.29, created on 2018-12-02 11:06:33
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/post-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c034c39babb51_20713062',
  'file_dependency' => 
  array (
    '79bb77d4dc75c7554d42d38567a050d23eaa3e8d' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/post-set.html',
      1 => 1540466338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c034c39babb51_20713062 ($_smarty_tpl) {
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

<input type="submit" value="保存" />
</form><?php }
}
