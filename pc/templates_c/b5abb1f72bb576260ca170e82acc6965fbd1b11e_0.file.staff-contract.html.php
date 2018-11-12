<?php
/* Smarty version 3.1.29, created on 2018-11-12 22:21:45
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-contract.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be98c794a2b80_74287392',
  'file_dependency' => 
  array (
    'b5abb1f72bb576260ca170e82acc6965fbd1b11e' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/staff-contract.html',
      1 => 1542032494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be98c794a2b80_74287392 ($_smarty_tpl) {
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

	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_data_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
	<input type="hidden" name="contractId[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['contractId'];?>
">
	<select name="company[]">
		<option value=""<?php if ($_smarty_tpl->tpl_vars['i']->value['companyId'] == 0) {?> selected="true"<?php }?>>所属企业</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['companys']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_companys_1_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_companys_1_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['companyId'];?>
"<?php if ($_smarty_tpl->tpl_vars['i']->value['companyId'] == $_smarty_tpl->tpl_vars['c']->value['companyId']) {?> selected="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['cnName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_companys_1_saved_local_item;
}
if ($__foreach_companys_1_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_companys_1_saved_item;
}
?>
	</select><br />
	<input type="text" name="contractNo[]" placeholder="合同编号" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['contractNo'];?>
" /><br />
	<input type="text" name="beginDate[]" placeholder="开始日期" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['beginDate'];?>
" /><br />
	<input type="text" name="overDate[]" placeholder="截止日期" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['overDate'];?>
" /><br />
	<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?>
	<input type="hidden" name="contractId[]" value="0">
	<select name="company[]">
		<option value="">所属企业</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['companys']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_companys_2_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_companys_2_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['companyId'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['cnName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_companys_2_saved_local_item;
}
if ($__foreach_companys_2_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_companys_2_saved_item;
}
?>
	</select><br />
	<input type="text" name="contractNo[]" placeholder="合同编号" value="" /><br />
	<input type="text" name="beginDate[]" placeholder="开始日期" value="" /><br />
	<input type="text" name="overDate[]" placeholder="截止日期" value="" /><br />
	<br />
	<input type="hidden" name="contractId[]" value="0">
	<select name="company[]">
		<option value="">所属企业</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['companys']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_companys_3_saved_item = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$__foreach_companys_3_saved_local_item = $_smarty_tpl->tpl_vars['c'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['companyId'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['cnName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_companys_3_saved_local_item;
}
if ($__foreach_companys_3_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_companys_3_saved_item;
}
?>
	</select><br />
	<input type="text" name="contractNo[]" placeholder="合同编号" value="" /><br />
	<input type="text" name="beginDate[]" placeholder="开始日期" value="" /><br />
	<input type="text" name="overDate[]" placeholder="截止日期" value="" /><br />
	<?php
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_item;
}
?>

	<?php if ($_smarty_tpl->tpl_vars['dataCount']->value > 0) {?>
	修改资料备注：<textarea name="updateRemark" placeholder="请标明调整内容及原因"></textarea>
	<?php }?>

	<input type="submit" value="保存" />

</form><?php }
}
