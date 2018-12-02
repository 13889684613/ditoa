<?php
/* Smarty version 3.1.29, created on 2018-12-02 10:37:34
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/generalAffairs/view/certificate-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c03456eeb58e0_77085387',
  'file_dependency' => 
  array (
    'c703ddf66188aa4e8a670f544cffb334f15182b9' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/generalAffairs/view/certificate-set.html',
      1 => 1543718006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c03456eeb58e0_77085387 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post" enctype="multipart/form-data">

	<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_company']->value;?>
" />
	<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
	<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />

	<select name="company">
		<option value=""<?php if ($_smarty_tpl->tpl_vars['i']->value['companyId'] == 0) {?> selected=true<?php }?>>所属企业</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['company']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_company_0_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_company_0_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['companyId'];?>
"<?php if ($_smarty_tpl->tpl_vars['c']->value['companyId'] == $_smarty_tpl->tpl_vars['i']->value['companyId']) {?> selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['cnName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_company_0_saved_local_item;
}
if ($__foreach_company_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_company_0_saved_item;
}
?>
	</select>

	<input type="text" name="cerName" placeholder="证件名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cerName'];?>
" /><br />

	<?php if ($_smarty_tpl->tpl_vars['i']->value['cerImg'] != '') {?>
	<a href="upload/file/cer/<?php echo $_smarty_tpl->tpl_vars['i']->value['cerImg'];?>
" target="_blank">已上传文件</a>
	<input type="hidden" name="old" value="upload/file/cer/<?php echo $_smarty_tpl->tpl_vars['i']->value['cerImg'];?>
">
	<?php }?>
	<input type="file" name="photo[]" value="上传证件照片" /><br />

	<input type="text" name="overDate" placeholder="证件到期日" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['overDate'];?>
" /><br />

	<input type="text" name="remark" placeholder="备注" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['remark'];?>
" /><br />
	
	<input type="text" name="rank" placeholder="显示排序" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" /><br />

	<input type="submit" value="保存" />

</form><?php }
}
