<?php
/* Smarty version 3.1.29, created on 2018-11-12 22:13:16
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-entry.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be98a7c6c18e6_14544306',
  'file_dependency' => 
  array (
    '1b2aaa2c95a5627d4ee2c91d05ce2a4bb42955c2' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-entry.html',
      1 => 1542031962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be98a7c6c18e6_14544306 ($_smarty_tpl) {
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
	<input type="hidden" name="s_role" value="<?php echo $_smarty_tpl->tpl_vars['s_role']->value;?>
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
	<input type="hidden" name="s_idno" value="<?php echo $_smarty_tpl->tpl_vars['s_idno']->value;?>
" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<input type="hidden" name="act" value="editSave" />
	
	<input type="text" name="joinDate" placeholder="入职时间" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['joinDate'];?>
" /><br />
	<input type="text" name="tryBeginDate" placeholder="试用开始日期" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['tryBeginDate'];?>
" /><br />
	<input type="text" name="tryOverDate" placeholder="试用截止日期" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['tryOverDate'];?>
" /><br />
	<input type="text" name="interviewer" placeholder="面试人员" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['interviewer'];?>
" /><br />
	<input type="text" name="expectedSalary" placeholder="期望工资" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['expectedSalary'];?>
" />元/月<br />
	<input type="text" name="trySalary" placeholder="试用期工资" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['trySalary'];?>
" />元/月<br />

	<?php if ($_smarty_tpl->tpl_vars['isSet']->value == 1) {?>
	修改资料备注：<textarea name="updateRemark" placeholder="请标明调整内容及原因"></textarea>
	<?php }?>

	<input type="submit" value="保存" />

</form><?php }
}
