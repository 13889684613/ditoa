<?php
/* Smarty version 3.1.29, created on 2018-12-02 14:35:57
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/archives.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c037d4dcb2f23_23549435',
  'file_dependency' => 
  array (
    '2cb7959d3d139f47e65b5c8de9cb10d083559f6f' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/humanAffairs/view/archives.html',
      1 => 1543732536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c037d4dcb2f23_23549435 ($_smarty_tpl) {
?>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<form method="get">
	<input type="hidden" name="_f" value="archives">
	<select name="s_company">
		<option value=""<?php if ($_smarty_tpl->tpl_vars['s_company']->value == 0) {?> selected=true<?php }?>>所属公司</option>
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
"<?php if ($_smarty_tpl->tpl_vars['s_company']->value == $_smarty_tpl->tpl_vars['c']->value['companyId']) {?> selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['cnName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['c'] = $__foreach_company_0_saved_local_item;
}
if ($__foreach_company_0_saved_item) {
$_smarty_tpl->tpl_vars['c'] = $__foreach_company_0_saved_item;
}
?>
	</select>
	<select name="s_office">
		<option value=""<?php if ($_smarty_tpl->tpl_vars['s_office']->value == 0) {?> selected=true<?php }?>>所属部门</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['office']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_office_1_saved_item = isset($_smarty_tpl->tpl_vars['o']) ? $_smarty_tpl->tpl_vars['o'] : false;
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$__foreach_office_1_saved_local_item = $_smarty_tpl->tpl_vars['o'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['o']->value['officeId'];?>
"<?php if ($_smarty_tpl->tpl_vars['s_office']->value == $_smarty_tpl->tpl_vars['o']->value['officeId']) {?> selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['officeName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['o'] = $__foreach_office_1_saved_local_item;
}
if ($__foreach_office_1_saved_item) {
$_smarty_tpl->tpl_vars['o'] = $__foreach_office_1_saved_item;
}
?>
	</select>
	<select name="s_post">
		<option value=""<?php if ($_smarty_tpl->tpl_vars['s_post']->value == 0) {?> selected=true<?php }?>>职务</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['post']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_post_2_saved_item = isset($_smarty_tpl->tpl_vars['p']) ? $_smarty_tpl->tpl_vars['p'] : false;
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$__foreach_post_2_saved_local_item = $_smarty_tpl->tpl_vars['p'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['postId'];?>
"<?php if ($_smarty_tpl->tpl_vars['s_post']->value == $_smarty_tpl->tpl_vars['p']->value['postId']) {?> selected=true<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['postName'];?>
</option>
		<?php
$_smarty_tpl->tpl_vars['p'] = $__foreach_post_2_saved_local_item;
}
if ($__foreach_post_2_saved_item) {
$_smarty_tpl->tpl_vars['p'] = $__foreach_post_2_saved_item;
}
?>
	</select>
	<select name="s_status">
		<option value=""<?php if ($_smarty_tpl->tpl_vars['s_status']->value == '') {?> selected="true"<?php }?>>状态</option>
		<?php
$_from = $_smarty_tpl->tpl_vars['status']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_3_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_3_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_3_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['s_status']->value) {?> selected="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
		<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_3_saved_local_item;
}
if ($__foreach_value_3_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_3_saved_item;
}
if ($__foreach_value_3_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_3_saved_key;
}
?>
	</select>
	<input type="text" name="s_begintime" value="<?php echo $_smarty_tpl->tpl_vars['s_begintime']->value;?>
" placeholder="合同到期开始日期">
	<input type="text" name="s_overtime" value="<?php echo $_smarty_tpl->tpl_vars['s_overtime']->value;?>
" placeholder="合同到期截止日期">
	<input type="text" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" placeholder="真实姓名">
	<input type="submit" value="检索">
</form>

<table border="1">
	<tr>
		<td>#</td>
		<td>真实姓名</td>
		<td>所属企业</td>
		<td>所属部门</td>
		<td>职务</td>
		<td>身份证号</td>
		<td>入职时间</td>
		<td>手机号码</td>
		<td>邮箱账户</td>
		<td>合同期间</td>
		<td>状态</td>
		<td>操作</td>
	</tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_4_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_data_4_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['sn'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['staffName'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['company'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['office'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['post'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['idNumber'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['joinDate'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['tel'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['contract'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
</td>
		<td>
			<a href="?_f=archives-info&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['staffId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">查看</a>
		</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_4_saved_local_item;
}
if ($__foreach_data_4_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_4_saved_item;
}
?>
	
</table>
<div class="pagebox">
	<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

</div><?php }
}
