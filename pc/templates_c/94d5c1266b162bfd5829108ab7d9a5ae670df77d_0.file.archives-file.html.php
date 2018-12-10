<?php
/* Smarty version 3.1.29, created on 2018-12-02 16:11:57
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/archives-file.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c0393cd04bd34_33076131',
  'file_dependency' => 
  array (
    '94d5c1266b162bfd5829108ab7d9a5ae670df77d' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/archives-file.html',
      1 => 1543738303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0393cd04bd34_33076131 ($_smarty_tpl) {
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

	身份证证文件：
	<?php if ($_smarty_tpl->tpl_vars['i']->value['idFile'] == '') {?>
	未上传
	<?php } else { ?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['idFile'];?>
" target="_blank">已上传</a>
	<?php }?>
	<br />

	学历证书：
	<?php if ($_smarty_tpl->tpl_vars['i']->value['eduFile'] == '') {?>
	未上传
	<?php } else { ?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['eduFile'];?>
" target="_blank">已上传</a>
	<?php }?>
	<br />

	户口本：
	<?php if ($_smarty_tpl->tpl_vars['i']->value['registerFile'] == '') {?>
	未上传
	<?php } else { ?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['registerFile'];?>
" target="_blank">已上传</a>
	<?php }?>
	<br />

	体检报告：
	<?php if ($_smarty_tpl->tpl_vars['i']->value['reportFile'] == '') {?>
	未上传
	<?php } else { ?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['reportFile'];?>
" target="_blank">已上传</a>
	<?php }?>
	<br />

	其他资质证件：<br />
	<?php
$_from = $_smarty_tpl->tpl_vars['others']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_others_0_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_others_0_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['o']->value['attachFile'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['o']->value['attachName'];?>
</a><br />
	<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_others_0_saved_local_item;
}
if ($__foreach_others_0_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_others_0_saved_item;
}
?>



</form><?php }
}
