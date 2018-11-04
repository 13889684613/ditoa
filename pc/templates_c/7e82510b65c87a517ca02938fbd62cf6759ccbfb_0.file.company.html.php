<?php
/* Smarty version 3.1.29, created on 2018-11-04 16:10:14
  from "/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/org/view/company.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bdea966ab7f04_93351272',
  'file_dependency' => 
  array (
    '7e82510b65c87a517ca02938fbd62cf6759ccbfb' => 
    array (
      0 => '/Library/WebServer/Documents/Coder/2018/system/ditoa/pc/org/view/company.html',
      1 => 1541319013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdea966ab7f04_93351272 ($_smarty_tpl) {
?>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<table border="1">
	<tr>
		<td>#</td>
		<td>企业名称</td>
		<td>办公地址</td>
		<td>邮编</td>
		<td>电话</td>
		<td>传真</td>
		<td>企业成立时间</td>
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
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['cnName'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['cnOfficeAddress'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['zipCode'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['fax'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['createDate'];?>
</td>
		<td>
			<input id="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['companyId'];?>
" name="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['companyId'];?>
" class="m-wrap" type="text" size="5" style="width:30px;height: 9px;margin: 0;" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['rank'];?>
"/><a href="javascript:void(0);" onclick="javascript:location.href='?_f=company&act=updateRank&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['companyId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
&rank='+document.getElementById('rank<?php echo $_smarty_tpl->tpl_vars['i']->value['companyId'];?>
').value;">保存</a>
		</td>
		<td>
			<a href="?_f=company&act=remove&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['companyId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">删除</a>
			<a href="?_f=company-set&act=edit&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['companyId'];
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
