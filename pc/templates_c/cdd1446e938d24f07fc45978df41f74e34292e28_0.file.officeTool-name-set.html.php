<?php
/* Smarty version 3.1.29, created on 2018-10-28 11:20:08
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/officeTool-name-set.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bd52ae843b340_09466512',
  'file_dependency' => 
  array (
    'cdd1446e938d24f07fc45978df41f74e34292e28' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/system/view/officeTool-name-set.html',
      1 => 1540696806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd52ae843b340_09466512 ($_smarty_tpl) {
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="post">

	<input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
	<input type="hidden" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" />
	<input type="hidden" name="s_category" value="<?php echo $_smarty_tpl->tpl_vars['s_category']->value;?>
" />
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
	<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
	<select name="category">
		<option value="0" <?php if ($_smarty_tpl->tpl_vars['s_category']->value == '') {?> selected="true"<?php }?>>备品分类</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['categorys']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_categorys_0_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_categorys_0_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['categoryId'];?>
"<?php if ($_smarty_tpl->tpl_vars['c']->value['categoryId'] == $_smarty_tpl->tpl_vars['i']->value['categoryId']) {?> selected="true"<?php }?>><?php echo ($_smarty_tpl->tpl_vars['c']->value['categoryCode']).($_smarty_tpl->tpl_vars['c']->value['categoryName']);?>
</option>
		<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_categorys_0_saved_local_item;
}
if ($__foreach_categorys_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_categorys_0_saved_item;
}
?>
	</select><br />
	<input type="text" name="toolName" placeholder="备品名称" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['toolName'];?>
" /><br />
	<input type="text" name="toolCode" placeholder="备品编号" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['toolCode'];?>
" /><br />
	生成编号
	<input type="radio" name="createNumber" value="1"<?php if ($_smarty_tpl->tpl_vars['i']->value['isFixedAssets'] == 1) {?> checked<?php }?>>是
	<input type="radio" name="createNumber" value="0"<?php if ($_smarty_tpl->tpl_vars['i']->value['isFixedAssets'] == 0) {?> checked<?php }?>>否<br />
	<input type="text" name="rank" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" placeholder="排序" /><br />
	<input type="submit" value="保存" />

</form><?php }
}
