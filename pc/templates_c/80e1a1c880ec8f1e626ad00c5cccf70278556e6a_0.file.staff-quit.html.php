<?php
/* Smarty version 3.1.29, created on 2018-11-12 22:27:36
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-quit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be98dd89b30f9_48383786',
  'file_dependency' => 
  array (
    '80e1a1c880ec8f1e626ad00c5cccf70278556e6a' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-quit.html',
      1 => 1542032849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be98dd89b30f9_48383786 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post" enctype="multipart/form-data">

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
	
	<input type="text" name="trueQuitDate" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['trueQuitDate'];?>
" placeholder="离职日期"><br />

	<?php if ($_smarty_tpl->tpl_vars['i']->value['quitTable'] != '') {?>
	<a href="upload/file/staff/<?php echo $_smarty_tpl->tpl_vars['i']->value['quitTable'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['quitTable'];?>
</a>
	<?php }?>
	离职申请表：<input type="file" name="quitTable[]" /><br />

	<?php if ($_smarty_tpl->tpl_vars['isSet']->value == true) {?>
	修改资料备注：<textarea name="updateRemark" placeholder="请标明调整内容及原因"></textarea>
	<?php }?>

	<input type="submit" value="保存" />

</form><?php }
}
