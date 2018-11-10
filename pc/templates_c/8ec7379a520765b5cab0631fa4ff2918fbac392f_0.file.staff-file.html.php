<?php
/* Smarty version 3.1.29, created on 2018-11-10 21:17:57
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-file.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be6da85b6aaf6_25417066',
  'file_dependency' => 
  array (
    '8ec7379a520765b5cab0631fa4ff2918fbac392f' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-file.html',
      1 => 1541855876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be6da85b6aaf6_25417066 ($_smarty_tpl) {
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
	
	<?php if ($_smarty_tpl->tpl_vars['idFile']->value != '') {?>
	<a href="upload/file/staff/<?php echo $_smarty_tpl->tpl_vars['idFile']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['idFile']->value;?>
</a>
	<?php }?>
	身份证正反面：<input type="file" name="staffFile[]" /><br />

	<?php if ($_smarty_tpl->tpl_vars['eduFile']->value != '') {?>
	<a href="upload/file/staff/<?php echo $_smarty_tpl->tpl_vars['eduFile']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['eduFile']->value;?>
</a>
	<?php }?>
	学历证书:<input type="file" name="staffFile[]" /><br />

	<?php if ($_smarty_tpl->tpl_vars['registerFile']->value != '') {?>
	<a href="upload/file/staff/<?php echo $_smarty_tpl->tpl_vars['registerFile']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['registerFile']->value;?>
</a>
	<?php }?>
	户口本:<input type="file" name="staffFile[]" /><br />

	<?php if ($_smarty_tpl->tpl_vars['reportFile']->value != '') {?>
	<a href="upload/file/staff/<?php echo $_smarty_tpl->tpl_vars['reportFile']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['reportFile']->value;?>
</a>
	<?php }?>
	体检报告:<input type="file" name="staffFile[]" /><br />

	其它资质证件:<span style="color:#ce0000;">证件名称不能重复</span><br />
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
	<input type="text" name="otherName[]" value="<?php echo $_smarty_tpl->tpl_vars['o']->value['attachName'];?>
" placeholder="证件名称" ><input type="file" name="staffFile[]" /><a href="upload/file/staff/<?php echo $_smarty_tpl->tpl_vars['o']->value['attachFile'];?>
"><?php echo $_smarty_tpl->tpl_vars['o']->value['attachName'];?>
</a><br />
	<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_others_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['o']->_loop) {
?>
	<input type="text" name="otherName[]" placeholder="证件名称" >
	<input type="file" name="staffFile[]" /><br />
	<input type="text" name="otherName[]" placeholder="证件名称" >
	<input type="file" name="staffFile[]" /><br />
	<?php
}
if ($__foreach_others_0_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_others_0_saved_item;
}
?>


	<input type="submit" value="保存" />

</form><?php }
}
