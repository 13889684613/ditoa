<?php
/* Smarty version 3.1.29, created on 2018-12-11 11:54:02
  from "F:\website\ditoaCoder\ditoa\pc\system\view\checkProcess-default.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5c0f34dad74956_65284508',
  'file_dependency' => 
  array (
    'e24d8665f0cea07b9b1f3afb1d0080ab30f2ba71' => 
    array (
      0 => 'F:\\website\\ditoaCoder\\ditoa\\pc\\system\\view\\checkProcess-default.html',
      1 => 1543109774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0f34dad74956_65284508 ($_smarty_tpl) {
?>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<table border="1">
	<tr>
		<td>#</td>
		<td>类别</td>
		<td>审批级别</td>
		<td>通用审批流程</td>
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
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['checkCategory'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['checkLevel'];?>
级</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['checkProcess'];?>
</td>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['i']->value['isOpt']) {?>
			<a href="?_f=checkProcess-default&act=remove&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['defaultCheckProcessId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">删除</a>
			<a href="?_f=checkProcess-default-set&act=edit&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['defaultCheckProcessId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">修改</a>
			<?php }?>
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
