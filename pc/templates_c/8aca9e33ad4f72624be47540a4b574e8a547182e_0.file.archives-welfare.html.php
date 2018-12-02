<?php
/* Smarty version 3.1.29, created on 2018-12-02 15:35:59
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/archives-welfare.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c038b5ff17741_48829330',
  'file_dependency' => 
  array (
    '8aca9e33ad4f72624be47540a4b574e8a547182e' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/archives-welfare.html',
      1 => 1543736054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c038b5ff17741_48829330 ($_smarty_tpl) {
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

	养老保险编号：<?php echo $_smarty_tpl->tpl_vars['i']->value['insuranceNo'];?>
<br />

	公积金编号：<?php echo $_smarty_tpl->tpl_vars['i']->value['fundNo'];?>
<br />

	社保帐户状态：<?php echo $_smarty_tpl->tpl_vars['i']->value['insuranceStatus'];?>
<br />

	公积金帐户状态：<?php echo $_smarty_tpl->tpl_vars['i']->value['fundStatus'];?>
<br />

	末次社保缴纳日期：<?php echo $_smarty_tpl->tpl_vars['i']->value['insuranceOverDate'];?>
<br />

	末次公积金缴纳日期：<?php echo $_smarty_tpl->tpl_vars['i']->value['fundOverDate'];?>



</form><?php }
}
