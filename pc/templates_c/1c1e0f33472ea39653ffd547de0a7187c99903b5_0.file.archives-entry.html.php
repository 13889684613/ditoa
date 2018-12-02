<?php
/* Smarty version 3.1.29, created on 2018-12-02 15:46:37
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/archives-entry.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c038ddd22a388_69921263',
  'file_dependency' => 
  array (
    '1c1e0f33472ea39653ffd547de0a7187c99903b5' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/archives-entry.html',
      1 => 1543736466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c038ddd22a388_69921263 ($_smarty_tpl) {
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

	入职时间：<?php echo $_smarty_tpl->tpl_vars['i']->value['joinDate'];?>
<br />

	试用期：<?php echo $_smarty_tpl->tpl_vars['i']->value['try'];?>
<br />

	面试人员：<?php echo $_smarty_tpl->tpl_vars['i']->value['interviewer'];?>
<br />

	期望工资：<?php echo $_smarty_tpl->tpl_vars['i']->value['expectedSalary'];?>
元/月<br />

	试用期工资：<?php echo $_smarty_tpl->tpl_vars['i']->value['trySalary'];?>
元/月


</form><?php }
}
