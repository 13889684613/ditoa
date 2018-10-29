<?php
/* Smarty version 3.1.29, created on 2018-10-25 19:45:49
  from "F:\website\ditoa\pc\system\view\officeTool-type.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5bd1aced0d8519_70578407',
  'file_dependency' => 
  array (
    '4173cd5c5101d570b9b6424bb15fab43c109221a' => 
    array (
      0 => 'F:\\website\\ditoa\\pc\\system\\view\\officeTool-type.html',
      1 => 1540467054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd1aced0d8519_70578407 ($_smarty_tpl) {
?>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

<table border="1">
	<tr>
		<td>#</td>
		<td>类别编号</td>
		<td>类别名称</td>
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
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['categoryCode'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['categoryName'];?>
</td>
		<td>
			<input id="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['categoryId'];?>
" name="rank<?php echo $_smarty_tpl->tpl_vars['i']->value['categoryId'];?>
" class="m-wrap" type="text" size="5" style="width:30px;height: 9px;margin: 0;" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['rank'];?>
"/><a href="javascript:void(0);" onclick="javascript:location.href='?_f=officeTool-type&act=updateRank&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['categoryId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
&rank='+document.getElementById('rank<?php echo $_smarty_tpl->tpl_vars['i']->value['categoryId'];?>
').value;">保存</a>
		</td>
		<td>
			<a href="?_f=officeTool-type&act=remove&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['categoryId'];
echo $_smarty_tpl->tpl_vars['track']->value;?>
">删除</a>
			<a href="?_f=officeTool-type-set&act=edit&page=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['categoryId'];
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
