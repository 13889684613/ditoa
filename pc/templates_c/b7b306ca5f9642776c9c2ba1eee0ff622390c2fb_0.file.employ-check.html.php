<?php
/* Smarty version 3.1.29, created on 2018-12-13 14:21:31
  from "F:\website\ditoaCoder\ditoa\pc\humanAffairs\view\employ-check.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c11fa6b3af528_28150814',
  'file_dependency' => 
  array (
    'b7b306ca5f9642776c9c2ba1eee0ff622390c2fb' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\humanAffairs\\view\\employ-check.html',
      1 => 1544682090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c11fa6b3af528_28150814 ($_smarty_tpl) {
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
	<input type="text" name="s_name" value="<?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
" placeholder="试用人员">
	<input type="submit" value="检索">
</form>

<table border="1">
	<tr>
		<td>#</td>
		<td>试用人员</td>
		<td>所属企业</td>
		<td>所属部门</td>
		<td>试用期</td>
		<td>考核结果</td>
		<td>考核人员</td>
		<td>操作</td>
	</tr>
	<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_data_2_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$__foreach_data_2_saved_local_item = $_smarty_tpl->tpl_vars['i'];
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
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['date'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['result'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['checkUsr'];?>
</td>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['i']->value['isCheck'] == 0) {?>
			<a href="?_f=employ-check-set&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&s=<?php echo $_smarty_tpl->tpl_vars['i']->value['staffId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">考核</a>
			<?php } else { ?>
			<a href="?_f=employ-check-info&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['appraiseId'];?>
&s=<?php echo $_smarty_tpl->tpl_vars['i']->value['staffId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">查看</a>
			<?php if ($_smarty_tpl->tpl_vars['i']->value['isSp'] == 0) {?>
			<a href="?_f=employ-check-set&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['appraiseId'];?>
&s=<?php echo $_smarty_tpl->tpl_vars['i']->value['staffId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">重新考核</a>
			<?php }?>
			<?php }?>
		</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_2_saved_local_item;
}
if ($__foreach_data_2_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_2_saved_item;
}
?>
</table>
<div class="pagebox">
	<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

</div><?php }
}
