<?php
/* Smarty version 3.1.29, created on 2018-11-04 17:24:09
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/org/view/office.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bdebab9201db2_73552609',
  'file_dependency' => 
  array (
    '28fe75713839c113283622107cf0f771be7b2dd6' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/org/view/office.html',
      1 => 1541323448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdebab9201db2_73552609 ($_smarty_tpl) {
?>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<table border="1">
	<tr>
		<td>#</td>
		<td>部门编号</td>
		<td>部门名称</td>
		<td>联系电话</td>
		<td>传真</td>
		<td>详细地址</td>
		<td>排序</td>
		<td>操作</td>
	</tr>
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
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['sn'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['officeCode'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['officeName'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['fax'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['address'];?>
</td>
		<td>
			<input id="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['officeId'];?>
" name="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['officeId'];?>
" class="m-wrap" type="text" size="5" style="width:30px;height: 9px;margin: 0;" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['rank'];?>
"/><a href="javascript:void(0);" onclick="javascript:location.href='?_f=office&act=updateRank&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['officeId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
&rank='+document.getElementById('rank<?php echo $_smarty_tpl->tpl_vars['i']->value['officeId'];?>
').value;">保存</a>
		</td>
		<td>
			<a href="?_f=office&act=remove&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['officeId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">删除</a>
			<a href="?_f=office-set&act=edit&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['officeId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">修改</a>
		</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_local_item;
}
if ($__foreach_data_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_data_0_saved_item;
}
?>
	
</table>
<div class="pagebox">
	<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

</div><?php }
}
