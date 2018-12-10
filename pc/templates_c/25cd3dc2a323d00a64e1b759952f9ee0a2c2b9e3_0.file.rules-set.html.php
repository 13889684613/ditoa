<?php
/* Smarty version 3.1.29, created on 2018-12-02 10:07:26
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/generalAffairs/view/rules-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c033e5eb31785_87022594',
  'file_dependency' => 
  array (
    '25cd3dc2a323d00a64e1b759952f9ee0a2c2b9e3' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/generalAffairs/view/rules-set.html',
      1 => 1543716267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c033e5eb31785_87022594 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post" enctype="multipart/form-data">

	<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
	<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />

	<input type="text" name="title" placeholder="制度名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
" /><br />

	<?php if ($_smarty_tpl->tpl_vars['i']->value['attach'] != '') {?>
	<a href="upload/file/rule/<?php echo $_smarty_tpl->tpl_vars['i']->value['attach'];?>
" target="_blank">已上传文件</a>
	<input type="hidden" name="oldRule" value="upload/file/rule/<?php echo $_smarty_tpl->tpl_vars['i']->value['attach'];?>
">
	<?php }?>
	<input type="file" name="attach[]" value="上传制度文件" /><br />
	
	<input type="text" name="rank" placeholder="显示排序" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" /><br />

	<input type="submit" value="保存" />

</form><?php }
}
